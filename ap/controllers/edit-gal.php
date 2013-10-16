<?php
require_once "../system/system.php";

if($_POST){
    $id_g = $_POST['id_g'];
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
    $modified = date("Y-m-d H:i:s");
    $sql_g = "REPLACE INTO tb_gallery 
                    VALUES
                            ($id_g, '$title', '$detail', '$modified');        
                    ";
    @mysql_query($sql_g) or die(mysql_error());
    header("Location: ../views/gallery.php");
    // header("Refresh: 2; url=../views/gallery.php");
    // echo "Editing Gallery Successed...";
    exit();
}

$gal_id = $_GET['gal_id'];            
$sql_g = "SELECT * FROM tb_gallery WHERE id = $gal_id;";
$result_g = mysql_query($sql_g);
$g = mysql_fetch_array($result_g);
?>
            
            <h2 class="text-center">แก้ไขแกลอรี <b><?php echo $g['title']; ?></b></h2>
            <div class="page-region">
                <div class="page-region-content">
                    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <table>
                            <tr>
                                <td width="170">ชื่อแกลอรี</td>
                                <td>
                                    <input name="id_g" type="hidden" value="<?php echo $g['id']; ?>">
                                    <div class="input-control text">
                                        <input type="text" name="title" style="width: 250px" value="<?php echo htmlspecialchars_decode($g['title']); ?>" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย /รายละเอียด</td>
                                <td>
                                    <div class="input-control text">
                                        <textarea name="detail" ><?php echo htmlspecialchars_decode($g['detail']); ?></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><p>&nbsp;</p><input type="submit" value="Submit"> <a href="gallery.php">Cancel</a></td>
                            </tr>
                        </table>
                    </form>
                    
                    <div style="margin-left: 15px;">
                        <h3><?php echo htmlspecialchars_decode($g['title']); ?></h3>
                        <p><?php echo htmlspecialchars_decode($g['detail']); ?></p>
                        <hr />
                        <div class="image-set">
                            <?php
                            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = $gal_id;";
                            $result_p = mysql_query($sql_p);
                            $no_p = mysql_num_rows($result_p);
                            
                            echo '<p>จำนวนทั้งหมด '.$no_p.' ภาพ &nbsp;<a href="picture.php?gal_id=' . $gal_id . '&add_pic=new" style="font-size: 14px;"><i class="icon-plus-2"></i><i class="icon-pictures"></i>เพิ่มภาพ</a></p><p>&nbsp;</p>';
                            
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
                            } // END ahile
                            echo '<br style="clear: both;" />';
                            ?>
                        </div>                    
                    </div>                    
                </div>                
            </div>
            <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>
