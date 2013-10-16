<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_includes('meta_script'); ?>        
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

                            <div class="span9">
                                <div class="tiles clearfix">

                                    <div class="tile double bg-color-blueDark" onclick="news('network_academic')">
                                        <div class="tile-content">
                                            <h2>ข่าววิชาการจากเครือข่าย</h2>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"></span>
                                        </div>
                                    </div>

                                    <div class="tile double bg-color-green" onclick="news('pr')">
                                        <div class="tile-content">
                                            <h2>ข่าวประชาสัมพันธ์</h2>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"></span>
                                        </div>
                                    </div>

                                    <div class="tile double bg-color-green" onclick="news('activity')">
                                        <div class="tile-content">
                                            <h2>ข่าวกิจกรรม</h2>                                            
                                        </div>
                                        <div class="brand">
                                            <span class="badge"></span>
                                        </div>
                                    </div>

                                    <div class="tile double" onclick="news('gen_academic')">
                                        <div class="tile-content">
                                            <h2>ข่าววิชาการทั่วไป</h2>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"></span>
                                        </div>
                                    </div>

                                    <div class="tile" onclick="page('personel');">
                                        <div class="tile-content">
                                            <h2>บุคลากร</h2>
                                        </div>
                                    </div>
                                    <div class="tile" style="background: #AA4344;" onclick="page('industrial');">
                                        <div class="tile-content">
                                            <h2>ฟิสิกส์เพื่อผู้ประกอบการ</h2>
                                        </div>
                                    </div>
                                    <div class="tile" style="background: #AA4344;" onclick="page('gallery');">
                                        <div class="tile-content">
                                            <h2>เพิ่ม/จัดการ</h2>
                                            <h5>Gallery</h5>
                                        </div>
                                    </div>
                                    <div class="tile icon"  onclick="page('upload');">
                                        <div class="tile-content">
                                            <h5 class="text-center">Upload file</h5>
                                            <i class="icon-upload-3"></i>
                                        </div>
                                        <div class="brand">
                                            <span class="name"></span>
                                        </div>
                                    </div>

                                </div>                            
                            </div>

                            <div class="span5">
                                <div class="tiles clearfix">

                                    <div class="tile" style="background: #439D9A;" onclick="">
                                        <div class="tile-content">
                                           <h2>...</h2>
                                            <h5>********</h5>
                                        </div>

                                    </div>
                                    <div class="tile bg-color-teal" onclick="">
                                        <div class="tile-content">
                                            <h2>...</h2>
                                            <h5>********</h5>
                                        </div>

                                    </div>
                                    <div class="tile" style="background: #AA4344;" onclick="">
                                        <div class="tile-content">
                                            <h2>...</h2>
                                            <h5>********</h5>
                                        </div>
                                    </div>
                                    <div class="tile" onclick="">
                                        <div class="tile-content">
                                            <h2>...</h2>
                                            <h5>********</h5>
                                        </div>
                                    </div>

                                    <div class="tile" style="background: #AA4344;">
                                        <div class="tile-content">
                                            <h2>...</h2>
                                            <h5>********</h5>
                                        </div>
                                    </div>
                                    <div class="tile icon bg-color-red" onclick="window.location='../controllers/logout.php';">
                                        <div class="tile-content">
                                            <h5 class="text-center">Log out</h5>
                                            <i class="icon-exit"></i>
                                        </div>
                                        <div class="brand">
                                            <span class="name"></span>
                                        </div>
                                    </div>                                    

                                </div>                            
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div> <!-- END #page-index -->

        <script>
            function news(news_type){
                window.location = 'news.php?news=' + news_type;
            }
            function page(name){
                window.location = name + '.php';
            }
            function add_news(type){
                window.location = 'add_news.php?news=' + type;
            }
        </script>

    </body>
</html>