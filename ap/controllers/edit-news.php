<?php
require_once "../system/system.php";

$controll = new controllers();

if (isset($_POST['news_id'])) {
    $id = $_POST['news_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $content_short = htmlspecialchars($_POST['content_short'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $picture = htmlspecialchars($_POST['picture'], ENT_QUOTES);
    $gallery_id = $_POST['gallery_id'];
    $update = date("Y-m-d H:i:s");
    $sql_edit = "
            REPLACE INTO tb_news 
            VALUES
                ($id, '$type', '$title', '$date', '$content_short', '$content_long', '$new', '$picture', '$gallery_id', '$update')
            ;";

    @mysql_query($sql_edit) or die(mysql_error());
    header("Location: ../views/news.php?news=$type");
    //header("Refresh: 2; url=../views/news.php?news=$type");
    // echo "Editing News Successed...";
    exit;
}

function opt_check($x, $y){
    if($x==$y){
    return ' selected';
    }
}

$news_id = $_GET['news_id'];

$sql = "
        SELECT * FROM tb_news
        WHERE id = $news_id;
";

$result = mysql_query($sql);
$p = mysql_fetch_array($result);
$news = $p['type'];
?>


            <div class="page-region">
                <div class="page-region-content">

                    <h2 class="text-center">แก้ไข <?php $controll->name_news($news); ?></h2>                   

                    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input name="news_id" type="hidden" value="<?php echo $p['id']; ?>">
                        <input name="type" type="hidden" value="<?php echo $news; ?>">
                        <table>
                            <tr>
                                <td>
                                    หัวข้อข่าว
                                </td>
                                <td>
                                    <div class="input-control text">
                                        <input type="text" name="title" value="<?php echo htmlspecialchars_decode($p['title']); ?>" />
                                    </div>
                                </td>
                            </tr>                            

                            <tr>
                                <td>
                                    วันที่
                                </td>

                                <td>
                                    <input type="text" id="datepicker" name="date" value="<?php echo $p['date']; ?>" />
                                </td>
                            </tr>
                            <script>
                                $(function() {                
                                    $( "#datepicker" ).datepicker();   // Date Picker
                                }); /* END jQuery */

                            </script>
                            <?php if ($news=='network_academic') { ?>
                            <tr>
                                <td>
                                    เนื้อหาฉบับย่อ
                                </td>
                                <td>
                                    <div class="input-control textarea">
                                        <textarea name="content_short">
                                            <?php echo htmlspecialchars_decode($p['content_short']); ?>
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('content_short');
                                        </script>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td>
                                    เนื้อหา<?php if ($news=='network_academic') { echo 'ฉบับเต็ม'; } ?>
                                </td>
                                <td>
                                    <div class="input-control textarea">
                                        <textarea name="content_long">
                                            <?php echo htmlspecialchars_decode($p['content_long']); ?>
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('content_long');
                                        </script>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    อื่นๆ
                                </td>
                                <?php 
                                    if($p['new']=='y'){$chk = ' checked';}
                                ?>
                                <td>
                                    <label class="input-control checkbox">
                                        <input type="checkbox" name="new" value="y"<?php echo $chk; ?>>
                                        <span class="helper">ข่าวใหม่</span>
                                    </label>
                                </td>
                            </tr>

                            <?php if ($news == 'activity') { ?>
                                <tr>
                                    <td>
                                        แกลอรี
                                    </td>
                                    <td>
                                        <span>เลือกแกลอรี หรือ </span><a href="gallery.php?add_gal=new" target="_blank">เพื่มแกลอรีใหม่</a>
                                        <div class="input-control select">
                                            
                                            <select name="gallery_id">
                                                <?php
                                                $sql_g = "SELECT * FROM tb_gallery;";
                                                $result_g = mysql_query($sql_g);
                                                while ($g = mysql_fetch_array($result_g)) {
                                                    echo '<option value="' . $g['id'] . '"'. opt_check($p['gallery_id'], $g['id']) .'>' . $g['title'] . '</option>';    
                                                }
                                                
                                                ?>
                                            </select> 
                                        </div>
                                    </td>
                                </tr>
                            <?php } elseif ($news == 'pr') {
                                ?>
                                <tr>
                                    <td>
                                        รูปภาพ/โปสเตอร์ (URL)
                                    </td>
                                    <td>
                                        <div class="input-control text">
                                            <input type="text" name="picture" value="<?php echo htmlspecialchars_decode($p['picture']); ?>">
                                            <button class="btn-clear"></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td>

                                </td>
                                <td align="center">
                                    <input type="submit" value="Submit" /> <a href="../views/news.php?news=<?php echo $news; ?>" title="Cancel"><strong>Cancel</strong></a>
                                </td>
                            </tr>
                        </table>
                    </form>


                </div>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>