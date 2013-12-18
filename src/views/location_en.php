<?php
require_once '../system/system.php';
doc_head('Location & Map');
?>

<style>
    /* Flexible iFrame */

    .Flexible-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .Flexible-container iframe,   
    .Flexible-container object,  
    .Flexible-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

</head>

<body>
    <div class="container">

        <?php get_includes('header_en'); ?>

        <div class="row">
            <div class="col-md-12" style="text-align: center;">

                <h2>Thailand Center of Excellence in Physics - ThEP Center</h2>
                <p><img src="../images/building.jpg" class="img-responsive" style="width: auto; max-height: 307px; margin: 0 auto;" border="0"></p>
                <p>&nbsp;</p>
                <p><b>Location</b>: Ion Beam Technology Building 2, Department of Physics and Materials, Faculty of Science, Chiang Mai University.</p> 
                <p>&nbsp;</p>

                <h2>Map: Chiang Mai International Airport (CNX) - Chiang Mai University.</h2>
                <img src="../images/cnx_cmu.png" class="img-responsive" style="width: auto; max-height: 675px; margin: 0 auto;" border="0">
                <p>&nbsp;</p>

                <h2>Chiang Mai University Map.</h2>
                <a href="../images/cmu_thep.gif" target="_blank" title="Click เพื่อดูแผนที่ขนาดใหญ่"><img src="../images/cmu_thep_502.gif" class="img-responsive" style="width: auto; max-height: 348px; margin: 0 auto;" border="0"></a><br />
                (Click map for large)
                <p>&nbsp;</p>

                <h2>Google Map</h2>
                <p>Coordinate : (18.802522, 98.955982)</p>
                <p><a href="thep-google-map.php?size_map=full&zoom=16" target="_blank"><strong>>> Full Screen <<</strong></a></p>
                <p>&nbsp;</p>

                <div class="row">
                    <div class="col-sm-2 col-md-2"></div>
                    <div class="col-sm-8 col-md-8" style="text-align: center;">
                        <div class="Flexible-container">
                            <iframe src="thep-google-map.php" frameborder="0" scrolling="no"></iframe>
                        </div>                            
                    </div>
                    <div class="col-sm-2 col-md-2"></div>
                </div>

            </div>
        </div> <!-- /.row -->

        <?php get_includes('footer_en'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
