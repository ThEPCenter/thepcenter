<?php
require_once '../system/system.php';
notlogin_header('index.php');

$username = $_SESSION['login'];

unset($_SESSION['login']);
unset($_SESSION['pass']);
$logout_time = date("Y-m-d H:i:s");

$sql = "UPDATE tb_new_user 
	SET logout_time = '$logout_time'
	WHERE username = '$username';";
mysql_query($sql);

header("Location: index.php");
exit();

?>