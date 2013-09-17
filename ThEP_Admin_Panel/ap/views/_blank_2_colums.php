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

            <div class="page-header">
                <div class="page-header-content">
                    <div class="grid">
                        <div class="row">
                            <div class="span9"><h1>ThEP Admin Panel</h1></div>
                            <div class="text-right span5 fg-color-white" style="wisth: auto; height: 60px; border-color: black; margin-top: 70px;">
                                <div style="font-size: 25px;"><?php echo strtoupper($_SESSION['login']); ?> <i class="icon-user"></i><div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content">
                    <div class="grid">
                        <div class="row">

                            <div class="span9 bg-color-green" style="height: 300px;">
                                
                            </div>

                            <div class="span5 bg-color-orange" style="height: 300px;">
                                
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div> <!-- END .page -->
        
    </body>
</html>