<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_includes('meta_script'); ?>        
        <title>_blank</title>
        
    </head>
    <body class="metrouicss">
        <?php get_includes('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 style="text-align: center;">_blank</h2>

            <div class="page-region">
                <div class="page-region-content">
                    
                </div>
                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END #page-index -->
        <?php get_includes('footer'); ?>        
    </body>
</html>