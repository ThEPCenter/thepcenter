<?php
require_once '../system/system.php';

// First, delete old session id
// 7200 Two hour limit
$expiration = time() - 43200;
$sql_del = "DELETE FROM counter WHERE created < " . $expiration;
$re_del = mysql_query($sql_del) or die(mysql_error());


$sessionid = session_id();
//$counter_id	= $db->GetOne("SELECT id FROM counter WHERE  sessionid = '$sessionid'  ");
$counter_id = "SELECT id FROM counter WHERE  sessionid = '$sessionid';"; // Show All
$result = mysql_query($counter_id) or die(mysql_error());
// $rs = mysql_fetch_array($result);
// $counterid = $rs["id"];
$now = time();
$nums = mysql_num_rows($result);

if ($nums == 0) {
    $sql = "INSERT INTO counter
  VALUES (0, '$sessionid','$now','$now');";
    @mysql_query($sql) or die(mysql_error());
    $_SESSION['fancy'] = "first";
} else {
    unset($_SESSION['fancy']);
    $_SESSION['fancy'] = 'second';
}
$countershow = "SELECT id FROM counter ORDER BY id DESC"; // Show All
$result = mysql_query($countershow) or die(mysql_error());
$rs = mysql_fetch_array($result);
$counter = $rs["id"];
$counter = number_format($counter, 0, '', ',');

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

<meta property="og:title" content="ศูนย์ความเป็นเลิศด้านฟิสิกส์ Thailand Center of Excellence in Physics." />
<meta property="og:description" content="Physics, Thailand Center of Excellence in Physics, ฟิสิกส์, ศูนย์ความเป็นเลิศด้านฟิสิกส์, ฟิสิกส์ไทย, ThEP" />
<meta property="og:image" content="http://thep-center.org/src2/images/thep_head_10_970_web.jpg" />


<!-- Start edit Dec 2, 2013 "fancybox" -->

<!-- Add jQuery library -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/lib/jquery-1.10.1.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../plugins/fancyBox-2.1.5/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">
    $(document).ready(function () {
        // $('.fancybox').fancybox();
<?php
if ($_SESSION['fancy'] == "first") {
    // echo '$.fancybox.open("../../upload02/queen_2014.jpg");';
    // echo '$.fancybox.open("../../upload02/notice/microwave_140321_1200_web.jpg");';
    unset($_SESSION['fancy']);
}
?>

        $(".fancybox-wrap").click(function () {
            // window.open("microwave_workshop.php");
        });

        // Clip
        $(".various").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: false,
            width: '70%',
            height: '70%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });

    });


</script>

<style type="text/css">
    .fancybox-custom .fancybox-skin {
        box-shadow: 0 0 50px #222;
    }
    .fancybox-wrap {
        cursor: pointer;
    }
</style>

<!-- End  edit Dec 2, 2013 -->

</head>

<body>
    <div class="container">

        <div class="row">
            <a title="ศูนย์ความเป็นเลิศด้านฟิสิกส์" href="home.php"><img class="img-responsive" style="margin: 0 auto;" src="../images/thep_head_10_970_web.jpg"></a>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">จำนวนผู้เข้าชม: <?php echo $counter; ?> ครั้ง</div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-right" style="padding-right: 20px;">
                <?php
                if (isset($_SESSION['login'])): $login_name = $_SESSION['login'];
                else : $login_name = '';
                endif;
                login('<span style="background-color: #e7e3b1;"><strong>&nbsp;สวัสดี <span style="color: #cc3000;">' . $login_name . '</span></strong> [ <a href="gallery.php"><span class="glyphicon glyphicon-th-large"></span> Gallery</a> | <a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a> | <a href="logout.php" style="color: red;"><span class="glyphicon glyphicon-log-out"></span> Logout</a> ] </span> &nbsp;');
                ?> <img title="เว็บฉบับภาษาไทย" style="width: 30px;" src="../images/thailand-flag.gif"> <a title="English version" href="home_en.php"><img style="width: 30px;" src="../images/en_ver.gif"></a></div>
        </div>

        <!-- /#header -->
        <div class="pageline" id="firstpageline"></div>

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
                <h2 class="text-center"><a class="header-type" href="network-academic-news.php">ข่าววิชาการจากเครือข่าย</a></h2>

                <div class="featured-image-network">                    
                    <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a class="header-title" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
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
                <h2 class="text-center"><a class="header-type" href="activity-news.php">ข่าวกิจกรรม</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a class="header-title" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
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
                <h2 class="text-center"><a class="header-type" href="special-news.php">ข่าวพิเศษ</a></h2>
                <div class="featured-image-box">                    
                    <a style="text-align: center;" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a class="header-title" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>

        </div> <!-- /.row -->

        <!-- =========================================================================================== -->

        <div class="row">

            <!-- Pr news -->
            <?php /*
              <?php
              $sql = "SELECT * FROM tb_news
              WHERE type = 'pr'
              ORDER BY date DESC;";
              $result = mysql_query($sql);
              $p = mysql_fetch_array($result);
              ?>
              <div class="col-sm-6 col-md-3 ">
              <h2 class="text-center"><a class="header-type" href="pr-news.php">ข่าวประชาสัมพันธ์</a></h2>
              <div class="featured-image-box">
              <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">
              <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
              </a>
              </div>
              <h3><a class="header-title" href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
              <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
              </div>
             */
            ?>
            <!-- Industrial  Physics -->
            <?php
            $sql = "SELECT * FROM tb_social 
                WHERE type = 'industrial'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <h2 class="text-center"><a class="header-type" href="industrial.php">ฟิสิกส์อุตสาหกรรม</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a class="header-title" href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
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
                <h2 class="text-center"><a class="header-type" href="daily-life.php">ฟิสิกส์ในชีวิตประจำวัน</a></h2>
                <div class="featured-image-box">                    
                    <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">
                        <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                    </a>
                </div>
                <h3><a class="header-title" href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>.php?article_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
            </div>


            <!-- ประกาศ -->

            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'notice' AND new = 'y'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">

                <h2 class="text-center"><a class="header-type" title="ดูประกาศย้อนทั้งหมด" href="notice.php">ประกาศ</a></h2>
                <?php if ($p['new'] == 'y') : ?>
                    <div class="featured-image-box">                    
                        <a style="text-align: center;" href="<?php echo $p['type'] ?>.php?news_id=<?php echo $p['id']; ?>">
                            <img class="fetured-image" title="<?php echo htmlspecialchars_decode($p['title']); ?>" src="<?php echo $p['featured_img']; ?>" alt="Featured image">
                        </a>
                    </div>
                    <!--
                    <h3><a class="header-title" href="<?php echo $p['type'] ?>.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                    <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
                    -->
                <?php else: ?>
                    <a class="header-type" title="ดูประกาศย้อนหลัง" href="notice.php">
                        <div class="featured-image-box"></div>
                    </a>
                <?php endif; ?>

                <!-- Form Researcher -->
                <section style="margin-top: 20px;">
                    <h2 class="text-center"><a class="header-type">แบบฟอร์มข้อมูลนักวิจัย</a></h2>
                    <div class="featured-image-box">                    
                        <a style="text-align: center;" href="../files/form_research/ThEP-CV-01_Nov_4_2014.docx">
                            <img class="fetured-image" title="Click to download" src="../../upload02/img/cv_img.jpg" alt="Featured image">
                        </a>
                    </div>
                </section>

            </div>
            <!-- END ประกาศ -->

            <div class="col-sm-6 col-md-3 ">

                <!-- ***** Clip ****** --> 
                <h2 class="text-center header-type">วีดิทัศน์แนะนำศูนย์ฯ</h2>
                <div class="featured-image-box">
                    <a class="various fancybox.iframe" href="http://www.youtube.com/embed/1YlBlhG2xZE?autoplay=1">
                        <img style="max-width: 100%;" src="http://thep-center.org/upload02/thep_presentation_play.jpg">
                    </a>
                </div>
                <!-- ***** END Clip ****** -->

                <!-- Form Researcher -->
                <section style="margin-top: 23px;">
                    <h2 class="text-center" style="font-size: 18px;"><a class="header-type" href="researcher.php">ฐานข้อมูลนักฟิสิกส์/นักวิจัย</a></h2>
                    <a style="text-align: center;" title="ฐานข้อมูลนักฟิสิกส์ / นักวิจัย" href="researcher.php">
                        <div class="featured-image-box">
                            <img class="fetured-image" src="">
                        </div>
                    </a>
                </section>

            </div>


        </div>  <!-- /.row -->

        <p>&nbsp;</p>


        <!-- =========================================================================================== -->        

        <div class="row">

            <h2 class="header-type">ศูนย์วิจัยเครือข่าย</h2>

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
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/NSP_red_oled_300.jpg">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางนาโนสเกลฟิสิกส์</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="ศูนย์วิจัยทางฟิสิกส์บูรณาการ" href="research-center.php?show_center=IGP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/IGP_300.png">
                    <p style="font-size: 90%;">ศูนย์วิจัยทางฟิสิกส์บูรณาการ &nbsp; &nbsp; &nbsp; &nbsp;</p>
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

            <h2 class="header-type">หน่วยเครื่องมือวิเคราะห์กลาง</h2>

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