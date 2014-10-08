<?php
require_once '../system/system.php';
doc_head('ฐานข้อมูลนักนักฟิสิกส์ / นักวิจัย ศูนย์ความเป็นเลิศด้านฟิสิกส์');

if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
    $field_search = $_POST['field_search'];
    $kw = htmlspecialchars($_POST['keyword'], ENT_QUOTES);
    $kw_ori = $kw;
    $kw = "%$kw%";
    if ($field_search == 'firstname') {
        $sql_all = "SELECT * FROM res_profile WHERE (firstname_th LIKE '$kw') OR (firstname_en LIKE '$kw') ORDER BY firstname_en;";
    } elseif ($field_search == 'lastname') {
        $sql_all = "SELECT * FROM res_profile WHERE (lastname_th LIKE '$kw') OR (lastname_en LIKE '$kw') ORDER BY lastname_en;";
    } elseif ($field_search == 'institute') {
        $sql_all = "SELECT * FROM res_employment WHERE institute LIKE '$kw' ORDER BY institute;";
    } elseif ($field_search == 'expertise') {
        $sql_all = "SELECT * FROM res_expertise WHERE (topic LIKE '$kw') OR (specific_topic LIKE '$kw');";
    }
    $result_all = mysql_query($sql_all);
} // END if
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="margin-top: 10px;">
            <h2 class="text-center">ฐานข้อมูลนักฟิสิกส์ / นักวิจัย</h2>

            <p>&nbsp;</p>

            <!-- =============================== Search Researcher ================================= -->
            <div class="col-md-12 well" style="border: solid 1px #ddd;">

                <h3 class="text-center"><span class="glyphicon glyphicon-search"></span> Search ค้นหานักฟิสิกส์ / นักวิจัย</h3>
                <form role="form" name="form1" method="post" action="">
                    <div class="row">
                        <div class="col-sm-1 col-md-1" style=""><strong>ค้นหาจาก</strong></div>
                        <div class="col-sm-2 col-md-2" style="">
                            <select name="field_search" class="form-control">
                                <option value="firstname" selected>ชื่อ</option>
                                <option value="lastname">นามสกุล</option>
                                <option value="institute">สถาบัน</option>
                                <option value="expertise">ความเชี่ยวชาญ</option>
                            </select>
                        </div>
                        <div class="col-sm-7 col-md-7"><input class="form-control" name="keyword" type="text" id="keyword" placeholder="คำค้น (keyword)" required></div>
                        <div class="col-sm-2 col-md-2"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                    </div>
                    <p>&nbsp;</p>
                </form>

            </div>

            <!-- =============================== END Search Researcher ================================= -->       


            <?php if (isset($result_all)): ?>
                <div class="col-md-12" style="margin-top: 20px;">
                    <h3>ผลการค้นหา</h3>
                    คำค้นหา <strong style="color: blue;"><?php echo $kw_ori; ?></strong>

                    <?php if (mysql_num_rows($result_all) > 0): ?>

                        <?php if ($field_search == 'firstname') : ?>
                            <br>ค้นหาจาก <strong>ชื่อ (firstname)</strong> 
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result_all); ?></span> คน ดังนี้
                            <?php $i = 1; ?>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_em = "SELECT * FROM res_employment WHERE researcher_id = $r_all->researcher_id ORDER BY institute;"; ?>
                                        <?php $result_em = mysql_query($sql_em); ?>

                                        <?php if (mysql_num_rows($result_em) > 0): ?>
                                            <?php while ($r_em = mysql_fetch_object($result_em)): ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                            <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $r_em->institute; ?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                        <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td> - </td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php elseif ($field_search == 'lastname') : ?>
                            <br>ค้นหาจาก <strong>นามสกุล (surname)</strong> 
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result_all); ?></span> คน ดังนี้
                            <?php $i = 1; ?>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_em = "SELECT * FROM res_employment WHERE researcher_id = $r_all->researcher_id ORDER BY institute;"; ?>
                                        <?php $result_em = mysql_query($sql_em); ?>

                                        <?php if (mysql_num_rows($result_em) > 0): ?>
                                            <?php while ($r_em = mysql_fetch_object($result_em)): ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                            <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $r_em->institute; ?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                        <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td> - </td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php elseif ($field_search == 'institute') : ?>
                            <br>ค้นหาจาก <strong>สถาบัน (institute)</strong> 
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result_all); ?></span> คน ดังนี้

                            <?php $i = 1; ?>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_pro = "SELECT * FROM res_profile WHERE researcher_id = $r_all->researcher_id ORDER BY firstname_en;"; ?>
                                        <?php $result_pro = mysql_query($sql_pro); ?>

                                        <?php while ($r_pro = mysql_fetch_object($result_pro)): ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_pro->researcher_id; ?>">
                                                        <?php echo $r_pro->title_en . $r_pro->firstname_en . ' ' . $r_pro->lastname_en . '<br>' . $r_pro->title_th . $r_pro->firstname_th . ' ' . $r_pro->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $r_all->institute; ?></td>
                                            </tr>

                                        <?php endwhile; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>


                        <?php elseif ($field_search == 'expertise') : ?>
                            <br>ค้นหาจาก <strong>ความเชี่ยวชาญ (expertise)</strong>
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result_all); ?></span> คน ดังนี้
                            <?php $i = 1; ?>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>ความเชี่ยวชาญ (expertise)</th>

                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>

                                        <?php $sql_pro = "SELECT * FROM res_profile WHERE researcher_id = $r_all->researcher_id ORDER BY firstname_en DESC;"; ?>
                                        <?php $result_pro = mysql_query($sql_pro); ?>                                
                                        <?php while ($r_pro = mysql_fetch_object($result_pro)): ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_pro->researcher_id; ?>">
                                                        <?php echo $r_pro->title_en . $r_pro->firstname_en . ' ' . $r_pro->lastname_en . '<br>' . $r_pro->title_th . $r_pro->firstname_th . ' ' . $r_pro->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td>                                                    
                                                    <?php if (!empty($r_all->topic)): ?>
                                                        <?php echo $r_all->topic; ?><br>
                                                    <?php endif; ?>
                                                    <?php if (!empty($r_all->specific_topic)): ?>
                                                        - <?php echo $r_all->specific_topic; ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                        <?php endwhile; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php endif; ?>

                    <?php else : ?>

                        <p><strong style="color: red;">ขออภัย ไม่พบข้อมูล</strong></p>

                    <?php endif; ?>
                    <p>&nbsp;</p>

                </div>
            <?php endif; ?>



        </div> <!-- /.row -->       


        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
