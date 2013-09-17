<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}

$pathf = new config();
$controll = new controllers();


if (!$_GET && !$_POST) {
    header("Location: gallery.php");
}

if ($_POST) {    
    $gallery_id = $_POST['id_g'];    
    for($i=1; $i<=6; $i++){
        $upl = 'upload' . $i;
        if($_FILES[$upl]['error'] == 0){
            $caption = htmlspecialchars($_POST['caption' . $i], ENT_QUOTES);
            $file = $_FILES[$upl]['tmp_name'];
            $file_name = htmlspecialchars($_FILES[$upl]['name'], ENT_QUOTES);
            $new_file_name = substr(md5(microtime()), rand(0, 26), 8) . '.' . $controll->get_file_type($file_name);
            $pic_no = 1;
            $type = $_FILES[$upl]['type'];
            $size = $_FILES[$upl]['size'];
            $dir = 'img/picture'; // The directory that you want to download the file into it.
            $path = $dir . '/' . $new_file_name;
            $modified = date('m/d/Y h:i:s a');
            if (file_exists($dir)) {
                if (move_uploaded_file($file, $path)) { //upload file to path folder
                    $sql = "INSERT INTO 
                                    tb_picture
                                VALUES
                                    (0, '$new_file_name', '$caption', '$gallery_id', $pic_no, '$type', '$size', '$dir', '$modified');        
                    ";
                    @mysql_query($sql) or die(mysql_error());                    
                } else {
                    echo 'ERROR: Can not Upload file!';
                    exit;
                }
            } else {
                echo 'ERROR: Upload folder not found!';
                exit;
            } // END file_exists
        }    
        
    } // END for
    header("Refresh: 2; url=gallery.php");
    echo "Uploading file ...";
    exit;    
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once $pathf->inc_file('meta_script'); ?>
        <link href="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">

        <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/modernizr.custom.js"></script>

        <style>
            /* lightbox  */
            .image-row {
                *zoom: 1;
                margin-bottom: 20px;
            }
            .image-row:after {
                content: "";
                display: table;
                clear: both;
            }
            .example-image {
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                -ms-border-radius: 2px;
                -o-border-radius: 2px;
                border-radius: 2px;
                margin: 2px 2px;
                border: 4px #FFFFFF solid;
            }
            .example-image:hover {
                border: 4px #99b433 solid;
            }
        </style>

        <?php
        if ($_GET[add_pic] == 'new') {
            $gal_id = $_GET['gal_id'];
            $sql_g = "SELECT * FROM 
            tb_gallery 
            WHERE id = $gal_id;
        ";
            $re_g = mysql_query($sql_g);
            $g = mysql_fetch_array($re_g);
        }
        ?>
        <title>เพิ่มภาพในแกลอรี</title>
    </head>

    <body class="metrouicss">
        <?php require_once $pathf->inc_file('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 class="text-center">เพิ่มภาพในแกลอรี <?php echo $g['title']; ?></h2>

            <div class="page-region">
                <div class="page-region-content">

                    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        
                        <input name="id_g" type="hidden" value="<?php echo $g['id']; ?>">
                        
                        <table>
                            <?php
                            for($i = 1;$i<=6; $i++){
                                echo '
                            <tr>
                                <td rowspan="2" style="font-weight: bold;" class="text-center">' . $i . '</td>
                                <td width="170">Caption /คำอธิบายภาพ</td>
                                <td>
                                    
                                    <div class="input-control text">
                                        <input type="text" name="caption' . $i . '" >
                                    </div>
                                </td>
                            </tr>
                            <tr>                                
                                <td>Upload</td>
                                <td>
                                    <input type="file" name="upload' . $i . '">                                            
                                </td>
                            </tr>
                                ';
                            }
                            ?>
                            
                            <tr>
                                <td></td>
                                <td colspan="2"><p>&nbsp;</p><input type="submit" value="Submit"> <a href="gallery.php" style="font-weight: bold;">Cancel</a></td>
                            </tr>
                            
                        </table>
                    </form>

                </div>
            </div>

        </div>

        <div class="page bg-color-blueLight">
            <div class="page-region">
                <div class="page-region-content">

                    <div style="margin-left: 15px;">
                        <h3><?php echo htmlspecialchars_decode($g['title']); ?></h3>
                        <p><?php echo htmlspecialchars_decode($g['detail']); ?></p>
                        <hr />
                        <div class="image-set">
                            <?php
                            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = $gal_id;";
                            $result_p = mysql_query($sql_p);
                            $no_p = mysql_num_rows($result_p);

                            echo '<p>จำนวนทั้งหมด ' . $no_p . ' ภาพ &nbsp;<a href="edit_gallery.php?edit_gal=' . $g['id'] . '"><i class="icon-wrench"></i>แก้ไขแกลอรี</a></p> ';

                            $i = 0;
                            while ($p = mysql_fetch_array($result_p)) {
                                $i++;
                                echo '
                                <div style="width: auto; height: 127px; float: left; margin-left: 15px;">
                                    <div>
                                        <a href="img/picture/' . $p['name'] . '" data-lightbox="' . $g['title'] . '" title="' . $p['caption'] . '">
                                            <img class="example-image" src="img/picture/' . $p['name'] . '" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" height="100"/>
                                        </a>                          
                                    </div>
                                    <div>
                                        <a href="edit_picture.php?edit_pic=' . $p['id'] . '"><i class="icon-wrench"></i>แก้ไขภาพนี้</a>
                                    </div>
                                </div>
                            ';
                            }
                            
                            echo '<br style="clear: both;" />';
                            ?>
                        </div>

                    </div>

                    <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/lightbox-2.6.min.js"></script>
                </div>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END .page -->

        <?php require_once $pathf->inc_file('footer'); ?>

    </body>
</html>