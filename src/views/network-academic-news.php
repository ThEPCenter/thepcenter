<?php
require_once '../system/system.php';

doc_head('ข่าววิขาการจากเครือข่าย');
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

        <?php get_includes('header'); ?>

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
                        window.location = \'network-academic-news.php\';
                    </script>     
                    ';
                }
                if ($p['new'] == 'y') {
                    $new_gif = ' <img src="../images/new1.gif">';
                } else {
                    $new_gif = '';
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
                                <h2>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h2>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
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
                    <h3 class="text-center"><a href="network-academic-news.php">ข่าววิชาการจากเครือข่าย</a></h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE (id != $news_id)
                        AND (type = 'network-academic')
                        ORDER BY date DESC
                        LIMIT 4;";
                    $re_etc = mysql_query($sql_etc);
                    while ($etc = mysql_fetch_array($re_etc)) {
                        echo '
                    <p><a href="network-academic-news.php?news_id=' . $etc['id'] . '">' . htmlspecialchars_decode($etc['title']) . '</a></p>                    
                    <hr>
                    ';
                    } // END while
                    ?>
                </div>
                <?php
            } else {
                ?>
                <div class="col-sm-12 col-md-12">
                    <h2 class="text-center">ข่าววิขาการจากเครือข่าย</h2>
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

                    $sql = "SELECT * FROM tb_news WHERE type = 'network-academic' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);
                    if ($num_news > 0) {
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $l++;
                            if ($p['new'] == 'y') {
                                $new_gif = ' <img src="../images/new1.gif">';
                            } else {
                                $new_gif = '';
                            }
                            echo '                            
                            <div id="news-' . $p['id'] . '">
                                <h3 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . $l . '. ' . htmlspecialchars_decode($p['title']) . $new_gif . '</a></h3>
                                <small><em>' . thai_date($p['date']) . '</em></small>                               
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
    <!-- CKEditor -->    
    <script src="../plugins/ckeditor/ckeditor.js"></script>
</body>
</html>