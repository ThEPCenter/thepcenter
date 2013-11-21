<?php
require_once "../system/system.php";

if ($_POST) {
    $id = $_POST['id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $featured_img = htmlspecialchars($_POST['featured_img'], ENT_QUOTES);
    $content_short = htmlspecialchars($_POST['content_short'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    $modified = date("Y-m-d H:i:s");

    $sql = "INSERT INTO 
                tb_social
            VALUES 
                ($id, '$type', '$title', '$date', '$featured_img', '$content_short', '$content_long', '$modified');
            ";

    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/$type.php");
    exit();
}

// ====================================
notlogin_js('../views/home.php');
//=====================================

$id = $_GET['edit_social'];

$sql = "SELECT * FROM tb_social WHERE id = $id;";
$result = mysql_query($sql);
if (!empty($result)) {
    $p = mysql_fetch_array($result);
}
?>

<h2 class="text-center">แก้ไขทความ <?php social_name_th($type); ?></h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input name="id" type="hidden" value="<?php echo $p['id']; ?>">

    <input name="type" type="hidden" value="<?php echo $p['type']; ?>">

    <div class="form-group">
        <label>หัวข้อ</label>
        <input type="text" name="title"  class="form-control" value="<?php echo $p['title']; ?>">
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

    <h4>Feature image</h4>
    <p id="show-img">
        <img class="img-responsive" style="margin: auto;" src="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
    </p>
    <div class="form-group">
        <label>Feature image url</label>
        <input type="text" id="featured_img" name="featured_img"  class="form-control" value="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
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
        <textarea name="content_short" class="form-control" rows="4"><?php echo $p['content_short']; ?></textarea>
    </div>

    <div class="form-group">
        <label>เนื้อหาฉบับเต็ม</label>
        <textarea name="content_long"><?php echo htmlspecialchars_decode($p['content_long']); ?></textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>

    <button type="submit" class="btn btn-default">Submit</button> <a href="../views/<?php echo $type ?>.php" title="Cancel"><strong>Cancel</strong></a>
</form>
