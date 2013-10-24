<?php
require_once '../system/system.php';

$gallery_id = $_GET['gallery_id'];
?>
<div style="margin-left: 15px;">
    <div class="image-set">
        <?php
        $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = $gallery_id;";
        $result_p = mysql_query($sql_p);
        if (!empty($result_p)) {
            $no_p = mysql_num_rows($result_p);
            $i = 0;
            while ($p = mysql_fetch_array($result_p)) {
                $i++;
                echo '   
                    <a class="pic-link" href="../../ap/views/img/picture/' . $p['name'] . '" data-lightbox="gal-' . $n['gallery_id'] . '" title="' . $p['caption'] . '">                            
                        <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../ap/views/img/picture/' . $p['name'] . ') -50px 0; 
                            background-size: 130px auto; 
                            width: 65px;
                            height: 65px;">                            
                    </a>                        
                        ';
            } // END while
            ?>  
        </div>
        <p>&nbsp;</p>
        <p>จำนวนทั้งหมด <?php echo $no_p; ?> ภาพ</p>
    <?php } // END if (!empty($result_p))  ?>
</div>
