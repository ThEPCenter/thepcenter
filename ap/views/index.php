<?php
require_once "../system/system.php";

if ($_POST) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password';";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1) {
        $_SESSION['login'] = $username;
        $_SESSION['pass'] = $password;

        header("Location: index.php");
        exit();
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['pass']);

        header("Location: ../views");
        exit();
    }
}

if (isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_includes('meta_script'); ?>
        <title>ThEP Admin Panel 1.0</title> 
    </head>

    <body class="metrouicss bg-color-blueLight" style="width: 100%; height: 100%; margin: 0 0;">

        <div class="page bg-color-blueLight" id="page-index">	
            <div class="page-region">
                <div class="page-region-content text-center">
                    <h1 class="text-center">ThEP Admin Panel 1.0</h1>
                    <h2 class="text-center">Please Login</h2>
                    <p>&nbsp;</p>
                    <form class="span6" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" style="margin: 0 auto;">
                        <table>
                            <tr>
                                <td style="border:solid 0px;" class="text-right">Username :</td>
                                <td style="border:solid 0px;" class="text-left">
                                    <input name="username" type="text" id="username" size="28" />
                                    <!-- AJAX code for check "name" -->
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 0px;" class="text-right">Password :</td>
                                <td style="border:solid 0px;" class="text-left">
                                    <input name="password" type="password" id="password" size="28" />
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 0px;">
                                <td style="border:solid 0px;" class="text-left"><p>&nbsp;</p><input type="submit" name="Submit" value="Log in" /></td>
                            </tr>                                    
                        </table>
                    </form>
                </div> <!-- END .page-region-content -->
            </div> <!-- END .page-region -->
        </div> <!-- END #page-index -->

        <?php get_includes('footer'); ?>
    </body>
</html>