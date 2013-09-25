<?php
require_once '../system/system.php';

$sql = "SELECT * FROM tb_news 
    WHERE type = 'network_academic' 
    ORDER BY date DESC;
";
$result = mysql_query($sql);

doc_head('ข่าววิขาการจากเครือข่าย');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>
        <div class="bs-example">
            <?php
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
                                <h3>' . $l . '. ' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            </div>';
                    echo '
                        <p>&nbsp;</p>
                        <hr>
                            ';
                } // END while
            } else {
                echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
            }
            ?>
            <p>&nbsp;</p>

            <?php get_includes('footer'); ?>
        </div>
    </div>
    <!-- /.container -->
</body>
</html>