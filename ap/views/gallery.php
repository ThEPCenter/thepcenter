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
        get_includes('meta_script');
        get_includes('lightbox');
        if ($_GET['add_gal']) { $txt = 'Add Gallery'; } else { $txt = 'Gallery'; }
        echo "<title>$txt</title>";
        ?>
    </head>

    <body class="metrouicss">
        <?php
        get_includes('header');
        if ($_GET['add_gal'] == 'new') {
            get_controll('show-add-gal');
        }
        get_controll('show-gal');
        get_includes('footer');
        ?>
    </body>
</html>