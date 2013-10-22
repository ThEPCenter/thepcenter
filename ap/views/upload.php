<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_includes('meta_script'); ?>
        <title>Upload File</title>
    </head>

    <body class="metrouicss">
        <?php
        get_includes('header');

        if (isset($_GET['upload_error'])) {
            echo '
	<div class="page bg-color-blueLight">
            <div class="page-region">
                <div class="page-region-content">
                    <h3 class="text-center">เกิดข้อผิดพลาด : ชื่อไฟล์ต้องเป็น อักษรโรมัน (A-Z, a-z) หรือ ตัวเลข (0-9) หริอ  ขีดล่าง ( _ ) หรือ ขีดกลาง (-) หรือ จุด (.) หรือ วงเล็บ ( ( หรือ ) ) หรือ ช่องว่าง เท่านั้น</h3>
                    <p>&nbsp;</p> 
		</div>
            </div>
        </div> <!-- END .page -->
						';
        }
        
		get_controll('show-upload-form');
        get_controll('show-file');
        get_includes('footer');
        ?>
    </body>
</html>