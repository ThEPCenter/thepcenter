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
                             <div style="width: 131px; height: 127px; float: left; margin-left: 15px;">
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