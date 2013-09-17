<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
if ($_POST) {
    controll('add-gal');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php
        get_inc('meta_script');
        get_inc('lightbox');
        if ($_GET['add_gal']) { $txt = 'Add Gallery'; } else { $txt = 'Gallery'; }
        title($txt);
        ?>
    </head>

    <body class="metrouicss">
        <?php
        get_inc('header');
        if ($_GET['add_gal'] == 'new') {
            controll('show-add-gal');
        }
        controll('show-gal');
        get_inc('footer');
        ?>
    </body>
</html>