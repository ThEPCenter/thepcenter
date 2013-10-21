<?php
require_once '../system/system.php';

if ($_POST) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password';";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1) {
        $_SESSION['login'] = $username;
        $_SESSION['pass'] = $password;
		
		$last_login = date("Y-m-d H:i:s");
		
		$sql = "UPDATE tb_user 
					SET last_login = '$last_login'
					WHERE username = '$username';";
		mysql_query($sql) ;
		
        header("Location: index.php");
        exit();
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['pass']);

        header("Location: ../views/login.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
