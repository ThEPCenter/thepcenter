<?php
require_once '../system/system.php';
doc_head('ฐานข้อมูลนักวิจัย - ศูนย์ความเป็นเลิศด้านฟิสิกส์');

if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
    $field_search = $_POST['field_search'];
    $kw = htmlspecialchars($_POST['keyword'], ENT_QUOTES);
    $kw_ori = $kw;
    $kw = "%$kw%";

    if ($field_search == 'firstname') {
        $sql_all = "SELECT * FROM res_profile
            WHERE (firstname_th LIKE '$kw') OR (firstname_en LIKE '$kw');";
    } elseif ($field_search == 'lastname') {
        $sql_all = "SELECT * FROM res_profile
            WHERE (lastname_th LIKE '$kw') OR (lastname_en LIKE '$kw');";
    } elseif ($field_search == 'institute') {
        $sql_all = "SELECT * FROM res_employment
            WHERE institue LIKE '$kw';";
    } elseif ($field_search == 'expertise') {
        $sql_all = "SELECT * FROM res_expertise
            WHERE topic LIKE '$kw';";
    }

    $result_all = mysql_query($sql_all);
    
} // END if
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="margin-top: 10px;">
            <h2 class="text-center">ฐานข้อมูลนักวิจัย</h2>

            <!-- =============================== Search Researcher ================================= -->
            <div class="col-md-12  well" style="border: solid 1px #ddd;">

                <h3 class="text-center"><span class="glyphicon glyphicon-search"></span> Search</h3>
                <form role="form" name="form1" method="post" action="">

                    <div class="row">
                        <div class="col-md-1" style=""><strong>ค้นหาจาก</strong></div>
                        <div class="col-md-2" style="">
                            <select name="field_search" class="form-control">
                                <option value="firstname">ชื่อ</option>
                                <option value="lastname">นามสกุล</option>
                                <option value="institue">สถาบัน</option>
                                <option value="expertise">ความเชี่ยวชาญ</option>
                            </select>
                        </div>
                        <div class="col-md-7"><input class="form-control" name="keyword" type="text" id="keyword" placeholder="คำค้น (keyword)" required></div>
                        <div class="col-md-2"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                    </div>
                    <p>&nbsp;</p>

                </form>

            </div>

            <!-- =============================== END Search Researcher ================================= -->       


            <?php if (isset($result_all)): ?>
                <div class="col-md-12 alert alert-success" role="alert"" style="border: solid 1px #ddd; margin-top: 20px;">
                    <h3>ผลการค้นหา</h3>
                    <?php if (mysql_num_rows($result_all) > 0): ?>
                        คำค้นหา <strong style="color: blue;"><?php echo $kw_ori; ?></strong>
                        <br>ค้นหาจาก <strong>ชื่อ (firstname)</strong>
                        <br>พบนักวิจัยทั้งหมด <span style="color: green;"><?php echo mysql_num_rows($result_all); ?></span> ท่าน ดังนี้
                        <?php $i = 1; ?>
                        <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                            <p><?php echo $i . '. ' . $r_all->firstname_en . ' ' . $r_all->lastname_en . ' ' . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?> </p>
                            <?php $i++; ?>
                        <?php endwhile; ?>

                    <?php else : ?>

                        <strong style="color: red;">ขออภัย ไม่พบข้อมูล</strong>

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
