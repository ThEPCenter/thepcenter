<?php
require_once "../system/system.php";

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $picture = htmlspecialchars($_POST['picture'], ENT_QUOTES);
    $update = date("Y-m-d H:i:s");
    
    $sql = "UPDATE tb_news 
            SET type = '$type', title = '$title', date = '$date', content_long = '$content_long', new = '$new', picture = '$picture', last_update = '$update'
            WHERE id = $id;";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/pr_news.php?news_id=$id");
    exit();
}

$edit_id = $_GET['edit_news'];
$sql = "SELECT * FROM tb_news WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
?>

<h2 class="text-center">แก้ไข ข่าวประชาสัมพันธ์</h2>                   

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
            $( "#datepicker" ).datepicker();   // Date Picker
        }); /* END jQuery */
    </script>

    <div class="form-group">
        <label>เนื้อหา</label>
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
        <label>URL รูปภาพ</label>
        <input type="text" name="picture"  class="form-control" value="<?php echo htmlspecialchars_decode($p['picture']); ?>">
    </div>
    <p>&nbsp;</p>
    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/pr_news.php?news_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
</form>
