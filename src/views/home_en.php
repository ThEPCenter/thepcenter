<?php
require_once '../system/system.php';
doc_head('Thailand Center of Excellence in Physics');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('home-header_en'); ?>

        <div class="row">

            <!-- Network Academic news -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE (type = 'network-academic') AND (title_en != '')
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center">Research News from Members</h2>
                <div>
                    <div style="border: 1px solid #666666;">
                        <img class="img-responsive" style="margin: auto;" src="<?php echo $p['featured_img']; ?>">
                    </div>                                                
                    <h3><a href="<?php echo $p['type'] ?>-news_en.php?news_id=<? echo $p['id']; ?>"><?php echo $p['title_en']; ?></a></h3>
                    <?php echo $p['content_short_en']; ?> <a href="<?php echo $p['type'] ?>-news_en.php?news_id=<?php echo $p['id']; ?>">... Read more</a>
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
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center">ThEP Center Brochure</h2>
                <div>
                    <a title="ThEP Center Brochure" href="#">
                        <img class="img-responsive" style="border: 1px solid #666666;" src="http://www.thep-center.org/uploadfile/Form/eng/ThEP_Center_Brochure_Main.png" >
                    </a>
                </div>
            </div>            

        </div> <!-- /.row -->

        <!-- =========================================================================================== -->     

        <p>&nbsp;</p>

        <div class="row">

            <h2>Research Center</h2>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=TFP">
                    <div class="text-center" style="background-color: #8f8f8f;">                    
                        <h2>TFP</h2>
                        <p>&nbsp;</p>                    
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=PPP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>PPP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=NSP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>NSP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=IGP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>IGP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=CTP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>CTP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=ThEP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>ThEP</h2>                        
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- =========================================================================================== -->

        <?php get_includes('footer_en'); ?>
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
