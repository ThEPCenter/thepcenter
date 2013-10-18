<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_includes('meta_script'); ?>        
        <title>จัดการ Slide</title>

    </head>
    <?php
    $sql = "SELECT * FROM tb_slide;";
    $result = mysql_query($sql);
    ?>
    <body class="metrouicss">
        <?php get_includes('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 style="text-align: center;">จัดการ Slide</h2>

            <div class="page-region">
                <div class="page-region-content">
                    <table class="bordered">
                        <tr>
                            <td>อันดับ</td>
                            <td>URL</td>
                            <td>ภาพตัวอย่าง</td>
                        </tr>
                        <?php
                        if (!empty($result)) {
                            while($s = mysql_fetch_array($result)) {
                                echo '
                        <tr>
                            <td>' . $s['number'] . '</td>
                            <td>
                                <p>url ภาพ :<br> ' . $s['pic_url'] . '</p>
                                <p>url Link :<br> ' . $s['link_url'] . '</p>
                            </td>
                            <td><img src="' . $s['pic_url'] . '" style="max-width: 100%; height: auto;"></td>
                        </tr>
                            ';
                            } // END while
                        }
                        ?>
                        <tr>
                            <td>1.</td>
                            <td>
                                <p>url ภาพ :<br> ../../src/slides/conf.kek_slide_400.png</p>
                                <p>url Link :<br> ../../src/views/pr_news.php?news_id=14</p>
                            </td>
                            <td><img src="../../src/slides/conf.kek_slide_400.png" style="max-width: 100%; height: auto;"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                <p>url ภาพ :<br> ../../src/slides/conf.kek_slide_400.png</p>
                                <p>url Link :<br> ../../src/views/pr_news.php?news_id=14</p>
                            </td>
                            <td><img src="../../src/slides/conf.kek_slide_400.png" style="max-width: 100%; height: auto;"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>
                                <p>url ภาพ :<br> ../../src/slides/conf.kek_slide_400.png</p>
                                <p>url Link :<br> ../../src/views/pr_news.php?news_id=14</p>
                            </td>
                            <td><img src="../../src/slides/conf.kek_slide_400.png" style="max-width: 100%; height: auto;"></td>
                        </tr>
                    </table>
                </div>
                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END #page-index -->
        <?php get_includes('footer'); ?>        
    </body>
</html>