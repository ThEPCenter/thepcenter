<?php
require_once '../system/system.php';

if (isset($_GET['show_center'])) {
    $show_center = $_GET['show_center'];
} else {
    header("Location: home.php");
    exit();
}

function center_name_th($center_code) {
    switch ($center_code) {
        case 'TFP':
            return 'ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง';
            break;
        case 'PPP':
            return 'ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา';
            break;
        case 'NSP':
            return 'ศูนย์วิจัยทางนาโนสเกลฟิสิกส์';
            break;
        case 'IGP':
            return 'ศูนย์วิจัยทางฟิสิกส์บูรณาการ';
            break;
        case 'CTP':
            return 'ศูนย์วิจัยทางฟิสิกส์คำนวณและทฤษฎี';
        default:
            return 'ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง';
            break;
    }
}

$center = center_name_th($show_center);

doc_head($center);
?>         
</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>
        <div class="bs-example">
            <?php
            if ($show_center == 'TFP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center">(Research Center in Thin Film Physics)</h3>
                <h4>ที่มา</h4>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากนโยบายของสำนักงานคณะกรรมการการอุดมศึกษาที่จะจัดตั้งศูนย์ความเป็นเลิศด้านฟิสิกส์  กลุ่มคณาจารย์และนักวิจัยผู้ซึ่งมีความเชี่ยวชาญในสาขาวิชาฟิสิกส์ทางด้านฟิสิกส์ของฟิล์มบาง จากมหาวิทยาลัยหลักของรัฐจำนวน 4 มหาวิทยาลัยคือ จุฬาลงกรณ์มหาวิทยาลัย  มหาวิทยาลัยขอนแก่น  มหาวิทยาลัยเชียงใหม่  และมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ได้เล็งเห็นถึงความสำคัญในการรวมกลุ่มของบุคลากรที่มีความเชี่ยวชาญที่เหมือนหรือใกล้เคียงกัน เพื่อพัฒนาความเป็นเลิศทางด้านวิชาการและการวิจัยให้ทั่วถึงทั้งในส่วนกลางและส่วนภูมิภาค จึงได้มีความเห็นร่วมกันเพื่อจัดตั้งศูนย์ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง (Research Center in Thin Film Physics) โดยมีศูนย์กลางอยู่ที่ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย มีการดำเนินงานภายใต้แผนของศูนย์ความเป็นเลิศด้านฟิสิกส์
                </p>
                <p>&nbsp;</p>

                <h4>จุดประสงค์</h4>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง ได้จัดตั้งขึ้นโดยมีจุดประสงค์เพื่อพัฒนาและผลิตทรัพยากรบุคคลและองค์ความรู้ใหม่ในศาสตร์ทางด้านฟิสิกส์ของฟิล์มบาง   มีการปรับโครงสร้างพื้นฐานในการทำวิจัยให้ได้มาตรฐานสากล    ส่งเสริมให้มีความร่วมมือระหว่างกลุ่มมหาวิทยาลัยและระหว่างมหาวิทยาลัยกับภาคอุตสาหกรรมที่เกี่ยวข้อง  รวมถึงสร้างบรรยากาศทางวิชาการและวิจัยในระดับนานาชาติ เพื่อนำองค์ความรู้ที่เกิดขึ้นไปใช้ให้เกิดประโยชน์กับความต้องการของประเทศ เพิ่มศักยภาพในการแข่งขันของประเทศทางด้านวิทยาศาสตร์และเทคโนโลยีในเวทีโลก และเสริมสร้างการพัฒนาที่ยั่งยืนของประเทศต่อไป
                </p>
                <p>&nbsp;</p>

                <h4>ห้องปฎิบัติการในเครือข่าย</h4>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบางประกอบด้วยห้องปฏิบัติการต่างๆ จำนวน 4 ห้องปฏิบัติการ คือ
                </p>
                <h4><em>1) ห้องปฏิบัติการวิจัยฟิสิกส์สารกึ่งตัวนำ (Semiconductor Physics Research Laboratory)</em></h4>
                <p>
                    ภาควิชาฟิสิกส์  คณะวิทยาศาสตร์  จุฬาลงกรณ์มหาวิทยาลัย<br>
                    โทรศัพท์ : 02-218-7687, 02-218-5108   โทรสาร : 02-253-1150<br>
                    Website – http://rctfp.phys.sc.chula.ac.th
                </p>
                <p>&nbsp;</p>

                <h4><em>2) ห้องปฏิบัติการวิจัยฟิสิกส์ของแข็ง</em></h4>
                <p>
                    ภาควิชาฟิสิกส์  คณะวิทยาศาสตร์  มหาวิทยาลัยขอนแก่น<br>
                    โทรศัพท์:   043-202222 -39 ต่อ 1894    โทรสาร:  043-203359
                </p>
                <p>&nbsp;</p>

                <h4><em>3) ห้องปฏิบัติการวิจัยฟิสิกส์ประยุกต์  (Applied Physics Research Laboratory)</em></h4>
                <p>
                    ภาควิชาฟิสิกส์  คณะวิทยาศาสตร์  มหาวิทยาลัยเชียงใหม่<br>
                    โทรศัพท์: 053-943375 ต่อ 11 โทรสาร:  053-357511<br>
                    Website – http://www.physics.science.cmu.ac.th/aprl/aprl.htm
                </p>
                <p>&nbsp;</p>

                <h4><em>4) ห้องปฏิบัติการวิจัยเทคโนโลยีฟิล์มบาง </em></h4>
                <p>
                    ภาควิชาฟิสิกส์  คณะวิทยาศาสตร์  มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี<br>
                    โทรศัพท์: 02-470-8876,  02-470-8873   โทรสาร: 02-427-8785
                </p>
                <p>&nbsp;</p>

                <h4>งานวิจัย</h4>
                <p>ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบางจะมีการพัฒนาและการดำเนินการวิจัยในระยะแรกแบบ interdisciplinary ซึ่งมีหัวข้อหลัก ๆ เช่น</p>

                <ul>
                    <li>
                        <p>
                            การศึกษาวิจัยสมบัติพื้นฐานทางฟิสิกส์ของสารกึ่งตัวนำสำหรับประดิษฐ์เป็นเซลล์แสงอาทิตย์แบบฟิล์มบาง ที่มีโครงสร้างพิเศษเพื่อการพัฒนาให้มีประสิทธิภาพที่สูงขึ้นจากเซลล์แสงอาทิตย์ที่ใช้อยู่ทั่วไป
                        </p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td width="292" align="center" valign="top"><img src="../images/cluster1/01.png" width="180" height="136">
                                        <p align="center">&nbsp;</p></td><td width="324" align="center" valign="top"><img src="../images/cluster1/02.png" width="160" height="134"></td>
                                </tr>
                                <tr>
                                    <td width="292" valign="top" class="PictureDiscribe"><p align="center"><em><span lang="th" xml:lang="th">ระบบระเหยสารสำหรับชั้นฟิล์มบาง </span></em><em>CIGS</em></p></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><p align="center"><em><span lang="th" xml:lang="th">ระบบ </span></em><em>molecular beam epitaxy <span lang="th" xml:lang="th">สำหรับฟิล์มบาง </span>CIGS</em></p></td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top"><img src="../images/cluster1/03.png" width="164" height="130"></td>
                                    <td width="324" align="center" valign="top"><img src="../images/cluster1/04.png" width="179" height="130"></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="292"></td>
                                    <td valign="top" width="324"></td>
                                </tr>
                                <tr>
                                    <td width="292" valign="top" class="PictureDiscribe"><p align="center"><em>CIGS<span lang="th" xml:lang="th"> </span>Thin Film Solar Cells under I-V Testing</em></p></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><p align="center"><em>CIGS<span lang="th" xml:lang="th"> </span>Thin Film Solar Mini-module</em></p></td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top"><img src="../images/cluster1/05.png" width="197" height="151"></td>
                                    <td width="324" align="center" valign="top"><img src="../images/cluster1/06.png" width="189" height="151"></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="292"></td>
                                    <td valign="top" width="324"></td>
                                </tr>
                                <tr>
                                    <td width="292" valign="top" class="PictureDiscribe"><p align="center"><em><span lang="th" xml:lang="th">ประสิทธิภาพและ </span></em><em>quantum efficiency <span lang="th" xml:lang="th">ของ </span>CIGS<span lang="th" xml:lang="th"> </span>Solar   Cells</em><span lang="th" xml:lang="th"></span></p></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><p align="center"><em><span lang="th" xml:lang="th">ประสิทธิภาพของ </span></em><em>CIGS<span lang="th" xml:lang="th"> </span>Solar Mini-module</em></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </li>
                    <li>
                        <p>
                            การศึกษาวิจัยสมบัติทางฟิสิกส์พื้นผิวของฟิล์มบางที่เตรียมโดยวิธี molecular beam epitaxy ทั้งในด้านการทดลองและทฤษฎีพื้นฐาน
                        </p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="top" width="292"></td>
                                    <td valign="top" width="324"></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="292"><p align="center"><img src="../images/cluster1/07.png" width="201" height="133"></p></td>
                                    <td width="324" valign="top"><p align="center"><img src="../images/cluster1/08.png" width="184" height="133"></p></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="PictureDiscribe"><em><span lang="th" xml:lang="th">การศึกษาผิวของฟิล์มบางโดยใช้ </span></em><em>Atomic   Force Microscope</em></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><em><span lang="th" xml:lang="th">การจำลองการเกิดของฟิล์มบางโดย </span></em><em>Computer   Simulation</em></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p> 
                    </li>
                    <li>
                        <p>การศึกษาวิจัยสมบัติทางฟิสิกส์ของสารกึ่งตัวนำแถบพลังงานกว้างสำหรับการพัฒนาประสิทธิภาพสูงสิ่งประดิษฐ์ทางด้าน optoelectronics และ photovoltaic</p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="top" width="292"></td>
                                    <td valign="top" width="324"></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="292"><p align="center"><img src="../images/cluster1/09.png"></p></td>
                                    <td width="324" valign="top"><p align="center"><img src="../images/cluster1/10.png"></p></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="PictureDiscribe"><em><span lang="th" xml:lang="th">ระบบเตรียมฟิล์มบางโปร่งใสนำไฟฟ้า</span></em><em></em></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><em><span lang="th" xml:lang="th">ฟิล์มบาง </span></em><em>ZnO</em><em>(Al)</em></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </li>
                    <li>
                        <p>การศึกษาวิจัยสมบัติฟิสิกส์ของฟิล์มบางสำหรับประดิษฐ์ smart window ในการใช้พลังงานอย่างประหยัดและมีประสิทธิภาพ</p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top"><img src="../images/cluster1/11.png"></td>
                                    <td align="center"><img src="../images/cluster1/12.png"></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="PictureDiscribe"><p align="center"><em>Schematic diagram ของ smart window ที่ใช้ควบคู่กับ <br>
                                                solar cell (Source : NREL,   USA)</em></p></td>
                                    <td valign="top" class="PictureDiscribe"><p align="center"><em><span lang="th" xml:lang="th">ตัวอย่างของ</span></em><em> smart window (Source :   NREL, USA)</em></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </li>
                    <li>
                        <p>การประดิษฐ์เซลล์แสงอาทิตย์ชนิดดายเซนซิไทด์</p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top"><img src="../images/cluster1/13.png"></td>
                                    <td align="center" valign="top"><img src="../images/cluster1/14.png"></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="PictureDiscribe"><p align="center"><em>Schematic diagram <span lang="th" xml:lang="th">ของ </span>dye-sensitized solar cell</em></p></td>
                                    <td valign="top" class="PictureDiscribe"><p align="center"><em>Dye-sensitized solar cell <span lang="th" xml:lang="th">(มหาวิทยาลัยขอนแก่น)</span></em><em><span lang="th" xml:lang="th"></span></em></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </li>
                    <li>
                        <p>การศึกษาวิจัยและพัฒนาระบบตรวจวัดก๊าซโดยใช้เทคโนโลยีฟิล์มบางของสารประกอบโลหะออกไซด์</p>
                        <table cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td width="292" align="center" valign="top"><img src="../images/cluster1/15.png"></td>
                                    <td width="324" align="center" valign="top"><img src="../images/cluster1/16.png"></td>
                                </tr>
                                <tr>
                                    <td width="292" valign="top" class="PictureDiscribe"><p align="center"><em>ZnO</em><em> Nanostructure <span lang="th" xml:lang="th">สำหรับ </span>gas sensor <span lang="th" xml:lang="th">และ </span>dye-sensitized solar   cell</em></p></td>
                                    <td width="324" valign="top" class="PictureDiscribe"><p align="center"><em>Schematic diagram <span lang="th" xml:lang="th">ของ </span>thin film gas sensor</em><em></em></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </li>
                </ul>
                <?php
            } elseif ($show_center == 'PPP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center">(Research Center in Particle Beam and Plasma Physics)</h3>


                <?php
            } elseif ($show_center == 'NSP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center"></h3>


                <?php
            } elseif ($show_center == 'IGP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center">(Research Center in Integrated Physics)</h3>


                <?php
            } elseif ($show_center == 'CTP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center">(Research Center in Computational and Theoretical Physics)</h3>


                <?php
            }
            ?>

            <?php get_includes('footer'); ?>
        </div>
    </div>
    <!-- /.container -->
</body>
</html>
