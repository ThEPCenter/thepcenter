<?php
require_once 'ui_re_db/system/system.php';

$pathf = new config();

//---------------------------------------

if (isset($_GET['center'])) {
    $year = $_GET['year'];
    $center_code = $_GET['center'];
    $center_name = $_GET['center_name'];
} else {
    header("Location: article_all_t.php");
    exit;
}

$sql = "SELECT *  
	FROM tb_article
	WHERE (year = $year) AND (research_center = '$center_code') 
	ORDER BY impact DESC
;";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>ผลงานวิจัยตีพิมพ์ระดับนานาชาติ</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 class="text-center">ผลงานวิจัยตีพิมพ์ระดับนานาชาติ</h2>

            <div class="page-region">
                <div class="page-region-content">

                    <?php echo '
    <h3 align="center">ประจำปี พ.ศ. ' . ($year + 543) . ' (ค.ศ. ' . $year . ')'; ?></h3>
                    <p>&nbsp;</p>
                    <h4 align="center"><?php echo $center_name . ' (' . $center_code . ')'; ?></h4>
                    <div>&nbsp;</div>

                    <?php
                    $num = mysql_num_rows($result);
                    if ($num > 0) {
                        ?>
                        <table class="bordered">
                            <tr>
                                <td class="text-center" style="font-weight: bold;">No.</td>
                                <td class="text-center" style="font-weight: bold;">Title</td>
                                <td class="text-center" style="font-weight: bold;">Corresponding author</td>
                                <td class="text-center" style="font-weight: bold;">Journal</td>
                                <td class="text-center" style="font-weight: bold;">Impact factor</td>            
                            </tr>
                            <?php
                            $l = 0;
                            while ($p = mysql_fetch_array($result)) {
                                $l++;
                                $dir = $pathf->inc_dir('paper_upload');
                                $str1 = '<a href="' . $dir . '/' . $p['id'] . '/' . $p['file_name'] . '" target="_blank">' . htmlspecialchars_decode($p['name']) . '</a>';
                                $str2 = htmlspecialchars_decode($p['name']);
                                echo'
        <tr>
            <td>' . $l . '</td>
            <td width="500">' . fileExist($p['id'], $p['file_name'], $dir, $str1, $str2) . '</a></td>
            <td width="170">' . $p['c_author'] . '</td>
            <td>' . $p['journal'] . '</td>
            <td class="text-center">' . $p['impact'] . '</td>
        </tr>
        ';
                            }//END WHILE
                            ?>
                        </table>
                        <div>&nbsp;</div>	
                        <?php
                    } else {
                        ?>
                        <div class="text-center">ขออภัย ไม่พบข้อมูล</div>
                        <p>&nbsp;</p>
                        <?php
                    } // END if($num > 0)
// =============================================//
                    mysql_close()
                    ?>
                    
                    <div align="center"><a href="research_output.php?year=<?php echo $year; ?>"><i class="icon-arrow-left"></i> ย้อนกลับ</a></div>

                </div>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>