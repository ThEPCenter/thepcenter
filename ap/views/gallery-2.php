<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
if ($_POST) {
    controll('add-gal');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        get_inc('meta_script');
        get_inc('lightbox');
        if ($_GET['add_gal']) {
            $txt = 'Add Gallery';
        } else {
            $txt = 'Gallery-2';
        }
        title($txt);
        ?>
    </head>

    <body class="metrouicss" style="background-color: #4294DE;">
        <div class="page" style="width: 1120px; background-color: #4294DE; margin-left: 0 auto;">
            
            <?php get_inc('header-2'); ?>
            
            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content bg-color-blueLight span12 offset1">
                    <?php if ($_GET['add_gal']) { ?>
                    <h2 class="text-center">เพิ่ม Gallery</h2>
                    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <table class="bordered">
                            <tr>
                                <td width="170">ชื่อแกลอรี</td>
                                <td>
                                    <div class="input-control text">
                                        <input type="text" name="title" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย /รายละเอียด</td>
                                <td>
                                    <div class="input-control text">
                                        <textarea name="detail" ></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Add"> <a href="gallery.php" style="font-weight: bold;">Cancel</a></td>
                            </tr>
                        </table>
                    </form>
                    <?php } ?>
                    <h2 class="text-center">Gallery ทั้งหมด</h2>

                    <div class="page-region">
                        <div class="page-region-content"> 
                            <?php
                            $sql_g = "SELECT * FROM tb_gallery;";
                            $result_g = mysql_query($sql_g);
                            while ($g = mysql_fetch_array($result_g)) {
                                ?>    
                                <div style="margin-left: 15px;">
                                    <h3><?php echo htmlspecialchars_decode($g['title']); ?></h3>
                                    <p><?php echo htmlspecialchars_decode($g['detail']); ?></p>
                                    <div class="image-set">
                                        <?php
                                        $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$g['id']};";
                                        $result_p = mysql_query($sql_p);
                                        $no_p = mysql_num_rows($result_p);
                                        $i = 0;
                                        while ($p = mysql_fetch_array($result_p)) {
                                            $i++;
                                            echo '
                        <a href="img/picture/' . $p['name'] . '" data-lightbox="' . $g['title'] . '" title="' . $p['caption'] . '">
                            <img class="example-image" src="img/picture/' . $p['name'] . '" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" height="50"/>
                        </a>
                        ';
                                        }
                                        ?>  
                                    </div>
                                    <p>จำนวนทั้งหมด <? echo $no_p; ?> ภาพ <a href="picture.php?gal_id=<?php echo $g['id']; ?>&add_pic=new" style="font-size: 14px;"><i class="icon-plus-2"></i><i class="icon-pictures"></i>เพิ่มภาพ</a> | <a href="edit_gallery.php?edit_gal=<?php echo $g['id']; ?>"><i class="icon-wrench"></i>แก้ไขแกลอรี</a></p>
                                    <hr />
                                </div>    

                                <?php
                            }
                            ?>

                            <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/jquery-1.10.2.min.js"></script>
                            <script src="<?php echo $pathf->inc_dir('plugins'); ?>/lightbox2.6/lightbox/js/lightbox-2.6.min.js"></script>
                        </div>

                        <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

                    </div>

                </div>

            </div>
        </div> <!-- END .page -->

    </body>
</html>