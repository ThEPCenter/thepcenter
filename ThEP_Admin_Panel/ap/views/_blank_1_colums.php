<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_inc('meta_script'); ?>        
        <title>ThEP Admin Panel</title>
    </head>

    <body class="metrouicss" style="background-color: #4294DE;">

        <div class="page" style="width: 1120px; background-color: #4294DE; margin-left: 0 auto;">

            <?php get_inc('header-2'); ?>

            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content bg-color-greenLight" style="width: 1100px; height: 350px;">

                </div>

            </div>
        </div> <!-- END .page -->

    </body>
</html>