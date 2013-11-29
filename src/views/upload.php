<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">Upload File</h2>

                <?php
                // =========== Error ==============
                if (isset($_GET['upload_error'])) {
                    echo '	
                <h3 class="text-center">เกิดข้อผิดพลาด : ชื่อไฟล์ต้องเป็น อักษรโรมัน (A-Z, a-z) หรือ ตัวเลข (0-9) หริอ  ขีดล่าง ( _ ) หรือ ขีดกลาง (-) หรือ จุด (.) หรือ วงเล็บ ( ( หรือ ) ) หรือ ช่องว่าง เท่านั้น</h3>
                <p>&nbsp;</p>				';
                }
                ?>

            </div>


        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
