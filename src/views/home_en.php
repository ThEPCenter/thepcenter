<?php
require_once '../system/system.php';
doc_head('Thailand Center of Excellence in Physics');
?>

<!-- "fancybox" -->

<!-- Add jQuery library -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/lib/jquery-1.10.1.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../plugins/fancyBox-2.1.5/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../plugins/fancyBox-2.1.5/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">
    $(document).ready(function () {
        // $('.fancybox').fancybox();

        // Clip
        $(".various").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: false,
            width: '70%',
            height: '70%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });

    });


</script>
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
                <h2 class="text-center"><a class="header-type" title="Research News from Members" href="network-academic-news_en.php">Research News from Members</a></h2>
                <div>
                    <div style="border: 1px solid #666666;">
                        <a title="<?php echo $p['title_en']; ?>" href="<?php echo $p['type'] ?>-news_en.php?news_id=<?php echo $p['id']; ?>">
                            <img class="img-responsive" style="margin: auto;" src="<?php echo $p['featured_img']; ?>">
                        </a>
                    </div>                                                
                    <h3><a class="header-title" href="<?php echo $p['type'] ?>-news_en.php?news_id=<? echo $p['id']; ?>"><?php echo $p['title_en']; ?></a></h3>
                    <?php echo $p['content_short_en']; ?> <a href="<?php echo $p['type'] ?>-news_en.php?news_id=<?php echo $p['id']; ?>">... Read more</a>
                </div>
                <p>&nbsp;</p>
                
                <!-- ***** Clip ****** -->
                <h2 class="text-center header-type">ThEP VDO Presentation</h2>
                <div class="" style="text-align: center;">
                    <a class="various fancybox.iframe" href="http://www.youtube.com/embed/1YlBlhG2xZE?autoplay=1">
                        <img style="max-width: 69%;" src="http://thep-center.org/upload02/thep_presentation_play.jpg">
                    </a>
                </div>
                <!-- ***** END Clip ****** -->

            </div>



            <!-- ThEP Center Brochure -->
            <?php
            $sql = "SELECT * FROM tb_news 
                WHERE type = 'activity'
                ORDER BY date DESC;";
            $result = mysql_query($sql);
            $p = mysql_fetch_array($result);
            ?>
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center"><a class="header-type" href="brochure_en.php">ThEP Center Brochure</a></h2>
                <div>
                    <a title="ThEP Center Brochure" href="brochure_en.php">
                        <img class="img-responsive" style="border: 1px solid #666666;" src="http://www.thep-center.org/uploadfile/Form/eng/ThEP_Center_Brochure_Main.png" >
                    </a>
                </div>
            </div>            

        </div> <!-- /.row -->

        <!-- =========================================================================================== -->     

        <p>&nbsp;</p>

        <div class="row">

            <h2 class="header-type">Research Center</h2>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Research Center in Thin Film Physics" href="research-center_en.php?show_center=TFP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/TFP_300.png">
                    <p style="font-size: 90%;">Research Center in Thin Film Physics</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Research Center in Particle Beam and Plasma Physics" href="research-center_en.php?show_center=PPP">                        
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/ppp_300.png">
                    <p style="font-size: 90%;">Research Center in Particle Beam and Plasma Physics</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Research Center in Nanoscale Physics" href="research-center_en.php?show_center=NSP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/nano_300.png">
                    <p style="font-size: 90%;">Research Center in Nanoscale Physics</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Research Center in Integrated Physics" href="research-center_en.php?show_center=IGP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/IGP_300.png">
                    <p style="font-size: 90%;">Research Center in Integrated Physics</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Research Center in Computational and Theoretical Physics" href="research-center_en.php?show_center=CTP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/CTP_300.png">
                    <p style="font-size: 90%;">Research Center in Computational and Theoretical Physics</p>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2 col-md-2">
                <a title="Establishment of New Research Laboratories" href="research-center_en.php?show_center=ThEP">
                    <img style="margin: 0 auto; border: 1px solid #666666;" class="img-responsive" src="../images/center/thep_atom_chip_300.png">
                    <p style="font-size: 90%;">Establishment of New Research Laboratories</p>
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
