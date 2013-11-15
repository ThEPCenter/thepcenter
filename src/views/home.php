<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('home-header'); ?>

        <div class="row">

            <!-- Network Academic news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'network-academic'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center">ข่าววิชาการจากเครือข่าย</h2>
                <a href="<?php echo $p['type'] ?>-news.php?news_id=<? echo $p['id']; ?>"><img class="img-responsive" style="margin: auto; border: 1px solid #666666;" alt="Featured image" src="<?php echo $p['featured_img']; ?>"></a>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<? echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

            <!-- Activity news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'activity'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3">
                <h2 class="text-center">ข่าวกิจกรรม</h2>
                <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><img class="img-responsive" style="margin: auto; border: 1px solid #666666;" alt="Featured image" src="<?php echo $p['featured_img']; ?>"></a>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

            <!-- Special / Pr news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'special' OR type = 'pr'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center">ข่าวประชาสัมพันธ์/ข่าวพิเศษ</h2>
                <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><img class="img-responsive" style="margin: auto; border: 1px solid #666666;" alt="Featured image" src="<?php echo $p['featured_img']; ?>"></a>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

        </div> <!-- /.row -->
        <p>&nbsp;</p>

        <!-- =========================================================================================== -->

        <div class="row">

            <h2>หน่วยเครื่องมือวิเคราะห์กลาง</h2>

            <div class="col-sm-6 col-md-6">
                <a href="central-equipment.php?eq=XPS">
                    <img class="img-responsive" style="margin: 0 auto; border: 1px solid #666666;" title="XPS" alt="XPS" src="../files/xps.jpg">
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a href="central-equipment.php?eq=FESEM">
                    <img class="img-responsive" style="margin: 0 auto; border: 1px solid #666666;" title="FESEM" alt="FESEM" src="../files/fesem.jpg">
                </a>
            </div>

        </div>

        <p>&nbsp;</p>

        <!-- =========================================================================================== -->        

        <div class="row">

            <h2>ศูนย์วิจัยเครือข่าย</h2>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=TFP">
                    <div class="text-center" style="background-color: #8f8f8f;">                    
                        <h2>TFP</h2>
                        <p>&nbsp;</p>                    
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=PPP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>PPP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=NSP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>NSP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=IGP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>IGP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=CTP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>CTP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=ThEP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>ThEP</h2>                        
                        <p>(โครงการจัดตั้ง)</p>
                    </div>
                </a>
            </div>
        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>

</body>
</html>