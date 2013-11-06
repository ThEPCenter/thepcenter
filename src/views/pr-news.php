<?php
require_once '../system/system.php';

doc_head('ข่าวประชาสัมพันธ์');
$news_type = 'pr';
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

        <div class="row">


            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = '$news_id';";
                $result = mysql_query($sql);
                $p = mysql_fetch_array($result);
                if ($p['type'] != 'pr') {
                    echo '
                    <script>
                        window.location = \'pr-news.php\';
                    </script>     
                    ';
                }
                ?>
                <div class="col-md-9">
                    <?
                    echo '                            
                            <div id="news-' . $p['id'] . '">
                                ';
                    admin('<p><a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a></p>');
                    echo '
                                <h3>' . htmlspecialchars_decode($p['title']) . '</h3>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                <p class="text-center"><img class="img-responsiv" src="' . $p['picture'] . '"></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            </div>
                            ';
                    ?>
                    <script>
                        $(function(){
                            $('#edit-news').click(function(){
                                $(document).ajaxStart(function(){
                                    $('.bs-example').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                                });
                                $.get("<?php controll('edit-pr-news'); ?>", {edit_news: "<?php echo $p['id']; ?>"}, 
                                function(data){ $('.bs-example').html(data); }
                            );
                            });
                                                                                
                        });
                    </script>
                </div>

                <div class="col-md-3">
                    <h3 class="text-center">ข่าวประชาสัมพันธ์ย้อนหลัง</h3>
                    <?php
                    $news_id = $_GET['news_id'];
                    $sql = "SELECT * FROM tb_news WHERE type = 'pr' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    while($p = mysql_fetch_array($result)){
                        echo '
                          <p><a href="pr-news.php?news_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></p>
                          <hr>
                        ';
                    } // END while                    
                    ?>
                    <a href="pr-news.php"><em>ดูหัวข้อข่าวทั้งหมด</em></a>
                </div>
                <?php
            } else {
                ?>
                <div class="col-md-12">
                    <h2 class="text-center">ข่าวประชาสัมพันธ์</h2>
                    <?php
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
                            $('#add-news').click(function(){
                                $(document).ajaxStart(function(){
                                    $('.bs-example').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                                });
                                $.get("<?php controll('add-news'); ?>", {add_news: "<?php echo $news_type; ?>"}, 
                                function(data){ $('.bs-example').html(data); }
                            );
                            });
                                                                                    
                        });
                    </script>
                    <?php
                    $sql = "SELECT * FROM tb_news WHERE type = 'pr' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    $num_news = mysql_num_rows($result);
                    if ($num_news > 0) {
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            echo '                            
                            <div id="news-' . $p['id'] . '">
                                <h3 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . htmlspecialchars_decode($p['title']) . '</a></h3>
                                <small><em>' . thai_date($p['date']) . '</small></em>                                
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

            <p>&nbsp;</p>            
        </div>

        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>

</body>
</html>