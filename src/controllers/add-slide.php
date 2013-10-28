<?php
require_once '../system/system.php';
if ($_POST) {
    $number = $_POST['number'];
    $img_url = htmlspecialchars($_POST['img-url'], ENT_QUOTES);
    $link_url = htmlspecialchars($_POST['link-url'], ENT_QUOTES);
    $created = date("Y-m-d H:i:s");
    $sql = "INSERT INTO 
                tb_slide 
            VALUES (0, $number, '$img_url', '$link_url', '$created', '$created');";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/slide.php");
    exit();
}
?>
<h2 class="text-center">เพิ่มสไลด์</h2>
<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>อันดับ</label>
    <input name="number" type="text" size="1"><br>
    <p>&nbsp;</p>
    
    <label>URL รูปภาพ</label>
    <input name="img-url" type="text" id="img-url" class="form-control" placeholder="URL รูปภาพ"  size="50">
    <p>&nbsp;</p>

    <label>URL link slide</label>
    <input name="link-url" type="text" id="link-url" class="form-control" placeholder="URL Link" size="50">
    <p>&nbsp;</p>

    <p class="text-center"><button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;<a style="font-weight: bold;" href="../views/slide.php" title="ยกเลิก">Cancel</a></p>
</form>