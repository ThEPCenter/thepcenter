<?php
require_once '../system/system.php';

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    if ($id < 1) {
        header("location: researcher.php");
    }
} else {
    header("location: researcher.php");
}

$sql_pro = "SELECT * FROM res_profile WHERE researcher_id = $id;";
$result_pro = mysql_query($sql_pro);
if (mysql_num_rows($result_pro) < 1) {
    header("location: researcher.php");
}
$r_pro = mysql_fetch_object($result_pro);

$sql_em = "SELECT * FROM res_employment WHERE researcher_id = $id;";
$result_em = mysql_query($sql_em);
$r_em = mysql_fetch_object($result_em);

$sql_ed = "SELECT * FROM res_education WHERE researcher_id = $id ORDER BY grad_year DESC, education_id DESC;";
$result_ed = mysql_query($sql_ed);

$sql_ex = "SELECT * FROM res_expertise WHERE researcher_id = $id;";
$result_ex = mysql_query($sql_ex);

$sql_pub = "SELECT * FROM res_publication WHERE researcher_id = $id;";
$result_pub = mysql_query($sql_pub);

doc_head('ฐานข้อมูลนักนักฟิสิกส์ / นักวิจัย ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">ฐานข้อมูลนักฟิสิกส์ / นักวิจัย</h2>
                <p>&nbsp;</p>

                <div class="row">

                    <div class="col-sm-2 col-md-2">
                        <img alt="profile's picture" style="max-width: 100%;" src="<?php echo $r_pro->pic_url; ?>">
                    </div>

                    <div class="col-sm-10 col-md-10">
                        <p><strong>ชื่อ:</strong> <?php echo $r_pro->title_th . $r_pro->firstname_th . ' ' . $r_pro->lastname_th; ?></p>
                        <p><strong>Name:</strong> <?php echo $r_pro->title_en . $r_pro->firstname_en . ' ' . $r_pro->lastname_en; ?></p>
                        <p>&nbsp;</p>

                        <h5>ที่ติดต่อ</h5>
                        <p><strong>ที่ทำงาน:</strong>
                            <?php if (!empty($r_em->street_th)): ?>                                
                                <?php echo $r_em->street_th; ?>
                            <?php endif; ?>

                            <?php
                            if (!empty($r_em->sub_district_th)):
                                if ($r_em->province_th == 'กรุงเทพมหานคร'):
                                    echo 'แขวง';
                                else:
                                    echo 'ตำบล';
                                endif;
                                echo $r_em->sub_district_th;
                            endif;
                            ?>

                            <?php
                            if (!empty($r_em->district_th)):
                                if ($r_em->province_th == 'กรุงเทพมหานคร'):
                                    echo 'เขต';
                                else:
                                    echo 'อำเภอ';
                                endif;
                                echo $r_em->district_th;
                            endif;
                            ?>

                            <?php
                            if (!empty($r_em->province_th)):
                                if ($r_em->province_th != 'กรุงเทพมหานคร'):
                                    echo 'จังหวัด';
                                endif;
                                echo $r_em->province_th;
                            endif;
                            ?>

                            <?php echo $r_em->postal_code; ?>

                        </p>

                        <p>
                            <strong>โทรศัพท์:</strong> 
                            <?php
                            if (!empty($r_em->phone)) {
                                echo $r_em->phone;
                            }
                            ?>
                        </p>

                        <?php if (!empty($r_em->mobile_phone)): ?>
                            <p><strong>โทรศัพท์มือถือ: </strong><?php echo $r_em->mobile_phone; ?></p>
                        <?php endif; ?>

                        <p>
                            <strong>Email:</strong> 
                            <?php
                            if (!empty($r_em->email)) {
                                echo $r_em->email;
                            }
                            ?>
                        </p>
                        <p>
                            <strong>Website:</strong>
                            <?php if (!empty($r_em->website)) : ?>
                                <a target="_blank" href="<?php echo $r_em->website; ?>"><?php echo $r_em->website; ?></a>
                            <?php endif; ?>
                        </p>
                        <p>&nbsp;</p>

                        <h5>การศึกษา</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="160">ระดับการศึกษา (degree)</th><th>สาขา</th><th width="60">ปีที่จบ</th><th>สถาบันการศึกษา</th><th>ประเทศ</th>
                                </tr>
                                <?php if (mysql_num_rows($result_ed) > 0) : ?>

                                    <?php while ($r_ed = mysql_fetch_object($result_ed)): ?>
                                        <tr>
                                            <td><?php echo ucfirst($r_ed->degree); ?>'s degree</td>
                                            <td><?php echo $r_ed->major; ?></td>
                                            <td><?php echo $r_ed->grad_year; ?></td>
                                            <td><?php echo $r_ed->institute; ?></td>
                                            <td><?php echo $r_ed->country; ?></td>
                                        </tr>
                                    <?php endwhile; ?>

                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" style="text-align: center;">- ไม่พบข้อมูลการศึกษา -</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>

                        <h5>ความเชี่ยวชาญ (Field of Expertise / Competency)</h5>
                        <?php if (mysql_num_rows($result_ex) > 0): ?>
                            <?php $r_ex = mysql_fetch_object($result_ex); ?>
                            <p>
                                <?php if (!empty($r_ex->topic)): ?>
                                    <?php echo $r_ex->topic; ?><br>
                                <?php endif; ?>

                                <?php if (!empty($r_ex->specific_topic)): ?>
                                    - <?php echo $r_ex->specific_topic; ?>
                                <?php endif; ?>
                            </p>
                        <?php else: ?>
                            <p>- ขออภัย ไม่พบข้อมูล -</p>
                        <?php endif; ?>
                        <p>&nbsp;</p>

                        <h5>Publication</h5> 
                        (ผลงานตีพิมพ์ย้อนหลัง 10 ปี)
                        <?php if (mysql_num_rows($result_pub) > 0): ?>
                            <?php $r_pub = mysql_fetch_object($result_pub); ?>
                            <p><?php echo htmlspecialchars_decode($r_pub->content); ?></p>
                        <?php else: ?>
                            <p>- ขออภัย ไม่พบข้อมูล -</p>
                        <?php endif; ?>
                        <p>&nbsp;</p>

                    </div>
                </div> <!-- /.row -->

            </div>

        </div> <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <a href="javascript:history.back();" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> กลับไปหน้าค้นหา</a>
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
