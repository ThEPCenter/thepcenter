<?php
require_once '../system/system.php';
if ($_POST) {
    
}

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>
<script>
    $(function() {
        $("#first_name_en").focus();
    });
</script>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12" style="background-color: #e7e3b1;">

                <h2 class="text-center header-type">Add Researcher Data</h2>
                <form class="form-horizontal" role="form" name="form1" method="post" action="">

                    <h2>1. ข้อมูลประวัติส่วนตัว</h2>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Gender </label>   
                        <div class="col-sm-10">
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="radio">Male</label>

                            <input type="radio" name="gender" id="Female" value="female">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="first_name_en">First name<span style="color: red">*</span> </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="first_name_en" id="first_name_en" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="first_name_th">ชื่อ<span style="color: red">*</span> </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="first_name_th" id="first_name_th" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="middle_name_en">Middle name </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="middle_name_en" id="middle_name_en">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="middle_name_th">ชื่อกลาง </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="middle_name_th" id="middle_name_th">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="last_name_en">Last name<span style="color: red">*</span> </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="last_name_en" id="last_name_en" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="last_name_th">นามสกุล<span style="color: red">*</span> </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="last_name_th" id="last_name_th" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="title_en">Title </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="title_en" id="title_en" placeholder="Dr., Prof.Dr., Mr., Ms., ...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="title_th">คำนำหน้าชื่อ </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="title_th" id="title_th" placeholder="เช่น ดร., ศ.ดร., นาย, ร.ต., ...">
                        </div>
                    </div>

                    <h3>ที่อยู่/ที่ติดต่อ</h3>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="street_en">House/Building number & Street </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="street_en" id="street_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="street_th">เลขที่ อาคาร ถนน </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="street_th" id="street_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="sub_district_en">Sub-district/Tumbon </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="sub_district_en" id="sub_district_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="sub_district_th">แขวง/ตำบล </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="sub_district_th" id="sub_district_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="district_en">District/Aumphur </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="district_en" id="district_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="district_th">เขต/อำเภอ </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="district_th" id="district_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="province_en">Province </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="province_en" id="province_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="province_th">จังหวัด </label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="province_en" id="province_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="postal_code">Postal Code / รหัสไปรษณีย์ </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="postal_code" id="postal_code" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="telephone">โทรศัพท์ (+66) </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="telephone" id="telephone" placeholder="00-000-000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="mobile_phone">โทรศัพท์มือถือ (+66) </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="mobile_phone" id="mobile_phone" placeholder="00-000-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="email_1">Email<span style="color: red">*</span> </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" name="email_1" multiple required placeholder="email1@sample.com, email2@sample.com">
                            <p class="help-block">ใส่ email หลายอันได้โดยใช้ , (comma) คั่น</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>

                </form>

                <p>&nbsp;</p>
            </div>

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
