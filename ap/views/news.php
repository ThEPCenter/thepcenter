<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
if (!$_GET) {
    header("Location: home.php");
}
$news = news_type($_GET['news']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php
        get_inc('meta_script');
        get_inc('lightbox');
        ?>
        <title><?php th_name_news($news); ?> ThEP Admin Panel</title>
        <!-- Datepicker -->
        <link href="<?php plugins(); ?>/jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css" rel="stylesheet" />
        <style>
            #ui-datepicker-div{
                width: 316px;
            }
        </style>
        <script src="<?php plugins(); ?>/jqueryui/jquery-1.10.2.js"></script>
        <script src="<?php plugins(); ?>/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
        <!-- CKEditor -->
        <script src="<?php plugins(); ?>/ckeditor/ckeditor.js"></script>
        <script>
            $(function(){
                $('#add-news').click(function(){                    
                    $.get("<?php echo path_controll('add-news'); ?>", {add_news: "<?php echo $news; ?>"}, 
                    function(data){ $('#page-index').html(data); }
                );
                });
            });
        </script>
    </head>

    <body class="metrouicss">        
        <?php get_inc('header'); ?>
        <div class="page bg-color-blueLight" id="page-index">
            <h2 class="text-center"><?php th_name_news($news); ?></h2>
            <p><a id="add-news" class="fg-color-green" style="cursor: pointer;"><i class="icon-plus-2"> เพิ่ม<?php th_name_news($news); ?></i></a></p>
            <div class="page-region">
                <div class="page-region-content" id="show-news">
                    <?php
                    $sql = "
                    SELECT * FROM tb_news
                    WHERE type = '$news'
                    ORDER BY date DESC;
                    ";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);

                    if ($num_news > 0) {

                        echo '
                    <ul class="accordion span11" data-role="accordion">
                            ';
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $l++;
                            if ($p['new'] == 'y') {
                                $new_gif = ' <img src="../image/new1.gif">';
                            } else {
                                $new_gif = '';
                            }

                            echo'
                        <li>
                            <a href="#">' . $l . '. ' . htmlspecialchars_decode($p['title']) . '</a>
                            <div>
                                <a id="edit-' . $p['id'] . '" style="cursor: pointer;" class="fg-color-yellow"><i class="icon-wrench"></i>แก้ไขข่าวนี้</a>
                                <hr>
                            ';

                            if ($news == 'network_academic') {
                                echo '
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
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
                                if (!empty($result_g)) {
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
                                } // END (!empty($result_g))
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

                            echo '
                            </div>
                        </li>                        
                            ';
                            ?>
                            <script>
                                $(function(){

                                    $(document).ajaxStart(function(){
                                        $('#show-news').html("<div class=\"span12 text-center\" ><img src='../image/demo_wait.gif' /></div>");
                                    });

                                    $('#edit-<?php echo $p['id']; ?>').click(function(){
                                        $.get("<?php echo path_controll('edit-news'); ?>", {news_id: "<?php echo $p['id']; ?>"}, 
                                        function(data){ $('#page-index').html(data); }
                                    );
                                    });
                                });
                            </script>
                            <?php
                        } // END while
                        echo '
                    </ul>';
                    } else {

                        echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                    }
                    ?>
                    <p>&nbsp;</p>
                </div>

                <div class="text-center"><a href="#header"><i class="icon-arrow-up-3"></i>Up</a></div>
            </div>

        </div> <!-- END #page-index -->

        <?php get_inc('footer'); ?>
    </body>
</html>