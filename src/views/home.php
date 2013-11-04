<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php require_once('../includes/header.php'); ?>

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
                <div>
                    <div style="border: 1px solid #666666;">
                        <img class="img-responsive" style="margin: auto;" src="<?php echo $p['featured_img']; ?>">
                    </div>                                                
                    <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<? echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                    <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
                </div>
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
                <div>
                    <div style="">
                        <img class="img-responsive" style="margin: auto; border: 1px solid #666666;" src="<?php echo $p['featured_img']; ?>">
                    </div>                                                
                    <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                    <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
                </div>
            </div>

            <!-- Special / Pr news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = ( 'special' OR 'pr' )
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-6 col-md-3 ">
                <div>
                    <div style="">
                        <img class="img-responsive" style="margin: auto; border: 1px solid #666666;" src="<?php echo $p['featured_img']; ?>">
                    </div>                                                
                    <h3><a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h3>
                    <p><?php echo $p['content_short']; ?> <a href="<?php echo $p['type'] ?>-news.php?news_id=<?php echo $p['id']; ?>">... อ่านต่อ</a></p>
                </div>
            </div>

        </div> <!-- /.row -->

        <!-- =========================================================================================== -->

        <div class="row">

            <h2>หน่วยเครื่องมือวิเคราะห์กลาง</h2>

            <div class="col-sm-6 col-md-6">
                <a href="central-equipment.php?eq=XPS">
                    <img class="img-responsive" style="margin: 0 auto; border: 1px solid #666666;" src="../files/xps_banner.png">
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a href="central-equipment.php?eq=FESEM">
                    <img class="img-responsive" style="margin: 0 auto; border: 1px solid #666666;" src="../files/fesem_banner.png">
                </a>
            </div>

        </div>

        <!-- =========================================================================================== -->

        <p>&nbsp;</p>

        <div class="row">

            <h2>ศูนย์วิจัยเครือข่าย</h2>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=TFP">
                    <div class="text-center" style="background-color: #8f8f8f;">                    
                        <h2>TFP</h2>
                        <p>&nbsp;</p>                    
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=PPP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>PPP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=NSP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>NSP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=IGP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>IGP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=CTP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>CTP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center.php?show_center=ThEP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>ThEP</h2>                        
                        <p>(โครงการจัดตั้ง)</p>
                    </div>
                </a>
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
            
    </script>

</body>
</html>
