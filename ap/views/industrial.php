<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_includes('meta_script'); ?>        
        <title>ฟิสิกส์เพื่อผู้ประกอบการ</title>
        <script>
            $(function(){
                $('#add').click(function(){                    
                    $('#page-index').load("<?php controll('add-industrial-article'); ?>");
                });
            });
        </script>
        <!-- Datepicker -->
        <link href="<?php plugins('jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css'); ?>" rel="stylesheet" />
        <style>
            #ui-datepicker-div{
                width: 316px;
            }
        </style>
        <script src="<?php plugins('jqueryui/jquery-1.10.2.js'); ?>"></script>
        <script src="<?php plugins('jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js'); ?>"></script>
        <!-- CKEditor -->
        <script src="<?php plugins('ckeditor/ckeditor.js'); ?>"></script>
    </head>
    <body class="metrouicss">
        <?php get_includes('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">
            
            <h2 style="text-align: center;">บทความพิเศษ</h2>
            <p><a id="add" class="fg-color-green" style="cursor: pointer;"><i class="icon-plus-2"> เพิ่มบทความ</i></a></p>
           <hr />
            <div class="page-region">
                <div class="page-region-content">                    
                    <ul class="accordion span11" data-role="accordion">                       
                        <?php
                        $sql = "SELECT * FROM tb_industrial ORDER BY date DESC;";
                        $result = mysql_query($sql);
                        if (mysql_num_rows($result) > 0) {
                            while ($p = mysql_fetch_array($result)) {
                                echo '
                        <li>  
                            <a href="#">' . htmlspecialchars_decode($p['title']) . '</a>
                            <div>
                                <a id="edit-' . $p['id'] . '" class="fg-color-yellow" style="cursor: pointer;"><i class="icon-wrench"></i>แก้ไขบทความนี้</a>
                                <hr />
                                <h3>' . htmlspecialchars_decode($p['title']) . '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content']) . '
                            </div>';
                                ?>
                                <script>
                                    $(function(){
                                        $('#edit-<?php echo $p['id']; ?>').click(function(){                    
                                            $.get("<?php controll('edit-industrial-article'); ?>", {edit_article: "<?php echo $p['id']; ?>"}, 
                                            function(data){ $('#page-index').html(data); }
                                        );
                                        })
                                    });
                                </script>    
                                <?php
                                echo '
                        </li>';
                            }
                        } else {
                            echo "ขออภัย ไม่พบข้อมูล";
                        }
                        ?>
                    </ul>

                </div>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div> <!-- END .page-region -->


        </div> <!-- END #page-index -->
        <?php get_includes('footer'); ?>
    </body>
</html>