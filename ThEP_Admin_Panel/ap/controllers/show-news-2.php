<?php

require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
$news_id = $_GET['news_id'];

$sql = "SELECT * FROM tb_news WHERE id = $news_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
if ($p['new'] == 'y') {
                                $new_gif = ' <img src="../image/new1.gif">';
                            } else {
                                $new_gif = '';
                            }
$news = $p['type'];
echo '<a id="edit-' . $p['id'] . '" style="cursor: pointer;"><i class="icon-wrench"></i> แก้ไขข่าวนี้</a>';
if ($news == 'network_academic') {
    echo '
                                
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']);
} elseif ($news == 'pr') {
    echo '
                                <div class="text-center"><img style="max-width: 100%; height: auto;" src="' . htmlspecialchars_decode($p['picture']) . '"></div>
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '                           
                            
                            ';
} elseif ($news == 'activity') {
    echo '
                                <div class="text-center"><img src="' . htmlspecialchars_decode($p['picture']) . '"></div>
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                                <br />';

    $sql_g = "SELECT * FROM tb_picture WHERE gallery_id = {$p['gallery_id']};";
    $result_g = mysql_query($sql_g);
    $no_pic = mysql_num_rows($result_g);

    $i = 0;
    while ($g = mysql_fetch_array($result_g)) {
        $i++;
        echo '
                                <div style="width: 131px; height: 107px; float: left; margin-left: 5px;">
                                    <div>
                                        <a href="img/picture/' . $g['name'] . '" data-lightbox="' . $g['gallery_id'] . '" title="' . $g['caption'] . '">
                                            <img class="example-image" src="img/picture/' . $g['name'] . '" alt="image ' . $i . ' 0f ' . $no_pic . ' thumb" height="100"/>
                                        </a>                          
                                    </div>
                                </div>
                                    ';
    } // END while $g

    echo '
                                <br style="clear: both;" />                           
                            ';
} else {

    echo '
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            ';
}
?>