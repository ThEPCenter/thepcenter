<?php
require_once '../system/system.php';

if (isset($_GET['center'])) {
    $year = $_GET['year'];
    $center_code = $_GET['center'];
    $center_name = $_GET['center_name'];
} else {
    header("Location: puplication.php");
    exit();
}

$sql = "SELECT * FROM tb_article
	WHERE (year = $year) AND (research_center = '$center_code') 
	ORDER BY impact DESC;
";
$result = mysql_query($sql);

doc_head('Publication - Thailand Center of Excellence in Physics');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center header-type">Publication</h2>
                <p>&nbsp;</p>

                <?php
                echo '
                <h3 style="text-align: center;">Year: ' . $year . '</h3>
                ';
                ?>
                <p>&nbsp;</p>

                <h3 align="center"><?php echo $center_name . ' (' . $center_code . ')'; ?></h3>
                <p>&nbsp;</p>

                <?php
                $num = mysql_num_rows($result);
                if ($num > 0) {
                    ?>
                    <table class="table table-bordered" style="margin: 0 auto;">
                        <tr>
                            <td class="text-center" style="font-weight: bold;">No.</td>
                            <td class="text-center" style="font-weight: bold;">Title</td>
                            <td class="text-center" style="font-weight: bold;">Author(s)</td>
                            <td class="text-center" style="font-weight: bold;">Journal</td>
                            <td class="text-center" style="font-weight: bold;">Impact factor</td>            
                        </tr>
                        <?php
                        $l = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $l++;
                            $dir = '../../paper_upload';
                            $str1 = '<a href="' . $dir . '/' . $p['id'] . '/' . $p['file_name'] . '" target="_blank">' . htmlspecialchars_decode($p['name']) . '</a>';
                            $str2 = htmlspecialchars_decode($p['name']);
                            echo'
                        <tr>
                            <td>' . $l . '</td>
                            <td width="500">' . htmlspecialchars_decode($p['name']) . '</a></td>
                            <td width="170">' . $p['author'] . '</td>
                            <td>' . $p['journal'] . ' Volume ' . $p['volume'];
                            if(!empty($p['issue'])){
                                echo ', Issue ' . $p['issue'];
                            }
                            echo ', page ' . $p['page'] . '</td>
                            <td class="text-center">' . number_format($p['impact'], 3, '.', '') . ' (' . ($p['year'] - 1) . ')</td>
                        </tr>
                            ';
                        } // END WHILE
                        ?>

                    </table>
                    <p>&nbsp;</p>

                    <?php
                } else {
                    ?>
                    <p class="text-center"><strong>Sorry. Data not found.</strong></p>
                    <p>&nbsp;</p>

                    <?php
                } // END if($num > 0)
                // =============================================//
                mysql_close();
                ?>

                <p class="text-center"><a href="publication_en.php?year=<?php echo $year; ?>"> << Back</a></p>
                <p>&nbsp;</p>

                <div class="text-center"><a href="#">Up</a></div>

            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->

        <?php get_includes('footer_en'); ?>

    </div>
</body>
</html>