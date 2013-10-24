<?php
require_once '../system/system.php';

doc_head('ข่าววิขาการจากเครือข่าย');
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
        <div class="bs-example">
            <h2 class="text-center"><a href="network_news.php">ข่าววิชาการจากเครือข่าย</a></h2> 
            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = '$news_id';";
                $result = mysql_query($sql);
                $p = mysql_fetch_array($result);
                if ($p['type'] != 'network_academic') {
                    echo '
                    <script>
                        window.location = \'network_news.php\';
                    </script>     
                    ';
                }
                if ($p['new'] == 'y') {
                    $new_gif = ' <img src="../images/new1.gif">';
                } else {
                    $new_gif = '';
                }
                echo '                            
                            <div id="news-' . $p['id'] . '">
                                ';
                admin('<p><a id="edit-news" style="cursor: pointer;">Edit</a></p>');
                echo '
                                <hr>
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
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
                            $.get("<?php controll('edit-network-news'); ?>", {edit_news: "<?php echo $p['id']; ?>"}, 
                            function(data){ $('.bs-example').html(data); }
                        );
                        });
                                                        
                    });
                </script>
                <?php
            } else {
                $sql = "SELECT * FROM tb_news WHERE type = 'network_academic' ORDER BY date DESC;";
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
                                <h4 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . $l . '. ' . htmlspecialchars_decode($p['title']) . $new_gif . '</a></h4>
                                <small><em>' . thai_date($p['date']) . '</small></em>                                
                            </div>
                            <hr>
                            ';
                    } // END while
                } else {
                    echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                }
            } // END if else
            ?>

            <p>&nbsp;</p>            
        </div>
        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script src="../plugins/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
    <!-- CKEditor -->    
    <script src="../plugins/ckeditor/ckeditor.js"></script>
    <script type='text/javascript'>

        
    </script>

</body>
</html>