<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
if ($_POST) {
    get_controll('upload-file');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_includes('meta_script'); ?>
        <title>Upload File</title>
    </head>
    <body class="metrouicss">
        <?php
        get_includes('header');
        get_controll('show-upload-form');
        get_controll('show-file');
        get_includes('footer');
        ?>
    </body>
</html>