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
                <h2 class="text-center"><a href="network-academic-news.php">ข่าววิชาการจากเครือข่าย</a></h2>

                <div class="featured-image-network">                    
                    <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
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
                <h2 class="text-center"><a href="activity-news.php">ข่าวกิจกรรม</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

            <!-- Special news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'special'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center"><a href="special-news.php">ข่าวพิเศษ</a></h2>
                <div class="featured-image-box">                    
                    <a style="text-align: center;" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

        </div> <!-- /.row -->

        <!-- =========================================================================================== -->

        <div class="row">

            <!-- Pr news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'pr'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center"><a href="pr-news.php">ข่าวประชาสัมพันธ์</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

            <!-- Industrial  Physics -->
            <?php
            $sql = "SELECT * FROM tb_social 
                WHERE type = 'industrial'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center"><a href="industrial.php">ฟิสิกส์อุตสาหกรรม</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>


            <!-- Physics in Daily Life Physics -->
            <?php
            $sql = "SELECT * FROM tb_social 
                WHERE type = 'daily-life'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center"><a href="daily-life.php">ฟิสิกส์ในชีวิตประจำวัน</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

            <!-- ประกาศ -->
            
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center">ประกาศ</h2>
                <div class="featured-image-box">                    
                    <a href="spc2014.php">
                        <img class="fetured-image" src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-frc3/1459733_554680657955820_388638317_n.png" alt="Featured image">
                    </a>
                </div>
                <h3><a href="spc2014.php">การประชุมวิชาการสมาคมฟิสิกส์ไทย ครั้งที่ 9 ประจำปี 2557</a></h3>
                <p>
                    วันที่ 26 - 29 มีนาคม พ.ศ.2557 ณ หอประชุมใหญ่ มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน จังหวัดนครราชสีมา <br>
                    มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน และมหาวิทยาลัยราช
                    ภัฏสกลนคร ร่วมกับสมาคมฟิสิกส์ไทย ขอเชิญผู้สนใจเข้าร่วมการประชุม<a href="spc2014.php">... อ่านต่อ</a></p>
            </div>

        </div>  <!-- /.row -->

        <p>&nbsp;</p>
       

        <!-- =========================================================================================== -->        

        <div class="row">

            <h2>ศูนย์วิจัยเครือข่าย</h2>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง" href="research-center.php?show_center=TFP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/TFP_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา" href="research-center.php?show_center=PPP">                        
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/ppp_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางนาโนสเกลฟิสิกส์" href="research-center.php?show_center=NSP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/nano_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางนาโนสเกลฟิสิกส์</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางฟิสิกส์บูรณาการ" href="research-center.php?show_center=IGP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/IGP_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางฟิสิกส์บูรณาการ</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางฟิสิกส์คำนวณและทฤษฎี" href="research-center.php?show_center=CTP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/CTP_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางฟิสิกส์คำนวณและทฤษฎี</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="โครงการจัดตั้ง" href="research-center.php?show_center=ThEP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/thep_atom_chip_300.png">
                    <p style="font-size: 90%;">โครงการจัดตั้งห้องปฏิบัติการวิจัย</p>
                </a>
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

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>

</body>
</html>