<?php
require_once '../system/system.php';
doc_head('ข่าวพิเศษ');
?>
<style>
    p span {
        font-weight: bold;
        font-style: italic;
    }
    p small {
        word-break: break-all;
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
                if ($p['type'] != 'special') {
                    echo '
                    <script>
                        window.location = \'special-news.php\';
                    </script>     
                    ';
                    exit();
                }
                ?>
                <div class="col-sm-9 col-md-9">
                    <?php
                    echo '                            
                            <div id="news-' . $p['id'] . '">
                                ';
                    $admin_txt = '  <p>
                                    <a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
                                </p>
                            ';
                    admin($admin_txt);
                    echo '
                                <h2>' . htmlspecialchars_decode($p['title']) . '</h2>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                <p>&nbsp;</p>
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
                                $.get("<?php controll('edit-special-news'); ?>", {edit_news: "<?php echo $p['id']; ?>"},
                                function(data) {
                                    $('#show-news').html(data);
                                }
                                );
                            });

                        });
                    </script>
                </div>

                <div class="col-sm-3 col-md-3">
                    <h3 class="text-center header-type">ข่าวพิเศษย้อนหลัง</h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE type = 'special'
                        ORDER BY date DESC
                        LIMIT 4;";
                    $re_etc = mysql_query($sql_etc);
                    while ($etc = mysql_fetch_array($re_etc)) {
                        echo '
                    <p><a href="' . $etc['type'] . '-news.php?news_id=' . $etc['id'] . '">' . htmlspecialchars_decode($etc['title']) . '</a></p>
                    <div></div>
                    <hr>
                    ';
                    } // END while
                    ?>
                    <a class="all-title" href="special-news.php"><em>หัวข้อข่าวทั้งหมด</em></a>
                </div>
                <?php
            } else {
                ?>
                <div class="col-sm-12 col-md-12">
                    <h2 class="text-center header-type">ข่าวพิเศษ</h2>
                    <?php
                    // ========= Add news ====================================
                    $admin_txt = '  
                <p>
                    <a id="add-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Add</a>
                </p>
                <hr>
                <script>
                        $(function(){         
                            $("#add-news").click(function(){
                                $(document).ajaxStart(function(){
                                    $("#show-news").html("<div class=\"span12 text-center\" ><img src="../images/demo_wait.gif"></div>");
                                });
                                $.get("' . controller('add-news') . '", {add_news: "' . $news_type . '"}, 
                                function(data){ $("#show-news").html(data); }
                            );
                            });
                                                                
                        });
                    </script>
                            ';
                    admin($admin_txt);
                    // ------------------------------------------------------------

                    $sql = "SELECT * FROM tb_news WHERE type = 'special' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);
                    if ($num_news > 0) {

                        while ($p = mysql_fetch_array($result)) {
                            echo '
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <a title="' . htmlspecialchars_decode($p['title']) . '" onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">
                                        <img style="max-width: 100%; height: auto;" src="' . $p['featured_img'] . '">
                                    </a>
                                </div>
                                <div class="col-md-10">
                                    <h3 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . htmlspecialchars_decode($p['title']) . '</a></h3>
                                    <p><small><em>' . thai_date($p['date']) . '</em></small></p>
                                    <p>' . $p['content_short'] . ' <a href="' . $p['type'] . '-news.php?news_id=' . $p['id'] . '">... อ่านต่อ</a></p>
                                </div>
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
    <script type='text/javascript'>

        $(function() {

        });

    </script>
</body>
</html>
