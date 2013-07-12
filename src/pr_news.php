<?php 
require_once "ui_re_db/system/system.php";

$pathf = new config();

$sql = "
        SELECT * FROM tb_news
        WHERE type = 'pr'
        ORDER BY date DESC;
        ";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>ข่าวประชาสัมพันธ์</title>
    </head>

    <body class="metrouicss" onload="prettyPrint()">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index">	

            <h2 style="text-align: center;" >ข่าวประชาสัมพันธ์</h2>

            <div class="page-region">
                <div class="page-region-content">

                    <?php
                    $num_news = mysql_num_rows($result);
                    
                    if ($num_news > 0) {

                        echo '
                    <ul class="accordion span11" data-role="accordion">
                            ';
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $l++;
                            if($p['new']=='y'){
                                $new_gif = ' <img src="image/new1.gif">';
                            }else{
                                $new_gif = '';
                            }
                            
                            echo'
                        <li>';
                            
                            
                            echo '                            
                            <a href="#">' . $l . '. ' . htmlspecialchars_decode($p['title']) . '</a>
                            <div>
                                <a class="fg-color-yellow" href="edit_news.php?news_id=' . $p['id'] . '"><i class="icon-wrench"></i>แก้ไขข่าวนี้</a>
                                <hr />
                                <div class="text-center"><img src="' . htmlspecialchars_decode($p['picture']) . '"></div>
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif .  '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            </div>'; 
                            echo '
                        </li>                        
                            ';
                        } // END while
                        echo '
                    </ul>';
                        
                    } else {
                        echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                    }
                    ?>
                    <p>&nbsp;</p>
                    
                    <p>&nbsp;</p>

                    <div class="pagination" style="text-align: center;">
                        <ul>
                            <li class="first"><a></a></li>
                            <li class="prev"><a></a></li>
                            <li class="active"><a>1</a></li>
                            <li><a>2</a></li>
                            <li><a>3</a></li>
                            <li class="spaces"><a>...</a></li>
                            
                            <li><a>500</a></li>
                            <li class="next"><a></a></li>
                            <li class="last"><a></a></li>
                        </ul>
                    </div> <!-- END .pagination -->

                </div>
            </div>
        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>