<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}

$pathf = new config();
$controll = new controllers();


if (!isset($_GET[edit_pic]) && !$_POST) {
    header("Location: gallery.php");
}

$edit_pic = $_GET['edit_pic'];

if ($_POST) {
    $id = $_POST['pic_id'];
    $pic_name = htmlspecialchars($_POST['pic_name'], ENT_QUOTES);
    $gallery_id = $_POST['id_g'];
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $pic_no = 1;    

    if ($_FILES['upload']['error'] == 0) {
        $file = $_FILES['upload']['tmp_name'];
        $file_name = htmlspecialchars($_FILES['upload']['name'], ENT_QUOTES);
        $new_file_name = substr(md5(microtime()), rand(0, 26), 8) . '.' . $controll->get_file_type($file_name);
        
        $type = $_FILES['upload']['type'];
        $size = $_FILES['upload']['size'];
        $dir = 'img/picture'; // The directory that you want to download the file into it.
        $path = $dir . '/' . $new_file_name;
        
        $old_path = $dir . '/' . $pic_name;
        
        // Delete old file
        if (file_exists($old_path)) {
            unlink($old_path);
        }else{
            echo 'ERROR: File Not Found.!';
            exit;
        }
        
        if (file_exists($dir)) {
            if (move_uploaded_file($file, $path)) { //upload file to path folder                
                $modified = date('m/d/Y h:i:s a');
                $sql = "REPLACE INTO 
                            tb_picture
                        VALUES
                            ($id, '$new_file_name', '$caption', $gallery_id, $pic_no, '$type', '$size', '$dir', '$modified');        
                    ";
                @mysql_query($sql) or die(mysql_error());
                header("Refresh: 2; url=gallery.php");
                echo "Editing Picture Successed...";
                exit;
            } else {
                echo 'ERROR: Can not Upload file!';
                exit;
            }
        } else {
            echo 'ERROR: Upload folder not found!';
            exit;
        } // END file_exists
    } // END if upload

    $modified = date('m/d/Y h:i:s a');
    $sql_g = "UPDATE tb_picture 
            SET caption = '$caption', pic_no = $pic_no , modified = '$modified'
            WHERE id = $id;        
            ";
    @mysql_query($sql_g) or die(mysql_error());

    header("Refresh: 2; url=gallery.php");
    echo "Editing Picture Successed...";
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

        <title>แก้ไขแกลอรี</title>

        <script>
            function goDelPic(id){
                var r=confirm("คุณจะลบภาพนี้ใช่ไหม?");	
                if (r==true){
                    window.location = "<?php echo $controll->inc_file('delete'); ?>?del_pic=" + id;
                }
            }
        </script>
    </head>
    <?php
    $sql_p = "SELECT * FROM tb_picture WHERE id = $edit_pic;";
    $result_p = mysql_query($sql_p);
    $p = mysql_fetch_array($result_p);
    ?>

    <body class="metrouicss">
        <?php require_once $pathf->inc_file('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 class="text-center">แก้ไขภาพ <?php echo $p['name']; ?></h2>

            <div class="text-center">
                <?php
                echo '
                <a href="img/picture/' . $p['name'] . '" data-lightbox="' . $p['gallery_id'] . '" title="' . $p['caption'] . '">
                    <img class="example-image" src="img/picture/' . $p['name'] . '" alt="" height="100"/>
                </a>
                ';
                ?>
            </div>

            <div class="page-region">
                <div class="page-region-content">
                    <div class="text-center"><a class="fg-color-red" style="cursor: pointer;" onclick="goDelPic(<?php echo $p['id']; ?>);"><i class="icon-cancel-2"></i> ลบภาพนี้</a></div>
                    <hr />
                    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <input name="pic_id" type="hidden" value="<?php echo $p['id']; ?>">
                        <input name="id_g" type="hidden" value="<?php echo $p['gallery_id']; ?>">
                        <table>
                            <tr>
                                <td width="170">ชื่อไฟล์</td>
                                <td>                                    
                                    <div class="input-control text">
                                        <input type="hidden" name="pic_name" value="<?php echo htmlspecialchars_decode($p['name']); ?>">
                                        <?php echo htmlspecialchars_decode($p['name']); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>caption / คำอธิบาย</td>
                                <td>
                                    <div class="input-control text">
                                        <input type="text" name="caption" value="<?php echo htmlspecialchars_decode($p['caption']); ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>เปลี่ยนไฟล์โดยการ upload ภาพใหม่</td>
                                <td>
                                    <div class="input-control text">
                                        <input type="file" name="upload"> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><p>&nbsp;</p><input type="submit" value="Submit"> <a href="picture.php">Cancel</a></td>
                            </tr>
                        </table>
                    </form>                   


                    <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/lightbox-2.6.min.js"></script>
                </div>
            </div>              

            <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

        </div> <!-- END #page-index -->

        <?php require_once $pathf->inc_file('footer'); ?>
    </body>
</html>