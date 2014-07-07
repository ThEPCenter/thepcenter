<?php
require_once '../system/system.php';

if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
    $field_search = $_POST['field_search'];
    $kw = htmlspecialchars($_POST['keyword'], ENT_QUOTES);
    $kw_ori = $kw;
    $match = $_POST['match'];

    if ($match == "part") {
        $kw = "%$kw%";
    } elseif ($match == "start") {
        $kw = "$kw%";
    } elseif ($match == "end") {
        $kw = "%$kw";
    }

    if ($_POST['pub_year'] == "all") {
        $sql = "SELECT * FROM tb_article WHERE $field_search LIKE '$kw' ORDER BY year DESC, impact DESC;";
    } else {
        $year = $_POST['pub_year'];
        $sql = "SELECT * FROM tb_article
                WHERE year = '$year' AND ($field_search LIKE '$kw')
                ORDER BY year DESC, impact DESC;";
    }

    $result = mysql_query($sql);
} // END if

doc_head('ผลงานตีพิมพ์ - ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center header-type">รายชื่อผลงานตีพิมพ์ระดับนานาชาติ</h2>
                <p>&nbsp;</p>

                <?php
                if (isset($_GET['year']) && !isset($_POST['keyword'])) {
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
                } elseif (!isset($_GET['year']) && !isset($_POST['keyword'])) {

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
                <?php
            }
            ?>

            <?php if (!isset($_GET['year'])) { ?>
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
                        &nbsp;&nbsp;
                        <label for="pub_year">ปีที่ตีพิมพ์: </label>
                        <select name="pub_year" id="pub_year">
                            <option value="all">ทั้งหมด</option>
                            <?php
                            $thisYear = date('Y');
                            for ($n = $thisYear; $n >= 2009; $n--) {
                                echo '
                                    <option value="' . $n . '">' . $n . '</option>
                                ';
                            }
                            ?>
                        </select>

                    </form>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                </div>
            <?php } ?>

            <!-- ========= Search Result ========== -->
            <div class="col-md-12">
                <?php
                if (isset($result) && mysql_num_rows($result) > 0 && !isset($_GET['year'])) {
                    ?>
                    <h3>ผลการค้นหา =>

                        <?php
                        if ($field_search == "name") {
                            echo "title";
                        } else {
                            echo $field_search;
                        }
                        echo ' : <span style="color: green;">' . $kw_ori . '</span>';
                        if ($_POST['pub_year'] != "all") {
                            echo ' ในปี <span style="color: green;">' . $_POST['pub_year'] . '</span>';
                        }
                        ?>, พบทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result); ?></span> record(s)
                    </h3>
                    <p><a href="publication.php"><b><< ย้อนกลับ</b></a></p>
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-center"><strong> </strong></td>
                            <td class="text-center"><strong>Title</strong></td>
                            <td class="text-center"><strong>Author(s)</strong></td>
                            <td class="text-center"><strong>Journal</strong></td>
                            <td class="text-center"><strong>Year</strong></td>
                            <td class="text-center"><strong>Impact facto</strong>r</td>            
                        </tr>
                        <?php
                        $i = 0;
                        while ($p = mysql_fetch_array($result)) {
                            $i++;
                            $dir = '../../paper_upload';
                            $str1 = '<a href="' . $dir . '/' . $p['id'] . '/' . $p['file_name'] . '" target="_blank">' . htmlspecialchars_decode($p['name']) . '</a>';
                            $str2 = htmlspecialchars_decode($p['name']);
                            echo'
                        <tr>
                            <td class="text-center">' . $i . '</td>
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
                    <p><a href="publication.php"><b><< ย้อนกลับ</b></a></p>

                <?php } elseif (isset($result) && mysql_num_rows($result) == 0 && !isset($_GET['year'])) {
                    ?>
                    <h3>ผลการค้นหา => ขออภัยไม่พบข้อมูล <?php
                        if ($field_search == "name") {
                            echo "title";
                        } else {
                            echo $field_search;
                        }
                        echo ' : <span style="color: red;">' . $kw_ori . '</span>';

                        if ($_POST['pub_year'] != "all") {
                            echo ' ในปี <span style="color: red;">' . $_POST['pub_year'] . '</span>';
                        }
                        ?>
                    </h3> 
                    <p><a href="publication.php"><b><< ย้อนกลับ</b></a></p>

                    <?
                } elseif (!isset($_GET['year'])) {
                    ?>


                <?php } ?>

            </div>

            <!-- ========= Publication Update ========== -->
            <?php if (empty($_GET['year'])) : ?>
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
                </div>
            <?php endif; ?>            

        </div> <!-- /.row -->

        <?php
        get_includes('footer');
        ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>