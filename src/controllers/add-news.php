<?php
require_once "../system/system.php";

if ($_POST) {
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
    $picture = htmlspecialchars($_POST['picture'], ENT_QUOTES);
    $gallery_id = $_POST['gallery_id'];
    $modified = date("Y-m-d H:i:s");

    $sql = "INSERT INTO 
                tb_news 
            VALUES 
                (0, '$type', '$title', '$title_en', '$date', '$featured_img', '$content_short', '$content_short_en', '$content_long', '$content_long_en', '$new', '$picture', '$gallery_id', '$modified');
            ";

    @mysql_query($sql) or die(mysql_error());
    if ($type == 'notice') {
        header("Location: ../views/$type.php");
    } else {
        header("Location: ../views/$type-news.php");
    }
    exit();
}

// ====================================
notlogin_js('../views/home.php');
//=====================================

$news_type = $_GET['add_news'];
?>

<h2 class="text-center">เพิ่ม<?php name_news($news_type); ?></h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input name="type" type="hidden" value="<?php echo $news_type; ?>">

    <div class="form-group">
        <label>หัวข้อข่าว</label>
        <input type="text" name="title"  class="form-control">
    </div>

    <?php if ($news_type == 'network-academic') { ?>
        <div class="form-group">
            <label>หัวข้อข่าวภาษาอังกฤษ</label>
            <input type="text" name="title_en"  class="form-control">
        </div>
    <?php } ?> 

    <div class="form-group">
        <label>วันที่</label>
        <input type="text" id="datepicker" name="date">
    </div>
    <script>
        $(function() {
            $("#datepicker").datepicker();   // Date Picker
        }); /* END jQuery */
    </script>
    <p>&nbsp;</p>

    <h4>Feature image</h4>
    <p id="show-img">
    </p>
    <div class="form-group">
        <label>Feature image url</label>
        <input type="text" id="featured_img" name="featured_img"  class="form-control" />
    </div>
    <script>
        $(function() {
            $("#featured_img").blur(function() {
                var img_url = $("#featured_img").val();
                $("#show-img").html("<img src=\"" + img_url + "\" style=\"max-width: 100%; height: auto; margin: auto;\">");
            });

        });
    </script>
    <p>&nbsp;</p>    

    <div class="form-group">
        <label>เนื้อหาฉบับย่อ</label>
        <textarea name="content_short" class="form-control" rows="4"></textarea>
    </div>
    <p>&nbsp;</p>

    <?php if ($news_type == 'network-academic') { ?>
        <div class="form-group">
            <label>เนื้อหาฉบับย่อภาษาอังกฤษ</label>
            <textarea name="content_short_en" class="form-control" rows="4"></textarea>
        </div>
    <?php } ?>

    <div class="form-group">
        <label>เนื้อหาฉบับเต็ม</label>
        <textarea name="content_long"></textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>

    <?php if ($news_type == 'network-academic') { ?>
        <div class="form-group">
            <label>เนื้อหาฉบับเต็มภาษาอังกฤษ</label>
            <textarea name="content_long_en"></textarea>
            <script>
                CKEDITOR.replace('content_long_en');
            </script>
        </div>
    <?php } ?>

    <strong>อื่นๆ</strong>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="new"> ข่าวใหม่
        </label>
    </div>
    <p>&nbsp;</p>    

    <?php
    if ($news_type == 'activity') {
        ?>
        <div class="form-group">
            <label>แกลอรี</label>
            <span>เลือกแกลอรี หรือ </span><a href="add-gallery.php">เพื่มแกลอรีใหม่</a>
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
