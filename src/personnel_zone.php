<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>สำหรับบุคลากร</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page secondary with-sidebar bg-color-blueLight" id="page-index">


            <div class="page-sidebar">

                <p style="font-size: 20px; text-align: center;">Link ที่เกี่ยวข้อง</p>

                <ul>
                    <li class="sticker sticker-color-pink"><a title="Email @ThEP" href="https://www.google.com/a/thep-center.org/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/a/thep-center.org/&ss=1&ltmpl=default&ltmplcache=2" target="_blank"><i class="icon-mail"></i>Email</a></li>
                    <li class="sticker sticker-color-orange"><a href="http://www.eofficethep-center.com" target="_blank">E-Office</a></li>
                    <li class="sticker sticker-color-orangeDark"><a href="#">ระเบียบศูนย์</a></li>
                    <li class="sticker sticker-color-green"><a href="#">คู่มือพนักงาน</a></li>
                    <li class="sticker sticker-color-pink"><a href="#">ประกาศรับสมัครงาน</a></li>
                    <li class="sticker sticker-color-red dropdown" data-role="dropdown">
                        <a>อื่นๆ</a>
                        <ul class="sub-menu light sidebar-dropdown-menu" style="display: none;">
                            <li><a href="#">อื่นๆ 1</a></li>
                            <li><a href="#">อื่นๆ 2</a></li>
                            <li><a href="#">อื่นๆ 3</a></li>
                            <li><a href="#">อื่นๆ 4</a></li>
                        </ul>
                    </li>
                </ul>

            </div> <!-- END .page-sidebar -->


            <div class="page-region">
                <div class="page-region-content">

                    <h2 style="text-align: center;">แบบฟอร์มต่างๆ</h2>

                    <div class="page-control span9" data-role="page-control">
                        <span class="menu-pull"></span>
                        <div class="menu-pull-bar"></div>

                        <ul>
                            <li class="active"><a href="#page1">วิจัยและนวัตกรรม</a></li>
                            <li><a href="#page2">ทุนบัณฑิตศึกษา</a></li>
                            <li><a href="#page3">พัสดุและครุภัณฑ์</a></li>
                            <li><a href="#page4">การเงินและบัญชี</a></li>
                            <li><a href="#page5">ธุรการและอื่นๆ</a></li>
                        </ul>

                        <div class="frames">

                            <div class="frame active" id="page1">
                                <h3>แบบฟอร์ม : งานวิจัยและพัฒนานวัตกรรม </h3>
                                <p>*************************</p>
                            </div>


                            <div class="frame" id="page2">
                                <h3>แบบฟอร์ม : งานทุนบัณฑิตศึกษา</h3>
                                <p>********************************</p>
                            </div>

                            <div class="frame" id="page3">
                                <h3>แบบฟอร์ม : งานพัสดุ และครุภัณฑ์ </h3>
                                <p>**********************************</p>
                            </div>

                            <div class="frame" id="page4">
                                <h3>แบบฟอร์ม : การเงินและบัญชี</h3>
                                <p>***********************************</p>
                            </div>

                            <div class="frame" id="page5">
                                <h3>แบบฟอร์ม : งานธุรการและอื่นๆ</h3>
                                <p>**************************************</p>
                            </div>

                        </div>
                    </div>

                    <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

                </div> <!-- END .page-region -->


            </div> <!-- END #page-index -->

            <?php require_once 'footer.php'; ?>

    </body>
</html>