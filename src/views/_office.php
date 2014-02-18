<?php
require_once '../system/system.php';
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

                    <h2>สถาบันต้นสังกัดและที่ทำงานปัจจุบัน</h2>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="institue_en">Affiliated University/Institue<span style="color: red">*</span> </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="institue_en" id="institue_en" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="institue_th">มหาวิทยาลัย/สถาบันต้นสังกัด<span style="color: red">*</span> </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="institue_th" id="institue_en" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="faculty_en">Faculty/Unit/College </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="faculty_en" id="faculty_en">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="faculty_th">คณะ/หน่วยงาน </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="faculty_th" id="faculty_th">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="department_en">Department/Division </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="department_en" id="department_en">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="department_th">ภาควิชา/สาขา/แผนก </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="department_th" id="department_th">
                        </div>
                    </div>

                    <h3>ที่อยู่/ที่ติดต่อ ที่ทำงาน</h3>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_street_en">Building number & Street </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_street_en" id="office_street_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_street_th">เลขที่ อาคาร ถนน </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_street_th" id="office_street_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_sub_district_en">Sub-district/Tumbon </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_sub_district_en" id="office_sub_district_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_sub_district_th">แขวง/ตำบล </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_sub_district_th" id="office_sub_district_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_district_en">District/Aumphur </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_district_en" id="office_district_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_district_th">เขต/อำเภอ </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_district_th" id="office_district_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_province_en">Province </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_province_en" id="office_province_en" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label" for="office_province_th">จังหวัด </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="office_province_en" id="office_province_th" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="office_postal_code">Postal Code / รหัสไปรษณีย์ </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="office_postal_code" id="postal_code" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="office_telephone">โทรศัพท์ (+66) </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="office_telephone" id="office_telephone" placeholder="00-000-000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="office_mobile_phone">โทรศัพท์มือถือ (+66) </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="office_mobile_phone" id="office_mobile_phone" placeholder="00-000-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="office_website">Website (URL) </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="office_website" id="office_website" placeholder="http://www.myoffice.com">
                        </div>
                    </div>

                    <p>&nbsp;</p>




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
