<?php
require_once '../system/system.php';
// ====================================
notlogin_header('../views/home.php');
// ====================================

if ($_POST) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $first_th = htmlspecialchars($_POST['first_th'], ENT_QUOTES);
    $first_en = htmlspecialchars($_POST['first_en'], ENT_QUOTES);
    $last_th = htmlspecialchars($_POST['last_th'], ENT_QUOTES);
    $last_en = htmlspecialchars($_POST['last_en'], ENT_QUOTES);
    $title_th = htmlspecialchars($_POST['title_th'], ENT_QUOTES);
    $title_en = htmlspecialchars($_POST['title_en'], ENT_QUOTES);
    $position_th = htmlspecialchars($_POST['position_th'], ENT_QUOTES);
    $position_en = htmlspecialchars($_POST['position_en'], ENT_QUOTES);
    $phone_th = htmlspecialchars($_POST['phone_th'], ENT_QUOTES);
    $phone_en = htmlspecialchars($_POST['phone_en'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $photo = htmlspecialchars($_POST['photo'], ENT_QUOTES);
    $modified = date("Y-m-d H:i:s");

    $sql = "REPLACE INTO 
                tb_personel 
            VALUES 
                ($id, $code, '$first_th', '$first_en', '$last_th', '$last_en', '$title_th', '$title_en', 
                 '$position_th', '$position_en', '$phone_th', '$phone_en', '$email', '$photo', '$modified');
            ";

    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/personel.php");
    exit();
}

if (!isset($_GET['edit_personel'])) {
    js_redirect('../views/home.php');
}
//=====================================

$edit_id = $_GET['edit_personel'];
$sql = "SELECT * FROM tb_personel WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
?>
<div>
    <h2 style="text-align: center;">แก้ไขข้อบุคลากร</h2>
    <form class="form-horizontal" role="form" name = "form1" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
        
        <div class="form-group">
            <label class="col-sm-2 control-label">รหัส</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" value="<?php echo $p['code']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first_th" value="<?php echo $p['first_th']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first_en" value="<?php echo $p['first_en']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">สกุลภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_th" value="<?php echo $p['last_th']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">สกุลภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_en" value="<?php echo $p['last_en']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">คำนำหน้าภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_th" value="<?php echo $p['title_th']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">คำนำหน้าภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_en" value="<?php echo $p['title_en']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ตำแหน่งภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="position_th" value="<?php echo $p['position_th']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ตำแหน่งภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="position_en" value="<?php echo $p['position_en']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โทรศัพท์</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone_th" value="<?php echo $p['phone_th']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โทรศัพท์ (ติดต่อจากต่างประเทศ)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone_en" value="<?php echo $p['phone_en']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <!-- type="email" -->
                <input type="text" class="form-control" name="email" value="<?php echo $p['email']; ?>"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Photo URL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="photo" value="<?php echo $p['photo']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button> <a href="../views/personel.php" title="Cancel">Cancel</a>
            </div>
        </div>

    </form>
</div>