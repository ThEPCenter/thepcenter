<?php
require_once "../system/system.php";

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $title_en = htmlspecialchars($_POST['title_en'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $featured_img = htmlspecialchars($_POST['featured_img'], ENT_QUOTES);
    $content_short = htmlspecialchars($_POST['content_short'], ENT_QUOTES);
    $content_short_en = htmlspecialchars($_POST['content_short_en'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    $content_long_en = htmlspecialchars($_POST['content_long_en'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $modified = date("Y-m-d H:i:s");
    $sql = "UPDATE tb_news
            SET type = '$type', title = '$title', title_en = '$title_en', date = '$date', featured_img = '$featured_img', content_short = '$content_short', content_short_en = '$content_short_en', content_long = '$content_long', content_long_en = '$content_long_en', new = '$new', modified = '$modified'
            WHERE id = $id;";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/$type-news.php?news_id=$id");
    exit();
}

// ====================================
notlogin_js('../views/home.php');

if (!isset($_GET['edit_news'])) {
    js_redirect('../views/home.php');
}
//=====================================

$edit_id = $_GET['edit_news'];
$news_type_th = urldecode($_GET['news_type_th']);
$sql = "SELECT * FROM tb_news WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);


?>

<h2 class="text-center">แก้ไข ข่าว<?php echo $news_type_th; ?></h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <input name="edit_id" type="hidden" value="<?php echo $p['id']; ?>">
    <input name="type" type="hidden" value="<?php echo $p['type']; ?>">

    <div class="form-group">
        <label>หัวข้อข่าว</label>
        <input type="text" name="title"  class="form-control" value="<?php echo htmlspecialchars_decode($p['title']); ?>">
    </div>
    
    <?php if($news_type == 'network-academic'){ ?>
    <div class="form-group">
        <label>หัวข้อข่าวภาษาอังกฤษ</label>
        <input type="text" name="title_en"  class="form-control" value="<?php echo htmlspecialchars_decode($p['title_en']); ?>">
    </div>
    <?php } ?> 
    
    <div class="form-group">
        <label>วันที่</label>
        <input type="text" id="datepicker" name="date" class="form-control" value="<?php echo date("m/d/Y", strtotime($p['date'])); ?>">
    </div>
    <script>
        $(function() {                
            $( "#datepicker" ).datepicker();   // Date Picker
        }); /* END jQuery */
    </script>
    <p>&nbsp;</p>
    
    <h4>Feature image</h4>
    <p id="show-img">
        <img class="img-responsive" style="margin: auto;" src="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
    </p>
    <div class="form-group">
        <label>Feature image url</label>
        <input type="text" id="featured_img" name="featured_img"  class="form-control" value="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
    </div>
    <script>
        $(function(){            
            $("#featured_img").blur(function(){            
                var img_url = $("#featured_img").val();
                $("#show-img").html("<img src=\"" + img_url + "\" style=\"max-width: 100%; height: auto; margin: auto;\">");           
            });
            
        });
    </script>
    <p>&nbsp;</p>
    

    <div class="form-group">
        <label>เนื้อหาฉบับย่อ</label>
        <textarea name="content_short" class="form-control" rows="4"><?php echo $p['content_short']; ?></textarea>
    </div>

    <?php if($news_type == 'network-academic'){ ?>
    <div class="form-group">
        <label>เนื้อหาฉบับย่อภาษาอังกฤษ</label>
        <textarea name="content_short_en" class="form-control" rows="4"><?php echo $p['content_short_en']; ?></textarea>
    </div>
    <?php } ?>
    
    <div class="form-group">
        <label>เนื้อหาฉบับเต็ม</label>
        <textarea name="content_long"><?php echo htmlspecialchars_decode($p['content_long']); ?></textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>
    
    <?php if($news_type == 'network-academic'){ ?>
    <div class="form-group">
        <label>เนื้อหาฉบับเต็มภาษาอังกฤษ</label>
        <textarea name="content_long_en"><?php echo htmlspecialchars_decode($p['content_long_en']); ?></textarea>
        <script>
            CKEDITOR.replace('content_long_en');
        </script>
    </div>
    <?php } ?>
    
    <strong>อื่นๆ</strong>
    <?php
    if ($p['new'] == 'y') {
        $chk = ' checked';
    }
    ?>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="new" value="y"<?php echo $chk; ?>> ข่าวใหม่
        </label>
    </div>
    <p>&nbsp;</p>
    
    <?php if ($news_type == 'pr') { ?>
        <div class="form-group">
            <label>URL รูปภาพ</label>
            <input type="text" name="picture"  class="form-control" value="<?php echo htmlspecialchars_decode($p['picture']); ?>">
        </div>
        <p>&nbsp;</p>
        <?php
    } // END if

    if ($news_type == 'activity') {
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

    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/<?php echo $p['type']; ?>-news.php?news_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
</form>
