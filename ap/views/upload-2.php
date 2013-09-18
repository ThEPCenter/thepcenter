<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
if ($_POST) {
    controll('upload-file');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_inc('meta_script'); ?>
        <title>Upload File</title>
    </head>
    <body class="metrouicss" style="background-color: #4294DE;">

        <div class="page" style="width: 1120px; background-color: #4294DE; margin-left: 0 auto;">

            <?php get_inc('header-2'); ?>

            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content bg-color-greenLight"> 
                    <?php
                    if (isset($_GET['new_file'])) {

                        $fname = $_GET['new_file'];
                        $sql_file = "SELECT * FROM tb_upload
                                    WHERE name = '$fname';
                            ";
                        $result_file = mysql_query($sql_file);

                        $f = mysql_fetch_array($result_file);

                        if ($f['size'] >= 1024 && $f['size'] < 1048576) {
                            $f_size = $f['size'] / 1024 . ' kB';
                        } elseif ($f['size'] >= 10478576) {
                            $f_size = $f['size'] / 10478576 . ' MB';
                        } else {
                            $f_size = $f['size'] . ' Byte';
                        }

                        echo '
                            
                     <h2>ไฟล์ที่อัพโหลดล่าสุด คือ</h2>
                     <table>
                        <tr>
                            <td>ชื่อไฟล์</td>
                            <td>' . $f['name'] . '</td>
                        </tr>
                        <tr>
                            <td>ขนาด</td>
                            <td>' . $f_size . '</td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>' . DOMAIN . '/' . $f['folder'] . '/' . $f['name'] . '</td>
                        </tr>
                     </table>
                     
                        ';
                    }
                    ?>

                    <div style="border: solid 1px;">
                        <h2 class="text-center">Upload File</h2>

                        <form class="text-center" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <p>&nbsp;</p>
                            <input type="file" name="upload">
                            <p>&nbsp;</p>
                            <input type="submit" name="Submit" value="Upload" />
                            <a href="home-2.php" title="Cancel"><strong>Cancel</strong></a>
                        </form>
                    </div>

                    <h2>ไฟล์ที่อัพโหลดทั้งหมด</h2>
                    <table>
                        <tr>
                            <td>id</td><td>ชื่อไฟล์</td><td>ขนาด</td><td>URL</td><td>วันเวลาที่อัพโหลด</td>
                        </tr>
                        <?php
                        $sql_file = "SELECT * FROM tb_upload ORDER BY id DESC;";
                        $result_file = mysql_query($sql_file);
                        while ($f = mysql_fetch_array($result_file)) {
                            if ($f['size'] >= 1024 && $f['size'] < 1048576) {
                                $f_size = number_format($f['size'] / 1024, 3, '.', '') . ' kB';
                            } elseif ($f['size'] >= 10478576) {
                                $f_size = number_format($f['size'] / 10478576, 3, '.', '') . ' MB';
                            } else {
                                $f_size = $f_size = number_format($f['size'], 3, '.', '') . ' Byte';
                            }
                            echo '
                        <tr>
                            <td>' . $f['id'] . '</td>
                            <td>' . $f['name'] . '</td>
                            <td>' . $f_size . '</td>
                            <td>' . DOMAIN . '/' . $f['folder'] . '/' . $f['name'] . '</td>
                            <td>' . $f['modified'] . '</td>
                        </tr>    
                        ';
                        }
                        ?>
                    </table>


                    <br style="clear: both;" />
                </div>
            </div>

        </div> <!-- END .page -->

    </body>
</html>