<header id="page-header">
    <h1><a href="home.php">ศูนย์ความเป็นเลิศด้านฟิสิกส์</a></h1>
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
        <?php
        $output = ' 
<a onclick="window.location=\'' . controller('logout') . '\';" style="cursor:pointer; font-weight: bold;">Logout</a>
          ';
        $not_login = ' 
<a onclick="window.location=\'login.php\';" style="cursor:pointer; font-weight: bold;">Login</a>
          ';
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="about.php">เกี่ยวกับ ThEP</a></li>
                <li><a href="pr_news.php">ข่าวประชาสัมพันธ์</a></li>
                <li><a href="research_output.php">งานวิจัย</a></li>
                <li><a href="industrial.php">ฟิสิกส์เพื่อผู้ประกอบการ</a></li>                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a><?php login('สวัสดี '); user('username'); ?></a></li>
                <li><?php login($output, $not_login); ?></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

</header>
<!-- /#header -->