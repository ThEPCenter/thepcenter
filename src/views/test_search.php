<?php
require_once '../system/system.php';

if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
    $field_search = $_POST['field_search'];
    $kw = $_POST['keyword'];
    $kw_ori = $kw;
    $match = $_POST['match'];

    if ($match == "part") {
        $kw = "%$kw%";
    } elseif ($match == "start") {
        $kw = "$kw%";
    } elseif ($match == "end") {
        $kw = "%$kw";
    }

    $sql = "SELECT * FROM tb_article WHERE $field_search LIKE '$kw' ORDER BY year DESC, impact DESC;";
    $result = mysql_query($sql);
} // END if


doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            
            <!-- ======Search ============ -->
            <div class="col-md-12" style="border: solid 1px #ddd; margin-top: 20px;">

                <h2 class="text-center header-type">Search</h2>
                <form role="form" name="form1" method="post" action="">

                    <input name="field_search" type="radio" id="radio" value="name" checked="CHECKED">
                    <label for="field_search">Title</label>

                    <input type="radio" name="field_search" id="radio2" value="author">
                    <label for="field_search">Author</label>

                    <input type="radio" name="field_search" id="radio3" value="journal">
                    <label for="field_search">Journal</label>

                    <div class="form-group">
                        <label for="keyword"></label>
                        <input class="form-control" name="keyword" type="text" id="keyword">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>


                    <label for="match">ตำแหน่งคำ: </label>
                    <select name="match" id="match">
                        <option value="part">ส่วนของคำ</option>
                        <option value="whole">ตรงกันทั้งคำ</option>
                        <option value="start">ขึ้นต้นด้วย</option>
                        <option value="end">ลงท้ายด้วย</option>
                    </select>

                </form>

                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </div>

            
            <!-- ========= Publication Update ========== -->
            <div class="col-md-12">

                <?php
                if (isset($result) && mysql_num_rows($result) > 0) {
                    ?>
                    <h3>ผลงานการค้นหา =>

                        <?php
                        if ($field_search == "name") {
                            echo "title";
                        } else {
                            echo $field_search;
                        }
                        echo ' : <span style="color: green;">' . $kw_ori . '</span>';
                        ?>, พบทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result); ?></span> record(s)
                    </h3>
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
                            if (!empty($p['issue'])) {
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

                <?php } elseif (isset($result) && mysql_num_rows($result) == 0) {
                    ?>
                    <h3>ผลงานการค้นหา => ขออภัยไม่พบข้อมูล <?php
                    if ($field_search == "name") {
                            echo "title";
                        } else {
                            echo $field_search;
                        }
                    echo ' : <span style="color: red;">' . $kw_ori . '</span>'; ?></h3>

                    <?
                } else {
                    ?>

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
                            if (!empty($p['issue'])) {
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
                <? } ?>

            </div>

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>



</body>
</html>