<?php
require_once "../system/system.php";

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $featured_img = htmlspecialchars($_POST['featured_img'], ENT_QUOTES);
    $content_short = htmlspecialchars($_POST['content_short'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $gallery_id = $_POST['gallery_id'];
    $modified = date("Y-m-d H:i:s");

    $sql = "UPDATE tb_news 
            SET type = '$type', title = '$title', date = '$date', featured_img = '$featured_img', content_short = '$content_short', content_long = '$content_long', new = '$new', gallery_id = $gallery_id, modified = '$modified'
            WHERE id = $id;";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/activity-news.php?news_id=$id");
    exit();
}

// ====================================
notlogin_js('../views/home.php');

if (!isset($_GET['edit_news'])) {
    js_redirect('../views/home.php');
}

//=====================================

function opt_check($x, $y) {
    if ($x == $y) {
        return ' selected';
    }
}

$edit_id = $_GET['edit_news'];
$sql = "SELECT * FROM tb_news WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
?>

<h2 class="text-center">แก้ไข ข่าวกิจกรรม</h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="edit_id" type="hidden" value="<?php echo $p['id']; ?>">
    <input name="type" type="hidden" value="<?php echo $p['type']; ?>">
    <div class="form-group">
        <label>หัวข้อข่าว</label>
        <input type="text" name="title"  class="form-control" value="<?php echo htmlspecialchars_decode($p['title']); ?>" />
    </div>

    <div class="form-group">
        <label>วันที่</label>
        <input type="text" id="datepicker" name="date" value="<?php echo date("m/d/Y", strtotime($p['date'])); ?>">
    </div>
    <script>
        $(function() {
            $("#datepicker").datepicker();   // Date Picker
        }); /* END jQuery */
    </script>
    <p>&nbsp;</p>

    <h4>Feature image</h4>
    <p id="show-img">
        <img class="img-responsive" style="margin: auto;" src="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
    </p>
    <div class="form-group">
        <label>Feature image url</label>
        <input type="text" id="featured_img" name="featured_img"  class="form-control" value="<?php echo htmlspecialchars_decode($p['featured_img']); ?>" />
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
        <textarea class="form-control" name="content_short" rows="4"><?php echo $p['content_short']; ?></textarea>
    </div>

    <div class="form-group">
        <label>เนื้อหาฉบับเต็ม</label>
        <textarea name="content_long">
            <?php echo htmlspecialchars_decode($p['content_long']); ?>
        </textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>

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

    <div class="form-group">
        <label>แกลอรี</label>
        <div id="show-gall"></div>
        <p>&nbsp;</p>

        เลือกแกลอรี<br>

        <select class="form-control" name="gallery_id" id="gallery_id">
            <?php
            $sql_g = "SELECT * FROM tb_gallery;";
            $result_g = mysql_query($sql_g);
            while ($g = mysql_fetch_array($result_g)) {
                echo '<option value="' . $g['id'] . '"' . opt_check($p['gallery_id'], $g['id']) . '>' . $g['title'] . '</option>';
            }
            ?>
        </select>

        <p>&nbsp;</p>
        หรือ
        <!-- Link trigger modal -->
        <a href="add-gallery.php">เพิ่มแกลอรีใหม่</a>

    </div>

    <p>&nbsp;</p>
    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/activity-news.php?news_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
</form>
