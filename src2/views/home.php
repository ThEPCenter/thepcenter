<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>            

        <div class="bs-example" style="max-width: 900px; margin: 0 auto;">
            <div id="carousel-example-captions" class="carousel slide bs-docs-carousel-example">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../slides/conf.kek_slide_400.png">
                        <div class="carousel-caption">
                            <h3>First slide label</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../slides/kekworkshop2_copy.jpg">
                        <div class="carousel-caption">
                            <h3>Second slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../slides/summer_korea_small.gif">
                        <div class="carousel-caption">
                            <h3>Third slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div>
        <p>&nbsp;</p>

        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="bs-example bs-example-tabs">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">ข่าววิชาการในเครือข่าย</a></li>
                        <li><a href="#profile" data-toggle="tab">ข่าวกิจกรรม</a></li>
                        <li><a href="#profile2" data-toggle="tab">ข่าววิชาการทั่วไป</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">

                        <?php
                        $sql_net = "
                                            SELECT * FROM tb_news
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
                        <div class="tab-pane fade in active" id="home">
                            <h2>ข่าววิชาการในเครือข่าย</h2>

                            <?php
                            $num_news = mysql_num_rows($result_net);

                            if ($num_news > 0) {
                                ?>

                                <h3><?php echo htmlspecialchars_decode($tiltle);
                            echo $new_gif; ?></h3>
                                <p><small><em><?php echo thai_date($date); ?></em></small></p>
                                <?php
                                echo htmlspecialchars_decode($content_short);

                                echo '<p><a href="network_news.php#news-' . $news_id . '">..... อ่านต่อ</a></p>';
                            } else {
                                echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="profile">
                            <p>ภาพกิจกรรมการประชุมแลกเปลี่ยนความรู้ทางวิชาการภายใต้โครงการความร่วมมือวิทยาศาสตร์และวิชาการไทย-จีน ระหว่างวันที่ 22 - 26 เมษายน 2556 ณ ห้องประชุม อาคารวิจัยนิวตรอนพลังงานสูง มหาวิทยาลัยเชียงใหม่ ... อ่านต่อ</p>
                        </div>

                        <div class="tab-pane fade" id="profile2">
                            <p>สรุปรายชื่อผู้เข้าร่วมกิจกรรม Names of participant's Advanced Plasma Technology for Green Energy and Biomedical Applications
                                ... รายละเอียด</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-md-4">                
                <div class="bs-example bs-example-tabs">
                    <p>.col-xs-6 .col-md-4</p>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>

<?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->
</body>
</html>
