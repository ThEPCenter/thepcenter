<?php
require_once '../system/system.php';
// ====================================
notlogin_header('../views/home.php');
// ====================================

if ($_POST) {
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

    $sql = "INSERT INTO 
                tb_personel 
            VALUES 
                (0, $code, '$first_th', '$first_en', '$last_th', '$last_en', '$title_th', '$title_en', 
                 '$position_th', '$position_en', '$phone_th', '$phone_en', '$email', '$photo', '$modified');
            ";

    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/personel.php");
    exit();
}
?>
<div>
    <h2 style="text-align: center;">เพิ่มบุคลากร</h2>
    <form class="form-horizontal" role="form" name = "form1" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form-group">
            <label class="col-sm-2 control-label">รหัส</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" placeholder="รหัส">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first_th" placeholder="ชื่อภาษาไทย" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first_en" placeholder="ชื่อภาษาอังกฤษ" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">สกุลภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_th" placeholder="สกุลภาษาไทย" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">สกุลภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_en" placeholder="สกุลภาษาอังกฤษ" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">คำนำหน้าภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_th" placeholder="เช่น ศ., รศ., ดร., นาย , นางสาว, ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">คำนำหน้าภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_en" placeholder="เช่น Prof. Dr., Assoc. Prof. Dr., Mr., Miss, ...  ">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ตำแหน่งภาษาไทย</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="position_th" placeholder="ตำแหน่งภาษาไทย" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ตำแหน่งภาษาอังกฤษ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="position_en" placeholder="ตำแหน่งภาษาอังกฤษ">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โทรศัพท์</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone_th" placeholder="เช่น 053-943650-3 ต่อ ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โทรศัพท์ (ติดต่อจากต่างประเทศ)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone_en" placeholder="เช่น +66 53 942 650-3 ext ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="เช่น example@thep-center.org">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Photo URL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="photo" placeholder="เช่น http://www.thep-center.org/example_photo.jpg">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button> <a href="../views/personel.php" title="Cancel">Cancel</a>
            </div>
        </div>

    </form>
</div>