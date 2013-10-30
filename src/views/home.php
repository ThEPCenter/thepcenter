<?php
require_once '../system/system.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <!-- Bootstrap core CSS -->
        <link href="../themes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Custom styles for this template -->
        <link href="../themes/assets/css/docs.css" rel="stylesheet" media="screen">
        <link href="../style/main.css" rel="stylesheet" type="text/css" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../themes/assets/js/html5shiv.js"></script>
          <script src="../themes/assets/js/respond.min.js"></script>
        <![endif]-->
                
        <script src="../plugins/jqueryui/jquery-1.10.2.js"></script>
        <script src="../plugins/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
        <!-- CKEditor -->
        <script src="../plugins/ckeditor/ckeditor.js"></script>
        
<style>
    .pic-link{
        text-decoration: none;
    }
    .pic-link:hover{
        text-decoration: none;
    }

    #center-list, #eq-list{
        display: none;
    }

    /*  style for Special News box */
    a h3, a img {
        text-decoration: none;
    }
    a h3{
        margin-top: 10px;
    }
    a h3:hover{
        text-decoration: underline;  
    }
    img {
        border: none;
    }    
</style>

</head>

<body>
    <div class="container">

        <?php require_once('../includes/header.php'); ?>

        <div id="slide" class="bs-example">

            <?php
            $admin_txt = '
            <div>
                <a id="edit-slide" style="font-weight: bold;" href="slide.php"><span class="glyphicon glyphicon-wrench"></span> Edit Slide</a> 
            </div>
            <div>&nbsp;</div>
            ';
            admin($admin_txt);
            ?>

            <div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $sql1 = "SELECT * FROM tb_slide WHERE slide_no = 1;";
                    $result1 = mysql_query($sql1);
                    if (!empty($result1)) {
                        // for item one must active
                        $no1 = mysql_fetch_array($result1);
                        echo '
                      <div class="item active">
                        <a href="' . $no1['link_url'] . '"><img src="' . $no1['img_url'] . '" style="margin: 0 auto;"></a>
                      </div>
                      ';
                    } // END if

                    $sql = "SELECT * FROM tb_slide WHERE slide_no > 1;";
                    $result = mysql_query($sql);
                    if (!empty($result)) {
                        while ($c = mysql_fetch_array($result)) {
                            echo '
                      <div class="item">
                        <a href="' . $c['link_url'] . '"><img src="' . $c['img_url'] . '" style="margin: 0 auto;"></a>
                      </div>
                      ';
                        } // END while
                    } // END if
                    ?>

                </div> <!-- /.carousel-inner -->

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div>

        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row" id="content">
            <div class="col-md-8" id="left-col">
                <div class="bs-example bs-example-tabs">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#page1" data-toggle="tab">ข่าววิชาการจากเครือข่าย</a></li>
                        <li><a href="#page2" data-toggle="tab">ข่าวกิจกรรม</a></li>
                        <li><a href="#page3" data-toggle="tab">ข่าววิชาการทั่วไป</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="page1">
                            <?php
                            $sql_net = "SELECT * FROM tb_news
                            WHERE type = 'network-academic'
                            ORDER BY date DESC;
                        ";
                            $result_net = mysql_query($sql_net);
                            if (!empty($result_net)) {
                                if (mysql_num_rows($result_net) > 0) {
                                    $net = mysql_fetch_array($result_net);

                                    if ($net['new'] == 'y') {
                                        $new_gif = ' <img src="../images/new1.gif">';
                                    } else {
                                        $new_gif = '';
                                    }
                                    ?>

                                    <h3>
                                        <?php
                                        echo '<a href="network-academic-news.php?news_id=' . $net['id'] . '">' . htmlspecialchars_decode($net['title']) . '</a>' . $new_gif;
                                        ?>
                                    </h3>
                                    <p><small><em><?php echo thai_date($net['date']); ?></em></small></p>
                                    <?php
                                    echo htmlspecialchars_decode($net['content_short']);

                                    echo '<p><a href="network-academic-news.php?news_id=' . $net['id'] . '"> ... อ่านต่อ</a></p>';
                                } else {
                                    echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                                }
                            }
                            ?>
                        </div>


                        <?php
                        $sql_act = "SELECT * FROM tb_news
                            WHERE type = 'activity'
                            ORDER BY date DESC;
                        ";
                        $re_act = mysql_query($sql_act);
                        ?>

                        <div class="tab-pane fade" id="page2">
                            <table class="table">
                                <?php
                                if (mysql_num_rows($re_act) > 0) {
                                    while ($a = mysql_fetch_array($re_act)) {

                                        $sql_pic = "SELECT * FROM tb_picture
                                            WHERE gallery_id = {$a['gallery_id']}
                                            ORDER BY id;    
                                        ";
                                        $re_pic = mysql_query($sql_pic);
                                        if (!empty($re_pic)) {
                                            $pic = mysql_fetch_array($re_pic);
                                        }
                                        echo '
                                <tr>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '" class="pic-link">
                                        <img src="../images/pixel-vfl3z5WfW.gif" style="vertical-align: middle; 
                                        background: no-repeat white url(../img/picture/' . $pic['name'] . ') -40px 0; 
                                        background-size: 130px auto; 
                                        width: 65px; height: 65px;" >
                                    </a></td>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '">' . $a['title'] . '</a></td>
                                </tr>                            
                                    ';
                                    } // END while
                                } else {
                                    echo '<tr><td>ขออภัยไม่พบข้อมูล</td></tr>';
                                }
                                ?>
                            </table>
                        </div>

                        <?php
                        $sql_gen = "SELECT * FROM tb_news
                            WHERE type = 'gen-academic'
                            ORDER BY date DESC;
                        ";
                        $re_gen = mysql_query($sql_gen);
                        ?>

                        <div class="tab-pane fade" id="page3">
                            <?php
                            if (mysql_num_rows($re_gen) > 0) {
                                while ($gen = mysql_fetch_array($re_gen)) {
                                    echo '
                            <p><a href="gen-academic-news.php?news_id=' . $gen['id'] . '">' . $gen['title'] . '</a></p>
                                <hr>
                                    ';
                                } // END while
                            } else {
                                echo '<p class="text-center">ขออภัยไม่พบข้อมูล</p>';
                            }
                            ?>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Sidebar =================== -->
            <div class="col-md-4 text-center" id="right-col">
                <div class="bs-example">
                    <div>                    
                        <a style="text-decoration: none; text-align: center;" href="special-news.php" title="รางวัลโนเบลฟิสิกส์ประจำปี 2013">
                            <h3 style="color:  #000000;">รางวัลโนเบลฟิสิกส์ประจำปี 2013 <img src="http://www.thep-center.org/uploadfile/NewThep/new1.gif"></h3>
                            <div style="text-align: center; margin: 0 auto;">
                                <img class="img-responsive" style="margin: 0 auto;" src="../images/131008_SCI_HiggsEnglert.jpg.CROP.promo-mediumlarge.jpg">
                            </div>                                                                              	
                        </a>
                        <div style="text-align: left;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Royal Swedish Academy of Sciences ได้ประกาศที่กรุงสตอกโฮล์ม ประเทศสวีเดน เมื่อวันที่ 8 ตุลาคมที่ผ่านมาว่า รางวัลโนเบลฟิสิกส์ประจำปี 2013 ได้ตัดสินมอบให้แก่นักฟิสิกส์ทฤษฎี 2 ท่านคือ ศาสตราจารย์ Francois Englert กับ ศาสตราจารย์ Peter W. Higgs <a href="special-news.php">...อ่านต่อ</a>

                        </div>
                    </div>
                </div>

                <div class="bs-example">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center">ศูนย์วิจัยในศูนย์ ThEP</button>
                        </div>
                    </div>
                    <div id="center-list" class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='research-center.php?show_center=TFP';">ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='research-center.php?show_center=PPP';" style="font-size: 14px;">ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='research-center.php?show_center=NSP';">ศูนย์วิจัยทางนาโนสเกลฟิสิกส์</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='research-center.php?show_center=IGP';">ศูนย์วิจัยทางฟิสิกส์บูรณาการ</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='research-center.php?show_center=CTP';" style="font-size: 16px;">ศูนย์วิจัยทางฟิสิกส์คำนวณและทฤษฎี</button>
                        </div>
                    </div>
                    <p>&nbsp;</p>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" id="eq" class="btn btn-primary btn-lg btn-block">หน่วยเครื่องมือวิเคราะห์กลาง</button>
                        </div>
                    </div>
                    <div id="eq-list" class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='central-equipment.php?eq=XPS';">เครื่องวิเคราะห์ผิววัสดุ XPS</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-center" onclick="window.location='central-equipment.php?eq=FESEM';">เครื่อง FESEM</button>
                        </div>
                    </div>
                </div>

                <div class="bs-example">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location='weblink.php';">เว็บลิ้งค์</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-lg btn-block" onclick="window.location='form.php';">แบบฟอร์ม</button>
                        </div>                        
                    </div>
                    <p>&nbsp;</p>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-lg btn-block" style="font-size: 16px;" onclick="window.location='document.php';">เอกสารเผยแพร่</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.open('https://www.google.com/a/thep-center.org/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/a/thep-center.org/&ss=1&ltmpl=default&ltmplcache=2&emr=1')">Email@ThEP</button>
                        </div>
                    </div>
                    <p>&nbsp;</p>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.open('http://eofficethep.com');">E-Office</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #4c66a4;  border-color: #4c66a4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;" onclick="window.open('https://www.facebook.com/pages/Thailand-Center-of-Excellence-in-Physics/118201038353964')">facebook</button>
                        </div>
                    </div>
                </div>

                <div class="bs-example">
                    <div class="row">
                        <?php
                        if (isset($_SESSION['login'])) {
                            ?>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default" onclick="window.location='<?php controll('logout'); ?>';">Logout</button>
                            </div>                           
                            <?php
                        } else {
                            ?>

                            <div class="row">
                                <h4 class="text-center">เข้าสู่ระบบ</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-10">
                                    <?php
                                    get_controll('login-form');
                                    ?>
                                </div>
                                <div class="col-md-1">&nbsp;</div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        
        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script type='text/javascript'>

        $(function(){
            $("#btn-center").click(function(){
                $("#center-list").toggle();
            });
        
            $("#eq").click(function(){
                $("#eq-list").toggle();
            });
        
            $('.carousel').carousel({
                interval: 4000
            })
        });

    </script>

</body>
</html>
