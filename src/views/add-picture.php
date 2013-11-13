<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
$gal_id = $_GET['gal_id'];

$sql_g = "SELECT * FROM 
            tb_gallery 
            WHERE id = $gal_id;
        ";
$re_g = mysql_query($sql_g);
$g = mysql_fetch_array($re_g);
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">

                <form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

                    <input name="id_g" type="hidden" value="<?php echo $g['id']; ?>">

                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                        echo '                         
                                <div class="form-group">
                                <label>' . $i . '</label>
                                
                                    <input type="file" name="upload' . $i . '">                                            
                                </div>
                            
                                <div class="form-group">                           
                                    <label>Caption /คำอธิบายภาพ</label>
                                    <input class="form-control" type="text" name="caption' . $i . '" >
                                </div>
                                ';
                    }
                    ?>

                    <input type="submit" value="Submit" class="btn btn-default"> <a href="gallery.php" style="font-weight: bold;">Cancel</a>


                </form>

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">_blank</h2>
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
                                        <a href="../img/picture/' . $p['name'] . '" data-lightbox="' . $g['title'] . '" title="' . $p['caption'] . '">
                                            <img class="example-image" src="../img/picture/' . $p['name'] . '" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" height="100"/>
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
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
