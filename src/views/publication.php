<?php
require_once '../system/system.php';
doc_head('ผลงานตีพิมพ์ - ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">ผลงานตีพิมพ์ระดับนานาชาติ</h2>
                <p>&nbsp;</p>

                <?php
                if (isset($_GET['year'])) {
                    $year = $_GET['year'];
                    $sql = "SELECT * FROM tb_re_center";
                    $result = mysql_query($sql);
                    echo '
                <h3 align="center">ประจำปี พ.ศ. ' . ($year + 543) . ' (ค.ศ. ' . $year . ')</h3>
                <p>&nbsp;</p>
                            ';

                    while ($p = mysql_fetch_array($result)) {
                        echo '
                <table style="width: 350px; margin: 10px auto;">
                    <tr>
                        <td class="text-center" style="background-color: #cccccc; height: 40px; width: 350px;">
                            <a href="show-publication.php?year=' . $year . '&center=' . $p['re_center_code'] . '&center_name=' . $p['re_center_th'] . '">' . $p['re_center_th'] . ' (' . $p['re_center_code'] . ')</a>
                        </td>
                    </tr>
                </table>           
                ';
                    } //END while
                    echo '
                <p>&nbsp;</p>
        
                <p align="center"><a href="publication.php"><< ย้อนกลับ</a></p>';
                } else {

                    echo '<div class="text-center">';
                    $thisYear = date('Y');
                    for ($m = $thisYear; $m >= 2009; $m--) {
                        echo '
                        <table style="width: 250px; margin: 10px auto;">
                            <tr>
                                <td class="text-center" style="background-color: #cccccc; height: 40px;"><a href="?year=' . $m . '">ประจำปี พ.ศ. ' . ($m + 543) . ' (ค.ศ. ' . $m . ')</a></td>
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
                    <h3>Update ผลงานตีพิมพ์ล่าสุด</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-center"><strong>Title</strong></td>
                            <td class="text-center"><strong>Corresponding author</strong></td>
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
                            <td>' . fileExist($p['id'], $p['file_name'], $dir, $str1, $str2) . '</td>
                            <td>' . $p['c_author'] . '</td>
                            <td>' . $p['journal'] . '</td>
                            <td>' . $p['year'] . '</td>
                            <td align="center">' . $p['impact'] . '</td>
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
        get_includes('footer');
        ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
