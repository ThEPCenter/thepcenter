<?php
require_once '../system/system.php';
doc_head('Thailand Center of Excellence in Physics');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header_en'); ?>

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
                        <img class="img-responsive" style="margin: auto;" src="http://www.thep-center.org/uploadfile/img_pr/darasart/1.jpg">
                    </div>                                                
                    <h3><a href="<?php echo $p['type'] ?>-news_en.php?news_id=<? echo $p['id']; ?>">Giant Ground Level Enhancement of Relativistic Solar Protons on 2005 January 20: Spaceship Earth Observations</a></h3>
                    <p>Approximately 15 times per 11-year solar cycle, the Sun emits cosmic rays with sufficient energy and intensity to raise radiation levels on Earth’s surface markedly above background levels due to Galactic cosmic rays. These events, termed “ground level enhancements” (GLEs), provide an exceptionally clear picture of particle acceleration on the Sun, first because GLE particles travel near the speed of light and thus enable a precise linkage between the particles and the solar source event, and second because they have large mean free paths, and their time profiles are comparatively undistorted by transport processes in the interplanetary medium. Information gained from the observation and analysis of GLEs is clearly pertinent to the field of heliophysics and is also interesting for traditional astrophysics for the challenge it poses to acceleration models (e.g., Roussev et al. 2004). <a href="<?php echo $p['type'] ?>-news.php_en?news_id=<?php echo $p['id']; ?>">... Read more</a></p>
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
