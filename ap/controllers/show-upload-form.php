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

                        <form class="text-center" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <p>&nbsp;</p>
                            <input type="file" name="upload">
                            <p>&nbsp;</p>
                            <input type="submit" name="Submit" value="Upload" />
                            <a href="index.php" title="Cancel"><strong>Cancel</strong></a>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- END .page -->
