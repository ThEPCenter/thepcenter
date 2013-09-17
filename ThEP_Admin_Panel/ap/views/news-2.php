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

    <body class="metrouicss" style="background-color: #4294DE;">
        <div class="page" style="width: 1120px; background-color: #4294DE; margin-left: 0 auto;">
            <?php get_inc('header-2'); ?>
            <div class="page-region" style="margin-top: 60px; margin-left: 20px;">
                <div class="page-region-content bg-color-greenLight" id="show-news">
                    <h2 class="text-center"><?php th_name_news($news); ?></h2>
                    <p><a id="add-news" class="fg-color-green" style="cursor: pointer;"><i class="icon-plus-2"></i> เพิ่ม<?php th_name_news($news); ?></a></p>
                    <hr>
                    <?php
                    $sql = "
                    SELECT * FROM tb_news
                    WHERE type = '$news'
                    ORDER BY date DESC;
                    ";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);

                    if ($num_news > 0) {
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $l++;
                            if ($p['new'] == 'y') {
                                $new_gif = ' <img src="../image/new1.gif">';
                            } else {
                                $new_gif = '';
                            }
                            echo'                        
                            <div id="title-' . $p['id'] . '" style="cursor: pointer; margin-top: 20px; margin-bottom: 10px; margin-left: 10px;"><p style="font-size: 20px;">' . $l . '. ' . htmlspecialchars_decode($p['title']) . $new_gif . '</p></div>
                            <div id="show-' . $p['id'] . '" style="display: none; border: solid 1px black; margin-top: 10px; margin-bottom: 20px;"></div>
                            ';
                            ?>
                            <script>
                                $(function(){
                                    $("#title-<?php echo $p['id']; ?>").click(function(){
                                        /*
                                         $(document).ajaxStart(function(){
                                            $('#show-<?php echo $p['id']; ?>').html("<div class=\"span12 text-center\" ><img src='../image/demo_wait.gif' /></div>");
                                         });
                                         */
                                        $.get("<?php echo path_controll('show-news-2'); ?>", {news_id: "<?php echo $p['id']; ?>"}, 
                                            function(data){
                                                $('#show-<?php echo $p['id']; ?>').html(data);
                                            }                                            
                                        );
                                        $('#show-<?php echo $p['id']; ?>').toggle();
                                    });                                    
                                });
                            </script>
                            <?php
                        } // END while                        
                    } else {

                        echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                    }
                    ?>
                    <p>&nbsp;</p>
                </div>

                <div class="text-center"><a href="#header"><i class="icon-arrow-up-3"></i>Up</a></div>
            </div>

        </div> <!-- END #page-index -->
    </body>
</html>