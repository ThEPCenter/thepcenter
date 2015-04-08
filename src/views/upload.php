<?php
require_once '../system/system.php';
notlogin_header('home.php');

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="background-color: #e7e3b1;">


            <?php
            // =========== Error ==============
            if (isset($_GET['upload_error'])) {
                if ($_GET['upload_error'] == 'name_dup') {
                    echo '	
                <h3 style="text-align: center;">เกิดข้อผิดพลาด : ' . $_GET['name_2'] . ' <span style="color: red;">ชื่อซ้ำ</span></h3>
                <p>&nbsp;</p>
                ';
                } else {
                    echo '	
                <h3 style="text-align: center;">เกิดข้อผิดพลาด : ชื่อไฟล์ต้องเป็น อักษรโรมัน (A-Z, a-z) หรือ ตัวเลข (0-9) หริอ  ขีดล่าง ( _ ) หรือ ขีดกลาง (-) หรือ จุด (.) หรือ วงเล็บ ( ( หรือ ) )  เท่านั้น</h3>
                <p>&nbsp;</p>
                ';
                }
            }
            ?>

            <?php
            if (isset($_GET['new_file'])) {

                $fname = $_GET['new_file'];
                $sql_file = "SELECT * FROM tb_upload
                                    WHERE name = '$fname';
                            ";
                $result_file = mysql_query($sql_file);

                $f = mysql_fetch_array($result_file);

                if ($f['size'] >= 1024 && $f['size'] < 1048576) {
                    $f_size = number_format($f['size'] / 1024, 3, '.', '') . ' kB';
                } elseif ($f['size'] >= 10478576) {
                    $f_size = number_format($f['size'] / 10478576, 3, '.', '') . ' MB';
                } else {
                    $f_size = $f['size'] . ' Byte';
                }

                echo '
                  <div class="col-md-12" style="background-color: #a4b4c2;">    
                     <h2 style="text-align: center;">ไฟล์ที่อัพโหลดล่าสุด</h2>
                     <table>
                        <tr>
                            <td>ชื่อไฟล์</td>
                            <td>' . $f['name'] . '</td>
                        </tr>
                        <tr>
                            <td>ขนาด</td>
                            <td>' . $f_size . '</td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>' . DOMAIN . '/' . $f['folder'] . '/' . $f['name'] . '</td>
                        </tr>
                     </table>
                     <p>&nbsp;</p>
                  </div>   
                        ';
            }
            ?>

            <div class="col-md-12">
                <h2 class="text-center header-type">Upload File</h2>
                <form role="form" name="form1" method="post" action="../controllers/upload-file.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>เลือกไฟล์ <span style="color: red;">**</span></label>
                        <input type="file" name="upload" required>
                        <p class="help-block"><strong>หมายเหตุ </strong>ชื่อไฟล์ต้องเป็น อักษรโรมัน (A-Z, a-z) หรือ ตัวเลข (0-9) หริอ  ขีดล่าง ( _ ) หรือ ขีดกลาง (-) หรือ จุด (.) หรือ วงเล็บ ( ( หรือ ) )  เท่านั้น</p>
                    </div>
                    <p>&nbsp;</p>

                    <p>ต้องการ <a style="cursor: pointer;" id="change">เปลี่ยนชื่อไฟล์</a>
                        <span id="or-txt">หรือ</span>
                        <span id="check-wrap">

                            <label class="sr-only">เปลี่ยนชื่อไฟล์</label>
                            <input type="checkbox" name="checkbox" id="checkbox">                            
                            <label for="checkbox">ใช้ชื่อไฟล์แบบสุ่ม</label></span>
                    </p>

                    <p id="change-form" style="display: none;">
                        &nbsp;<br>
                        <label>เปลี่ยนชื่อไฟล์เป็น </label>                       
                        <input type="text" name="newname" id="newname" style="width: 300px;"> <a id="check-name" style="cursor: pointer;">ตรวจสอบชื่อ</a> <span>(อย่าลืมใส่สกุลไฟล์ เช่น .jpg, .pdf, .doc เป็นต้น)</span>
                    </p>
                    <p>&nbsp;</p>

                    <div id="check-result" style="text-align: center;"></div>
                    <p>&nbsp;</p>
                    <button type="button" class="btn btn-default" onclick="window.location = 'index.php'" title="ยกเลิก">Cancel</button> &nbsp;
                    <input type="submit" class="btn btn-primary" name="Submit" value="Upload">                    
                </form>
                <script>
                    $(function () {
                        $("#change").click(function () {
                            $("#newname").val('');  // Clear value in input#newname
                            $("#change-form").toggle();
                            $("#or-txt, #check-wrap").toggle();
                            $("#check-result").html('');
                        });

                        $("#checkbox").click(function () {
                            $("#change, #or-txt").toggle();
                            $("#newname").val(null);
                        });

                        $(document).ajaxStart(function () {
                            $('#check-result').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                        });

                        $("#check-name").click(function () {
                            var name_check = $("#newname").val();
                            $.get("<?php controll('check-result'); ?>", {name_check: name_check},
                            function (data) {
                                $("#check-result").html("<strong>ผลการตรวจสอบ :</strong> " + data);
                            }
                            );
                            $("#check-result").show();
                        });

                    });
                </script>
                <p>&nbsp;</p>
            </div>            
        </div> <!-- /.row -->        
        <p>&nbsp;</p>

        <div class="row" style="background-color: #e7e3b1;">
            <div class="col-md-12">
                <h2>10 ไฟล์ที่อัพโหลดล่าสุด</h2>
                <table class="table">
                    <tr>
                        <td>id</td><td>ชื่อไฟล์</td><td>ขนาด</td><td>URL</td><td>วันเวลาที่อัพโหลด</td>
                    </tr>
                    <?php
                    $sql_file = "SELECT * FROM tb_upload ORDER BY id DESC LIMIT 10;";
                    $result_file = mysql_query($sql_file);
                    while ($f = mysql_fetch_array($result_file)) {
                        if ($f['size'] >= 1024 && $f['size'] < 1048576) {
                            $f_size = number_format($f['size'] / 1024, 3, '.', '') . ' kB';
                        } elseif ($f['size'] >= 10478576) {
                            $f_size = number_format($f['size'] / 10478576, 3, '.', '') . ' MB';
                        } else {
                            $f_size = $f_size = number_format($f['size'], 3, '.', '') . ' Byte';
                        }
                        echo '
                        <tr>
                            <td>' . $f['id'] . '</td>
                            <td>' . $f['name'] . '</td>
                            <td>' . $f_size . '</td>
                            <td>' . DOMAIN . '/' . $f['folder'] . '/' . $f['name'] . '</td>
                            <td>' . $f['modified'] . '</td>
                        </tr>    
                        ';
                    }
                    ?>
                </table>
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
