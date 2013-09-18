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
        <title>ThEP Admin Panel-2</title>
    </head>

    <body class="metrouicss" style="background-color: #4294DE;">

        <div class="page" style="width: 1120px; background-color: #4294DE; margin-left: 0 auto;">

            <?php get_inc('header-2'); ?>

            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content">
                    <div class="grid">
                        <div class="row">

                            <div class="span9">
                                <div class="tiles clearfix">

                                    <div class="tile double bg-color-blueDark" onclick="news('network_academic')">
                                        <div class="tile-content">
                                            <h2>ข่าววิชาการจากเครือข่าย</h2>
                                            <h5>Last Title</h5>
                                            <p>
                                                Content .........
                                            </p>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"><?php number_news('network_academic'); ?></span>
                                        </div>
                                    </div>

                                    <div class="tile double bg-color-green" onclick="news('pr')">
                                        <div class="tile-content">
                                            <h2>ข่าวประชาสัมพันธ์</h2>
                                            <h5>Last Title</h5>
                                            <p>
                                                Congratulations! I'm really excited to celebrate with you all. Thanks for...
                                            </p>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"><?php number_news('pr'); ?></span>
                                        </div>
                                    </div>

                                    <div class="tile double bg-color-green" onclick="news('activity')">
                                        <div class="tile-content">
                                            <h2>ข่าวกิจกรรม</h2>
                                            <h5>Last Title</h5>
                                            <p>
                                                Congratulations! I'm really excited to celebrate with you all. Thanks for...
                                            </p>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"><?php number_news('activity'); ?></span>
                                        </div>
                                    </div>

                                    <div class="tile double" onclick="news('gen_academic')">
                                        <div class="tile-content">
                                            <h2>ข่าววิชาการทั่วไป</h2>
                                            <h5>Last Title</h5>
                                            <p>
                                                Congratulations! I'm really excited to celebrate with you all. Thanks for...
                                            </p>
                                        </div>
                                        <div class="brand">
                                            <span class="badge"><?php echo number_news('gen_academic'); ?></span>
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
                                    <div class="tile" style="background: #AA4344;" onclick="page('gallery-2');">
                                        <div class="tile-content">
                                            <h2>เพิ่ม/จัดการ</h2>
                                            <h5>Gallery</h5>
                                        </div>
                                    </div>
                                    <div class="tile icon"  onclick="page('upload-2');">
                                        <div class="tile-content">
                                            <i class="icon-upload-3"></i>
                                        </div>
                                        <div class="brand">
                                            <span class="name">Upload file</span>
                                        </div>
                                    </div>

                                </div>                            
                            </div>

                            <div class="span5">
                                <div class="tiles clearfix">

                                    <div class="tile" style="background: #439D9A;" onclick="add_news('network_news')">
                                        <div class="tile-content">
                                            <h2>เพิ่ม</h2>
                                            <h5>ข่าววิชาการจากเครือข่าย</h5>
                                        </div>

                                    </div>
                                    <div class="tile bg-color-teal" onclick="add_news('pr')">
                                        <div class="tile-content">
                                            <h2>เพิ่ม</h2>
                                            <h5>ข่าวประชาสัมพันธ์</h5>
                                        </div>

                                    </div>
                                    <div class="tile" style="background: #AA4344;" onclick="add_news('activity')">
                                        <div class="tile-content">
                                            <h2>เพิ่ม</h2>
                                            <h5>ข่าวกิจกรรม</h5>
                                        </div>
                                    </div>
                                    <div class="tile" onclick="add_news('gen_academic')">
                                        <div class="tile-content">
                                            <h2>เพิ่ม</h2>
                                            <h5>ข่าววิชาการทั่วไป</h5>
                                        </div>
                                    </div>

                                    <div class="tile" style="background: #AA4344;">
                                        <div class="tile-content">
                                            <h2>เพิ่ม/จัดการ</h2>
                                            <h5>Gallery</h5>
                                        </div>
                                    </div>
                                    <div class="tile icon">
                                        <div class="tile-content">
                                            <i class="icon-upload-3"></i>
                                        </div>
                                        <div class="brand">
                                            <span class="name">Upload file</span>
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
                window.location = 'news-2.php?news=' + news_type;
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