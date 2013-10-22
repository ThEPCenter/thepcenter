
<div class="page bg-color-blueLight">
    <div class="page-region">
        <div class="page-region-content">

            <?php
            if (isset($_GET['new_file'])) {

                $fname = $_GET['new_file'];
                $sql_file = "SELECT * FROM tb_upload
                                    WHERE name = '$fname';
                            ";
                $result_file = mysql_query($sql_file);

                $f = mysql_fetch_array($result_file);

                if ($f['size'] >= 1024 && $f['size'] < 1048576) {
                    $f_size = $f['size'] / 1024 . ' kB';
                } elseif ($f['size'] >= 10478576) {
                    $f_size = $f['size'] / 10478576 . ' MB';
                } else {
                    $f_size = $f['size'] . ' Byte';
                }

                echo '
                            
                     <h2>ไฟล์ที่อัพโหลดล่าสุด คือ</h2>
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
                     
                        ';
            }
            ?>

            <div style="border: solid 1px;">
                <h2 class="text-center">Upload File</h2>
                <p>&nbsp;</p>
                <form class="text-center" name="form1" method="post" action="../controllers/upload-file.php" enctype="multipart/form-data">
                    <p>
                        <input type="file" name="upload">
                    </p>
                    <p>&nbsp;</p>
                    <p><strong>หมายเหตุ </strong>ชื่อไฟล์ต้องเป็น อักษรโรมัน (A-Z, a-z) หรือ ตัวเลข (0-9) หริอ  ขีดล่าง ( _ ) หรือ ขีดกลาง (-) หรือ จุด (.) หรือ วงเล็บ ( ( หรือ ) ) หรือ ช่องว่าง เท่านั้น</p>
                    <p>ต้องการ <a style="cursor: pointer;" id="change">เปลี่ยนชื่อไฟล์</a>
                        <span id="or-txt">หรือ</span>
                        <span id="check-wrap"><input type="checkbox" name="checkbox" id="checkbox"> <label for="checkbox">ใช้ชื่อไฟล์แบบสุ่ม</label></span>
                    </p>
                    <p id="change-form" style="display: none;">
                        <strong>เปลี่ยนชื่อไฟล์เป็น</strong>
                        <input type="text" name="newname" id="newname"> <a id="check-name" style="cursor: pointer;">ตรวจสอบชื่อ</a> <span>(อย่าลืมใส่สกุลไฟล์ เช่น .jpg, .pdf, .doc เป็นต้น)</span>
                    </p>
                    <div id="check-result"></div>
                    <p>&nbsp;</p>
                    <input type="submit" name="Submit" value="Upload" />
                    <a href="index.php" title="Cancel"><strong>Cancel</strong></a>
                </form>
                <script>
                    $(function(){
                        $("#change").click(function(){
                            $("#change-form").toggle();
                            $("#or-txt, #check-wrap").toggle();
                        });
								
                        $("#checkbox").click(function(){
                            $("#change, #or-txt").toggle();
							$("#newname").val(null);
                        });
						
                        $("#check-name").click(function(){
                            var name_check = $("#newname").val();
                            $.get("<?php controll('check-result'); ?>", {name_check:  name_check}, 
                            function(data){ $("#check-result").html(data); }
                       		 ); 
                        });
                     
                    });
                </script>
            </div>
        </div>
    </div>
</div> <!-- END .page -->
