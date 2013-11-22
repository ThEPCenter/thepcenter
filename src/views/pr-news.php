<?php
require_once '../system/system.php';

$news_type = 'pr';
$news_type_th = 'ประชาสัมพันธ์';

doc_head($news_type_th);
?>

<!-- Datepicker -->
<link href="../plugins/jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css" rel="stylesheet" />
<style>
    #ui-datepicker-div{
        width: 316px;
    }
</style>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div id="show-news" class="row">
            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = '$news_id';";
                $result = mysql_query($sql);
                $p = mysql_fetch_array($result);
                if ($p['type'] != 'pr') {
                    echo '
                    <script>
                        window.location = "' . $news_type . '-news.php";
                    </script>     
                    ';
                }
                ?>
                <div class="col-sm-9 col-md-9">
                    <?php
                    echo '                            
                            <div id="news-' . $p['id'] . '">
                                ';
                    $admin_txt = '  
                                <p>
                                    <a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
                                </p>
                            ';
                    admin($admin_txt);
                    echo '
                                <h2>' . htmlspecialchars_decode($p['title']) . '</h2>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            </div>
                      ';
                    ?>
                    <script>
                        $(function() {
                            $('#edit-news').click(function() {
                                $(document).ajaxStart(function() {
                                    $('#show-news').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                                });
                                $.get("<?php controll('edit-news'); ?>", {edit_news: "<?php echo $p['id']; ?>", news_type_th: "<?php echo urlencode($news_type_th); ?>"},
                                function(data) {
                                    $('#show-news').html(data);
                                }
                                );
                            });

                        });
                    </script>
                </div>

                <div class="col-sm-3 col-md-3">
                    <h3 class="text-center">ข่าว<?php echo $news_type_th; ?>ย้อนหลัง</h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE type = '$news_type'
                        ORDER BY date DESC
                        LIMIT 4;";
                    $re_etc = mysql_query($sql_etc);
                    while ($etc = mysql_fetch_array($re_etc)) {
                        echo '
                    <p><a href="' . $etc['type'] . '-news.php?news_id=' . $etc['id'] . '">' . htmlspecialchars_decode($etc['title']) . '</a></p>                    
                    <hr>
                    ';
                    } // END while
                    ?>
                    <p><a href="<?php echo $news_type; ?>-news.php"><em>หัวข้อข่าวทั้งหมด</em></a></p>
                </div>
                <?php
            } else {
                ?>
                <div class="col-sm-12 col-md-12">
                    <h2 class="text-center">ข่าว<?php echo $news_type_th; ?></h2>
                    <?php
                    // ========= Add news ====================================
                    $admin_txt = '  
                <p>
                    <a id="add-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Add</a>
                </p>
                <hr>
                            ';
                    admin($admin_txt);
                    ?>

                    <script>
                        $(function() {
                            $("#add-news").click(function() {
                                $(document).ajaxStart(function() {
                                    $("#show-news").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                                });
                                $.get("<?php controll('add-news'); ?>", {add_news: "<?php echo $news_type; ?>"},
                                function(data) {
                                    $("#show-news").html(data);
                                }
                                );
                            });

                        });
                    </script>

                    <?php
                    // ------------------------------------------------------------

                    $sql = "SELECT * FROM tb_news WHERE type = '$news_type' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);
                    if ($num_news > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '                            
                            <div id="news-' . $p['id'] . '">
                                <h3 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . htmlspecialchars_decode($p['title']) . '</a></h3>
                                <p><small><em>' . thai_date($p['date']) . '</em></small></p>
                                <p>' . $p['content_short'] . ' <a href="' . $p['type'] . '-news.php?news_id=' . $p['id'] . '">... อ่านต่อ</a></p>
                            </div>
                            <hr>
                            ';
                        } // END while
                    } else {
                        echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                    }
                    ?>
                </div>
                <?php
            } // END if else
            ?>

        </div>

        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script src="../plugins/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>

</body>
</html>