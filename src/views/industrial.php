<?php
require_once '../system/system.php';
doc_head('ฟิสิกส์อุตสากรรม');
?>       
</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>

        <div class="row">

            <?php
            if (isset($_GET['article_id'])) {
                $article_id = $_GET['article_id'];
                ?>

                <div class="col-sm-9 col-md-9">

                    <?php
                    $sql = "SELECT * FROM tb_industrial WHERE id = $article_id;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                
                    <div>
                        <h3>' . htmlspecialchars_decode($p['title']) . '</h3>
                        <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                        ' . htmlspecialchars_decode($p['content']) . '
                    </div>
                
                            ';
                        }
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>                
                </div>

                <div class="col-sm-3 col-md-3">                    
                    <h3 class="text-center">บทความย้อนหลัง</h3>
                    <?php
                    $sql = "SELECT * FROM tb_industrial ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                        <p><a href="industrial.php?article_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></p>
                        <hr>
                            ';
                        } // END while
                        ?>
                        <a href="industrial.php"><em>บทความทั้งหมด</em></a>
                        <?php
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>
                </div>
                <?php
            } else {
                echo '<h2 class="text-center">ฟิสิกส์อุตสาหกรรม</h2>';
                $sql = "SELECT * FROM tb_industrial ORDER BY date DESC;";
                $result = mysql_query($sql);
                if (mysql_num_rows($result) > 0) {
                    while ($p = mysql_fetch_array($result)) {
                        echo '
                        <h3><a href="industrial.php?article_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></h3>
                        <small><em>' . thai_date($p['date']) . '</em></small>
                        <hr>
                            ';
                    } // END while
                }
            }
            ?>

        </div>
        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->
</body>
</html>