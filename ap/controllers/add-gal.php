<?php
$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
$detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
$modified = date("Y-m-d H:i:s");
$sql = "INSERT INTO 
tb_gallery
VALUES
(0, '$title', '$detail' , '$modified');
";
@mysql_query($sql) or die(mysql_error());
?>