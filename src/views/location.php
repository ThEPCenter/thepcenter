<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            <div class="text-center">
                <h3>ศูนย์ความเป็นเลิศด้านฟิสิกส์ - ThEP Center</h3>
                <p><img src="../images/building.jpg" class="img-responsive" style="width: auto; max-height: 307px; margin: 0 auto;" border="0"></p>
                <p>&nbsp;</p>
                <p><b>ที่ตั้ง</b>: อาคารเทคโนโลยีไอออนบีม 2 ภาควิชาฟิสิกส์และวัสดุศาสตร์ คณะวิทยาศาสตร์ มหาวิทยาลัยเชียงใหม่</p> 
                <p>&nbsp;</p>

                <h3>การเดินทางจากสนามบินเชียงใหม่</h3>
                <img src="../images/cnx_cmu.png" class="img-responsive" style="width: auto; max-height: 675px; margin: 0 auto;" border="0">
                <p>&nbsp;</p>

                <h3>แผนที่มหาวิทยาลัยเชียงใหม่</h3>
                <a href="../images/cmu_thep.gif" target="_blank" title="Click เพื่อดูแผนที่ขนาดใหญ่"><img src="../images/cmu_thep_502.gif" class="img-responsive" style="width: auto; max-height: 348px; margin: 0 auto;" border="0"></a><br />
                (Click ที่ภาพเพื่อดูแผนที่ขนาดใหญ่)
                <p>&nbsp;</p>

                <h3>แผนที่บน Google Map</h3>
                <p>พิกัด : (18.802522, 98.955982)</p>
                <p><a href="thep-google-map.php?size_map=full&zoom=16" target="_blank"><strong>Click ที่นี่เพื่อดูแบบเต็มจอ</strong></a></p>
                <iframe src="thep-google-map.php" width="500" height="500" frameborder="0"></iframe>
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
