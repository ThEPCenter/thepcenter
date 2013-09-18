            <div class="page bg-color-blueLight">

                <h2 class="text-center">เพิ่ม Gallery</h2>

                <div class="page-region">
                    <div class="page-region-content">

                        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <table>
                                <tr>
                                    <td width="170">ชื่อแกลอรี</td>
                                    <td>
                                        <div class="input-control text">
                                            <input type="text" name="title" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>คำอธิบาย /รายละเอียด</td>
                                    <td>
                                        <div class="input-control text">
                                            <textarea name="detail" ></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Add"> <a href="gallery.php" style="font-weight: bold;">Cancel</a></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>