<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>       
</head>

<body>
    <div class="container">

        <?php
        get_includes('header');

        if (isset($_GET['year'])) {
            $year = $_GET['year'];

            $sql = "SELECT * FROM tb_re_center";

            $result = mysql_query($sql);

            echo '
        <div><h3 align="center">ประจำปี พ.ศ. ' . ($year + 543) . ' (ค.ศ. ' . $year . ')</h3></div>';

            while ($p = mysql_fetch_array($result)) {
                echo '
        <table style="width: 350px; margin: 10px auto;">
            <tr>
                <td class="text-center" style="background-color: #cccccc; height: 40px; width: 350px;"><a href="show_art.php?year=' . $year . '&center=' . $p['re_center_code'] . '&center_name=' . $p['re_center_th'] . '">' . $p['re_center_th'] . ' (' . $p['re_center_code'] . ')</a></td>
            </tr>
        </table>           
                ';
            } //END while
            echo '
        <div>&nbsp;</div>
        <div align="center"><a href="research_output.php"><i class="icon-arrow-left-3"></i> ย้อนกลับ</a></div>';
        } else {
            ?>

            <div class="text-center">
                <?php
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
                ?>
            </div>

            <?php
            $sql = "SELECT * FROM tb_article
                ORDER BY year DESC, impact DESC
                LIMIT 5;
            ";
            $result = mysql_query($sql);
            ?>
            <div>
                <h3>Update ผลงานวิจัยล่าสุด</h3>
                <table class="table-bordered">
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
                        <td width="500">' . fileExist($p['id'], $p['file_name'], $dir, $str1, $str2) . '</td>
                        <td width="170">' . $p['c_author'] . '</td>
                        <td>' . $p['journal'] . '</td>
                        <td>' . $p['year'] . '</td>
                        <td align="center">' . $p['impact'] . '</td>
                    </tr>
                        ';
                    } // END WHILE
                }
                ?>
            </table>           
            <p>&nbsp;</p>

            <?php get_includes('footer'); ?>

        </div>
    </div>
    <!-- /.container -->
</body>
</html>