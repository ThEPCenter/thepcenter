<?php
require_once "ui_re_db/system/system.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>ศูนย์ความเป็นเลิศด้านฟิสิกส์</title>

        <style>side_icon:hover{border: solid 2px greenyellow;}</style>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index" style="margin-top: -32px;">	
            <div class="page-region">
                <div class="page-region-content">

                    <div class="hero-unit">
                        <div id="carousel1" class="carousel" data-role="carousel" data-param-duration="300" style="height: 400px;">
                            <div class="slides">

                                <div class="slide" id="slide1" style="left: 0px;">
                                    <div style="width: auto; height: 400px; text-align: center;">
                                        <a href="#" title="กิจกรรมสถาบันระหว่างประเทศภาคฤดูร้อน ครั้งที่ 19 ในหัวข้อปรากฏการณ์ของอนุภาคมูลฐานและจักรวาลวิทยา"><img src="../upload/summer_korea_small.gif" border="0"></a>
                                    </div>


                                </div>

                                <div class="slide" id="slide2" style="display: block; left: 580px;">
                                    <div style="width: auto; height: 400px; text-align: center;">
                                        <a href="#" title="โครงการร่วม US-CERN-Japan-Russia Accelerator School"><img src="../upload/conf.kek_slide_400.png" border="0"></a>
                                    </div>


                                </div>

                                <div class="slide" id="slide3" style="display: block; left: -580px;"> 
                                    <div style="width: auto; height: 400px; text-align: center;">
                                        <a href="#" title="การฝึกอบรมเรื่องการใช้โปรแกรม Garfield จำลองสนามไฟฟ้าสำหรับหัววัด Central Drift Chamber"><img src="../upload/kekworkshop2_copy.jpg" border="0" style="width: auto; height: 400px;"></a>
                                    </div>


                                </div>
                            </div>

                            <span class="control left"><i class="icon-arrow-left-3"></i></span>
                            <span class="control right"><i class="icon-arrow-right-3"></i></span>

                            <div class="markers">
                                <ul>
                                    <li class=""><a href="javascript:void(0)" data-num="0"></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-num="1"></a></li>
                                    <li class=""><a href="javascript:void(0)" data-num="2"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> <!-- END .page-region-content -->
            </div> <!-- END .page-region -->
        </div> <!-- END #page-index -->

        <div class="page bg-color-blueLight" style="margin-top: -5px;">
            <div class="page-region">
                <div class="page-region-content" style="padding: 0;">
                    <div class="grid" style="margin-bottom: 0;">
                        <div class="row">

                            <div class="span9">
                                <div class="page-control span9" data-role="page-control">
                                    <span class="menu-pull"></span>
                                    <div class="menu-pull-bar"></div>

                                    <ul>
                                        <li class="active"><a href="#page1">ข่าววิชาการในเครือข่าย</a></li>
                                        <li><a href="#page2">ข่าวกิจกรรม</a></li>
                                        <li><a href="#page3">ข่าววิชาการทั่วไป</a></li>
                                    </ul>
                                    
                                    <?php
                                    $sql_net = "
                                            SELECT * FROM tb_news
                                            WHERE type = 'network_academic'
                                            ORDER BY date DESC;
                                            ";
                                    $result_net = mysql_query($sql_net);
                                    $news_id = mysql_result($result_net, 0, 'id');
                                    $tiltle = mysql_result($result_net, 0, 'title');
                                    $date = mysql_result($result_net, 0, 'date');
                                    $content_short = mysql_result($result_net,0, 'content_short');
                                    $new = mysql_result($result_net, 0, 'new');
                                    if($p['new']=='y'){
                                        $new_gif = ' <img src="image/new1.gif">';
                                    }else{
                                        $new_gif = '';
                                    }
                                    ?>

                                    <div class="frames">
                                        <div class="frame active" id="page1">
                                            <h2>ข่าววิชาการในเครือข่าย</h2>
                                            
                                            <?php
                                            $num_news = mysql_num_rows($result_net);

                                            if ($num_news > 0) {
                                            ?>
                                            
                                            <h3><?php echo htmlspecialchars_decode($tiltle); echo $new_gif; ?></h3>
                                            <p class="fg-color-green"><small><em><?php echo thai_date($date); ?></em></small></p>
                                            <?php
                                                echo htmlspecialchars_decode($content_short);
                                                
                                                echo '<p><a href="show_news.php?news_id=' . $news_id . '" class="fg-color-green">..... อ่านต่อ <i class="icon-arrow-right-2 fg-color-red"></i></a></p>';
                                            } else {
                                                echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                                            }
                                            ?>

                                        </div>

                                        <div class="frame" id="page2">
                                            <h2>ข่าวกิจกรรม</h2>
                                            <div class="image-collection"><div style="width: 64; height: 64px; display: inline;"></div></div>
                                            <p>ภาพกิจกรรมการประชุมแลกเปลี่ยนความรู้ทางวิชาการภายใต้โครงการความร่วมมือวิทยาศาสตร์และวิชาการไทย-จีน 
                                                ระหว่างวันที่ 22 - 26 เมษายน 2556 ณ ห้องประชุม อาคารวิจัยนิวตรอนพลังงานสูง มหาวิทยาลัยเชียงใหม่
                                                ... <a href="#">อ่านต่อ</a></p>
                                        </div>

                                        <div class="frame" id="page3">
                                            <h2>ข่าววิชาการทั่วไป</h2>

                                            <h3>สรุปรายชื่อผู้เข้าร่วมกิจกรรม Names of participant's Advanced Plasma Technology for Green Energy and Biomedical Applications</h3>
                                            <p>&nbsp; ... <a href="#">รายละเอียด</a></p>

                                            <h3>สรุปผลในรอบ 4 เดือน : การสนับสนุนข้อมูลข่าวสาร และให้ความรู้แก่สื่อมวลชน ของศูนย์ ThEP</h3>
                                            <p>&nbsp; ... <a href="#">รายละเอียด</a></p>

                                            <h3>สรุปผลการเจรจาความร่วมมือทางวิชาการ ณ High Energy Accelerator Research Organization (KEK) ประเทศญี่ปุ่น </h3>
                                            <p>&nbsp; ... <a href="#">รายละเอียด</a></p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="span3" style="background-color: #F1F1F1"> <!-- sidebar -->

                                <div> 
                                    <table style="margin-top: 15px;">
                                        <tr>                                            
                                            <td style="border:solid 0px black; text-align: center;"><a href="distribute.php"><img src="image/distribute.png" title="เอกสารเผยแพร่" style="width: 64px; height: auto;" border="0"></a></td>
                                            <td style="border:solid 0px black; text-align: center;"><a href="personnel_zone.php"><img src="image/personnel_zone.png" title="สำหรับบุคลากร" style="width: 64px; height: auto;" border="0"></a></td>
                                        </tr>
                                        <tr>
                                            <td style="border:solid 0px black; text-align: center; padding-top: 15px;"><a href="#"><img src="image/annual_report.png" title="รายงานประจำปี" style="width: 64px; height: auto;" border="0"></a></td>
                                            <td style="border:solid 0px black; text-align: center; padding-top: 15px;"><a href="web_links.php"><img src="image/web_links.png" title="Web Links" style="width: 64px; height: auto;" border="0"></a></td>
                                        </tr>
                                        <tr>
                                            <td style="border:solid 0px black; text-align: center; padding-top: 15px;"><a href="central_equipment.php"><img src="image/central_equipment.png" title="เครื่องมือวิเคราะห์กลาง" style="width: 64px; height: auto;" border="0"></a></td>
                                            <td style="border:solid 0px black; text-align: center; padding-top: 15px;">
                                                <a href="https://www.facebook.com/pages/Thailand-Center-of-Excellence-in-Physics/118201038353964" title="ThEP Fanpage" target="_blank">
                                                    <img src="image/facebook-icon.png" style="width: 64px; height: auto;" border="0">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div style="width: auto; height: 120px; margin-top: 50px; text-align: center; background-color: #F1F1F1">
                                    <div class="bg-color-lighten" style="width: 180px; height: 100px; margin: 0 auto;">visitor counter</div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page bg-color-blueLight">
            
            <div class="grid" style="margin-bottom: 0px;">
                <div class="row">

                    <div class="span4" align="center">
                        <a href="http://www.perdo.or.th" target="_blank" title="สำนักพัฒนาบัณฑิตศึกษาและวิจัยด้านวิทยาศาสตร์และเทคโนโลยี (สบว)"><img src="image/logo/perdo_128.png" style="width: auto; height: 64px;" border="0"></a>
                    </div>

                    <div class="span4" align="center">
                        <a href="http://www.mua.go.th" target="_blank" title="สำนักงานคณะกรรมการการอุดมศึกษา"><img src="image/logo/mua_logo_128.png" style="width: auto; height: 64px;" border="0"></a>
                    </div>

                    <div class="span4" align="center">
                        <a href="http://www.moe.go.th" target="_blank" title="กระทรวงศึกษาธิการ"><img src="image/logo/moe_logo_128.png" style="width: auto; height: 64px;" border="0"></a>
                    </div>

                </div>

            </div>

            <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

        </div>


        <?php require_once 'footer.php'; ?>

    </body>
</html>