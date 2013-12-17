<?php
require_once '../system/system.php';
doc_head('Publication - Thailand Center of Excellence in Physics');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header_en'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center header-type">Publication</h2>
                <p>&nbsp;</p>

                <?php
                if (isset($_GET['year'])) {
                    $year = $_GET['year'];
                    $sql = "SELECT * FROM tb_re_center";
                    $result = mysql_query($sql);
                    echo '
                <h3 align="center">Year: ' . $year . '</h3>
                <p>&nbsp;</p>
                            ';

                    while ($p = mysql_fetch_array($result)) {
                        echo '
                <table style="width: 350px; margin: 10px auto;">
                    <tr>
                        <td class="text-center" style="background-color: #cccccc; height: 40px; width: 350px;">
                            <a href="show-publication_en.php?year=' . $year . '&center=' . $p['re_center_code'] . '&center_name=' . $p['re_center_en'] . '">' . $p['re_center_en'] . ' (' . $p['re_center_code'] . ')</a>
                        </td>
                    </tr>
                </table>           
                ';
                    } //END while
                    echo '
                <p>&nbsp;</p>
        
                <p align="center"><a href="publication_en.php"><< Back</a></p>';
                } else {

                    echo '<div class="text-center">';
                    $thisYear = date('Y');
                    for ($m = $thisYear; $m >= 2009; $m--) {
                        echo '
                        <table style="width: 250px; margin: 10px auto;">
                            <tr>
                                <td class="text-center" style="background-color: #cccccc; height: 40px;"><a href="?year=' . $m . '">Year: ' . $m . '</a></td>
                            </tr>
                        </table>
                    ';
                    }
                    echo '</div>';
                    ?>

                    <p>&nbsp;</p>
                </div>


                <!-- ========= Publication Update ========== -->
                <div class="col-md-12">
                    <?php
                    $sql = "SELECT * FROM tb_article
                ORDER BY year DESC, impact DESC
                LIMIT 5;
            ";
                    $result = mysql_query($sql);
                    ?>
                    <h3>Update Publication</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-center"><strong>Title</strong></td>
                            <td class="text-center"><strong>Author(s)</strong></td>
                            <td class="text-center"><strong>Journal</strong></td>
                            <td class="text-center"><strong>Year</strong></td>
                            <td class="text-center"><strong>Impact facto</strong>r</td>            
                        </tr>
                        <?php
                        while ($p = mysql_fetch_array($result)) {
                            $dir = '../../paper_upload';
                            $str1 = '<a href="' . $dir . '/' . $p['id'] . '/' . $p['file_name'] . '" target="_blank">' . htmlspecialchars_decode($p['name']) . '</a>';
                            $str2 = htmlspecialchars_decode($p['name']);
                            echo'
                        <tr>			
                            <td>' . htmlspecialchars_decode($p['name']) . '</td>
                            <td>' . $p['author'] . '</td>
                            <td>' . $p['journal'] . ', Volume ' . $p['volume'];
                            if(!empty($p['issue'])){
                                echo ', Issue ' . $p['issue'];
                            }
                            echo ', page ' . $p['page'] . '</td>
                            <td>' . $p['year'] . '</td>
                            <td align="center">' . number_format($p['impact'], 3, '.', '') . ' (' . ($p['year'] - 1) . ')</td>
                        </tr>
                        ';
                        } // END WHILE
                        ?>
                    </table>

                </div>
                
           <?php
            }
            ?>
                
        </div> <!-- /.row -->
        
        <?php
        get_includes('footer_en');
        ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
