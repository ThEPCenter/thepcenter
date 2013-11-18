<?php
require_once '../system/system.php';
doc_head('ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา');
$lab = $_GET['lab'];
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <?php if ($lab == 'ion_beam') { ?>

            <div class="row">
                <h2 class="text-center">1. ห้องปฏิบัติการวิจัยด้านลำไอออนและการประยุกต์<br>
                    (Ion Beam Physics & Applications Research Laboratory)</h2>
                <h3>(ก) ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรมวิจัย/ศึกษาด้านนี้จะเกี่ยวข้องกับอันตรกิริยา (Interaction) ระหว่างอนุภาคไอออนหลายชนิดกับวัสดุต่างๆ ทั้งที่มีชีวิตและไม่มีชีวิต โดยอนุภาคไอออนเหล่านี้จะเป็นกลุ่มที่มีมวลตั้งแต่ระดับอนุภาคโปรตอน (มีมวลมากกว่าอนุภาคอิเล็กตรอน 1836 เท่า) ขึ้นไปจนถึงระดับไอออนของอะตอมต่างๆ</p>
                <p>&nbsp;</p>

                <h3>(ข) เครื่องมือที่เกี่ยวข้อง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อนุภาค/ไอออนดังกล่าวจะถูกผลิตและถูกเร่งให้มีพลังงานสูงขึ้นถึงระดับ keV และ MeV(1 จูลส์ = 6.242 x 1012 MeV = 6.242 x 1015 keV หรืออนุภาคโปรตอนพลังงาน 1 MeV มีความเร็ว 1.4 x 107 เมตร/วินาที โดยที่แสงมีความเร็ว 3 x 108 เมตร/วินาที) ด้วยเครื่องเร่งอนุภาค 4 ชนิด ดังต่อไป</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/mv.jpg">
                    <p><small>1. 1.7 MV Tandem " Tandetron " Accelerator</small></p>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/ion.jpg">
                    <p><small>2. Varian Ion Implanter</small></p>
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/cmu.jpg">
                    <p><small>3. CMU Nitrogen Ion Implanter</small></p>
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/ver.jpg">
                    <p><small>4. CMU Vertical Ion Implanter</small></p>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <strong>1. Tandem "Tandetron " Accelerator</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเครื่องเร่งอนุภาค/ไอออน ชนิดแทนเด็มเครื่องแรกและเครื่องเดียวของประเทศไทย ที่ได้รับบริจาคมาจากภาควิชาฟิสิกส์ของ Chalmers University of Technology เมือง Gothenburg ประเทศสวีเดน ผลิตโดยบริษัท High Voltage Engineering Europa แห่งประเทศเนเธอร์แลนด์ ในชื่อรุ่นว่า "Tandetron" มีราคาประมาณ 50 ล้านบาท สามารถผลิตไอออนได้หลายชนิดมากจากเครื่องผลิตไอออน 2 ชนิด คือ ชนิด Duoplasmatron ion source และ Cs sputter ion source และสามารถเร่งให้ไอออนเหล่านี้ มีพลังงานสูงขึ้นระหว่าง 0.8-5 MeV ทั้งนี้จะขึ้นอยู่กับค่าประจุไฟฟ้าของไอออนเองด้วย หน้าที่หลัก คือ ใช้ในการวิเคราะห์ผิวของวัสดุด้วยเทคนิคต่างๆ ใช้ในการสังเคราะห์วัสดุสมัยใหม่ และใช้ในการดัดแปลงผิววัสดุในระดับไมครอ</p>
                <p class="text-center"><img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/tandem.jpg"><br>
                    <small>ภาพถ่ายเครื่องผลิตไอออนทั้ง 2 ชนิด ที่ติดตั้งเข้ากับระบบของเครื่องเร่งอนุภาคแทนเดอตรอน แล้ว เครื่องผลิตไอออนทั้งสองได้รับการสนับสนุนจากสำนักงานคณะกรรมการวิจัยแห่งชาติ (วช.) ผลิตโดยบริษัท Peabody มลรัฐแมสสาชูเซตต์ สหรัฐอเมริก</small></p>
                <p>&nbsp;</p>

                <strong>2. Varian Ion Implanter</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เคยเป็นเครื่องไอออนอิมพลานเตอร์ เครื่องแรกของประเทศ [ปัจจุบันมีอีก 2 เครื่อง ที่ศูนย์วิจัย Electronics Research Center (ERC) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง กับที่ศูนย์เทคโนโลยีไมโครอิเล็กทรอนิคส์ (TMEC) ที่จ.ฉะเชิงเทราของศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ] ซึ่งได้รับบริจาคมาจากบริษัท RadioMed รัฐแมสสาชูเชตต์ ประเทศสหรัฐอเมริกา ผลิตโดยบริษัท Varian แห่งสหรัฐอเมริกาในชื่อรุ่น 200 DF-5 Varian Extrion มีราคาประมาณ 25 ล้านบาท สามารถผลิตไอออนจากแก๊สได้หลายชนิดด้วยเครื่องผลิตไอออนชนิด Freeman type ion source โดยมีแม่เหล็กคัดแยก (analyzing magnet) และสามารถเร่งไอออนให้มีพลังงานได้ระหว่าง 50-200 keV หน้าที่หลักคือ ใช้ในการสังเคราะห์และดัดแปลงผิววัสดุที่มีความหนาระดับไมครอน</p>
                <p>&nbsp;</p>

                <strong>3. CMU Nitrogen Ion Implanter</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเครื่องเร่งไอออนไนโตรเจนเครื่องที่สองที่เราสร้างขึ้นเอง ผลิตไอออนไนโตรเจนจาก Duoplasmatron ion source สามารถเร่งไอออนไนโตรเจนให้มีพลังงานได้ ระหว่าง 30-120 keV โดยเป็นลำไอออนขนาดใหญ่ที่มีเส้นผ่าศูนย์กลางประมาณ 12 ซม. ระบบนี้ไม่มีแม่เหล็กคัดแยกไอออน หน้าที่หลักคือ ใช้ในการดัดแปลงผิววัสดุด้วยเทคนิค Ion implantation และใช้ในการชักนำให้เกิดการกลายพันธ์ (Induced mutation) ในพืช</p>
                <p>&nbsp;</p>

                <strong>4. CMU Vertical Ion Implanter</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเครื่องเร่งไอออนพลังงานต่ำอีกเครื่องที่สร้างขึ้นเองเพื่องานวิจัยทางด้านชีววิทยาโดยเฉพาะ สามารถผลิตไอออนได้หลายชนิด จาก Nielsen type ion source มีพลังงานระหว่าง 2.5-30 keV มีแม่เหล็กคัดแยกไอออน และที่สำคัญลำไอออนถูกยิงลงมาในแนวดิ่ง เพื่อให้เหมาะกับชิ้นงานทางชีววิทยาที่มักใส่หรือเลี้ยงอยู่ในถาดแก้ว petri disc หน้าที่หลัก คือ ใช้ศึกษาผลของอันตรกิริยาระหว่างไอออนชนิดต่างๆ กับเซลล์หรือเนื้อเยื่อ</p>
                <p>&nbsp;</p>

                <h3>(ค) ผลพลอยได้ที่มีประโยชน์เชิงประยุกต์</h3>
                <strong>1. เทคนิคการวิเคราะห์ธาตุแบบที่ใช้ลำไอออนกระตุ้น</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความก้าวหน้าของโลกอนาคต ขึ้นอยู่กับคุณภาพของวัสดุเป็นอย่างมาก ซึ่งได้พิสูจน์แล้วอย่างชัดเจนว่าวัสดุเหล่านี้ไม่จำเป็นต้องมีขนาดใหญ่โต ก็มีประโยชน์มหาศาลได้ เช่น วัสดุ Magnetoresistance ที่ทำหัวอ่าน/เขียนของฮาร์ดดิสก์มีขนาดเล็กจนมองไม่เห็นด้วยตาเปล่า การวิเคราะห์ตรวจสอบวัสดุสมัยใหม่เหล่านี้จึงต้องใช้เทคนิคพิเศษ และมักต้องใช้หลายวิธีร่วมกัน</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยเครื่อง 1.7 MV tandem "Tandetron" accelerator ที่ได้รับบริจาคมา ทำให้เราสามารถพัฒนาเทคนิควิเคราะห์ที่ใช้อนุภาค/ไอออน เป็น โพรบ (probe) สำเร็จ 4 ชนิด คือ เทคนิค RBS , RBS/Channeling, PIXE และ IL ซึ่งไม่เคยมีมาก่อนในประเทศไทย ปัจจุบันเปิดให้บริการแก่ผู้ที่สนใจทั่วไปแล้ว รายละเอียดของเทคนิควิเคราะห์ทั้ง 4 ดังกล่าว สามารถดูได้ที่เอกสาร ชื่อ "คู่มือแนะนำเทคนิควิเคราะห์ RBS, RBS/Channeling, PIXE และ IL" และบทความชื่อ "เทคนิค PIXE กับปัญหาหมอกควันที่เชียงใหม่" ที่ตีพิมพ์อยู่ในวารสารฟิสิกส์ไทย ฉบับ กย.-พย. 2550 และบทความวิชาการดังต่อไปนี้</p>
                <p>- T. Kamwanna, N. Pasaja, L.D. Yu, T. Vilaithong, A. Anders and S. Singkarat, "MeV-ion beam analysis of the interface between filtered cathodic arc-deposited a-carbon and single crystalline silicon " , Nucl. Instr. and Meth.B, Meth B266 (2008) 5175-5179</p>
                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/analysis.jpg"><br>
                    <small>ภาพถ่ายภายใน analysis chamber แสดงให้เห็นถึงตำแหน่งของหัววัดต่างๆที่ใช้ในเทคนิควิเคราะห์ทั้ง 4 ชนิด</small>
                </p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/bok1.jpg">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/bok2.jpg">
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <strong>2. การพัฒนาพันธุ์พืชโดยการชักนำให้กลายพันธุ์ด้วยไอออน</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีภาพที่ค่อนข้างชัดเจนว่า โลกอนาคตในอีกประมาณ 40 ปีข้างหน้า (นับจากปี พศ. 2551) จะประสบกับวิกฤตการณ์ของเรื่องน้ำมันดิบกับอาหารมีราคาแพงและภาวะโลกร้อน คำตอบหนึ่งของทั้ง 3 ปัญหาอาจอยู่ที่เรื่องการเกษตรกรรมสมัยใหม่ที่มีการพัฒนาพันธุ์พืชที่ให้ผลผลิตสูง ปรับตัวได้ดีกับความแปรปรวนของภูมิอากาศ และยังสามารถใช้ลำต้นผลิตเอทธานอลได้อีกด้วย</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การพัฒนาพันธ์พืชที่รวดเร็ววิธีหนึ่งก็คือการชักนำให้เกิดการกลายพันธ์ ซึ่งผลพลอยได้จากการที่มีเครื่อง Ion implanter เองหลายแบบ ทำให้เราประสบความสำเร็จเป็นแห่งแรกของโลกในการชักนำให้พืชกลายพันธ์โดยใช้ลำไอออนไนโตรเจนพลังงานต่ำ ดังจะเห็นได้จากตัวอย่างต่อไปนี้</p>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/flowerYer.jpg"><br>
                    <small>ดอกเยอบีรากลายพันธุ์</small>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/flower2.jpg"><br>
                    <small>ต้นชวนชม กลายพันธุ์(ให้ดอกมี 4 กลีบด้วย)</small>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/flower3.jpg"><br>
                    <small>ข้าวหอมมะลิกลายพันธุ์(ให้ข้าวเจ้าสีม่วงเข้ม)</small>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <p class="text-center">                
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/bok3.jpg"><br>
                    <small>รายละเอียดของเรื่องนี้ สามารถดูได้ที่บทความชื่อ "เทคโนโลยีชีวะวิศวกรรมลำไออน" ที่ตีพิมพ์อยู่ในวารสารฟิสิกส์ไทย ฉบับ กย.-พย. 2551,หน้า 10 - 14</small>
                </p>
                <p>&nbsp;</p>

                <strong>3. การสังเคราะห์วัสดุสมัยใหม่ ด้วยเทคนิค Ion Implantation และ Ion Beam Assisted Deposition (IBAD)</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสังเคราะห์ฟิล์มบางของวัสดุสมัยใหม่ เพื่อให้มีคุณสมบัติเฉพาะบางประการดีขึ้นกว่าเดิม มีทำกันหลายวิธี เช่น วิธี Spray pyrolysis deposition, Magnetron sputtering , Molecular beam epitaxy (MBE), Chemical vapor deposition (CVD), Atomic layer deposition (ALD) ฯลฯ แต่ก็มีอีกบางวิธีที่ใช้ลำไอออน คือ เทคนิค Ion implantation ที่วงการพัฒนาเซมิคอนคัดเตอร์ใช้ในการโด๊ป (dope) ผลึกซิลิกอนเพื่อให้ กลายเป็นชนิด p-type (โด๊ปด้วยไอออนโบรอน) หรือ n-type (โด๊ปด้วยไอออนฟอสฟอรัสหรืออาร์เซนิค) แต่ที่ผ่านมาเราได้ใช้เทคนิคนี้อิมพลานต์ไอออนคาร์บอน เข้าไปในซิลิกอนเวเฟอร์ เพื่อกระตุ้นให้เกิด SiC layer บางๆ ขึ้น ดังปรากฏรายละเอียดในเอกสารวิชาการดังต่อไปนี้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- S. Intarasiri, L.D. Yu , S. Singkarat, A. Hallen, J. Lu, M. Ottosson, J. Jensen and G. Possnert, "Effects of low-fluence swift iodine ion bombardment on the crystallization of ion-beam-synthesized silicon carbide " , J. Appl. Phys. 101, 2007, s.084311.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- S. Intarasiri, A. Hallen, J. Lu, J. Jensen, L.D. Yu, K. Bertilsson, M. Wolborski, S. Singkarat, and G. Possnert, " Crystalline quality of 3C-SiC formed by high-fluence C+-implanted Si", Applied Surface Science 253(2007) 4836-4842.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในลำดับต่อไป เราจะผสมผสานวิธีการนี้กับเทคนิคการระเหยด้วยลำอิเล็กตรอน (e-beam evaporator) ซึ่งเรียกรวมว่าเทคนิค Ion Beam Assisted Deposition (IBAD) เพื่อสังเคราะห์ชั้นฟิล์มบางของวัสดุสมัยใหม่ที่มีคุณสมบัติดีขึ้น เช่นเพื่อใช้ทำ Thermoelectric device (TE) ที่สามารถเปลี่ยนความร้อนเป็นกระแสไฟฟ้าได้เป็นต้น ซึ่งเป็นอีกแนวทางหนึ่งในการมีส่วนร่วมด้วยช่วยกันในความพยายามเตรียมแผนสำรองเพื่อผ่อนผลกระทบของวิกฤตการณ์พลังงานในอนาค</p>
                <p>&nbsp;</p>
                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/e-beam.jpg"><br>
                    <small>ระบบ e-beam evaporator ที่ได้รับการสนับสนุนมาจากทบวงการพลังงานปรมาณูระหว่างประเทศ [International Atomic Energy Agency (IAEA), Vienna] ผลิตโดยบริษัท Tectra GmbH ณ เมืองแฟรงเฟิร์ต ประเทศเยอรมนี</small>
                </p>
                <p>&nbsp;</p>

                <strong>4. การประดิษฐ์อุปกรณ์จิ๋วด้วยเทคนิค Ion Beam Lithography</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลำอนุภาคโปรตอนหรือลำไอออนฮีเลี่ยมที่มีพลังงานในเรือนMeV ยังมีบทบาทที่สำคัญอีกประการ คือ สามารถใช้เขียนลวดลายลงบนวัสดุบางประเภทได้ เช่น พอลิเมอร์ ซึ่งมีข้อดีเหนือ เทคนิค Electron-beam lithography หรือ Photolithography หรือ Focused ion beam ตรงที่สามารถทำให้เกิดร่องที่ลึกกว่า แคบกว่า และคมกว่า หรือที่กล่าวกันว่ามีค่า aspect ratio สูง เราได้ประสบความสำเร็จขั้นต้นในการทำร่องลวดลายขึ้นมาบนชั้นพอลิเมอร์ ชนิด PMMA ที่มีค่า aspect ratio = 10 โดยใช้ลำไอออนฮีเลี่ยม พลังงาน 3 MeV ซึ่งปรากฏรายละเอียดอยู่ในบทความวิชาการดังต่อไปนี้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- N. Puttaraksa, S. Gorelick, T. Sajavaara, M. Laitinen, S. Singkarat, and H. J. Whitlow, "Programmable proximity aperture lithography with MeV ion beams ", Journal of Vacuum Science and Technology B, Technology B26 (2008) 1732 - 1739</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในลำดับต่อไปนี้ จะได้ใช้เทคนิคนี้ พัฒนา microfluidic device เพื่อทำเป็น เซนเซอร์จิ๋ว สำหรับงานด้านชีววิทยาและวิทยาศาสตร์การแพทย์ โครงการนี้เป็นการร่วมมือกับห้องปฏิบัติการของ Prof. Harry J. Whitlow ที่ภาควิชาฟิสิกส์ แห่งUniversity of Jyvaskyla ประเทศฟินแลนด์</p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/p1.jpg"><br>
                    <small>แสดงสมรรถภาพของลำอนุภาค โปรตอนที่เหนือกว่าวิธีการอื่นๆ<br>
                        [F. Watt et al., Int. J. Nanosci. 4 (2005) 269.]</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/p2.jpg"><br>
                    <small>ภาพขยายแสดงคุณภาพของร่องใน PMMAหนา 7.5 ไมครอน ที่ทำขึ้นโดยลำไอออนฮีเลี่ยม</small>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <h3>ง) การศึกษา/วิจัยที่พยายามยืนบนขาตนเอง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสร้างชาติจำเป็นต้องมีคนรุ่นใหม่ที่มีความสามารถและมีทักษะใช้ทั้งสมองและสองมือคิดและสร้างชิ้นงานจริงๆได้เป็นอย่างดี การวิจัย/ศึกษาทางด้านฟิสิกส์ทดลอง (Experimental Physics) จึงเป็นการฝึกฝนที่ครอบคลุมที่สุดโดยเฉพาะการได้มีโอกาสใช้เครื่องมือขนาดใหญ่ และ/หรือ ที่มีความสลับซับซ้อนสูง แต่เครื่องมือเหล่านี้ก็มักจะมีราคาสูงตามไปด้วย ดังนั้น เราจึงหาทางออกโดยการพยายามสร้างเครื่องมือขึ้นเองด้วยดังเช่น การสร้างเครื่อง Ion implanter ขึ้นเอง ดังกล่าวแล้ว นอกจากนั้น ยังได้สร้างอุปกรณ์/เครื่องมือเสริมอีกหลายชนิด ดังตัวอย่างต่อไปนี้</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/themal.jpg"><br>
                    <small>เครื่อง Thermal evaporator</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/spin.jpg"><br>
                    <small>เครื่อง Spin Coater(อัตราการหมุน 500-3,500 rpm ควบคุมให้คงที่ด้วยระบบ Negativefeedback optical encoder)</small>
                </div>

                <br style="clear: both;">

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/ape.jpg">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity1/ape2.jpg">
                </div>

                <br style="clear: both;">

                <div class="col-sm-12 col-md-12 text-center">
                    ระบบ aperture ของลำอนุภาคโปรตอน หรือ ไอออนฮีเลี่ยมที่ปรับขนาดและรูปทรงได้ 2 มิติ ที่มีความละเอียดสูงระดับ 0.5 ไมครอน
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <h3>จ) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            รศ. ดร.สมศร สิงขรัตน์ <em>ผู้ประสานงาน</em><br>
                            ผศ.ดร. ยู เหลียงเติ้ง<br>
                            รศ.ดร. สมบูรณ์ อนันตลาโภชัย<br>
                            ดร.ดุษฎี สุวรรณขจร<br>
                            ผศ.ดร.อุดมรัตน์ ทิพวรรณ<br>
                            ดร.เสวต อินทรศิริ<br>
                            ดร.ธีรศักดิ์ คำวรรณะ
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            วิศวกรคอมพิวเตอร์/อิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            Mr. Michael W. Rhodes
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านอิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            นายวิฑูรย์ จินะมูล<br>
                            นายวิษณุ บุญสุข
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านเครื่องเร่งอนุภาค :
                        </td>
                        <td style="text-align: left;">
                            นายโฉม ทองเหลื่อม<br>
                            นายสุวิชา รัตนรินทร์<br>
                            นายระเบียบ สุวรรณโกสุม<br>
                            นายชาญวิทย์ ศรีพรหม
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านโรงงานเครื่องกล :
                        </td>
                        <td style="text-align: left;">
                            นายราเชนทร์ เจริญนุกูล<br>
                            นายสันติศักดิ์ คำสุข<br>
                            นายประเสริฐ ใจนันตา
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาเอก :
                        </td>
                        <td style="text-align: left;">
                            นายนิธิพนธ์ พุทธรักษา<br>
                            นายกิตติคุณ พระกระจ่าง<br>
                            นายจิระเดช คูหากาญจน์
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาโท :
                        </td>
                        <td style="text-align: left;">
                            นางสาวสุรีย์พร สราภิรมย์<br>
                            นายรัฐชัย ปิ่นชัยพัฒน์<br>
                            นางสาวนรินประภา ศรันย์วงศ์<br>
                            นางสาวเจจิรา คำสุวรรณ
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์<br>
                มหาวิทยาลัยเชียงใหม่ จ.เชียงใหม่ - 50200<br>
                โทรศัพท์ : 053-942464,943379<br>
                โทรสาร :	053-222776<br>
                E-mail : scphi005@chiangmai.ac.th


            </div>

            <?php
        } elseif ($lab == 'femtosecond') {
            ?>        
            <div class="row">
                <h2 style="text-align: center;">2. ห้องปฏิบัติการวิจัยลำอิเล็กตรอนและโฟตอนห้วงเฟมโตวินาที<br>
                    (Femtosecond Electron and Photon Pulses Research Laboratory)</h2>
                <h3>(ก) ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรมวิจัย/ศึกษาด้านนี้จะเกี่ยวข้องกับการศึกษาและพัฒนา ปรับปรุง ระบบผลิตลำอิเล็กตรอนให้ได้อิเล็กตรอนห้วงเฟมโตวินาที ความเข้มสูงและเสถียร เพื่อใช้เป็นแหล่งกำเนิดรังสีเทร่าเฮิร์ต (THz Radiation) ความเข้มสูง สำหรับใช้ในการศึกษาสารตัวอย่าง โดยใช้เทคนิค THz Spectroscopy และ THz imaging เป็นต้น</p>
                <p>&nbsp;</p>

                <h3>(ข) เครื่องมือที่เกี่ยวข้อง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบผลิตอิเล็กตรอนห้วงเฟมโตวินาที เป็นระบบที่ประกอบขึ้นเองโดยคณะของผู้วิจัยซึ่งจะมีส่วนประกอบหลักคือ ปืนอิเล็กตรอนความถี่คลื่นวิทยุ (RF-gun) เป็นแหล่งผลิตอิเล็กตรอนห้วงสั้นพลังงานประมาณ 2-3 ล้านอิเล็กตรอนโวลท์ แม่เหล็กแบบอัลฟา (&alpha;-magnet) ทำหน้าที่ในการบีบห้วงของอิเล็กตรอนให้ความยาวห้วงในเรือนเฟมโตวินาที แม่เหล็กแบบสี่ขั้ว(Quadrupole magnet)ทำหน้าที่โฟกัสลำอิเล็กตรอน แม่เหล็กแบบสเตียริ่ง (Steering magnet) ทำหน้าที่ในการบังคับทิศทางของลำอิเล็กตรอน และเครื่องเร่งอิเล็กตรอนแบบเชิงเส้น (linac) ทำหน้าที่ในการเร่งอิเล็กตรอนให้มีพลังเพิ่มขึ้นเป็น 11-12 ล้านอิเล็กตรอนโวลต์</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนประกอบหลักบางส่วน เช่น RF-gun และแม่เหล็กแบบต่างๆ ถูกออกแบบและสร้างเองที่มหาวิทยาลัยเชียงใหม่ แหล่งกำเนิดคลื่นไมโครเวฟกำลังสูงสำหรับป้อนให้ RF-gun และ Linac ได้ดัดแปลงมาจากส่วนของระบบเครื่องเร่งสำหรับรังสีรักษาที่ได้รับบริจาคจากโรงพยาบาลมหาราชเชียงใหม่และโรงพยาบาลศิริราช ระบบสุญญกาศและlinac ได้รับการบริจาคจากมหาวิทยาลัย Stanford ประเทศสหรัฐอเมริกา ภายใต้การสนับสนุนของสำนักงานคณะกรรมการวิจัยแห่งชาติ(วช.) คณะผู้วิจัยได้ติดตั้งและพัฒนาเครื่องเร่งฯดังกล่าวอย่างต่อเนื่องจนสามารถผลิตอิเล็กตรอนให้มีความยาวห่วงประมาณ &sigma;<sub>z</sub> &asymp; 200-300 เฟมโตวินาที ซึ่งสามารถนำไปผลิตรังสี THz ได้ความคลื่นในช่วง 0.3 – 3.0 THz</p>

                <table>
                    <tr>
                        <td style="text-align: center">
                            <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/fotron1.jpg"><br>
                            <small>ระบบผลิตอิเล็กตรอนและโฟตอนห้วงเฟมโตวินาที</small>
                        </td>
                        <td style="text-align: center">
                            <p>
                                <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/fotron2.jpg"><br>
                                <small>RF-gun</small>
                            </p>
                            <p>
                                <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/fotron3.jpg"><br>
                                <small>&alpha; - magnet</small>
                            </p>
                            <p>
                                <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/fotron4.jpg"><br>
                                <small>แม่เหล็กแบบสี่ขั้ว</small>
                            </p>
                            <p>
                                <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/fotron5.jpg"><br>
                                <small>แหล่งกำเนิดคลื่นไมโครเวฟกำลังสูง</small>
                            </p>
                        </td>
                    </tr>
                </table>

                <h3>ค) เป้าหมายของการศึกษา/วิจัย</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. เพื่อพัฒนาระบบผลิตอิเล็กตรอนให้มีห้วงสั้นขึ้น มีความเข้มสูงขึ้นและมีความเสถียรมากขึ้น</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ศึกษาการสั่นของชีวโมเลกุลที่ความถี่ต่ำโดยใช้เทคนิค THz Spectroscopy เพื่อศึกษาโครงสร้างของโมเลกุลและการเคลื่อนที่เชิงสัมพัทธ์ของกลุ่มอะตอมซึ่งโยงใยกับการทำหน้าที่ในส่วนต่างๆของโมเลกุล</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/spectoscopy.jpg"><br>
                    <small>ไดอะแกรมแสดงระบบ THz Spectroscopy ที่จะติดตั้งที่มหาวิทยาลัยเชียงใหม่</small>
                </p>
                <p>&nbsp;</p>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. พัฒนาการถ่ายภาพด้วยรังสีเทร่าเฮิร์ตซ์ (THz imaging) เพื่อนำมาใช้ในการตรวจสอบวัตถุแบบไม่รุกราน (noninvasive inspection) เนื่องจากรังสีเทร่าเฮิร์ตซ์สามารทะลุผ่านวัสดุห่อหุ้มหลากหลายชนิด เช่น กระดาษ พลาสติก หรือเสื้อผ้า และปลอดภัยต่อสิ่งมีชีวิต</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/leave.jpg"><br>
                    <small>ภาพถ่ายเทร่าเฮิร์ตซ์ของใบไม้และ IC (B.B. Hu and M.C. Nuss)</small>
                </p>
                <p>&nbsp;</p><p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity3/thz.jpg"><br>
                    <small>ไดอะแกรมแสดงระบบ THz imaging ที่จะติดตั้งที่มหาวิทยาลัยเชียงใหม่</small>
                </p>
                <p>&nbsp;</p>

                <h3>ง) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            ผศ.ดร.จิตรลดา ทองใบ <em>ผู้ประสานงาน</em><br>
                            ดร.ปริศนา ทำบุญ
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            วิศวกรคอมพิวเตอร์/อิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            Mr. Michael W. Rhodes
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านอิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            นายวิฑูรย์ จินะมูล
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิค :
                        </td>
                        <td style="text-align: left;">
                            นายปถม วิชัยศิริมงคล<br>
                            นายนพดล แข็งแรง
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านโรงงานเครื่องกล :
                        </td>
                        <td style="text-align: left;">
                            นายสันติศักดิ์ คำสุข<br>
                            นายประเสริฐ ใจนันตา
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาเอก :
                        </td>
                        <td style="text-align: left;">
                            นายจตุพร สายสุด<br>
                            นายกีรติ กุศลจริยกุล
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>                    

                <h3>สถานที่ติดต่อ</h3>
                <p>ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์<br>
                    มหาวิทยาลัยเชียงใหม่ จ.เชียงใหม่ - 50200<br>
                    โทรศัพท์ : 053-942464, 943379<br>
                    โทรสาร : 053-222776<br>
                    E-mail : chlada@chiangmai.ac.th
                </p>

            </div>

            <?php
        } elseif ($lab == 'plasma_bio') {
            ?>
            <div class="row">
                <h2 style="text-align: center;">3. ห้องปฏิบัติการวิจัยพลาสมาไบโอและพลังงานสะอาด<br>
                    (Plasma-Bio and Clean Energy Research Laboratory)</h2>
                <h3>(ก) ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรม วิจัย/ศึกษาด้านนี้จะเกี่ยวข้องกับการศึกษาปฏิกิริยาของพลาสมาที่ทำให้เกิดการเปลี่ยนแปลงระดับผิวของสิ่งทอทุกรูปแบบ ไม่ว่าจะเป็นเส้นใยหรือฟิล์มพอลิเมอร์ ที่ได้จากการสังเคราะห์หรือจากธรรมชาติ ต่างๆ โดยจะประยุกต์พลาสมาที่ประกอบไปด้วยอนุภาคมีประจุ อาทิ ไอออน อิเล็กตรอน อนุมูลอิสระ และโฟตอนพลอยได้ บนผิวของสิ่งทอต่างๆ ทั้งนี้พลังงานของอนุภาคในพลาสมาจะครอบคลุมเฉพาะช่วง 2-3 keV ลงมาถึงระดับ eV เท่านั้น</p>
                <p>&nbsp;</p>

                <h3>(ข) เครื่องมือที่เกี่ยวข้อง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไอระเหยหรือก๊าซต่างๆจะถูกกระตุ้นให้อยู่ในสถานะของพลาสมาด้วยระบบผลิตพลาสมา 2 ชนิด ดังต่อไปนี้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ระบบผลิตพลาสมาระบบความดันต่ำ (Low pressure plasma : LPP)</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ระบบผลิตพลาสมาระบบความดันบรรยากาศ (Atmospheric pressure plasma : APP)</p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/lowpresure1.JPG"><br>
                    <small>1.1 ระบบผลิตพลาสมาความดันต่ำ : ห้องประยุกต์พลาสมา 1,200 ลิตร</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/lowpresure2.JPG"><br>
                    <small>1.2 ระบบผลิตพลาสมาความดันต่ำ : ห้องประยุกต์พลาสมา 1 ลิตร</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/lowpresure3.JPG"><br>
                    <small>2.1 ระบบผลิตพลาสมาความดันบรรยากาศ : Dielectric barrier discharge</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/lowpresure4.JPG"><br>
                    <small>2.2 ระบบผลิตพลาสมาความดันบรรยากาศ : Plasma jet</small>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <strong>1.1 ระบบผลิตพลาสมาระบบความดันต่ำ : ห้องประยุกต์พลาสมา 1,200 ลิตร</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบนี้ประกอบด้วย ห้องประยุกต์พลาสมาขนาดใหญ่ ปริมาตร 1,200 ลิตร สร้างพลาสมาจากก๊าซด้วยคลื่นวิทยุ เพื่อประยุกต์แก่สิ่งทอสำเร็จมูลค่าสูง อาทิ เน็คไท ผ้าลูกไม้ ผ้าผืนประดับตกแต่ง หรืองานลักษณะอื่นๆที่ผ่านการตกแต่งขั้นตอนสุดท้ายพร้อมใช้งานแล้ว ทั้งนี้เพื่อให้ผลการประยุกต์ปรากฎบนผิวนอกสุดของวัสดุเหล่านั้น</p>
                <strong>1.2 ระบบผลิตพลาสมาระบบความดันต่ำ : ห้องประยุกต์พลาสมา 1 ลิตร</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบประยุกต์ขนาดเล็ก เพื่องานวิจัยและพัฒนาการประยุกต์พลาสมาแก่วัสดุทุกรูปแบบ และจากก๊าซทุกประเภท สร้างพลาสมาด้วยคลื่นวิทยุ มีความเข้มข้นพลาสมาปรับค่าได้</p>

                <strong>2.1 ระบบผลิตพลาสมาระบบความดันบรรยากาศ : Dielectric barrier discharge</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เน้นการประยุกต์ชิ้นงานที่เป็นแผ่น อาทิ กระดาษ ฟิลม์ ผ้าผืน</p>
                <strong>2.2 เครื่องผลิตพลาสมาระบบความดันบรรยากาศ : Plasma jet</strong>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นระบบที่พัฒนาทดแทน dielectric barrier discharge เน้นการประยุกต์ชิ้นงานที่เป็นแผ่น อาทิ กระดาษ ฟิลม์ ผ้าผืน สามารถประยุกต์ได้รวดเร็วกว่า และผลิตพลาสมาได้ทั้งจากของเหลวและก๊าซ</p>
                <p>&nbsp;</p>

                <h3>(ค) ผลพลอยได้ที่มีประโยชน์เชิงประยุกต์</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เทคโนโลยีพลาสมา เป็นเทคโนโลยีสะอาด (clean technology) เป็นมิตรต่อสิ่งแวดล้อม เพราะใช้น้ำและสารเคมีน้อยมาก อีกทั้งเป็นการปรับปรุงเฉพาะระดับผิว ไม่กระทบคุณภาพดั้งเดิมของวัสดุนั้นๆ จึงสามารถประยุกต์ใช้ในหลายๆอุตสาหกรรม อาทิ อุตสาหกรรมสิ่งทอและเครื่องนุ่งห่ม เช่น ผ้า ซึ่งสามารถกำหนดให้ผ้าชอบน้ำ (hydrophilic) หรือไม่ชอบน้ำ/กันน้ำ (hydrophobic) ก็ได้ หรือทำให้การติดสี/เกาะโปรตีนบนสิ่งทอ/วัสดุชีวภาพดีกว่าเดิม หรือเพิ่มความสามารถในการยึดติดของวัสดุต่างๆ ได้ดีขึ้น และยังประยุกต์เทคโนโลยีพลาสมาในอุตสาหกรรมบรรจุภัณฑ์ เช่น ฟิล์มพลาสติก และกระดาษ ให้สามารถกันชื้น/กันเปียกได้ นอกจากนี้เทคโนโลยีพลาสมายังเป็นเทคโนโลยีที่ทันสมัยสร้างความแตกต่างให้กับสินค้า อันเป็นเครื่องมือที่มีประโยชน์สำหรับการแข่งขันในตลาดโลก ที่สินค้าจำเป็นจะต้องมีความหลากหลายเพื่อตอบสนองความต้องการของลูกค้าไม่จำกัด ทั้งยังต้องคำนึงถึงผลกระทบต่อสภาวะของโลกอีกด้วย</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประยุกต์พลาสมา แบ่งออกได้เป็นหลักๆ ดังนี้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1) อุตสาหกรรมสิ่งทอและเครื่องนุ่งห่ม : พลาสมาสามารถปรับปรุง/เปลี่ยนแปลงให้สิ่งทอและเครื่องนุ่งห่มมีคุณสมบัติดูดซึมน้ำดีขึ้น หรือกันน้ำ/กันเปียกได้ อีกทั้งช่วยทำความสะอาดผิวผ้าเพื่อเพิ่มการเกาะติดของเม็ดสีหรือโปรตีนที่ดีกว่าเดิม</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) อุตสาหกรรมบรรจุภัณฑ์ : พลาสมาสามารถปรับปรุง/เปลี่ยนแปลงให้วัสดุที่ใช้ในงานบรรจุภัณฑ์ เช่น กระดาษ และฟิล์มพลาสติก สามารถกันเปียก หรือกันการซึมผ่านก๊าซได้ เพื่อเพิ่มประสิทธิภาพในการรักษาคุณภาพของสินค้านั้นได้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(3) อุตสาหกรรมวัสดุทางการแพทย์ : พลาสมาสามารถเพิ่มคุณสมบัติการยึดติด/การเข้ากันได้กับกับวัสดุแม่พิมพ์ต่างๆได้ดีขึ้น</p>
                <p>&nbsp;</p>

                <p><strong>ตัวอย่างการประยุกต์พลาสมาในสิ่งทอชนิด/รูปแบบต่างๆ :</strong><br>
                    - การประยุกต์พลาสมาฟลูออรีนทำให้ผ้าไหมหรือเสื้อผ้าให้กันน้ำ/กันเปื้อน
                </p>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/cloth1.jpg">
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/cloth2.jpg">
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/cloth3.jpg">
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/x-ray.jpg">
                </p>
                <p>&nbsp;</p>

                <p>- การประยุกต์พลาสมาก๊าซออกซิเจนทำให้ผ้าสังเคราะห์ซับเหงื่อ/ระบายอากาศได้ดี</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/cloth4.jpg">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/cloth5.jpg">
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <p><strong>ตัวอย่างการประยุกต์พลาสมาในวัสดุทางการแพทย์ต่างๆ :</strong></p>
                <div class="col-sm-6 col-md-6 text-center">
                    <p>- การสร้างฟิล์มเพชรแก่วัสดุแม่เหล็ก (ซ้าย)และแม่พิมพ์แก้ว (ขวา) เพื่อฝังในเหงือก</p>
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/dlc1.jpg">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <p>- การสร้างฟิล์มเพชร(DLC)แก่ข้อสะโพกเทียม(ซ้าย)และเบ้าพอลิเมอร์(ขวา) เพื่อลดการสึกหรอและให้สามารถเข้ากันได้กับเนื้อเยื่อร่างกาย</p>
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/dlc2.jpg">
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <p>- การประยุกต์ Plasma jet เพื่อปรับปรุงคุณสมบัติการยึดติดของวัสดุทันตกรรม</p>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/tooth1.jpg">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/tooth2.jpg">
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <p>
                    <strong>ตัวอย่างการประยุกต์พลาสมาในวัสดุอื่นๆ:</strong><br>
                    - การประยุกต์พลาสมาออกซิเจนแก่วัสดุเซมิคอนดัคเตอร์ เพื่อทำความสะอาด
                </p>
                <p style="text-align: center;"><img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/other1.jpg"></p>
                <p>&nbsp;</p>

                <p>
                    - การสร้างฟิล์มเพชร (DLC) แก่ฟิล์มบรรจุภัณฑ์เกษตร (PVDC) เพื่อความสามารถต้านการผ่านก๊าซ (ซ้าย) และผล AFM ของฟิล์ม DLC มีความหนา ~ 100-500 nm (ขวา)
                </p>
                <p style="text-align: center;"><img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity2/other2.jpg"></p>
                <p>&nbsp;</p>

                <h3>ง) เป้าหมายของการวิจัย/ศึกษา</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. พัฒนาระบบพลาสมาต่างๆด้วยตนเอง โดยร่วมงานกับสถาบันอื่นๆ เป็นการพัฒนาองค์ความรู้ไปพร้อมๆกัน</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. สร้างบุคลากรทางการวิจัยพัฒนา อาทิ นักศึกษา ช่างเทคนิค ทั้งระดับ ป.ตรี และบัณฑิตศึกษา</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. ถ่ายทอดองค์ความรู้สู่ภาคอุตสาหกรรม อาทิด้านไมโครอิเล็กทรอนิกส์ ด้านสิ่งทอ และวัสดุการแพทย์</p>
                <p>&nbsp;</p>

                <h3>จ) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            รศ. ดร.ธีรวรรณ บุญญวรร <em>ผู้ประสานงาน</em><br>
                            ดร. มิญช์ เมธีสุวกุล<br>
                            ดร. ชนกพร ไชยวงศ์<br>
                            นส. สมฤทัย ตันมา
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            วิศวกรคอมพิวเตอร์/อิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            Mr. Michael W. Rhodes
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านอิเล็กทรอนิกส์ :
                        </td>
                        <td style="text-align: left;">
                            นายวิฑูรย์ จินะมูล<br>
                            นายวิษณุ บุญสุข
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิค :
                        </td>
                        <td style="text-align: left;">
                            นายชาญชัย อุโมงโน<br>
                            นายวิทูร อะโน
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิคด้านโรงงานเครื่องกล :
                        </td>
                        <td style="text-align: left;">
                            นายสันติศักดิ์ คำสุข<br>
                            นายประเสริฐ ใจนันตา
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาเอก :
                        </td>
                        <td style="text-align: left;">
                            ผศ.พิริยะ ยาวิราช (ร่วมทันตแพทย์)<br>
                            นส. รัตนาพร นรรัตน์ (ปี 2552)<br>
                            นายอนุมัติ เดชนะ
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาโท :
                        </td>
                        <td style="text-align: left;">
                            นายอานนท์ วัฒนานันท์<br>
                            นส.วลีพรรณ แสงประเสริฐ (ร่วมเคมี)<br>
                            นส.สุชาดา ถาวรวิริยะนันท์ (ร่วมบรรจุภัณฑ์ ม.เกษตร)
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                <p>
                    ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์<br>
                    มหาวิทยาลัยเชียงใหม่ จ.เชียงใหม่ - 50200<br>
                    โทรศัพท์ : 053-942464, 943379<br>
                    โทรสาร : 053-222776<br>
                    E-mail : dherawan@chiangmai.ac.th
                </p>

            </div>
        <?php } elseif ($lab == 'plasma_advanced') {
            ?>

            <div class="row">
                <h2 class="text-center">ห้องปฏฺบัติการวิจัยพลาสมาและเทคโนโลยีวัสดุขั้นสูง<br>
                    (Plasma and Advanced Materials Technology Research Laboratory)
                </h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เทคโนโลยีด้านพลาสมามีบทบาทในวงการอุตสาหกรรมปัจจุบันหลายแขนง มีการประยุกต์ใช้พลาสมา ในอุตสาหกรรมอิเล็กทรอ นิกส์  คอมพิวเตอร์ สารกึ่งตัวนำ อัญมณีและเครื่องประดับ การขจัดของเสียและมลภาวะ อุตสาหกรรมเคมีภัณฑ์และพลาสติก  งานโลหะ และเซรามิก ตลอดจนการใช้งาน ในการแพทย์ และชีวโมเลกุล  และสาขาอื่นอีกมาก 
                    หน่วยวิจัยพลาสมาและเทคโนโลยีสสารชั้นสูง (Plasma and Advanced Materials Technology Research Unit) คณะวิทยาศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย เริ่มต้นจากการจัดตั้งเป็นห้องปฏิบัติการวิจัยพลาสมา เมื่อเดือนพฤษภาคม 2543 และได้ขยายขึ้นเป็นหน่วยวิจัยพลาสมาและเทคโนโลยีสสารชั้นสูง นับแต่ปี 2550 ในปี 2552 หน่วยวิจัยมีคณาจารย์และนักวิจัย 8 ท่าน ซึ่งได้ทำงานวิจัยโดยมีความก้าวหน้า และประสบความสำเร็จในการประยุกต์ใช้พลาสมาในอุตสาหกรรมต่าง ๆ อย่างต่อเนื่องมาโดยตลอด</p>

                <h3>(ก) ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งานวิจัยของหน่วยวิจัยครอบคลุมในประเด็นหลัก ดังนี้คือ พลาสมาฟิสิกส์, พลาสมาเชิงประยุกต์, พลาสมาในปฏิกิริยานิวเคลียร์, การสังเคราะห์วัสดุและฟิล์มบางด้วยกระบวนการไอเชิงเคมีและเชิงฟิสิกส์ด้วยพลาสมา การปรับเปลี่ยนคุณลักษณะสสาร และการตรวจสอบสสารด้วยกระบวนการทางพลาสมา ผลของกระบวนการพลาสมาต่อพอลิเมอร์และเส้นใย ผลของกระบวนการพลาสมาและรังสีที่มีต่อสารอินทรีย์ จุลชีพ และหน่วยชีวภาพ ตลอดจนการประยุกต์ใช้เทคโนโลยีด้านพลาสมาในอุตสาหกรรมต่าง ๆ
                    ขอบเขตการดำเนินงานหน่วยวิจัยโดยรวมประกอบไปด้วย</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1) การวิจัยเชิงพื้นฐานในพลาสมาฟิสิกส์เชิงลึก โดยเน้นการสร้างฐานความรู้เกี่ยวกับพลาสมา จากการศึกษาทั้งในด้านทฤษฏีและการทดลองเพื่อให้เกิดความเข้าใจเชิงลึก เกี่ยวกับฟิสิกส์ของพลาสมา โดยมีเป้าหมายเพื่อการผลิตบัณฑิตทั้งในระดับ ปริญญาตรี โท และเอก</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) การวิจัยเชิงประยุกต์ในการสร้างองค์ความรู้และความเข้าใจใหม่ ๆ ในกระบวนการที่ พลาสมามีต่อวัสดุ อาทิ โลหะ พอลิเมอร์ สิ่งทอ และ กระดาษ   รวมถึงการสร้าง ความเข้าใจในผลทั้งด้านเคมี และฟิสิกส์ของพลาสมาที่มีต่อการสังเคราะห์ หรือผลต่อการปรับแปรพื้นผิวของสสารอื่น ๆ ทั้งที่มีแนวโน้มจะเกิดความต้องการในตลาดโลก และที่เป็นของพื้นถิ่น โดยแสวงหา และประสานความร่วมมือกับหน่วยวิจัยในสาขาวิชาแขนงอื่นทั้งในและต่างประเทศ</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(3) การวิจัยเชิงพัฒนาเพื่อสร้างองค์ความรู้ จนให้สามารถพัฒนาเทคโนโลยีของตนเองทางระบบพลาสมาสำหรับการผลิตในระดับงานอุตสาหกรรม (mass production) จากการผสมผสานความรู้ที่มีในด้านพลาสมาของระบบทั้งในกระบวนการไอเชิงเคมี (chemical vapor process) และไอเชิงกายภาพ (physical vapor process) ทั้งในแง่การปรับปรุงตัวอย่างและการสร้างผลิตภัณฑ์ใหม่ ตลอดจนการทดสอบ เพื่อหาสภาวะที่เหมาะสมภายในระบบที่จัดสร้างขึ้น ทั้งนี้เพื่อวัตถุประสงค์ในการยกระดับความสามารถในการแข่งขันของอุตสาหกรรมภายในประเทศ</p>

                <h3>(ข) เครื่องมือที่เกี่ยวข้อง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน่วยวิจัยมีเครื่องมือ และอุปกรณ์ต่าง ๆ ที่จำเป็นในการทำการวิจัย โดยเฉพาะระบบต้นแบบ 
                    ปฏิกรณ์พลาสมาที่ออกแบบและสร้างขึ้นเองในหน่วยวิจัยเพื่อการวิจัยที่หลากหลาย อาทิ ระบบ Modified Plasma Focus, ระบบ Radio Frequency Inductively Coupled Plasma Reactor, ระบบ Radio Frequency Transformerly-Coupled Discharge Reactor, ระบบ Compact Magnetron Sputtering System, ระบบ Microwave Resonance Cavity Plasma Reactor, ระบบ Compact Microwave Resonance Cavity Plasma Reactor, ระบบ Microwave Plasma Wave Guide Slot Reactor, ระบบ AC Plasma Reactor, เครื่อง Nuclear Magnetic Resonance Didactic System</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครื่อง Parameter Analyzer, เครื่อง Plasma Emission Spectrometer, เครื่อง Tunneling Electron Microscope ตลอดจนครุภัณฑ์ด้านอิเล็กทรอนิกส์ต่าง ๆ ช่น Digital Storage Scope, LCR System, Lock-ins Amplifier และ อื่น ๆ</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/1.png"><br>
                    <small>ระบบ Radio Frequency Inductively Coupled Plasma Reactor และ Radio Frequency Transformerly-Coupled Discharge Reactor</small>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/2.png"><br>
                    <small>ระบบ Radio Frequency Inductively Coupled Plasma Reactor ระหว่างการตรวจสอบตัวแปรพลาสมาด้วย Plasma Emission Spectrometer</small>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/3.png"><br>
                    <small>แสดงพลาสมาของแก๊สไนโตรเจนภายในเครื่อง Radio Frequency Inductively Coupled Plasma Reactor (ซ้าย) และของแก๊สอาร์กอนในเครื่อง AC Plasma Reactor (ขวา)</small>
                </p>
                <p>&nbsp;</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/4.png"><br>
                    <small>ระบบ Microwave Resonance Cavity Plasma Reactor และ Compact Magnetron Sputtering System</small>
                </p>
                <p>&nbsp;</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/5.png"><br>
                    <small>ระบบ Compact Microwave Resonance Cavity Plasma Reactor (ซ้าย) และนิสิตในระหว่างการสร้างเครื่อง Microwave Plasma Wave Guide Slot Reactor (ขวา)</small>
                </p>
                <p>&nbsp;</p>

                <h3>(ค) เป้าหมายและแนวทางของงานวิจัยในปัจจุบัน</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน่วยวิจัยมุ่งเน้นในงานวิจัยซึ่งเกี่ยวกับการสังเคราะห์ การปลูกผลึก การวิเคราะห์สมบัติเฉพาะต่างๆ ของวัสดุชนิดใหม่ๆ โดยเฉพาะที่อาศัยเทคโนโลยีทางด้านพลาสมาในการสังเคราะห์ รวมถึงการนำวัสดุนั้นไปประดิษฐ์เป็นอุปกรณ์และประยุกต์ใช้ในอุตสาหกรรม โดยจะเน้นไปที่วัสดุประเภทฟิล์มบางและชั้นวัสดุ (thin films and layers) ของวัสดุของแข็ง (solid materials) ซึ่งมีแนวโน้มสามารถนำไประยุกต์ใช้งานจริงทั้งในด้านอุตสาหกรรมการแพทย์ และอิเล็กทรอนิกส์ชั้นสูง โดยจะอาศัยสมบัติเฉพาะของวัสดุนั้น ในการเพิ่มประสิทธิภาพหรือปรับเปลี่ยนคุณลักษณะให้ดีขึ้นในการนำไปใช้งานในด้านต่าง ๆ อาทิ ในการเพิ่มอายุการใช้งานและความทนทาน ในการประหยัดพลังงาน ในการเข้ากันทางชีวภาพ (biocompatible) เป็นต้น งานวิจัยของหน่วยวิจัยในปัจจุบันอาจแบ่งออกได้เป็น 4 แนวทาง ตามลักษณะการนำไปประยุกต์ใช้งาน ดังนี้</p>
                <p>(1)  งานวิจัยด้านเทคโนโลยีพลาสมาและการประยุกต์ใช้ เช่น<br>
                    - การสังเคราะห์วัสดุ diamond-liked carbon thin film, conducting polymer และ วัสดุชั้นสูงต่าง ๆ โดยกระบวนการ Plasma CVD</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/6.png"><br>
                    <small>ฟิล์มบาง ของ diamond-liked carbon ที่สังเคราะห์ด้วยกระบวนการพลาสมา</small>
                </p>
                <p>&nbsp;</p>

                <p>- การปรับปรุงสมบัติของผ้าและเส้นใยโดยใช้พลาสมา ให้มีลักษณะชอบน้ำ  (hydrophilic) ไม่ชอบน้ำ (hydrophobic) หรือทนไฟ (fire retard)</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/7.png"><br>
                    <small>ผิวหน้าของเส้นใยฝ้ายที่ผ่านการปรับปรุงด้วยพลาสมาเพื่อให้มีลักษณะไม่ชอบน้ำ หรือกันน้ำ</small>
                </p>
                <p>&nbsp;</p>

                <p>-  การปรับปรุงสมบัติเชิงกลของผิวโลหะ โดยวิธีการ Plasma Nitridation, Plasma   Carborization และ Plasma-surface Treatment แบบอื่น ๆ</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/8.png"><br>
                    <small>ภาพถ่ายผิวหน้าของสารอลูมิเนียมไนไตรด์( AlN) ที่ใช้เวลาผ่านกระบวนการ Plasma Nitridation ต่างกัน</small>
                </p>
                <p>&nbsp;</p>

                <p>(2) งานวิจัยด้านฟิสิกส์วัสดุเชิงอุตสาหกรรม เช่น<br>
                    - การเคลือบฟิล์มบางโครเมียมอัลลอยไนไตรด์บนอุปกรณ์ตัดคว้านสำหรับอุตสาหกรรม</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/9.png">
                </p>
                <p>&nbsp;</p>

                <p>- การเคลือบแข็งผิวชิ้นส่วนเครื่องจักรและแม่พิมพ์อุตสาหกรรม<br>
                    - การวิจัยฟิล์มบางเคลือบผิวความลื่นสูงสำหรับชิ้นส่วนเครื่องจักรและยานยนต์<br>
                    - การปรับปรุงและดัดแปลงสมบัติของวัสดุโดยการอาบรังสี และลำอนุภาค รวมถึง การศึกษาการใช้วัสดุในงานกำบังรังสีต่าง ๆ</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/10.png"><br>
                    <small>การจำลอง การกระเจิงของนิวตรอนจากวัสดุซึ่งใช้ในงานกำบังรังสี</small>
                </p>
                <p>&nbsp;</p>

                <p>(3) งานวิจัยด้านฟิสิกส์วัสดุอิเล็กทรอนิกส์และพลังงาน เช่น<br> 
                    -  การเคลือบฟิล์มบางโครเมียมอัลลอยไนไตรด์บนอุปกรณ์ตัดคว้านสำหรับอุตสาหกรรม
                </p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/11.png"><br>
                    <small>กราฟ (RSM) HRXRD ของ สารประกอบ GaAsN/GaAs</small>
                </p>
                <p>&nbsp;</p>

                <p>-  การวิเคราะห์คุณสมบัติเชิงแสง และเชิงโครงสร้างของอัลลอยสารกึ่งตัวนำในกลุ่มสาม- ไนไตรด์ (III-Nitride semiconductors) เช่น GaN, InN, AlN และอัลลอยที่เกี่ยวข้อง เช่น InGaN</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/12.png"><br>
                    <small>ภาพตัดขวางและ Diffraction pattern จาก TEM ของสาร GaN</small>
                </p>
                <p>&nbsp;</p>

                <p>- การศึกษาสมบัติไดอิเล็กทริกของฟิล์มบาง BaTiO3, SrTiO3, และ CaCu3Ti4O12 สำหรับประยุกต์ใช้เป็นตัวเก็บประจุขนาดจิ๋ว</p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/13.png"><br>
                    <small>ภาพตัดขวางที่ได้จาก SEM ของสาร BaTio3/SrTio3 ในการสร้างตัวเก็บประจุขนาดจิ๋ว</small>
                </p>
                <p>&nbsp;</p>

                <p>- การประดิษฐ์อุปกรณ์ตรวจจับแก๊ส สำหรับใช้ในสภาวะอุณหภูมิสูงและเครื่องปฏิกรณ์<br>
                    - การสังเคราะห์สารเทอร์โมอิเล็กทริกไอออนไดซิลิไซด์ด้วยวิธีอัลลอยเชิงกล
                </p>
                <p>&nbsp;</p>

                <p>(4) งานวิจัยด้านฟิสิกส์วัสดุเพื่อการแพทย์ ประกอบด้วย<br>
                    - การพัฒนาฟิล์มบางโครงสร้างระดับนาโนความแข็งสูงสำหรับอุปกรณ์ทางการแพทย์<br>
                    - การเตรียมและการหาลักษณะเฉพาะในโครงสร้างของฟิล์มบางไฮดรอกซีอะพาไทท์ และการประยุกต์ใช้เป็นวัสดุเชื่อมต่อเสริมกระดูก
                </p>

                <p class="text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/14.png"><br>
                    <small>กราฟแสดง XRD ของฟิล์มบาง Hydroxyapatite ปลูกบน Si-substrate ซึ่งเผาที่อุณหภูมิต่างๆ</small>
                </p>
                <p>&nbsp;</p>

                <h3>(ง) ตัวอย่างผลพลอยได้ที่มีประโยชน์เชิงประยุกต์</h3>
                <p>- การเคลือบแข็งผิววัสดุสำหรับอุตสาหกรรม SME</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/16.png"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/15.png"><br>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <p>- การเคลือบแข็งผิววัสดุสำหรับอุตสาหกรรม SME</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/18.png"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity4/17.png"><br>
                </div>

                <br style="clear: both;">
                <p>&nbsp;</p>

                <h3>จ) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            ผศ.ดร. บุญโชติ เผ่าสวัสดิ์ยรรยง  ผู้ประสานงาน <em>ผู้ประสานงาน</em><br>
                            ผศ.กิรณันต์ รัตนธรรมพันธุ์<br>
                            ผศ.ดร. สุคเณศ ตุงคะสมิต<br>
                            ผศ.ดร. สกุลธรรม เสนาะพิมพ์<br>
                            ผศ.ดร. สมชาย เกียรติกมลชัย<br>
                            ผศ.ดร. วรวรรณ พันธุมนาวิน<br>
                            ดร. สตรีรัตน์ โฮดัค<br>
                            ดร. มนต์เทียน เทียนประทีป
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นิสิต/นักศึกษาปริญญาเอก :<br>
                            (ปีการศึกษา 2551)
                        </td>
                        <td style="text-align: left;">
                            นางสาวกัญจน์ชญา หงส์เลิศคงสกุล<br>
                            นายครรชิต กำลังกล้า<br>
                            นางสาวจิราภรณ์ พงษ์โสภา<br>
                            นางสาวอาภาพร ทองผุด
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นิสิต/นักศึกษาปริญญาโท :<br>
                            (ปีการศึกษา 2551)	
                        </td>
                        <td style="text-align: left;">
                            นายสุรการ ฐิติอนันต์<br>
                            นางสาวเพ็ญสุภา คัมภิรานนท์<br>
                            นางสาวกันยา ตปนียากร<br>
                            นางสาวแคทรียา ทวิทรัพย์<br>
                            นางสาวโชติวรรณ รัตนเสถียร<br>
                            นางสาวศุภศรี แซ่เฮ้ง<br>
                            นางสาวปิยรัตน์ เจิมสุจริต<br>
                            นายพรชัย ลุยะพันธุ์<br>
                            นายศิริชัย ปิยะอักษรศักดิ์<br>
                            นางสาวสุรางค์ สุมนาวดี<br>
                            นางสาวพรเทพิน ปรานศิลป์<br>
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                <p>
                    ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย เขตปทุมวัน กรุงเทพฯ 10330<br>
                    โทรศัพท์ : 02-218-5137, 02-218-5138, 02-218-5289<br>
                    โทรสาร : 02-253-1150<br>
                    E-mail : paosawat@sc.chula.ac.th
                </p>

            </div>

            <?php
        } elseif ($lab == 'plasma_surface') {
            ?>
            <div class="row">
                <h2 style="text-align: center;">ห้องปฏิบัติการวิจัยพลาสมาสำหรับวิทยาศาสตร์พื้นผิว<br>
                    Plasma for Surface Science Research Laboratory
                </h2>
                <h3>ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรมวิจัย/ศึกษาด้านพลาสมาสำหรับวิทยาศาสตร์พื้นผิว เน้นการศึกษาอันตรกิริยา (interaction) ระหว่างพลาสมากับพื้นผิววัสดุ (materials surface) เพื่อให้พื้นผิววัสดุมีสมบัติตามต้องการโดยการปรับปรุงพื้นผิวด้วยพลาสมา (plasma surface modification) การเคลือบผิวด้วยพลาสมา (plasma deposition) และ การกัดผิวด้วยพลาสมา (plasma etching) กิจกรรมวิจัย/ศึกษานี้จะดำเนินงานครอบคลุมตั้งแต่การออกแบบสร้างอุปกรณ์เครื่องมือที่ใช้ในการสร้างพลาสมา การสร้างพลาสมาแบบต่างๆ ตลอดไปจนถึงการศึกษาอันตรกิริยาของพลาสมาที่มีต่อพื้นผิวของวัสดุ เพื่อการประยุกต์ใช้เชิงอุตสาหกรรม</p>

                <h3>เครื่องมือ</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อุปกรณ์และเครื่องมือสำหรับสร้างพลาสมาเพื่อใช้ในการปรับปรุงพื้นผิวของวัสดุให้มีสมบัติตามต้องการดังกล่าวข้างต้น ของมหาวิทยาลัยบูรพา ทั้งหมดออกแบบและสร้างขึ้นโดยคณะนักวิจัยของห้องปฏิบัติการวิจัยเอง โดยได้รับการสนับสนุนทุนวิจัยหลักจาก มหาวิทยาลัยบูรพาและสำนักงานกองทุนสนับสนุนการวิจัย ส่วนใหญ่เป็นเครื่องเคลือบในสุญญากาศระบบต่างๆ แบ่งเป็นเครื่องมือขนาดเล็กสำหรับใช้ในงานวิจัยพื้นฐาน และเครื่องมือขนาดใหญ่สำหรับทดลองต้นแบบอุตสาหกรรม ดังนี้</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image002.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image004.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 1 เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงขนาดเล็กสำหรับงานวิจัยพื้นฐาน</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image006.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image008.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 2 เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานวิจัยพื้นฐาน</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image010.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image012.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 3 เครื่องเคลือบในสุญญากาศระบบระเหยสารสำหรับงานวิจัยพื้นฐาน</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image014.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image016.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 4  เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานวิจัยพื้นฐานด้านการเคลือบฟิล์มบางแสง</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image018.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image020.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 5  เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานวิจัยต้นแบบอุตสาหกรรมด้านการเคลือบแข็ง</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image022.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image024.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 6  เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานวิจัยต้นแบบอุตสาหกรรม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image026.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image028.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 7 เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานวิจัยต้นแบบอุตสาหกรรม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image030.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image032.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 8 เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานเคลือบต้นแบบระดับอุตสาหกรรม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image064.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <p>
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image065.jpg">
                    </p>
                    <p>
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image066.jpg">
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image067.jpg">
                    </p>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 9 เครื่องเคลือบในสุญญากาศระบบสปัตเตอริงสำหรับงานเคลือบระดับอุตสาหกรรม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image068.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <p>
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image069.jpg">
                    </p>
                    <p>
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image070.jpg">
                        <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image071.jpg">
                    </p>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 10 เครื่องเคลือบในสุญญากาศระบบคาโทดิกอาร์คและสปัตเตอริงสำหรับงานเคลือบระดับอุตสาหกรรม</small></p>
                <p>&nbsp;</p>

                <h3>การปรับปรุงพื้นผิววัสดุด้วยพลาสมา</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การปรับปรุงพื้นผิววัสดุโดยทั่วไปส่วนใหญ่จะใช้กระบวนการทางเคมีหรือกระบวนการทางความร้อน ซึ่งมีข้อเสียและข้อจำกัดหลายอย่าง เช่น คุณภาพของพื้นผิวที่ได้รับการปรับปรุงแล้วยังไม่ดีนัก วัสดุหรือชิ้นงานที่ต้องการปรับปรุงต้องเหมาะสำหรับกระบวนการทางเคมีเท่านั้น นอกจากนี้ยังเป็นกระบวนการที่ใช้สารเคมีจำนวนมากทำให้เกิดปัญหาต่อสิ่งแวดล้อมอีกด้วย</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อจำกัดเหล่านั้นสามารถแก้ไขได้โดยใช้เทคนิคการปรับปรุงพื้นผิววัสดุด้วยพลาสมา (plasma surface modification) เนื่องจาก พลาสมาที่ใช้ในกระบวนการปรับปรุงพื้นผิววัสดุจะทำอันตรกิริยา (interaction) เฉพาะอะตอมที่มีลักษณะเป็นชั้นบางๆ ที่อยู่บริเวณผิวหน้าของวัสดุเท่านั้น เพื่อให้มีสมบัติตามต้องการเท่านั้น พลาสมาที่ใช้จะไม่มีผลต่อวัสดุทั้งชิ้นงาน (bulk) ที่สำคัญกระบวนการปรับปรุงพื้นผิววัสดุด้วยพลาสมานั้นเป็นกระบวนการที่ไม่จำเป็นต้องใช้ความร้อนซึ่งอาจมีผลต่อสมบัติโดยรวมของชิ้นงาน อีกทั้งยังไม่มีการใช้สารเคมีที่จะก่อให้เกิดปัญหาต่อสิ่งแวดล้อมด้วย</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผลงานวิจัยด้านการปรับปรุงพื้นผิววัสดุด้วยพลาสมาที่กำลังทำอยู่ที่มหาวิทยาลัยบูรพาแบ่งออกเป็น 4 กลุ่มหลักดังนี้คือ</p>
                <ol>
                    <li>กลุ่มการเคลือบแข็ง (hard coating) เป็นปรับปรุงสมบัติเชิงกลและไตรโบโลยีของพื้นผิววัสดุเพื่อเพิ่มความแข็งและ ความทนทาน</li>
                    <li>กลุ่มการเคลือบเพื่อสวยงาม (decorative coating) เป็นปรับปรุงสมบัติเชิงผิวของชิ้นงานให้มีความสวยงาม</li>
                    <li>กลุ่มการเคลือบฟิล์มบางแสง (optical coating) เป็นปรับปรุงสมบัติทางแสงของชิ้นงานให้มีสมบัติตามต้องการ</li>
                    <li>กลุ่มการเคลือบฟิล์มบางที่สมบัติเฉพาะ (functional coating) เป็นปรับปรุงสมบัติเชิงผิวของวัสดุให้มีสมบัติเฉพาะตามต้องการ เช่น hydrophilic หรือ hydrophobic เป็นต้น</li>
                </ol>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image072.jpg">
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image073.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image074.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image075.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image076.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image077.jpg">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 11 ตัวอย่างชิ้นงานที่ผ่านการปรับปรุงผิวด้วยกระบวนการเคลือบด้วยพลาสมาในกลุ่มการเคลือบแข็ง</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image051.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image053.jpg">
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image055.jpg">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 12 ตัวอย่างชิ้นงานที่ผ่านการปรับปรุงผิวด้วยกระบวนการเคลือบด้วยพลาสมาในกลุ่มการเคลือบสวยงาม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image057.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image059.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 13 ตัวอย่างชิ้นงานที่ผ่านการปรับปรุงผิวด้วยกระบวนการเคลือบด้วยพลาสมาในกลุ่มการเคลือบสวยงาม</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image061.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity5/image063.jpg"><br>
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>รูปที่ 14 ตัวอย่างชิ้นงานที่ผ่านการปรับปรุงผิวด้วยกระบวนการเคลือบด้วยพลาสมาในกลุ่มการเคลือบฟิล์มบางที่มีสมบัติเฉพาะ</small></p>
                <p>&nbsp;</p>

                <h3>จ) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            ผศ.ดร.นิรันดร์ วิทิตอนันต์ <em>ผู้ประสานงาน</em><br>
                            รศ.ดร.สุรสิงห์  ไชยคุณ<br>
                            รศ.สำเภา จงจิตต์
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาตรี :
                        </td>
                        <td style="text-align: left;">
                            นางสาวจินดาวรรณ  สิงห์คต<br>
                            นายวุฒิพงศ์  ศาสนสุพิน
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาโท :
                        </td>
                        <td style="text-align: left;">
                            นายพึ่งบุญ  ปานศิลา
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                <p>ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์<br>
                    มหาวิทยาลัยบูรพา จ.ชลบุรี-20131<br>
                    โทรศัพท์/โทรสาร : 038-103-084<br>
                    E-mail : nirun@buu.ac.th<br>
                    URL : vttf.buu.ac.th
                </p>

            </div>

        <?php } elseif ($lab == 'agricultural') {
            ?>
            <div class="row">
                <h2 style="text-align: center;">ห้องปฏิบัติการวิจัยเทคโนโลยีพลาสมาเพื่อการประยุกต์ทางกสิกรรม<br>
                    (Plasma Technology for Agricultural Applications Research Laboratory)
                </h2>
                <h3>ประวัติความเป็นมา</h3>
                <p style="font-weight: bold; font-style: italic;">“กสิกรแข็งขันเป็นกระดูกสันหลังของชาติ   ไทยจะเรืองอำนาจเพราะไทยเป็นชาติกสิกรรม”</p>
                <p>&nbsp;</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดังคำกล่าวที่ว่าประเทศที่มีเทคโนโลยีเป็นของตนเองย่อมมีความได้เปรียบในเชิงเศรษฐกิจและเสถียรภาพของสังคม และ ประเทศที่มีความเจริญทางเทคโนโลยีจะต้องมีความเข้มแข็งทางด้านวิทยาศาสตร์พื้นฐานเสียก่อน สำหรับประเทศไทยซึ่งเป็นประเทศกสิกรรม รายได้ของประเทศส่วนหนึ่งได้จากผลผลิตทางการเกษตรปีละหลายหมื่นล้านบาท แต่เรื่องการพัฒนาเทคโนโลยีเพื่อยกระดับการกสิกรรมนั้นมีน้อยมาก ซึ่งในภาวะปัจจุบันไม่ว่าจะเนื่องจากความแปรปรวนของธรรมชาติ เช่น โลกร้อน และปัญหาเรื่องสภาวะแวดล้อมเป็นพิษ เช่น น้ำเน่าเสีย การใช้สารเคมี  หรือแม้แต่วิกฤติพลังงาน เหล่านี้ล้วนส่งผลในแง่ลบต่อเศรษฐกิจของประเทศด้านกสิกรรมทั้งสิ้น</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image002.jpg"><br>
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image004.jpg"><br>
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ห้องปฏิบัติการวิจัยพลาสมาเชิงประยุกต์ด้านกสิกรรม ได้จัดตั้งขึ้นเมื่อปีพ.ศ. 2544 โดยมีความมุ่งหมายที่จะพัฒนาแนวทางของการวิจัยระดับพื้นฐานและการศึกษาระดับบัณฑิตศึกษาที่จะสร้างองค์ความรู้ใหม่ทางด้านพลาสมาเชิงประยุกต์ด้านกสิกรรม รวมทั้งมุ่งเน้นที่จะผลิตบุคลากรที่มีความสามารถเฉพาะทางสำหรับการแก้ปัญหาที่มีความยากและซับซ้อนทางด้าน พลังงาน สิ่งแวดล้อม สุขภาพ การสร้างเทคโนโลยีใหม่เพื่อเศรษฐกิจแบบยั่งยืน และเพื่อต่อยอดงานวิจัยไปสู่การใช้งานจริงและถ่ายทอดเทคโนโลยีสู่ชุมชน ลดการเสียดุลการค้าจากต่างประเทศ</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยได้เริ่มทำการวิจัยโครงการเพื่อพัฒนาแหล่งกำเนิดไอออนบีมความหนาแน่นสูงเมื่อปีพ.ศ. 2545 โครงการดังกล่าวเป็นส่วนหนึ่งของชุดโครงการเซลล์แสงแดดไทยซึ่งมี ดร.วิโรจน์ ตันตราภรณ์ เป็นที่ปรึกษาชุดโครงการ เป้าหมายการวิจัยของชุดโครงการคือต้องการที่จะสร้างเซลล์แสงแดดที่มีประสิทธิภาพสูงที่สุดในโลกและจัดตั้งโรงงานผลิตขึ้นในประเทศไทย จึงทำให้ชุดโครงการเป็นโครงการที่ได้รับทุนวิจัยอย่างต่อเนื่องจากภาครัฐมาเป็นเวลากว่า 5 ปี สำหรับการสร้างไอออนบีมความหนาแน่นสูงนั้นจำเป็นที่จะต้องเทคโนโลยีและวิทยาการต่างๆหลายด้านเช่น เทคโนโลยีคลื่นแม่เหล็กไฟฟ้าความถี่สูง(RF, Microwave) เทคโนโลยีสุญญากาศ เทคโนโลยีการกำเนิดพลาสมา เป็นต้น ทำให้นักวิจัยสามารถนำเทคโนโลยีดังกล่าวไปประยุกต์ใช้สำหรับการกสิกรรมต่างๆ ได้เช่น การอบแห้งวัสดุทางการเกษตรด้วยเทคโนโลยีไมโครเวฟ การบำบัดน้ำเสียด้วยเทคโนโลยีพลาสมา หรือการอบแห้งสมุนไพรในสุญญากาศด้วยไมโครเวฟ เป็นต้น</p>
                <p>&nbsp;</p>

                <h3>วิสัยทัศน์</h3>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image006.gif">
                </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิสัยทัศน์ของห้องวิจัยจะมองแนวทางการวิจัยเปรียบเสมือนต้นไม้ใหญ่ ที่มีการเรียนรู้และการวิจัยฟิสิกส์เป็นรากฐานที่สำคัญต่อการสร้างลำต้นขององค์ความรู้ใหญ่ที่จะสามารถแตกกิ่งก้านสาขาออกเป็นแขนงของเทคโนโลยีในด้านต่างๆ ได้แก่ การพัฒนาเทคโนโลยีใหม่เพื่อการจดสิทธิบัตร การสร้างเทคโนโลยีในเชิงพานิชย์ สำหรับชุมชนและอุตสาหกรรม การผลิตบัณฑิตศึกษา โท-เอกและการตีพิมพ์ และ การเรียนรู้วิทยาศาสตร์ของชุมชน ขณะเดียวกันส่วนยอดก็จำเป็นที่จะต้องพัฒนาวิทยาศาสตร์ในระดับปริญญาตรีให้เจริญเติบโตเพื่อออกดอกออกผลเป็นกำลังของต้นอ่อนของวิทยาศาสตร์แบบยั่งยืนต่อไปในอนาคต</p>
                <p>&nbsp;</p>

                <h3>พันธกิจ</h3>
                <ol>
                    <li>ดำเนินการวิจัยในเชิงลึกเกี่ยวฟิสิกส์และเทคโนยีของพลาสมาและไอออนบีม เพื่อสร้างองค์ความรู้ที่ทันสมัย มีมาตรฐานในระดับสากล</li>
                    <li>ประยุกต์ใช้ความรู้ของพลาสมา ไอออนบีม และคลื่นแม่เหล็กไฟฟ้าความถี่สูงเพื่อพัฒนานวตกรรมและเทคโนโลยีเพื่อยกระดับมาตรฐานการผลิตทางด้านกสิกรรมของประเทศให้สูงขึ้น</li>
                    <li>พัฒนาและสร้างบุคลากรที่มีศักยภาพสูงในการวิจัยทางด้านพลาสมา ไอออนบีม และคลื่นแม่เหล็กไฟฟ้าความถี่สูง</li>
                    <li>ทำการเผยแพร่องค์ความรู้ทางด้านพลาสมา ไอออนบีม และคลื่นแม่เหล็กไฟฟ้าความถี่สูง  ไปยังสังคมกลุ่มต่างๆ เช่นนักเรียน นักศึกษา และประชาชนทั่วไป</li>
                    <li>ร่วมวิจัยกับนักวิจัยในสาขาอื่นๆ เช่นการแพทย์ วัสดุศาสตร์ สิ่งแวดล้อม และอิเล็กทรอนิกส์ เพื่อประยุกต์ใช้งานองค์ความรู้ทางด้านพลาสมา ไอออนบีม และคลื่นแม่เหล็กไฟฟ้าความถี่สูง</li>
                </ol>
                <p>&nbsp;</p>

                <h3>ผลงานวิจัย</h3>
                <strong>1. ผลงานวิจัยเพื่อการพัฒนาในเชิงพานิชย์</strong>
                <p><span style="font-weight: bold; font-style: italic;">1.1  ชุดทดลองฟิสิกส์และเทคโนโลยีไมโครเวฟ</span> ซึ่งประกอบด้วย</p>
                <ul>
                    <li>เครื่องจ่ายความต่างศักย์สูงของแมกนีตรอน 0 – 200 W</li>
                    <li>Microwave leak detector</li>
                    <li>Multi-mode resonant cavity</li>
                </ul>
                <p><span style="text-decoration: underline; font-weight: bold;">ความต้องการ</span> บริษัท ESSOM (http://www.essom.com/about.php) สนใจที่จะทำตลาดในและต่างประเทศ</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image023.jpg">
                </p>    
                <p>&nbsp;</p>

                <p><span style="font-weight: bold; font-style: italic;">1.2  การพัฒนา Microwave drying system สำหรับทำอาหารอัดเม็ดแห้ง</span> ซึ่งประกอบด้วย</p>
                <ul>
                    <li>เครื่องจ่ายความต่างศักย์สูงของแมกนีตรอน 0-600 วัตต์</li>
                    <li>Slot waveguide antenna</li>
                </ul>
                <p><span style="text-decoration: underline; font-weight: bold;">ความต้องการ</span> บริษัทไทรอัมเอ็นจิเนียริ่ง (http://www.triumphthailand.com/tec-whychoose-tec.html) สนับสนุนทุนวิจัยเพื่อพัฒนาเครื่องต้นแบบ</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image022.jpg">
                </p>    
                <p>&nbsp;</p>

                <p><span style="font-weight: bold; font-style: italic;">1.3  การพัฒนาระบบอบรังนกด้วยคลื่นไมโครเวฟภายใต้สภาวะสุญญากาศ</span> ซึ่งประกอบด้วย</p>
                <ul>
                    <li>ห้องสุญญากาศความดันต่ำกว่า 30 ทอร์</li>
                    <li>ปั๊มสุญญากาศ</li>
                    <li>ระบบการจ่ายและการส่งกำลังคลื่นไมโครเวฟ</li>
                    <li>ระบบควบคุมอัตโนมัติ</li>
                </ul>
                <p><span style="text-decoration: underline; font-weight: bold;">ความต้องการ</span> บริษัทขวัยมุย (23 ถ.พานิชสัมพันธ์ อ.ปากพนัง จ.นครฯ โทร.075-517195) สั่งซื้อเพื่อนำไปพัฒนาผลิตภัณฑ์ฯเพื่อการส่งออก</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image014.gif">
                </p>    
                <p>&nbsp;</p>

                <p><span style="font-weight: bold; font-style: italic;">1.4  ระบบการกำเนิดโอโซนประสิทธิภาพสูง</span> ซึ่งประกอบด้วย</p>
                <ul>
                    <li> หลอดโอโซนแบบ Atmospheric glow barrier discharge</li>
                    <li>แหล่งกำเนิดคลื่นวิทยุความต่างศักย์สูง และความถี่สูง</li>
                </ul>
                <p><span style="text-decoration: underline; font-weight: bold;">ความต้องการ</span> ร่วมกับบริษัทเอเชียเทค อินดัสทรี จำกัด(http://www.ozzon.com/) พัฒนาหลอดโอโซน และเครื่องจ่ายกำลังคลื่นวิทยุประสิทธิภาพสูง</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image020.jpg">
                </p>    
                <p>&nbsp;</p>

                <p><span style="font-weight: bold; font-style: italic;">เครื่องอบปลากึ่งแห้งด้วยคลื่นไมโครเวฟได้อย่างมีประสิทธิภาพ</span> ซึ่งสามารถทำปลากึ่งแห้งในระบบปิด ประหยัดพลังงาน และสามารถควบคุมการปนเปื้อนจากแมลง ฝุ่นละออง ได้อย่างมีประสิทธิภาพ</p>                
                <p><span style="text-decoration: underline; font-weight: bold;">ความต้องการ</span> กำลังพัฒนาเพื่อให้เหมาะสมกับความต้องการของชุมชน</p>
                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity6/image021.jpg">
                </p>    
                <p>&nbsp;</p>

                <p><strong>2. โครงการวิจัย</strong></p>
                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 โครงการวิจัย 5 ปีย้อนหลัง</strong></p>
                <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td align="center"><strong>ชื่อโครงการ</strong></td>
                            <td align="center"><strong>แหล่งทุน</strong></td>
                            <td align="center"><strong>งบประมาณ (บาท)</strong></td>
                            <td align="center"><strong>ระยะเวลา</strong></td>
                        </tr>
                        <tr>
                            <td width="40%">การพัฒนาไอออนบีมสำหรับการเซาะร่องในโซลาร์เซลแบบคลับแซนด์วิช</td>
                            <td width="20%">สกว.</td>
                            <td width="20%">2,631,200</td>
                            <td width="20%">พย.45- พย.47 </td>
                        </tr>
                        <tr>
                            <td>การพัฒนาระบบเครื่องกำเนิดโอโซนโดยใช้เทคนิค Barrier discharge สำหรับการจัดเก็บเงาะ ทุเรียนและพืชผัก</td>
                            <td>สกอ.</td>
                            <td>876,700</td>
                            <td>มิย. 47- มิย.48 </td>
                        </tr>
                        <tr>
                            <td>การพัฒนาเตาอบปลาแห้งไมโครเวฟประสิทธิภาพสูง</td>
                            <td>สกอ.</td>
                            <td>420,200</td>
                            <td>เมย.48- เมย.49 </td>
                        </tr>
                        <tr>
                            <td>การพัฒนาไอออนบีมสำหรับการเซาะร่องในโซลาร์เซลแบบคลับแซนด์วิช</td>
                            <td>สกว.</td>
                            <td>2,109,323</td>
                            <td>กย.48-กย.49</td>
                        </tr>
                        <tr>
                            <td>การพัฒนาระบบการผลิตน้ำโอโซนอัตโนมัติเพื่อการเพาะเลี้ยงกุ้งอย่างยั่งยืน</td>
                            <td>มูลนิธิโทเรฯ</td>
                            <td>190,000</td>
                            <td>กพ. 49 – กพ.50</td>
                        </tr>
                        <tr>
                            <td>การพัฒนาไอออนบีมความหนาแน่นและความคมสูงของอะตอมธาตุชนิดต่าง ๆ </td>
                            <td>พพ. ร่วมกับ สกว.</td>
                            <td>1,438,657</td>
                            <td>กย. 2549 – กย.2550</td>
                        </tr>
                        <tr>
                            <td>การพัฒนาระบบอบปลาแห้งกึ่งอัตโนมัติด้วยคลื่นไมโครเวฟ</td>
                            <td>สกอ.</td>
                            <td>84,000</td>
                            <td>มิย.50- มิย.51</td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>

                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 โครงการวิจัยที่กำลังดำเนินการอยู่ในปัจจุบัน</strong></p>
                <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td align="center"><strong>ชื่อโครงการ</strong></td>
                            <td align="center"><strong>แหล่งทุน</strong></td>
                            <td align="center"><strong>งบประมาณ (บาท)</strong></td>
                            <td align="center"><strong>ระยะเวลา</strong></td>
                        </tr>
                        <tr>
                            <td width="40%">การเพิ่มประสิทธิภาพการผลิตอาหารสัตว์อัดเม็ดด้วยคลื่นไมโครเวฟ</td>
                            <td width="20%">บริษัทไทรอัมพ์เอ็นจิเนียริ่งจำกัด</td>
                            <td width="20%">330,000</td>
                            <td width="20%">ตค. 50- มิย.51</td>
                        </tr>
                        <tr>
                            <td>การพัฒนาชุดขยายคลื่นวิทยุโซลิดสเตทแบบมอดูลาร์ความถี่ 118 เมกะเฮิร์ต ขนาด 2.5 กิโลวัตต์</td>
                            <td>ศูนย์ปฏิบัติการเครื่องกำเนิดแสงซินโครตรอนฯ</td>
                            <td>2,120,800</td>
                            <td>พย.50- พย.52 </td>
                        </tr>
                        <tr>
                            <td>การพัฒนาแบบจำลองทางคณิตศาสตร์เพื่ออธิบายการดูดกลืนคลื่นวิทยุของตัวอ่อนแมลงในผลเงาะ</td>
                            <td>สวทช.</td>
                            <td>150,000</td>
                            <td>ตค.50 – ตค.51</td>
                        </tr>
                        <tr>
                            <td>เทคโนโลยีพลาสมาเพื่อการทำให้ปราศจากเชื้อสำหรับเครื่องมือแพทย์</td>
                            <td>วช.</td>
                            <td>8,000,000</td>
                            <td>2 ปี</td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>

                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 โครงการวิจัยที่กำลังดำเนินการอยู่ในปัจจุบัน</strong></p>
                <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                            <td align="center"><strong>ชื่อโครงการ</strong></td>
                            <td align="center"><strong>แหล่งทุน</strong></td>
                            <td align="center"><strong>งบประมาณ (บาท)</strong></td>
                            <td align="center"><strong>ระยะเวลา</strong></td>
                        </tr>
                        <tr>
                            <td width="40%">การพัฒนาพลาสมาที่ความดันต่ำด้วยคลื่นความถี่วิทยุเพื่อการปรับปรุงผิวของเมมเบรน แบบต่อเนื่องกึ่งอัตโนมัติ</td>
                            <td width="20%">ศูนย์นาโนเทคโนโลยีแห่งชาติ</td>
                            <td width="20%">619,600</td>
                            <td width="20%">1 ปี </td>
                        </tr>
                        <tr>
                            <td>การพัฒนาไอออนบีมความหนาแน่นและความคมสูงของอะตอมธาตุชนิดต่าง ๆ </td>
                            <td>พพ. ร่วมกับ สถาบันเทคโนโลยีนิวเคลียร์ฯ</td>
                            <td>1,753,637</td>
                            <td>1 ปี </td>
                        </tr>

                    </tbody></table>
                <p>&nbsp;</p>

                <h3>จ) คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            ผศ.ดร.หมุดตอเล็บ หนิสอ  <em>ผู้ประสานงาน</em><br>
                            อาจารย์  พันธุ์ศักดิ์ เกิดทองมี<br>
                            นายไพรวัลย์ เกิดทองมี
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิค :
                        </td>
                        <td style="text-align: left;">
                            นายธรรรมนูญ ศรีน่วม<br>
                            นายเฉลิม เต๊ะสนู
                        </td>
                    </tr>                    
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                <p>อาคารศูนย์เครื่องวิทยาศาสตร์ 5 (B5) มหาวิทยาลัยวลัยลักษณ์<br>
                    222 ต. ไทยบุรี อ.ท่าศาลา จ.นครศรีธรรมราช 80160<br>
                    โทรศัพท์ : 075-673-229<br>
                    โทรสาร : 075-672-004<br>
                    E-mail : nmudtorl@wu.ac.th
                </p>

            </div>
            <?php
        } elseif ($lab == 'membrane') {
            ?>

            <div class="row">
                <h2>ห้องปฏิบัติการวิจัยวิทยาศาสตร์และเทคโนโลยีเมมเบรน<br>
                    (Membrane Science and Technology Research Laboratory)
                </h2>
                <h3>(ก) ขอบเขต</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งานวิจัย/ศึกษาของหน่วยปฏิบัติการวิจัยด้านเซลล์และเมมเบรนสังเคราะห์จัดอยู่ในแขนงวิชาการที่เรียกว่า “ชีวฟิสิกส์ (Biophysics)” โดยจะเน้นให้ความสนใจใน 2 ด้าน ดังต่อไปนี้</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้านเซลล์เน้นงานด้านกลศาสตร์เชิงไฟฟ้าของเซลล์แขวนลอย (Electro-mechanics of cell suspension) พฤติกรรมของเซลล์เดี่ยวในสนามไฟฟ้ามีหลายรูปแบบ เช่น การเกิดโซ่เซลล์ การเคลื่อนที่เชิงเส้น การเคลื่อนที่เชิงมุม การยืด-หดของเยื่อหุ้มเซลล์ การเปิดของรูบนเยื่อหุ้มเซลล์แบบชั่วคราว การเกิดไดอิเล็กทริกเบรคดาวน์ การศึกษาสมบัติของเซลล์หลังติดเชื้อ และบอกการมีชีวิตของเซลล์ เป็นต้น พฤติกรรมเหล่านี้เกิดจากการเหนี่ยวนำขั้วคู่ (ไดโพล) แบบชั่วคราวภายในเซลล์ โดยอาศัยขั้วไฟฟ้ารูปแบบต่างๆและใช้สัญญานไฟฟ้าย่านความถี่คลื่นวิทยุ นักวิจัยบางกลุ่มสนใจพัฒนาแบบจำลองเชิงคณิตศาสตร์เพื่ออธิบายพฤติกรรมเชิงกลของเซลล์ที่มีรูปร่างต่างๆ บ้างสนใจพัฒนาการนำพฤติกรรมในสนามไฟฟ้าเหล่านี้ไปใช้ประโยชน์ ความสัมพันธ์ระหว่างสมบัติไดอิเล็กทริกเชิงซ้อนของเซลล์และสารละลาย สามารถนำไปวิเคราะห์สมบัติเชิงไฟฟ้าที่เปลี่ยนไปของเยื่อหุ้มเซลล์และภายในเซลล์ภายใต้เงื่อนไขของสิ่งแวดล้อมที่จัดขึ้น</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สำหรับด้านเยื่อบางสังเคราะห์ ทางหน่วยปฏิบัติการวิจัยเน้นการใช้วัสดุชีวภาพที่มีในท้องถิ่น เช่นไคโตซาน เซลลูโลส และน้ำยาง โครงการวิจัย/ศึกษานี้ต้องบูรณาการบุคลากรหลายสาขาร่วมกัน นอกจากฟิสิกส์แล้วยังประกอบด้วยสาขาวัสดุศาสตร์ อุตสาหกรรมอาหาร และวิศวกรรมโยธา งานจึงมีขอบเขตกว้าง จากการผลิตเยื่อบางชนิดรูพรุนและชนิดแน่น เพื่อการกรอง ศึกษาวิธีวิเคราะห์สมบัติของเยื่อกรอง การปรับปรุงผิวด้วยเทคนิคลำอนุภาคและพลาสมา การทำรูพรุนด้วยเทคนิคนิวเคลียร์ สำหรับเยื่อที่มีประจุ การศึกษาจะเน้นด้านสมบัติการแพร่ของประจุและการนำไฟฟ้าของเยื่อบาง นอกจากนี้ยังมีเยื่อพอลิเมอร์อื่นๆเช่น เซลลูโลสอะซิเตด เซรามิกส์และโลหะ เป็นต้น ส่วนงานด้านประยุกต์ เน้นน้ำดื่ม การบำบัดน้ำเสีย การแยกโปรตีน หรือเอ็นไซม์ออกจากน้ำทิ้งโรงงานอุตสาหกรรมอาหารทะเล และการแยกแก๊ส เป็นต้น</p>
                <p>&nbsp;</p>

                <h3>(ข) เครื่องมือที่เกี่ยวข้อง</h3>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image001.png">
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 277px; height: auto;" src="http://www.thep-center.org/images/activity7/image003.png">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>อุปกรณ์ศึกษาเซลล์ในสนามไฟฟ้าและ Micro-chip</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image006.gif">
                </div>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image008.gif">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>ผลของสนามไฟฟ้าต่อเซลล์แขวนลอย</small></p>
                <p>&nbsp;</p>

                <p style="text-align: center;">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/imageABC.png">
                </p>
                <p style="text-align: center;"><small>อุปกรณ์เตรียมเยื่อบาง (ก) เครื่องผลิตเยื่อกรองแบบท่อกลวง (ข) เครื่องผลิตเยื่อกรองแบบแผ่น (ค) เครื่องตัดเยื่อกรอง</small></p>


                <h3>ง) การศึกษา/วิจัยที่พยายามยืนบนขาตนเอง</h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทิศทางของงานวิจัยเน้นการนำไปใช้งานในชุมชนภาคใต้ เช่นการผลิตน้ำดื่มปลอดสารหนู และสาธิตการทำงานของระบบกรองน้ำแบบเคลื่อนที่ได้ พร้อมทั้งผลิตน้ำดื่มให้หมู่บ้านเป็นเวลา 3 เดือน ที่จังหวัดนครศรีธรรมราช การผลิตเยื่อกรองที่สามารถกำจัดสารแทนนินออกจากน้ำบ่อของชุมชนได้ นอกจากนี้ด้านพลังงานทางเลือก หน่วยปฏิบัติการวิจัยฯกำลังศึกษาการผลิตเยื่อบางที่ใช้สำหรับแยกแก๊สชีวภาพ และแยกสารอินทรีย์ในน้ำทิ้งโรงงานยางพารา ซึ่งเป็นสาเหตุของกลิ่นที่กลับส่งผลเชิงลบต่ออุตสาหกรรมการท่องเที่ยวในภาคใต้ ส่วนงานด้าน Recovery & Reuse ได้เก็บสารมีค่าจากน้ำทิ้งโรงงานอาหารทะเล เช่นเอ็นไซม์และโปรตีน เป็นการเพิ่มมูลค่าให้กับท้องถิ่น โดยทำวิจัยร่วมกับโรงงานอุตสาหกรรมในพื้นที่</p>

                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image031.gif"><br>
                    <small>1 ประชุมร่วมกับนักวิชาการในชุมชน</small>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image029.jpg"><br>
                    <small>2 ขนย้ายเครื่องผลิตน้ำดื่มปลอดสารหนู</small>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image033.png"><br>
                    <small>3 สาธิตการใช้งาน</small>
                </div>
                <br style="clear: both;">                
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image035.jpg"><br>
                    <small>อุปกรณ์ศึกษาเซลล์ในสนามไฟฟ้าและ Micro-chip</small>
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image037.jpg"><br>
                    <small>กล้วยไม้หายาก ที่ได้รับการอนุรักษ์บนเกาะพระทองู</small>
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image041.jpg"><br>
                    <small>น้ำบ่อชาวบ้านที่ปนเปื้อนด้วนแทนนิน</small>
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image039.gif"><br>
                    <small>น้ำที่กรองแล้วด้วยเยื่อเซลลูโลสอะซิเตด</small>
                </div>
                <br style="clear: both;">
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image043.jpg">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image045.jpg">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image047.jpg">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image049.jpg">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>เครื่องผลิตน้ำดื่มแบบเคลื่อนที่ซึ่งหน่วยปฏิบัติการวิจัยฯได้ริเริ่มใช้ผลิตน้ำดื่มช่วยผู้ประสพอุทกภัยในเขตหาดใหญ่-สงขลาในปี 2547</small></p>
                <p>&nbsp;</p>

                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image051.jpg">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image053.jpg">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image055.gif">
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <img style="max-width: 100%; height: auto;" src="http://www.thep-center.org/images/activity7/image057.jpg">
                </div>
                <br style="clear: both;">
                <p style="text-align: center;"><small>อบรมการผลิตน้ำดื่มด้วยเยื่อสังเคราะห์ให้มูลนิธิศุภนิมิตประเทศไทย และสร้างระบบผลิตน้ำดื่มจากน้ำผิวดิน</small></p>
                <p>&nbsp;</p>

                <h3>คณะทำงาน</h3>
                <table style="margin-left: 24px;">
                    <tr style="vertical-align: top;">
                        <td>
                            นักวิจัย :
                        </td>
                        <td style="text-align: left;">
                            รศ. ดร. พิกุล  วณิชาภิชาติ  <em>ผู้ประสานงาน</em><br>
                            รศ. ดร. ธวัช ชิตตระการี<br>
                            ผศ. ดร. ยุทธนา ระวณิชย์กุล<br>
                            ดร. สุขสวัสดิ์  ศิริจารุกุล<br>
                            ผศ. ดร. วิรัช ทวีปรีดา<br>
                            ผศ. ดรุณี  ผ่องสุวรรณ<br>
                            ผศ. ดร.วิโรจน์ ยูรวงศ์<br>
                            ผศ. ดร. พรทิพย์ ศรีแดง
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาโท :
                        </td>
                        <td style="text-align: left;">
                            1. นางสาวรัชนก สังข์คำ<br>
                            2. นางสาวธนิตพร นาคกุล<br>
                            3. นายอาคม สมสอ<br>
                            4. นายรัฐพงษ์ หนูหมาด<br>
                            5. นางสาวศุภลักษณ์ อรรณพ<br>
                            6. นางสาวอุมาพร ปรีชา<br>
                            7. นางสาวนฤมล ทองมาก<br>
                            8. นายเกียรติฉัตร์ แกว่นกสิกรรม
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            นักศึกษาปริญญาเอก :
                        </td>
                        <td style="text-align: left;">
                            1. นางสาวอาพร ละออกอ<br>
                            2. นางสาวกัญจนพร วชิรอนันต์<br>
                            3. นายปัณณวิชช์ สุขประเสริฐ
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เผู้ช่วยวิจัย :
                        </td>
                        <td style="text-align: left;">
                            1. นางสาวพัสตราภรณ์  ชุมแก่น
                            2. นายธีรยศถ์ ทองศรี<br>
                            3. นางสาวอิษฎา ศิลปรัตน์<br>
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td>
                            เจ้าหน้าที่เทคนิค :
                        </td>
                        <td style="text-align: left;">
                            นายอำนวย  แก้วไพบูลย์<br>
                            นายจำรัส ณ สุวรรณ
                        </td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <h3>สถานที่ติดต่อ</h3>
                <p>
                    ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์<br>
                    มหาวิทยาลัยสงขลานครินทร์ อ. หาดใหญ่ จ. สงขลา – 90112<br>
                    โทรศัพท์ : 074 - 288749<br>
                    โทรสาร : 074 - 212817<br>
                    E-mail : pikul.v@psu.ac.thackeray
                </p>

            </div>

            <?php
        }
        ?>


        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
