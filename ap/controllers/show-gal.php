<div class="page bg-color-blueLight">

            <h2 class="text-center">Gallery ทั้งหมด</h2>

            <div class="page-region">
                <div class="page-region-content"> 
                    <?php
                    $sql_g = "SELECT * FROM tb_gallery ORDER BY id DESC;";
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
        </div> <!-- END #page -->