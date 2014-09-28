<?php

require_once '../system/system.php';

$sessionid = session_id();

if ($_POST) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = sha1(mysql_real_escape_string($_POST['password']));

    $sql = "SELECT * FROM tb_new_user WHERE username = '$username' AND password = '$password';";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1) {
        $_SESSION['login'] = $username;
        $_SESSION['pass'] = $password;

        $row = mysql_fetch_array($result);

        $_SESSION['level'] = $row['level'];

        $recent_login = date("Y-m-d H:i:s");
        $last_login = $row['recent_login'];

        $sql = "UPDATE tb_new_user 
		SET recent_login = '$recent_login', sessionid = '$sessionid', last_login = '$last_login'
		WHERE username = '$username';";
        @mysql_query($sql) or die(mysql_error());

        header("Location: index.php");
        exit();
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['pass']);
        unset($_SESSION['level']);

        header("Location: ../views/login.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
