

<div class="row">
    <div class="col-md-12" style="padding-top: 0;">
        <a title="ศูนย์ความเป็นเลิศด้านฟิสิกส์" href="home.php">
            <img class="img-responsive" style="margin: 0 auto;" src="../images/thep_head_11_th_1200.png">
        </a>
    </div>    
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6"><a href="home.php">หน้าหลัก</a></div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-right" style="padding-right: 20px;">
        <?php
        if (isset($_SESSION['login'])): $login_name = $_SESSION['login']; else : $login_name = ''; endif;
        login('<span style="background-color: #e7e3b1;"><strong>&nbsp;สวัสดี <span style="color: #cc3000;">' . $login_name . '</span></strong> [ <a href="gallery.php"><span class="glyphicon glyphicon-th-large"></span> Gallery</a> | <a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a> | <a href="logout.php" style="color: red;"><span class="glyphicon glyphicon-log-out"></span> Logout</a> ] </span>&nbsp;');
        ?> 
        <img title="เว็บฉบับภาษาไทย" style="width: 30px;" src="../images/thailand-flag.gif"> 
        <a title="English version" href="home_en.php"><img style="width: 30px;" src="../images/en_ver.gif"></a></div>
</div>

<!-- /#header -->
<div class="pageline" id="firstpageline"></div>
