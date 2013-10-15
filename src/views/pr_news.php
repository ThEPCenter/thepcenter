<?php
require_once '../system/system.php';

if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
    $sql = "SELECT * FROM tb_news
        WHERE id = $news_id;
    ";
} else {
    $sql = "SELECT * FROM tb_news
    WHERE type = 'pr'
    ORDER BY date DESC;
";
}

$result = mysql_query($sql);

doc_head('ข่าวประชาสัมพันธ์');
?>
<style>
    .img-responsive{
        margin: 0 auto;
    }
</style>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>            

        <?php
        if (!empty($result)) {
            $l = 0;
            while ($p = mysql_fetch_array($result)) {
                $l++;
                if ($p['type'] != 'pr') {
                    echo '
                    <script>
                        window.location = \'pr_news.php\';
                    </script>     
                    ';
                }
                if ($p['new'] == 'y') {
                    $new_gif = ' <img src="../images/new1.gif">';
                } else {
                    $new_gif = '';
                }                
                echo '
        <div class="bs-example">
            <div id="news-' . $p['id'] . '">                
                <a href="?news_id=' . $p['id'] . '"><h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3></a>
                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                <div class="text-center"><img class="img-responsive" src="' . htmlspecialchars_decode($p['picture']) . '"></div>
                ' . htmlspecialchars_decode($p['content_long']) . '
            </div>
       </div>
                    ';
            } // END while
        } else {
            echo '
                <div class="bs-example">
                    <h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>
                </div>    
                ';
        }
        ?>


<?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>   
    
</body>
</html>