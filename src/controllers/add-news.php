<?php
require_once "../system/system.php";

if ($_POST) {
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

    $sql = "INSERT INTO 
                tb_news 
            VALUES 
                (0, '$type', '$title', '$date', '$content_short', '$content_long', '$new', '$picture', '$gallery_id', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/$type-news.php");
    exit();
}

$news_type = $_GET['add_news'];
?>

<h2 class="text-center">เพิ่ม<?php name_news($news_type); ?></h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="type" type="hidden" value="<?php echo $news_type; ?>">
    <div class="form-group">
        <label>หัวข้อข่าว</label>
        <input type="text" name="title"  class="form-control">
    </div>
    <div class="form-group">
        <label>วันที่</label>
        <input type="text" id="datepicker" name="date">
    </div>

    <script>
        $(function() {                
            $( "#datepicker" ).datepicker();   // Date Picker
        }); /* END jQuery */
    </script>
    <?php
    if ($news_type == 'network-academic') {
        $lable_cont = 'เนื้อหาฉบับเต็ม';
        ?>
        <div class="form-group">
            <label>เนื้อหาฉบับย่อ</label>
            <textarea name="content_short"></textarea>
            <script>
                CKEDITOR.replace('content_short');
            </script>
        </div>
    <?php
    } else {
        $lable_cont = 'เนื้อหา';
    }
    ?>
    <div class="form-group">
        <label><?php echo $lable_cont; ?></label>
        <textarea name="content_long"></textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>

    <strong>อื่นๆ</strong>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="new"> ข่าวใหม่
        </label>
    </div>
    <p>&nbsp;</p>
    <?php if($news_type == 'pr'){ ?>
    <div class="form-group">
        <label>URL รูปภาพ</label>
        <input type="text" name="picture"  class="form-control">
    </div>
    <p>&nbsp;</p>
    <?php    
    } // END if
    
    if($news_type == 'activity'){
    ?>
    <div class="form-group">
        <label>แกลอรี</label>
        <span>เลือกแกลอรี หรือ </span><a href="gallery.php?add_gal=new" target="_blank">เพื่มแกลอรีใหม่</a>
        <select name="gallery_id" class="form-control" id="gallery_id">
            <option id="gal-0" value="0">...</option>
            <?php
            $sql_g = "SELECT * FROM tb_gallery;";
            $result_g = mysql_query($sql_g);
            while ($g = mysql_fetch_array($result_g)) {
                echo '<option id="gal-' . $g['id'] . '" value="' . $g['id'] . '">' . $g['title'] . '</option>';
            } // END while
            ?>
        </select>        
    </div>
    <?php } ?>

    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/<?php echo $news_type ?>-news.php" title="Cancel"><strong>Cancel</strong></a>
</form>
