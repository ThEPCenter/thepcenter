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
                <table>
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
                <table>
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
                <table>
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
            <?php
        } elseif ($lab == '') {
            
        }
        ?>


        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
