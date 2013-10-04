<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>
<style>
    .pic-link{
        text-decoration: none;
    }
    .pic-link:hover{
        text-decoration: none;
    }
    
    #center-list{
        display: none;
    }
</style>
<script>
    $(function(){
        $("#btn-center").click(function(){
            $("#center-list").toggle();
        });
    });
   
</script>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="bs-example">
            <div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../slides/conf.kek_slide_400.png" style="margin: 0 auto;">
                    </div>
                    <div class="item">
                        <img src="../slides/kekworkshop2_copy.jpg"  style="margin: 0 auto;">
                    </div>
                    <div class="item">
                        <img src="../slides/summer_korea_small.gif"  style="margin: 0 auto;">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div>

        <p>&nbsp;</p>

        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-md-8">
                <div class="bs-example bs-example-tabs">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#page1" data-toggle="tab">ข่าววิชาการจากเครือข่าย</a></li>
                        <li><a href="#page2" data-toggle="tab">ข่าวกิจกรรม</a></li>
                        <li><a href="#page3" data-toggle="tab">ข่าววิชาการทั่วไป</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">

                        <?php
                        $sql_net = "SELECT * FROM tb_news
                            WHERE type = 'network_academic'
                            ORDER BY date DESC;
                        ";
                        $result_net = mysql_query($sql_net);
                        $net = mysql_fetch_array($result_net);
                        $news_id = $net['id'];
                        $tiltle = $net['title'];
                        $date = $net['date'];
                        $content_short = $net['content_short'];
                        $new = $net['new'];
                        if ($new == 'y') {
                            $new_gif = ' <img src="../images/new1.gif">';
                        } else {
                            $new_gif = '';
                        }
                        ?>
                        <div class="tab-pane fade in active" id="page1">
                            <h2>ข่าววิชาการจากเครือข่าย</h2>

                            <?php
                            $num_news = mysql_num_rows($result_net);

                            if ($num_news > 0) {
                                ?>
                                <h3>
                                    <?php
                                    echo htmlspecialchars_decode($tiltle);
                                    echo $new_gif;
                                    ?>
                                </h3>
                                <p><small><em><?php echo thai_date($date); ?></em></small></p>
                                <?php
                                echo htmlspecialchars_decode($content_short);

                                echo '<p><a href="network_news.php?news_id=' . $news_id . '">..... อ่านต่อ</a></p>';
                            } else {
                                echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
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
                                        $pic = mysql_fetch_array($re_pic);

                                        echo '                            
                                <tr>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '" class="pic-link">
                                        <img src="../images/pixel-vfl3z5WfW.gif" style="vertical-align: middle; 
                            background: no-repeat white url(../../ap/views/img/picture/' . $pic['name'] . ') -40px 0; 
                            background-size: 160px auto; 
                            width: 80px;
                            height: 80px;" ></a></td>
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

                        <div class="tab-pane fade" id="page3">
                            <p>สรุปรายชื่อผู้เข้าร่วมกิจกรรม Names of participant's Advanced Plasma Technology for Green Energy and Biomedical Applications ... รายละเอียด</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4 text-center">                
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
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location='central-equipment.php';">หน่วยเครื่องมือวิเคราะห์กลาง</button>
                        </div>
                    </div>
                    <p>&nbsp;</p>

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
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location='document.php';">เอกสารเผยแพร่</button>
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
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.open('https://www.facebook.com/pages/Thailand-Center-of-Excellence-in-Physics/118201038353964')">facebook</button>
                        </div>
                    </div>
                    <p>&nbsp;</p> 

                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-4 text-center"><a href="http://www.perdo.or.th" target="_blank" title="สำนักพัฒนาบัณฑิตศึกษาและวิจัยด้านวิทยาศาสตร์และเทคโนโลยี (สบว)"><img style="width: auto; max-height: 64px; margin: 0px auto 10px auto;" class="img-responsive" src="../images/perdo_128.png"></a></div>
                <div class="col-md-4 text-center"><a href="http://www.mua.go.th" target="_blank" title="สำนักงานคณะกรรมการการอุดมศึกษา"><img style="width: auto; max-height: 64px; margin: 0px auto 10px auto;" src="../images/mua_logo_128.png"></a></div>
                <div class="col-md-4 text-center"><a href="http://www.moe.go.th" target="_blank" title="กระทรวงศึกษาธิการ"><img style="width: auto; max-height: 64px; margin: 0px auto 10px auto;" src="../images/moe_logo_128.png"></a></div>
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->
    <script type="text/javascript" src="../themes/assets/js/application.js"></script>
    <script type="text/javascript" src="../themes/assets/js/holder.js"></script>

</body>
</html>
