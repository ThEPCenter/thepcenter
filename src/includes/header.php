<header id="page-header">
    <h1 class="text-center" style="margin-top: 10px;"><a href="home.php"><img class="img-responsive" style="margin: 0 auto;" src="../images/banner_131015_slogan_960_90.png"></a></h1>
    <nav class="navbar navbar-default" role="navigation">
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">หน้าหลัก</a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="about.php">เกี่ยวกับ ThEP</a></li>
                <li><a href="pr_news.php">ข่าวประชาสัมพันธ์</a></li>
                <li><a href="research_output.php">งานวิจัย</a></li>
                <li><a href="industrial.php">ฟิสิกส์เพื่อผู้ประกอบการ</a></li>                
            </ul>
            
            <!-- right navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php login('../controllers/logout.php', 'login.php'); ?>"><?php login('Logout', 'Login')?></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

</header>
<!-- /#header -->