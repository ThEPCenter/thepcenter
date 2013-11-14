<?php
require_once '../system/system.php';

doc_head('Research News from Members');
$news_type = 'network-academic';
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

        <?php get_includes('header_en'); ?>

        <div id="show-news" class="row">
            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = '$news_id';";
                $result = mysql_query($sql);
                $p = mysql_fetch_array($result);
                if ($p['type'] != 'network-academic') {
                    echo '
                    <script>
                        window.location = "network-academic-news.php";
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
                                <h2>' . htmlspecialchars_decode($p['title_en']) . '</h2>
                                <p><small><em>' . date("F j, Y.", strtotime($p['date'])) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long_en']) . '
                            </div>
                      ';
                    ?>
                    <script>
                        $(function(){
                            $('#edit-news').click(function(){
                                $(document).ajaxStart(function(){
                                    $('#show-news').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                                });
                                $.get("<?php controll('edit-network-news'); ?>", {edit_news: "<?php echo $p['id']; ?>"}, 
                                function(data){ $('#show-news').html(data); }
                            );
                            });
                                                                                                                                                
                        });
                    </script>
                </div>

                <div class="col-sm-3 col-md-3">
                    <h3 class="text-center">Another News</h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE (type = 'network-academic') AND (title_en != '')
                        ORDER BY date DESC
                        LIMIT 4;";
                    $re_etc = mysql_query($sql_etc);
                    while ($etc = mysql_fetch_array($re_etc)) {
                        echo '
                    <p><a href="' . $etc['type'] . '-news_en.php?news_id=' . $etc['id'] . '">' . htmlspecialchars_decode($etc['title_en']) . '</a></p>                    
                    <hr>
                    ';
                    } // END while
                    ?>
                    <p><a href="network-academic-news_en.php"><em>All news</em></a></p>
                </div>
                <?php
            } else {
                ?>
                <div class="col-sm-12 col-md-12">
                    <h2 class="text-center">Research News from Members</h2>
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
                        $(function(){         
                            $("#add-news").click(function(){
                                $(document).ajaxStart(function(){
                                    $("#show-news").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                                });
                                $.get("<?php controll('add-news'); ?>", {add_news: "<?php echo $news_type; ?>"}, 
                                function(data){ $("#show-news").html(data); }
                            );
                            });
                                                                    
                        });
                    </script>

                    <?php
                    // ------------------------------------------------------------

                    $sql = "SELECT * FROM tb_news WHERE (type = 'network-academic') AND (title_en != '') ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);
                    if ($num_news > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '                            
                            <div id="news-' . $p['id'] . '">
                                <h3 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . htmlspecialchars_decode($p['title_en']) . '</a></h3>
                                <small><em>' . thai_date($p['date']) . '</em></small>
                                <p>' . $p['content_short_en'] . ' <a href="' . $p['type'] . '-news_en.php?news_id=' . $p['id'] . '">... Read more</a></p>
                            </div>
                            <hr>
                            ';
                        } // END while
                    } else {
                        echo '<h3 class="text-center">Sorry No Data found.</h3>';
                    }
                    ?>
                </div>
                <?php
            } // END if else
            ?>

        </div>

        <?php get_includes('footer_en'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script src="../plugins/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
    <!-- CKEditor -->    
    <script src="../plugins/ckeditor/ckeditor.js"></script>
</body>
</html>