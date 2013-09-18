        <div class="page bg-color-blueLight">
            <div class="page-region">
                <div class="page-region-content">
                    <h2>ไฟล์ที่อัพโหลดทั้งหมด</h2>
                    <table>
                        <tr>
                            <td>id</td><td>ชื่อไฟล์</td><td>ขนาด</td><td>URL</td><td>วันเวลาที่อัพโหลด</td>
                        </tr>
                        <?php
                        $sql_file = "SELECT * FROM tb_upload ORDER BY id DESC;";
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

                <div class="text-center"><a href="#header"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END .page -->
