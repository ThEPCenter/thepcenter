<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
if ($_POST) {
    controll('upload-file');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_inc('meta_script'); ?>
        <title>Upload File</title>
    </head>
    <body class="metrouicss">
        <?php
        get_inc('header');
        controll('show-upload-form');
        controll('show-file');
        get_inc('footer');
        ?>
    </body>
</html>