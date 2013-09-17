<?php
require_once '../system/system.php';
if($_POST){
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
    $update = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO 
                tb_personel 
            VALUES 
                (0, $code, '$first_th', '$first_en', '$last_th', '$last_en', '$title_th', '$title_en', 
                 '$position_th', '$position_en', '$phone_th', '$phone_en', '$email', '$photo', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());
    
    header("Refresh: 2; url=../views/personel.php");
    echo "Adding Personel Successed...";
    exit;
}
?>
<form name = "form1" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <table class="bordered">
        <tr>
            <td>
                รหัส
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="code" style="width: 100px" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                ชื่อภาษาไทย
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="first_th" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                ชื่อภาษาอังกฤษ
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="first_en" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                สกุลภาษาไทย
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="last_th" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                สกุลภาษาอังกฤษ
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="last_en" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                คำนำหน้าภาษาไทย
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="title_th" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                คำนำหน้าภาษาอังกฤษ
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="title_en" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                ตำแหน่งภาษาไทย
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="position_th" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                ตำแหน่งภาษาอังกฤษ
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="position_en" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                โทรศัพท์
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="phone_th" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                โทรศัพท์ (ติดต่อจากต่างประเทศ)
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="phone_en" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="email" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                Photo Link
            </td>
            <td>
                <div class="input-control text">
                    <input type="text" name="photo" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit" /> <a href="../views/personel.php" title="Cancel"><strong>Cancel</strong></a>
            </td>
        </tr>
    </table>
</form>