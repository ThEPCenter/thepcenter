-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_thep`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_article`
-- 

CREATE TABLE `tb_article` (
  `id` int(11) NOT NULL auto_increment,
  `name` text collate utf8_unicode_ci NOT NULL,
  `author` text collate utf8_unicode_ci NOT NULL,
  `c_author` varchar(255) collate utf8_unicode_ci NOT NULL,
  `journal` text collate utf8_unicode_ci NOT NULL,
  `volume` varchar(50) collate utf8_unicode_ci NOT NULL,
  `issue` varchar(50) collate utf8_unicode_ci NOT NULL,
  `page` varchar(50) collate utf8_unicode_ci NOT NULL,
  `year` smallint(6) unsigned NOT NULL,
  `impact` float unsigned NOT NULL,
  `research_center` varchar(255) collate utf8_unicode_ci NOT NULL,
  `research_lab` varchar(255) collate utf8_unicode_ci NOT NULL,
  `detail` text collate utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- 
-- dump ตาราง `tb_article`
-- 

INSERT INTO `tb_article` VALUES (1, 'Growth kinetic and characterization of tetrapod ZnO nanostructures', 'N. Hongsith, T. Chairuangsri, T. Phaechamud, S. Choopun', 'S. Choopun', 'Solid State Communications', '149', '', '1', 2011, 0.43453, 'TFP', 'TFP/CMU/3', '', '1_2011.pdf');
INSERT INTO `tb_article` VALUES (2, 'Zinc oxide nanostructures for applications as ethanol sensors and dye-sensitized solar cells', 'Supab Choopun, Auttasit Tubtimtae, Theerapong Santhaveesuk, Sanpet Nilphai, Ekasiddh Wongrat, Niyom Hongsith', 'S. Choopun', 'Applied Surface Science', '256', '', '998–1002', 2009, 42, 'TFP', 'TFP/CMU/3', '', '2_2009.pdf');
INSERT INTO `tb_article` VALUES (3, 'Ab Initio Study of Molecular Hydrogen Adsorption in Covalent Organic Framework-1', 'Pornjuk Srepusharawoot, Ralph H. Scheicher, C. Moyses Araujo, Andreas Blomqvist, Udomsilp Pinsook, and Rajeev Ahuja', 'Pornjuk Srepusharawoot', 'J. Phys. Chem. C', '113', '', '8498–8504', 2009, 0, 'TFP', 'TFP/KKU/2', '0', '3_2009.pdf');
INSERT INTO `tb_article` VALUES (4, 'Enhancement of Ethanol Sensing Properties by Alloying With ZnO&lt;sub&gt;2&lt;/sub&gt; With ZnO Tetrapods', 'Theerapong Santhaveesuk, Duangmanee Wongratanaphisan, and Supab Choopun', 'Theerapong Santhaveesuk', 'IEEE SENSORS JOURNAL', '10', '1', '39-43', 2010, 0, 'TFP', 'TFP/CMU/3', '', '4_2010.pdf');
INSERT INTO `tb_article` VALUES (5, 'Construction and performance of the magnetic bunch compressor for the THz facility at Chiang Mai University', 'J. Saisut, K.Kusoljariyakul,S. Rimjaemd, N. Kangrang, P. Wichaisirimongkol, P. Thamboon, M.W. Rhodes, C. Thongbai', 'J. Saisut', 'Nuclear Instruments and Methods in Physics Research A', '637', '', 'S99-S106', 2011, 552, 'PPP', 'PPP/CMU/2', '', '5_2011.pdf');
INSERT INTO `tb_article` VALUES (6, 'Bunch compression efficiency of the femtosecond electron source at Chiang Mai University', 'C. Thongbai, K. Kusoljariyakul, J. Saisut', 'K. Kusoljariyakul', 'Nuclear Instruments and Methods in Physics Research A', '645', '', '187-190', 2011, 5468, 'PPP', 'PPP/CMU/2', '', '6_2011.pdf');
INSERT INTO `tb_article` VALUES (7, 'Characterization and ozone-induced coloration of Zn&lt;sub&gt;x&lt;/sub&gt;Ni&lt;sub&gt;1-x&lt;/sub&gt;O thin films prepared by sol–gel method', 'R. Noonuruk, W. Techitdheera, W. Pecharapa', 'W. Pecharapa', 'Thin Solid Films', '520', '', '2769–2775', 2011, 0, 'NSP', '...', '-', '7_2011.pdf');
INSERT INTO `tb_article` VALUES (14, 'XXXXXXXXAAAAAAAAAAAAAAAAA', 'DFE, DDDD', 'DEF', 'DFRIIIIIIIIIII IIIIIIIIIKOKOL', '55', '45', '5648', 2013, 52, 'PPP', 'PPP/CMU/1', '-', '14_2013.pdf');
INSERT INTO `tb_article` VALUES (15, 'ffhjafyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 'etwtgsfsfd', 'dfsddsfd', 'dfgdfgdfggryhdfashsh', '4555', '44', '5566', 2013, 436.55, 'TFP', 'TFP/KKU/2', '-', '14_2013.pdf');
INSERT INTO `tb_article` VALUES (10, 'Effect of annealing temperature on the crystallography, particle size and\r\nthermopower of bulk ZnO', 'U. Seetawan', 'U. Seetawan', 'Solid State Sciences', '13', '', '1599-1603', 2011, 4.314, 'TFP', 'TFP/KKU/2', '-', '10_2011.pdf');
INSERT INTO `tb_article` VALUES (16, 'ovovofuijfrhdfhdkdffef', 'ggsdfgdfg', 'etrgf', 'sdfghfhdfgdfgdfgdfg', '5', '22', '485', 2011, 23.522, 'PPP', 'PPP/CMU/2', '-', '16_2011.pdf');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_gallery`
-- 

CREATE TABLE `tb_gallery` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `detail` text collate utf8_unicode_ci NOT NULL,
  `modified` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `tb_gallery`
-- 

INSERT INTO `tb_gallery` VALUES (1, 'แกลอรีทดสอบจ้า', 'ทดสอบการสร้างแกลอรี', '08/01/2013 03:44:48 pm');
INSERT INTO `tb_gallery` VALUES (2, 'Logo ทดสอบ 01', 'ใช้ในการ Test นะ', '');
INSERT INTO `tb_gallery` VALUES (3, 'Logo ทดสอบ 02', 'ใช้ในการ Test นะ', '');
INSERT INTO `tb_gallery` VALUES (4, 'Logo ทดสอบ 3', 'ใช้ในการ Test นะ', '');
INSERT INTO `tb_gallery` VALUES (5, 'ไทย-จีน', 'ภาพกิจกรรมการประชุมแลกเปลี่ยนความรู้ทางวิชาการภายใต้โครงการความร่วมมือวิทยาศาสตร์และวิชาการไทย-จีน ระหว่างวันที่ 22 - 26 เมษายน 2556 ณ ห้องประชุม อาคารวิจัยนิวตรอนพลังงานสูง มหาวิทยาลัยเชียงใหม่', '');
INSERT INTO `tb_gallery` VALUES (6, 'ทดสอบเพิ่ม 6 รูปในครั้งเดียว', 'ทดสอบบบบบบบบ 5556 1112 พเะดพกำ', '07/30/2013 11:18:14 am');
INSERT INTO `tb_gallery` VALUES (7, 'xxxxxxxxxxxxxxx22222222', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '08/20/2013 11:11:21 am');
INSERT INTO `tb_gallery` VALUES (8, 'ssssssssssss', 'rrrrrrrrrrrrrrrrrr', '08/19/2013 05:37:00 pm');
INSERT INTO `tb_gallery` VALUES (9, 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ', '12345785', '08/21/2013 12:42:16 pm');
INSERT INTO `tb_gallery` VALUES (10, 'Northern Food Valley 2013', 'ระหว่างวันที่ 31ก.ค.- 4 ส.ค.56 ณ เชียงใหม่ฮอลล์ ศูนย์การค้าเซ็นทรัลพลาซ่า เชียงใหม่ แอร์พอร์ต', '08/22/2013 11:08:53 am');
INSERT INTO `tb_gallery` VALUES (11, 'งานสบว 31 ก.ค. 56', 'ภาพบรรยากาศการประชุมสัมมนาและแสดงนิทรรศการ เรื่อง &quot;การขับเคลื่อนอนาคตประเทศไทยด้วยระบบวิจัยของศูนย์ความเป็นเลิศ&quot; ในวันพุธที่ 31 กรกฎาคม 2556 ณ ศูนย์การประชุมสถาบันวิจัยจุฬาภรณ์ กรุงเทพมหานคร', '08/22/2013 10:35:04 am');
INSERT INTO `tb_gallery` VALUES (12, 'thep_สถาบันวิจัยแสงซินโครตรอน', 'บรรยากาศการเยี่ยมชมศูนย์ความเป็นเลิศด้านฟิสิกส์และการหารือความร่วมมือระหว่างกันของสถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน) ในวันจันทร์ที่ 19 สิงหาคม 2556 ณ ศูนย์ความเป็นเลิศด้านฟิสิกส์', '2013-10-08 10:31:57');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_industrial`
-- 

CREATE TABLE `tb_industrial` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `tb_industrial`
-- 

INSERT INTO `tb_industrial` VALUES (1, 'รางวัล การประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรม ประจำปี 2010 (Price for Industrial Applications of Physics)', '&lt;p&gt;รางวัลการประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรมได้ริเริ่มขึ้นในปี 1977 โดย American Institute of Physics (AIP) เพื่อเป็นการประชาสัมพันธ์คุณค่าของการวิจัยฟิสิกส์ต่อภาคอุตสาหกรรม เพื่อเป็นการให้กำลังใจงานค้นคว้าวิจัยฟิสิกส์ที่มีประโยชน์ต่ออุตสาหกรรม และเพื่อกระตุ้นให้นักศึกษาประจักษ์ถึงความสำคัญของวิชาฟิสิกส์ในงานวิจัยของภาคอุตสาหกรรม&lt;/p&gt;\r\n\r\n&lt;p&gt;ปัจจุบันเป็นรางวัลที่มี 2 เจ้าภาพที่ทำหน้าที่สลับกัน คือ ระหว่าง AIP กับ American Physical Society (APS) แต่มีสปอนเซอร์หลักรายเดียว คือ บริษัท เยนเนอรัลมอเตอร์ โดยในปีที่ AIP เป็นเจ้าภาพจะให้รางวัลแก่นักวิจัย หรือ คณะนักวิจัยที่ประสบความสำเร็จในการพัฒนาเทคโนโลยีไม่ว่าจะเป็นในแง่ผลิตภัณฑ์, กระบวนการ หรืออุปกรณ์เครื่องมือที่ได้พิสูจน์แล้วว่ามีประโยชน์ต่อภาคอุตสาหกรรมจริง ส่วนในปีถัดไปที่ APS เป็นเจ้าภาพจะให้รางวัลแก่นักวิจัยหรือคณะนักวิจัยที่มีผลงานวิจัยที่มีศักยภาพโดดเด่นที่จะประสบความสำเร็จในอนาคต รางวัลที่ได้รับคือ เงินสด 10,000 เหรียญสหรัฐ ค่าเดินทางไปรับรางวัล และใบประกาศเกียรติคุณ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;../../upload02/industrial/street.jpg&quot; style=&quot;background-color:rgb(239, 244, 255); border:5px solid rgb(239, 244, 255); box-sizing:border-box; color:rgb(0, 0, 0); float:left; font-family:segoe ui semilight,open sans,verdana,arial,helvetica,sans-serif; font-size:15px; height:auto; line-height:18.65625px; width:130px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;สำหรับในปี 2010 นี้ ได้ประกาศผลออกมาแล้วว่าผู้ที่ได้รับรางวัลมีคนเดียว คือ โรเบิร์ต สตรีท (Robert Street) จากผลงานการเป็นผู้บุกเบิกศาสตร์และเทคโนโลยีของซิลิกอนอสัณฐานที่เจือไฮโดรเจน (hydrogenated amorphous silicon) รวมถึงการพัฒนาระบบแสดงภาพจากรังสีเอ๊กซ์แบบจอแบน&lt;/p&gt;\r\n\r\n&lt;p&gt;โรเบิร์ต หรือที่เพื่อน ๆ เรียกว่า &amp;quot;บ๊อบ&amp;quot; ได้รับปริญญาเอกจากมหาวิทยาลัยเคมบริดจ์ ในปี 1971 จากงานศึกษาวิจัยเรื่องฟิสิกส์ของแก้วคัลโคจีนายด์ (chalcogenide glasses) หลังจากนั้นได้ไปเป็นนักวิจัยหลังปริญญาเอก (postdoc) ที่มหาวิทยาลัยเชฟฟิลด์ แล้วไปเป็นนักวิจัยเยี่ยมเยือน (visiting scientist) ที่สถาบันวิจัยแม็กพลังค์ที่เมืองสตุตการ์ด ประเทศเยอรมนี ต่อมาในปี 1976 ได้ไปร่วมงานกับ Palo Alto Research Center (PARC) ของบริษัท Xerox ที่แคลิฟอร์เนีย สหรัฐอเมริกา&lt;/p&gt;\r\n\r\n&lt;p&gt;ที่ PARC บ๊อบได้เริ่มค้นคว้าวิจัยเรื่องการเคลื่อนย้ายของอิเล็กตรอน, ความไม่สมบูรณ์ (defects), การกลับมารวมตัวกัน (recombination) และบทบาทของไฮโดรเจนในซิลิกอนอสัณฐาน (amorphous silicon หรือ a-Si) จนในที่สุดได้เขียนเป็นตำราเกี่ยวกับคุณสมบัติของ a-Si ในช่วงปลายทศวรรษปี 1980 บ๊อบได้เริ่มวิจัยค้นคว้าเพื่อพัฒนาระบบแสดงภาพจากรังสีเอ๊กซ์แบบจอแบนโดยการประยุกต์ใช้ทรานซิสเตอร์และโฟโต้ไดโอดที่สร้างจากฟิมล์บาง a-Si จนในที่สุดในปี 1996 PARC ได้ตั้งบริษัทลูกขึ้นมาชื่อ &amp;quot;dpiX&amp;quot; เพื่อทำธุรกิจด้านเทคโนโลยีเอ๊กซ์เรย์ดิจิตอลซึ่งได้ครองตลาดด้านระบบแสดงภาพเอ๊กเรย์ทางการแพทย์มานับตั้งแต่นั้น&lt;/p&gt;\r\n\r\n&lt;p&gt;ปัจจุบันบ๊อบยังคงให้ความสำคัญกับการวิจัยพัฒนาศาสตร์และเทคโนโลยีที่เกี่ยวข้องกับการแสดงภาพจากรังสีแบบจอแบน รวมถึงการพัฒนาทรานซิสเตอร์จากฟิมล์บางของเซมิคอนดักเตอร์สารอินทรีย์ การพิมพ์ลายวงจรด้วยลำเจ็ท จอภาพที่โค้งงอได้ ลวดนาโนซิลิกอน และเซลล์สุริยะที่มีโครงสร้างแบบใหม่ บ๊อบได้เคยตีพิมพ์ผลงานวิจัยมาแล้วประมาณ 400 เรื่อง และมีผลงานจดสิทธิบัตร 60 ชิ้น&lt;/p&gt;\r\n\r\n&lt;p&gt;เรียบเรียงจาก&amp;nbsp;&lt;a href=&quot;http://www.aip.org/industry/prize&quot; style=&quot;box-sizing: border-box; font-family: &#039;Segoe UI&#039;, &#039;Open Sans&#039;, Verdana, Arial, Helvetica, sans-serif; font-size: 11pt; color: rgb(46, 146, 207); text-decoration: none; line-height: 13pt;&quot; target=&quot;_blank&quot;&gt;http://www.aip.org/industry/prize&lt;/a&gt;&lt;/p&gt;\r\n', '2010-10-13', '08/26/2013 11:10:45 am');
INSERT INTO `tb_industrial` VALUES (2, 'รางวัล การประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรม ประจำปี 2012 (Price for Industrial Applications of Physics)', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;อีริค ฟูลเลอร์ตัน เรียนจบปริญญาตรีสาขาฟิสิกส์จาก Harvey Mudd College ที่เมือง Claremont มลรัฐแคลิฟอร์เนีย เมื่อปีค.ศ. 1984 แล้วไปจบปริญญาเอกสาขาฟิสิกส์จาก University of California วิทยาเขต San Diego ในปีค.ศ. 1991 โดยหัวข้อวิทยานิพนธ์นั้นเกี่ยวกับการปลูกผลึกและการหาลักษณะเฉพาะของซูเปอร์แลตทิซแบบโลหะ หลังจากนั้นได้ไปเป็นนักวิจัยหลังปริญญาเอก (postdoctoral fellow) อยู่กับกลุ่มวิจัยฟิล์มบางแม่เหล็ก ในแผนกวัสดุศาสตร์ที่ Argonne National Laboratory ต่อมาในปีค.ศ. 1993 ได้ตำแหน่งประจำเป็นนักวิทยาศาสตร์ที่เชี่ยวชาญด้านฟิล์มแม่เหล็กชนิดคู่ควบ (coupled magnetic films&lt;/p&gt;\r\n\r\n&lt;p&gt;ERIC FULLERTON&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;../../upload02/industrial/fullerton.jpg&quot; style=&quot;border:5px solid rgb(239, 244, 255); box-sizing:border-box; float:left; height:auto; width:130px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;ในปีค.ศ. 1997 ได้ย้ายไปทำงานเป็นนักวิจัยอยู่ที่ศูนย์วิจัยอัลมาเด็นของ IBM (IBM Almaden Research Center) จนถึงปีค.ศ. 2003 ซึ่งได้ย้ายไปทำงานกับ Hitachi Global Storage Technologies (HGST) ในตำแหน่งผู้จัดการของกลุ่มวิจัยด้านพื้นฐานของวัสดุที่มีโครงสร้างนาโน (Fundamentals of Nanostructured Materials) งานวิจัยของ ดร.อีริคทั้งที่ IBM และ HGST ยังคงโฟกัสอยู่ที่เรื่องวัสดุแม่เหล็กเพื่อการบันทึกชนิดคู่ควบแบบแลกเปลี่ยน (exchanged-coupled magnetic recording media) เพื่อการบันทึกที่มีความหนาแน่นสูงในสารแม่เหล็ก ในปีค.ศ. 2007 ดร. อีริค ได้ไปรับตำแหน่งศาสตราจารย์ทางวิศวกรรมไฟฟ้าและคอมพิวเตอร์และวิศวกรรมนาโนที่สถาบันที่เรียนจบมาคือที่ UC San Diego และยังดำรงผู้อำนวยการของศูนย์วิจัยด้านการบันทึกด้วยแม่เหล็ก (Center of Magnetic Recording Research) ด้วย ศาสตราจารย์ อีริคมีผลงานตีพิมพ์มากกว่า 240 เรื่องและถือครองสิทธิบัตรที่จดในสหรัฐอเมริกาถึง 50 ชิ้น โดยมีอยู่ชิ้นหนึ่งที่ได้รับการคัดเลือกโดยวารสาร Technology Review Magazine ของ MIT ให้เป็น &amp;ldquo; หนึ่งในห้าสิทธิบัตรที่น่าจับตามองประจำปี 2001&amp;rdquo; นอกจากนี้ศาสตราจารย์อีริคยังเคยได้รับรางวัลและการยกย่องจากสถาบันที่มีชื่อเสียงอีกมากมาย&lt;/p&gt;\r\n\r\n&lt;p&gt;เรียบเรียงจาก&amp;nbsp;&lt;a href=&quot;http://www.aip.org/industry/prize&quot; style=&quot;box-sizing: border-box; font-family: &#039;Segoe UI&#039;, &#039;Open Sans&#039;, Verdana, Arial, Helvetica, sans-serif; font-size: 11pt; color: rgb(46, 146, 207); text-decoration: none; line-height: 13pt;&quot; target=&quot;_blank&quot;&gt;http://www.aip.org/industry/prize&lt;/a&gt;&lt;/p&gt;\r\n', '2012-05-01', '08/26/2013 11:11:15 am');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_news`
-- 

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date` varchar(255) collate utf8_unicode_ci NOT NULL,
  `featured_img` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content_short` text collate utf8_unicode_ci NOT NULL,
  `content_long` text collate utf8_unicode_ci NOT NULL,
  `new` char(1) collate utf8_unicode_ci NOT NULL,
  `picture` varchar(255) collate utf8_unicode_ci NOT NULL,
  `gallery_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `last_update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `tb_news`
-- 

INSERT INTO `tb_news` VALUES (1, 'network-academic', ' การสร้างฟังก์ชันคลื่นของเพนตะควาร์ก', '07/10/2013', '', '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/Research/News_Wave.jpg&quot; style=&quot;height:auto; max-width:100%&quot; /&gt;&lt;/p&gt;\r\n', '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/Research/News_Wave1.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/Research/News_Wave2.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;', 'y', '', '', '08/01/2013 05:47:55 pm');
INSERT INTO `tb_news` VALUES (2, 'network-academic', ' การเสื่อมสภาพของยางล้อรถยนต์', '06/05/2013', '', '&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ยางล้อจัดเป็นชิ้นส่วนที่สำคัญของรถยนต์อย่างหนึ่ง ยางล้อเป็นชิ้นส่วนเดียวของระบบขับเคลื่อนรถยนต์ที่สัมผัสกับพื้นถนน คุณภาพของยางล้อจึงส่งผลโดยตรงต่อประสิทธิภาพการขับเคลื่อนและการบังคับควบคุมรถยนต์และที่สำคัญยิ่งคือความปลอดภัยต่อผู้ใช้รถยนต์ในปัจจุบันเทคโนโลยีการออกแบบและผลิตยางล้อได้ถูกพัฒนาขึ้นเป็นอย่างมาก โดยมีการปรับแต่งสมรรถนะให้เหมาะสมและสอดคล้องกับความต้องการของผู้ใช้ เช่นยางล้อสำหรับรถยนต์นั่ง ยางล้อสำหรับรถกระบะ ยางล้อสำหรับรถตู้ ยางล้อสำหรับรถขับเคลื่อน 4 ล้อ และยางล้อสำหรับรถบรรทุกและรถโดยสาร&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; การผลิตยางล้ออาศัยวัสดุหลากหลายเพื่อที่จะให้ได้ยางล้อมีคุณสมบัติที่ต้องการ เช่น ยางธรรมชาติ ยางสังเคราะห์เพื่อใช้ป้องกันยางล้ออ่อนตัวเมื่ออุณหภูมิยางขณะใช้งานสูงขึ้น ผงคาร์บอนหรือผงเขม่าเพื่อช่วยให้โมเลกุลของยางจับตัวกันแน่นทำให้ยางล้อทนต่อการสึกและทนต่อการเกิดรอยขีดข่วน สารเคมีต่างๆ เช่น ออกไซด์ของสังกะสีเพื่อช่วยชะลอการย่อยสลายด้วงรังสีอัลตราไวโอเล็ตหรือยูวีจากดวงอาทิตย์ กัมมะถันสำหรับการทำให้ยางมีความยืดหยุ่นคงรูป ตลอดจนโลหะหนักและสารประกอบไฮโดร์คาร์บอนบางอย่าง นอกเหนือจากนั้นยังมีการเสริมความแข็งแรงในโครงสร้างของล้อยางโดยการเสริมด้วยชั้นของผ้าใบที่ทำมาจากเส้นด้ายไนลอน หรือโพลีเอสเตอร์ และเส้นลวดเหล็ก&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;ถึงแม้ว่าเทคโนโลยีการออกแบบและผลิตยางล้อรถยนต์ได้พัฒนามาอย่างก้าวไกล แต่ในความเป็นจริงยางล้อรถยนต์เสื่อมตามสภาพและเวลาการใช้งาน และหลายคนอาจจะสงสัยว่าเมื่อไรควรเปลี่ยนยางล้อรถยนต์ บางคนมีความเชื่อว่ายางล้อที่เปลี่ยนนั้นต้องเป็นชุดที่เพิ่งผลิตใหม่ และเชื่อว่ายางล้อค้างเก็บเป็นระยะเวลานานเป็นยางที่เสื่อมสภาพ คำตอบหรือคำอธิบายสำหรับคำถามและข้อสงสัยดังกล่าวมีหลากหลายขึ้นอยู่ว่าผู้ไขข้อสงสัยดังกล่าวเป็นใคร แต่อย่างไรก็ตามมีความจำเป็นบางอย่างซึ่งเป็นสาเหตุที่ชัดเจนว่าถึงเวลาแล้วที่ต้องเปลี่ยนล้อยาง ได้แก่กรณีล้อยางบวม มีรอยแตกร้าว มีบาดแผลที่ล้อยาง ไม่สามารถกักเก็บลมอยู่ได้ หรือดอกยางหมดถึงจุดที่กำหนดที่เรียกว่า TWI (Tread Wear Indicator) ในกรณีทั่วไป หลายคนเลือกอยากที่จะเปลี่ยนตามระยะทางหรือระยะเวลาการใช้งานตามมาตรฐานของโรงงานผู้ผลิตล้อยาง ซึ่งมีหลากหลายมาตรฐานจนทำให้เกิดความสับสน เช่น บางบริษัทระบุว่ายางหมดอายุการใช้งานที่ 2 ปี หรือ 50,000 กิโลเมตรบางบริษัทระบุว่ายางล้อของบริษัทตนสามารถใช้งานได้ถึง 100,000 กิโลเมตร มีจำนวนผู้ใช้รถยนต์อีกจำนวนมากที่เลือกที่จะเปลี่ยนยางตามความรู้สึกที่ได้รับเช่น รู้สึกว่าดอกยางแข็งกระด้างทำให้เสียงดัง หรือรู้สึกว่ามีอาการเบรกไม่อยู่หรือระยะเบรกยาว&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;เป็นที่เข้าใจโดยทั่วไปว่าอุณหภูมิเป็นปัจจัยหนึ่งที่สำคัญที่ทำให้ยางเสื่อมสภาพ การเสื่อมสภาพของยางส่วนหนึ่งเป็นผลเนื่องจากปฏิกิริยาออกซิเดชันของกำมะถัน (sulfur) ซึ่งเป็นสารเคมีที่เติมเป็นส่วนผสมของยางในกระบวนการผลิตยางล้อรถยนต์เพื่อใช้เป็นสารที่ก่อให้เกิดการเชื่อมโยงระหว่างโมเลกุลของยางทำให้ยางคงรูปและมีสมบัติที่ดีขึ้นกำมะถันในยางล้อเมื่อเจอกับออกซิเจนในสภาวะที่เหมาะสมก็จะเกิดปฏิกิริยาเคมี อัตราของการเกิดปฏิกิริยาระหว่างกำมะถันและออกซิเจนเพิ่มขึ้นตามอุณหภูมิ ในสภาวะอากาศในเมืองไทย รถยนต์ที่เคลื่อนที่ด้วยความเร็ว 120 ก.ม./ชม. จะทำให้อุณหภูมิที่หน้ายางของล้อยางรถยนต์สูงถึง 75 องศาเซลเซียส ซึ่งอุณหภูมิจะเพิ่มสูงขึ้นเมื่อความเร็วรถเพิ่มขึ้น หรือความดันในลมยางน้อยกว่าปกติ การที่ปริมาณของกำมะถันทำปฏิกิริยากับออกซิเจนเพิ่มขึ้นนั้นจะทำให้สมบัติที่ดีของยางลดลง โดยทำให้ยางล้อมีความแข็งกระด้างเพิ่มขึ้น และส่งผลตามมาในเรื่องของเสียง และสมรรถนะการยึดเกาะถนน การตรวจสอบปริมาณการเกิดออกไซด์ของกำมะถันเป็นวิธีการหนึ่งที่สามารถบ่งบอกได้ถึงคุณภาพของยางล้อ&lt;span style=&quot;font-family:tahoma; font-size:12px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;เทคนิคที่ใช้ในการตรวจออกไซด์ของกำมะถันที่จะกล่าวถึงนี้คือเทคนิคสเปกโตรสโกปีการดูดกลืนรังสีเอกซ์ (X-ray absorption spectroscopy) โดยอาศัยแสงซินโครตรอน เทคนิคดังกล่าวเป็นเทคนิคที่มีประโยชน์อย่างยิ่งในการตรวจวิเคราะห์วัสดุ ทำให้เราทราบถึงข้อมูลเชิงเคมีของวัสดุ เช่น ชนิดของธาตุที่สนใจ ชนิด ปริมาณ และตำแหน่งของธาตุที่อยู่ข้างเคียง ตลอดจนข้อมูลเกี่ยวกับพันธะระหว่างอะตอม&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/NewThep/2013/Tyre%2001.jpg&quot; style=&quot;border:0px; box-sizing:border-box; height:318px; width:455px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่&amp;nbsp;1&amp;nbsp;แผนภาพภาคตัดขวางแสดงองค์ประกอบต่าง ๆ ของยางล้อรถยนต์ (ภาพจาก internet)&lt;/p&gt;\r\n', '&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ยางล้อจัดเป็นชิ้นส่วนที่สำคัญของรถยนต์อย่างหนึ่ง ยางล้อเป็นชิ้นส่วนเดียวของระบบขับเคลื่อนรถยนต์ที่สัมผัสกับพื้นถนน คุณภาพของยางล้อจึงส่งผลโดยตรงต่อประสิทธิภาพการขับเคลื่อนและการบังคับควบคุมรถยนต์และที่สำคัญยิ่งคือความปลอดภัยต่อผู้ใช้รถยนต์ในปัจจุบันเทคโนโลยีการออกแบบและผลิตยางล้อได้ถูกพัฒนาขึ้นเป็นอย่างมาก โดยมีการปรับแต่งสมรรถนะให้เหมาะสมและสอดคล้องกับความต้องการของผู้ใช้ เช่นยางล้อสำหรับรถยนต์นั่ง ยางล้อสำหรับรถกระบะ ยางล้อสำหรับรถตู้ ยางล้อสำหรับรถขับเคลื่อน 4 ล้อ และยางล้อสำหรับรถบรรทุกและรถโดยสาร&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; การผลิตยางล้ออาศัยวัสดุหลากหลายเพื่อที่จะให้ได้ยางล้อมีคุณสมบัติที่ต้องการ เช่น ยางธรรมชาติ ยางสังเคราะห์เพื่อใช้ป้องกันยางล้ออ่อนตัวเมื่ออุณหภูมิยางขณะใช้งานสูงขึ้น ผงคาร์บอนหรือผงเขม่าเพื่อช่วยให้โมเลกุลของยางจับตัวกันแน่นทำให้ยางล้อทนต่อการสึกและทนต่อการเกิดรอยขีดข่วน สารเคมีต่างๆ เช่น ออกไซด์ของสังกะสีเพื่อช่วยชะลอการย่อยสลายด้วงรังสีอัลตราไวโอเล็ตหรือยูวีจากดวงอาทิตย์ กัมมะถันสำหรับการทำให้ยางมีความยืดหยุ่นคงรูป ตลอดจนโลหะหนักและสารประกอบไฮโดร์คาร์บอนบางอย่าง นอกเหนือจากนั้นยังมีการเสริมความแข็งแรงในโครงสร้างของล้อยางโดยการเสริมด้วยชั้นของผ้าใบที่ทำมาจากเส้นด้ายไนลอน หรือโพลีเอสเตอร์ และเส้นลวดเหล็ก&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;ถึงแม้ว่าเทคโนโลยีการออกแบบและผลิตยางล้อรถยนต์ได้พัฒนามาอย่างก้าวไกล แต่ในความเป็นจริงยางล้อรถยนต์เสื่อมตามสภาพและเวลาการใช้งาน และหลายคนอาจจะสงสัยว่าเมื่อไรควรเปลี่ยนยางล้อรถยนต์ บางคนมีความเชื่อว่ายางล้อที่เปลี่ยนนั้นต้องเป็นชุดที่เพิ่งผลิตใหม่ และเชื่อว่ายางล้อค้างเก็บเป็นระยะเวลานานเป็นยางที่เสื่อมสภาพ คำตอบหรือคำอธิบายสำหรับคำถามและข้อสงสัยดังกล่าวมีหลากหลายขึ้นอยู่ว่าผู้ไขข้อสงสัยดังกล่าวเป็นใคร แต่อย่างไรก็ตามมีความจำเป็นบางอย่างซึ่งเป็นสาเหตุที่ชัดเจนว่าถึงเวลาแล้วที่ต้องเปลี่ยนล้อยาง ได้แก่กรณีล้อยางบวม มีรอยแตกร้าว มีบาดแผลที่ล้อยาง ไม่สามารถกักเก็บลมอยู่ได้ หรือดอกยางหมดถึงจุดที่กำหนดที่เรียกว่า TWI (Tread Wear Indicator) ในกรณีทั่วไป หลายคนเลือกอยากที่จะเปลี่ยนตามระยะทางหรือระยะเวลาการใช้งานตามมาตรฐานของโรงงานผู้ผลิตล้อยาง ซึ่งมีหลากหลายมาตรฐานจนทำให้เกิดความสับสน เช่น บางบริษัทระบุว่ายางหมดอายุการใช้งานที่ 2 ปี หรือ 50,000 กิโลเมตรบางบริษัทระบุว่ายางล้อของบริษัทตนสามารถใช้งานได้ถึง 100,000 กิโลเมตร มีจำนวนผู้ใช้รถยนต์อีกจำนวนมากที่เลือกที่จะเปลี่ยนยางตามความรู้สึกที่ได้รับเช่น รู้สึกว่าดอกยางแข็งกระด้างทำให้เสียงดัง หรือรู้สึกว่ามีอาการเบรกไม่อยู่หรือระยะเบรกยาว&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;เป็นที่เข้าใจโดยทั่วไปว่าอุณหภูมิเป็นปัจจัยหนึ่งที่สำคัญที่ทำให้ยางเสื่อมสภาพ การเสื่อมสภาพของยางส่วนหนึ่งเป็นผลเนื่องจากปฏิกิริยาออกซิเดชันของกำมะถัน (sulfur) ซึ่งเป็นสารเคมีที่เติมเป็นส่วนผสมของยางในกระบวนการผลิตยางล้อรถยนต์เพื่อใช้เป็นสารที่ก่อให้เกิดการเชื่อมโยงระหว่างโมเลกุลของยางทำให้ยางคงรูปและมีสมบัติที่ดีขึ้นกำมะถันในยางล้อเมื่อเจอกับออกซิเจนในสภาวะที่เหมาะสมก็จะเกิดปฏิกิริยาเคมี อัตราของการเกิดปฏิกิริยาระหว่างกำมะถันและออกซิเจนเพิ่มขึ้นตามอุณหภูมิ ในสภาวะอากาศในเมืองไทย รถยนต์ที่เคลื่อนที่ด้วยความเร็ว 120 ก.ม./ชม. จะทำให้อุณหภูมิที่หน้ายางของล้อยางรถยนต์สูงถึง 75 องศาเซลเซียส ซึ่งอุณหภูมิจะเพิ่มสูงขึ้นเมื่อความเร็วรถเพิ่มขึ้น หรือความดันในลมยางน้อยกว่าปกติ การที่ปริมาณของกำมะถันทำปฏิกิริยากับออกซิเจนเพิ่มขึ้นนั้นจะทำให้สมบัติที่ดีของยางลดลง โดยทำให้ยางล้อมีความแข็งกระด้างเพิ่มขึ้น และส่งผลตามมาในเรื่องของเสียง และสมรรถนะการยึดเกาะถนน การตรวจสอบปริมาณการเกิดออกไซด์ของกำมะถันเป็นวิธีการหนึ่งที่สามารถบ่งบอกได้ถึงคุณภาพของยางล้อ&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;เทคนิคที่ใช้ในการตรวจออกไซด์ของกำมะถันที่จะกล่าวถึงนี้คือเทคนิคสเปกโตรสโกปีการดูดกลืนรังสีเอกซ์ (X-ray absorption spectroscopy) โดยอาศัยแสงซินโครตรอน เทคนิคดังกล่าวเป็นเทคนิคที่มีประโยชน์อย่างยิ่งในการตรวจวิเคราะห์วัสดุ ทำให้เราทราบถึงข้อมูลเชิงเคมีของวัสดุ เช่น ชนิดของธาตุที่สนใจ ชนิด ปริมาณ และตำแหน่งของธาตุที่อยู่ข้างเคียง ตลอดจนข้อมูลเกี่ยวกับพันธะระหว่างอะตอม&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/NewThep/2013/Tyre%2001.jpg&quot; style=&quot;height:318px; width:455px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่&amp;nbsp;1&amp;nbsp;แผนภาพภาคตัดขวางแสดงองค์ประกอบต่าง ๆ ของยางล้อรถยนต์ (ภาพจาก internet)&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/NewThep/2013/XANES%20of%20New%20Tyre.jpg&quot; style=&quot;height:318px; width:455px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 2สเปกตรัมการดูดกลืนรังสีเอกซ์วัดจากบริเวณไหล่ยาง (shoulder) แก้มยาง (sidewall) และดอกยาง (tread) ของยางล้อรถยนต์วัดได้จากสถานีทดลองของระบบลำเลียงแสงที่ 8 ของสถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน)&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;รูปที่ 2แสดงข้อมูลสเปกตรัมการดูดกลืนรังสีเอกซ์ของกำมะถันที่ได้จากการวัดยางล้อรถยนต์ใหม่ที่ยังไม่มีการใช้งานรุ่นหนึ่งของบริษัทข้ามชาติที่มีโรงงานผลิตในประเทศไทย โดยข้อมูลที่แสดงเป็นข้อมูลที่ได้จากตำแหน่งต่างๆของยางล้อ คือบริเวณไหล่ยาง(shoulder) แก้มยาง(sidewall) และหน้ายาง (ส่วนของดอกยาง หรือ tread) พร้อมกับแสดงสเปกตรัมการดูดกลืนรังสีเอกซ์ของกำมะถันในสารเคมีมาตรฐาน FeSO4สำหรับการเปรียบเทียบ แกนตั้งของกราฟรูปที่ 2คือค่าการดูดกลืนรังสีเอกซ์ และแนวแกนนอนคือค่าพลังงานโฟตอนของรังสีเอกซ์หรือค่าความยาวคลื่นของรังสีเอกซ์นั่นเอง ในการศึกษาในครั้งนี้เราสนใจการดูดกลืนรังสีเอกซ์ของอะตอมกำมะถันที่ค่าพลังงานต่างๆ ลักษณะที่เห็นได้ชัดเจนคือการปริมาณการดูดกลืนรังสีเอกซ์ที่มีค่าสูงเป็นพีค (peak) สองพีคบริเวณค่าพลังงานโฟตอนที่ประมาณ 2472eV และ 2481eVพีคทั้งสองเกิดจากการดูดกลืนรังสีเอกซ์ของกำมะถันที่มีพันธะเคมีที่แตกต่างกัน โดยพีคบริเวณค่าพลังงานโฟตอนที่ประมาณ 2472eV เกิดจากกำมะถันที่ทำหน้าที่เชื่อมโยงโมเลกุลของยางโดยอะตอมของกำมะถันที่ทำให้เกิดพีคบริเวณนี้เป็นอะตอมของกำมะถันที่มีพันธะเคมีกับคาร์บอน และ/หรือกำมะถัน ส่วนพีคบริเวณค่าพลังงานโฟตอนที่ประมาณ 2481eV เป็นกัมมะถันที่มีพันธะเคมีกับออกซิเจน ซึ่งเปรียบเทียบได้จากสเปกตรัมการดูดกลืนรังสีเอกซ์ของสารมาตรฐานที่ใช้เปรียบเทียบจากข้อมูลดังกล่าวพบว่าแม้กระทั่งยางล้อใหม่ พบว่ามีกำมะถันจำนวนหนึ่งได้ทำปฏิกิริยากับออกซิเจนเป็นออกไซด์ของกำมะถัน คาดว่าปฏิกิริยาดังกล่าวเกิดขึ้นในขั้นตอนที่มีการอบร้อนยางล้อในกระบวนการผลิต&amp;nbsp;&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/NewThep/2013/XANES%20of%20Old%20&amp;amp;%20New%20Tyres.jpg&quot; style=&quot;height:318px; width:455px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 3สเปกตรัมการดูดกลืนรังสีเอกซ์วัดจากบริเวณไหล่ยาง (shoulder) แก้มยาง (sidewall) และดอกยาง (tread) ของยางล้อรถยนต์ใหม่เปรียบเทียบกับยางล้อที่มีการใช้งานแล้วประมาณ 12,000 กิโลเมตร&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;สเปกตรัมการดูดกลืนรังสีเอกซ์ที่วัดจากยางล้อบริเวณไหล่ยาง แก้มยาง และหน้ายาง แสดงในรูปที่ 3 ได้มาจากการวัดเปรียบเทียบระหว่างยางล้อใหม่และยางล้อเก่าในรุ่นเดียวกัน โดยยางล้อเก่าเป็นยางล้อที่ผ่านการใช้งานจริงบนท้องถนนเป็นระยะทางประมาณ 12,000 กิโลเมตร พบว่าการเกิดออกไซด์ของกำมะถันเพิ่มขึ้นอย่างเห็นได้ชัดในบริเวณไหล่ยาง และบริเวณแก้มยางของล้อยางที่ผ่านการใช้งาน ซึ่งทำให้ยางมีความแข็งกระด้างเพิ่มขึ้นที่น่าสังเกตคือข้อมูลที่ได้จากบริเวณหน้ายาง (ดอกยาง) แสดงให้เห็นว่าปริมาณของออกไซด์ของกำมะถันในดอกยางมีการเปลี่ยนแปลงเพิ่มขึ้นน้อยมาก เมื่อเทียบกับบริเวณไหล่ยางและแก้มยาง การที่ไม่พบการเพิ่มขึ้นของออกไซด์ของกำมะถันเนื่องจากว่าขณะที่มีการใช้งานนั้นเกดการสึกของผิวหน้ายางไปพร้อมๆกับเกิดออกซิเดชัน การออกแบบให้อัตราการสึกมากกว่าหรือเท่ากับอัตราการเกิดออกซิเดชันนับว่าเป็นข้อดีที่ทำให้ยางบริเวณหน้ายางที่สัมผัสถนนมีสมบัติที่คงเดิม หรือเปลี่ยนแปลงอย่างช้าๆ&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;เป็นที่ทราบดีว่าอุณหภูมิเป็นปัจจัยหลักที่มีผลทำให้เกิดออกไซด์ของกำมะถัน ซึ่งเป็นส่วนหนึ่งที่ทำให้ยางล้อรถยนต์มีคุณภาพต่ำลง ในสภาพการใช้งานจริง ล้อยางต้องแบกรับนำหนักบรรทุกหรือถูกแรงกระทำที่ค่าของแรงและรอบที่กระทำเปลี่ยนแปลงอยู่ตลอดเวลา ภายใต้สภาวะดังกล่าวผนวกกับอุณหภูมิที่เพิ่มขึ้นของล้อยาง ทำให้โครงสร้างระดับจุลภาคมีการเปลี่ยนแปลง และส่งผลต่อคุณสมบัติเชิงกายภาพอย่างหลีกเลี่ยงไม่ได้ ในกรณียางล้อรถยนต์ที่ไม่ได้มีการใช้งานและถูกเก็บรักษาในสภาพแวดล้อมที่ดีที่ไม่เอื้อต่อการเกิดปฏิกิริยาออกซิเดชัน เช่นที่อุณหภูมิห้องและมีความชื้นต่ำ ยางล้อรถยนต์สามารถเก็บรักษาได้เป็นระยะเวลานาน&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;องค์ความรู้ในระดับโมเลกุลหรือระดับนาโนเมตร และระดับจุลภาคของยางล้อรถยนต์ได้มีส่วนที่สำคัญต่อการพัฒนายางล้อรถยนต์ โดยเฉพาะอย่างในช่วง 10 ปีที่ผ่านเทคนิคการตรวจวิเคราะห์ต่างๆได้ถูกพัฒนาขึ้นเป็นอย่างมากการวิจัยและพัฒนายางล้อรถยนต์เพื่อเข้าใจถึงกลไกของสารเคมีที่เติมในน้ำยางที่มีต่อคุณสมบัติของยาง รวมทั้งการตรวจวิเคราะห์เพื่อติดตามการเปลี่ยนแปลงที่ส่งผลถึงประสิทธิภาพของยางล้อ โดยเฉพาะอย่างยิ่งในเรื่องของการเสื่อมสภาพของยางเนื่องจากปฏิกิริยาออกซิเดชัน รวมทั้งความพยายามที่จะลดอัตราการเกิดออกซิเดชัน&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nประยูร ส่งสิริฤทธิกุล&lt;br /&gt;\r\nห้องปฏิบัติการวิจัยนาโนสเปกโตรสโกปี&lt;br /&gt;\r\nสาขาฟิสิกส์&lt;br /&gt;\r\nสำนักวิชาวิทยาศาสตร์&lt;br /&gt;\r\nมหาวิทยาลัยเทคโนโลยีสุรนารี&lt;br /&gt;\r\nprayoon.song@gmail.com&lt;/p&gt;\r\n', 'y', '', '', '07/12/2013 02:41:22 pm');
INSERT INTO `tb_news` VALUES (3, 'activity', 'การประชุมแลกเปลี่ยนความรู้ทางวิชาการภายใต้โครงการความร่วมมือวิทยาศาสตร์และวิชาการไทย-จีน วันที่ 22 - 26 เมษายน 2556', '05/11/2013', '', '', '&lt;p&gt;กิจกรรมการประชุมแลกเปลี่ยนความรู้ทางวิชาการภายใต้โครงการความร่วมมือวิทยาศาสตร์และวิชาการไทย-จีน ระหว่างวันที่ 22 - 26 เมษายน 2556 ณ ห้องประชุม อาคารวิจัยนิวตรอนพลังงานสูง มหาวิทยาลัยเชียงใหม่&lt;/p&gt;\r\n', 'y', '', '5', '08/01/2013 04:33:41 pm');
INSERT INTO `tb_news` VALUES (4, 'pr', 'เชิญชวนผู้สนใจเข้าร่วมงานขับเคลื่อนอนาคตประเทศไทยด้วยระบบวิจัยของศูนย์ความเป็นเลิศ', '2013-07-11', '', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ศูนย์ความเป็นเลิศด้านฟิสิกส์ ขอเชิญผู้สนใจเข้าร่วมงานขับเคลื่อนอนาคตประเทศไทยด้วยระบบวิจัยของศูนย์ความเป็นเลิศ ในวันพุธที่ 31 กรกฎาคม 2556 เวลา 08.30-16.30 น. ณ อาคารศูนย์ประชุมสถาบันวิจัยจุฬาภรณ์ ถ.วิภาวดีรังสิต หลักสี่ บางเขน กรุงเทพมหานครซึ่ง ภายในงานท่านจะได้พบกับผลงานวิจัยของศูนย์ความเป็นเลิศทั้ง 9 ศูนย์ และระหว่างงานนั้นท่านจะได้พบการบรรยายในหัวข้อเรื่อง &amp;quot;ขับเคลื่อนอนาคตประเทศไทยด้วยระบบวิจัยของศูนย์ความเป็นเลิศ&amp;quot; และการอภิปรายแลกเปลี่ยนความคิดเห็นในหัวข้อ &amp;quot;นวัตกรรมไทยกับการเปิดประชาคมอาเซียน&amp;quot;&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;และขอเชิญชวนท่านเยี่ยมชมนิทรรศการของศูนย์ความเป็นเลิศด้านฟิสิกส์ ซึ่งท่านจะได้พบกับการแสดงผลสัมฤทธิ์ของงานวิจัยทางห้องปฏิบัติการวิจัยทั้ง 27 ห้องปฏิบัติการของศูนย์ความเป็นเลิศด้านฟิสิกส์ และผู้เชี่ยวชาญที่คอยให้ความรู้แก่ท่านตลอดการเยี่ยมชมนิทรรศการของศูนย์ความเป็นเลิศด้านฟิสิกส์&lt;/span&gt;&lt;/p&gt;\r\n', 'n', '../../upload/1a92ff5e.jpg', '', '2013-10-24 16:13:22');
INSERT INTO `tb_news` VALUES (5, 'pr', 'ประกาศศูนย์ความเป็นเลิศด้านฟิสิกส์เรื่องการจัดซื้อครุภัณฑ์เครื่องเคลือบแบบสปัตเตอร์โดยวิธีคัดเลือก', '2013-07-10', '', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ด้วยศูนย์ความเป็ฯเลิศด้านฟิสิกส์ จะดำเนินการจัดซื้อครุภัณฑ์เครื่องเคลือบแบบสปัตเตอร์โดยวิธีคัดเลือก จำนวน 1 รายการ&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;ศูนย์ฯ จึงขอเชิญชวนให้ผู้ที่สนใจยื่นข้อเสนอโดยรายละเอียดสามารถ ดาว์นโหลดจากที่นี่&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.thep-center.org/uploadfile/img_pr/matt.pdf&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none; font-family: Tahoma; font-size: 14px; line-height: normal;&quot; target=&quot;_blank&quot;&gt;โปรดคลิ๊กที่นี่&lt;/a&gt;&lt;/p&gt;\r\n', 'y', '../../upload/1a92ff5e.jpg', '', '2013-10-15 14:17:04');
INSERT INTO `tb_news` VALUES (6, 'activity', 'การประชุมใหญ่ศูนย์ความเป็นเลิศด้านฟิสิกส์ ณ ภาควิชาฟิสิกส์และวัสดุศาสตร์ มหาวิทยาลัยเชียงใหม่ วันที่ 21 มีนาคม 2556', '03/22/2013', '', '', '&lt;h2&gt;ภาพบรรยากาศการประชุมใหญ่ศูนย์ความเป็นเลิศด้านฟิสิกส์ ณ ห้องประชุม1 (PB2-102) ภาควิชาฟิสิกส์และวัสดุศาสตร์ มหาวิทยาลัยเชียงใหม่ ในวันที่ 21 มีนาคม 2556&lt;/h2&gt;\r\n', 'n', '', '6', '07/30/2013 12:45:39 pm');
INSERT INTO `tb_news` VALUES (7, 'network-academic', 'การสังเคราะห์แกรฟีนด้วยวิธีการทางเคมี (Chemical Exfoliation)', '08/01/2013', '', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; แกรฟีนถูกสังเคราะห์ขึ้นครั้งแรกด้วยวิธี Micromechanical exfoliation หรือการลอกชั้นบางๆ ของแกรฟีนออกจากแกรไฟต์ วิธีนี้จะได้แกรฟีนในปริมาณน้อย ซึ่งเป็นประโยชน์มากสำหรับการศึกษาสมบัติขั้นพื้นฐานแต่ในการสังเคราะห์แกรฟีนส่วนใหญ่เพื่อให้ได้ปริมาณมาก มีขนาดใหญ่อาจถึง 1 ตร.ซม.สามารถปลูกบนวัสดุรองรับที่เป็นโลหะ และเป็นsingle layer ของแกรฟีนจริงๆ คือ วิธี Chemical Vapor Deposition (CVD)วิธีนี้มักจะใช้ในโรงงานผลิตฟิล์มบางสารกึ่งตัวนำ แต่วิธีที่จะนำเสนอนี้เป็นวิธีการสังเคราะห์ทางเคมี สามารถทำได้ในระดับห้องปฏิบัติการ ได้แกรฟีนในปริมาณมากเป็นสารแขวนลอย (suspension) และนำมาใช้ในงานได้หลากหลาย&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; หลักการในการสังเคราะห์แกรฟีนด้วยวิธีทางเคมี[1,2] เริ่มต้นด้วยการใช้กรดแก่หรือตัวออกซิแดนท์มาออกซิไดส์แกรไฟต์ได้เป็น &amp;ldquo;แกรไฟต์ออกไซด์&amp;rdquo;ซึ่งกลุ่มของออกไซด์, ไฮดรอกซิล, คาร์บอกซิลิกและคาร์บอนิลจะเข้าไปแทรกและเกาะเต็มระนาบพื้นผิวในแต่ละชั้นของแกรไฟต์ ทำให้แต่ละชั้นของแกรไฟต์กว้างขึ้นและลดแรงแวนเดอร์วาลส์ระหว่างชั้นหากแกรไฟต์ออกไซด์ถูกกระตุ้นด้วยแรงเพียงนิดเดียวเช่นด้วยการใช้คลื่นความถี่สูง (Sonication)ก็สามารถหลุดลอกออกเป็น &amp;ldquo;แกรฟีนออกไซด์&amp;rdquo; (Graphene oxide) ซึ่งมีสมบัติเป็น hydrophilic ละลายได้ดีในน้ำ แต่ไม่นำไฟฟ้า และสามารถรีดิวซ์ด้วยสารรีดักแทนซ์เช่น ไฮดราซีนไฮเดรต ได้เป็น &amp;ldquo;รีดิวซ์แกรฟีน&amp;rdquo; (Reduced Graphene oxide) ซึ่งสามารถกรองและกระจายตัวได้ดีบนวัสดุสารรองรับ ใช้เป็นฟิล์มบางนำไฟฟ้า เช่น กระดาษนำไฟฟ้า (Conducting graphene paper)[3]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/1.jpg&quot; style=&quot;height:auto; max-width:100%&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 1: ขั้นตอนการสังเคราะห์แกรฟีน (1) ทำปฏิกิริยาออกซิเดชันได้แกรไฟต์ออกไซด์ (2) การใช้คลื่นความถี่สูง (Sonication)ในน้ำทำให้ชั้นของแกรไฟต์ออกไซด์หลุดลอกได้แกรฟีนออกไซด์[1]&lt;/p&gt;\r\n', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; แกรฟีนถูกสังเคราะห์ขึ้นครั้งแรกด้วยวิธี Micromechanical exfoliation หรือการลอกชั้นบางๆ ของแกรฟีนออกจากแกรไฟต์ วิธีนี้จะได้แกรฟีนในปริมาณน้อย ซึ่งเป็นประโยชน์มากสำหรับการศึกษาสมบัติขั้นพื้นฐานแต่ในการสังเคราะห์แกรฟีนส่วนใหญ่เพื่อให้ได้ปริมาณมาก มีขนาดใหญ่อาจถึง 1 ตร.ซม.สามารถปลูกบนวัสดุรองรับที่เป็นโลหะ และเป็นsingle layer ของแกรฟีนจริงๆ คือ วิธี Chemical Vapor Deposition (CVD)วิธีนี้มักจะใช้ในโรงงานผลิตฟิล์มบางสารกึ่งตัวนำ แต่วิธีที่จะนำเสนอนี้เป็นวิธีการสังเคราะห์ทางเคมี สามารถทำได้ในระดับห้องปฏิบัติการ ได้แกรฟีนในปริมาณมากเป็นสารแขวนลอย (suspension) และนำมาใช้ในงานได้หลากหลาย&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; หลักการในการสังเคราะห์แกรฟีนด้วยวิธีทางเคมี[1,2] เริ่มต้นด้วยการใช้กรดแก่หรือตัวออกซิแดนท์มาออกซิไดส์แกรไฟต์ได้เป็น &amp;ldquo;แกรไฟต์ออกไซด์&amp;rdquo;ซึ่งกลุ่มของออกไซด์, ไฮดรอกซิล, คาร์บอกซิลิกและคาร์บอนิลจะเข้าไปแทรกและเกาะเต็มระนาบพื้นผิวในแต่ละชั้นของแกรไฟต์ ทำให้แต่ละชั้นของแกรไฟต์กว้างขึ้นและลดแรงแวนเดอร์วาลส์ระหว่างชั้นหากแกรไฟต์ออกไซด์ถูกกระตุ้นด้วยแรงเพียงนิดเดียวเช่นด้วยการใช้คลื่นความถี่สูง (Sonication)ก็สามารถหลุดลอกออกเป็น &amp;ldquo;แกรฟีนออกไซด์&amp;rdquo; (Graphene oxide) ซึ่งมีสมบัติเป็น hydrophilic ละลายได้ดีในน้ำ แต่ไม่นำไฟฟ้า และสามารถรีดิวซ์ด้วยสารรีดักแทนซ์เช่น ไฮดราซีนไฮเดรต ได้เป็น &amp;ldquo;รีดิวซ์แกรฟีน&amp;rdquo; (Reduced Graphene oxide) ซึ่งสามารถกรองและกระจายตัวได้ดีบนวัสดุสารรองรับ ใช้เป็นฟิล์มบางนำไฟฟ้า เช่น กระดาษนำไฟฟ้า (Conducting graphene paper)[3]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/1.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 1: ขั้นตอนการสังเคราะห์แกรฟีน (1) ทำปฏิกิริยาออกซิเดชันได้แกรไฟต์ออกไซด์ (2) การใช้คลื่นความถี่สูง (Sonication)ในน้ำทำให้ชั้นของแกรไฟต์ออกไซด์หลุดลอกได้แกรฟีนออกไซด์[1]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/2.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 2: แบบจำลองใหม่ของแกรไฟต์ออกไซด์ที่มีกลุ่มออกไซด์เกาะบนผิวและขอบ[4]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/3.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 3: ลักษณะและโครงสร้างของกระดาษแกรฟีนออกไซด์[3] a. แสดงตราของ the NorthwesternUniversityมีความหนา ~1mm, b. ฟิล์มบางนำไฟฟ้าที่มีความยืดหยุ่นหนาเพียง 5mm, c. ฟิล์มหนา 25mm โค้งงอได้, d. เป็นการทดสอบความทนแรงดึง (Tensile strength) และ e-g. เป็นภาพตัดขวางจากกล้องSEM ของฟิล์มบางแกรฟีนหนา 10mm [3]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; ปกติแล้วการสังเคราะห์แกรฟีนออกไซด์มีอยู่ 3 วิธีหลักๆ ได้แก่ วิธีของ Hummer และOffman[5], Staudenmaier[6] และ Brodie[7] ทางห้องปฏิบัติการวัสดุยุคใหม่นำโดย ศ.(พิเศษ) ดร. อิ มิง ถังและความร่วมมือจาก ดร.ปิยะพงษ์&amp;nbsp; อะสะนิธิห้องปฏิบัติการนาโนเทคโนโลยี ภาควิชาฟิสิกส์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ได้สังเคราะห์แกรฟีนด้วยวิธีการทางเคมีโดยHummers method[5] วิธีนี้ใช้H2SO4(conc.) และ KMnO4เป็นตัวออกซิไดส์Graphite flakesที่มีความบริสุทธิ์สูง มีLocalized defectsใน p-structure จึงเป็น seed ในการเกิดปฏิกิริยาออกซิเดชัน&amp;nbsp;&amp;nbsp; แกรไฟต์ออกไซด์ที่ได้จะมีสีน้ำตาลอมเหลืองอยู่ในรูปของสารละลาย หรือสามารถนำมากรองได้ทันทีหลังจากทำปฏิกิริยาออกซิเดชัน หากนำสารละลายดังกล่าวมาsonicate จะได้สารละลายแกรฟีนออกไซด์ และสำหรับปฏิกิริยารีดักชันของแกรฟีนออกไซด์[8] จะใช้ไฮดราซีนไฮเดรท (Hydrazine hydrate) เพื่อรีดิวซ์กลับเป็นแกรฟีนอีกครั้ง แสดงดังภาพ Transmission electron microscope (TEM) ในรูปที่ 4&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/4.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 4:ภาพ TEM แสดงชั้นบางๆ ของแกรฟีนออกไซด์ (ซ้าย) และรีดิวซ์แกรฟีนออกไซด์ (ขวา)&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;(ภาพโดย น.ส.พิชญ์สิณี สุวรรณแพทย์ นักศึกษาปริญญาเอก สาขาฟิสิกส์ มหาวิทยาลัยมหิดล)&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;รูปที่ 5 แสดงรามานสเปคตรัมของแกรฟีนออกไซด์ (GO) และแกรฟีนที่ได้จากการทำปฏิกิริยารีดักชัน (RGO) ความเป็นแกรฟีนสามารถตรวจสอบได้โดยใช้ Raman spectroscopy (Elaser= 2.41 eV)พบว่า defect ที่เกิดจากการปฏิกิริยาเคมีส่งผลให้พีคของแกรฟีนออกไซด์หายไปในบริเวณ 2D เนื่องจากหมู่ฟังก์ชันที่แทรกตัวและเกาะบนระนาบของโครงสร้างแผ่นแกรฟีนหลังจากทำปฏิกิริยารีดักชันพบว่าเกิดพีคที่ไม่สูงมาก (~2700 cm-1) หลังจากการผ่านปฏิกิริยารีดักชันทำให้defect เพิ่มขึ้นไปทำลายลักษณะสัณฐานของแกรฟีน สังเกตได้จากสเปคตรัมของ RGO แสดง D bandที่ตำแหน่ง ~1350 cm-1มีพีคสูงขึ้นโดยค่าID/IGเพิ่มขึ้นจาก ~0.99 เป็น~1.25และมี G band ที่ตำแหน่ง~1600 cm-1นอกจากนี้ ยังแสดงถึงขนาดที่ลดลงของ in-plane sp2แต่มีปริมาณของแกรฟีนมากขึ้น&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/research/5.jpg&quot; style=&quot;max-width: 100%; height: auto;&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 5:รามานสเปคตรัมของแกรฟีนออกไซด์ (GO)และรีดิวซ์แกรฟีนออกไซด์ (RGO) ตามลำดับ&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;(ภาพโดย น.ส.พิชญ์สิณี สุวรรณแพทย์ นักศึกษาปริญญาเอก สาขาฟิสิกส์ มหาวิทยาลัยมหิดล)&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;เอกสารอ้างอิง:&lt;/p&gt;\r\n\r\n&lt;p&gt;[1] S. Park and R.S. Ruoff, chemical methods for the production of graphenes, Nature Nanotechnology, 4, 217 (2009).&lt;/p&gt;\r\n\r\n&lt;p&gt;[2]D. Shin, S.Bae, C. Yan, J. Kang, J. Ryu, J.-H.Ahn, and B.H. Hong, Synthesis andapplications of graphene electrodes, Carbon Letters, 13(1), 1-16 (2012).&lt;/p&gt;\r\n\r\n&lt;p&gt;[3] D.A. Dikin, S.Stankovich, E.J. Zimney, R.D. Piner, G. H. B. Dommett, G.Evmenenko,S. T. Nguyen and R.S. Ruoff,Preparation and characterization of graphene oxide paper, Nature, 488, 457 (2007).&lt;/p&gt;\r\n\r\n&lt;p&gt;[4] W. Gao, L.B. Alemany, L. Ci and P.M. Ajayan, New insights into the structure and reduction of graphite oxide, Nature Chemistry, 1, 403 - 408 (2009).&lt;/p&gt;\r\n\r\n&lt;p&gt;[5] W.S. Hummers, Jr. and R.E. Offman, Preparation of graphitic oxide, J. Am. Chem. Soc., 80, 1339 (1958).&lt;/p&gt;\r\n\r\n&lt;p&gt;[6] J. R. Lomeda, C. D. Doyle, D. V. Kosynkin, W. F. Hwang and J. M. Tour,Diazonium functionalization of surfactant-wrapped chemically converted graphene sheets, J. Am. Chem. Soc., 130, 16201&amp;ndash;16206(2008).&lt;br /&gt;\r\n[7] H. K. Jeong, Y. P. Lee, R. Lahaye,M. H. Park, K. H. An, I. J. Kim, C. W. Yang, C. Y. Park, R. S. Ruoff and Y. H. Lee, Evidence of Graphitic AB Stacking Order of Graphite Oxides, J. Am. Chem. Soc., 130, 1362&amp;ndash;1366(2008).&lt;/p&gt;\r\n\r\n&lt;p&gt;[8] S.Stankovich, D.A. Dikin, R.D. Piner, K.A. Kohlhaas,A.Kleinhammes, Y.Jia, Y. Wu,S.B. T. Nguyen, and R. S. Ruoff,Synthesis of graphene-based nanosheets via chemical reductionof exfoliated graphite oxide,Carbon 45, 1558&amp;ndash;1565(2007).&lt;/p&gt;', 'y', '', '', '08/14/2013 11:14:32 am');
INSERT INTO `tb_news` VALUES (8, 'pr', 'ประกาศผลการคัดเลือกจัดซื้อครุภัณฑ์เครื่องเคลือบแบบสปัตเตอร์', '2013-08-01', '', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;ผลการคัดเลือกสามารถคลิกดูได้จากที่นี่&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;a href=&quot;http://www.thep-center.org/uploadfile/Images/index.pdf&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none; font-family: Tahoma; font-size: 14px; line-height: normal;&quot; target=&quot;_blank&quot;&gt;http://www.thep-center.org/uploadfile/Images/index.pdf&lt;/a&gt;&lt;/p&gt;\r\n', 'y', '../../upload/1a92ff5e.jpg', '', '2013-09-18 13:34:23');
INSERT INTO `tb_news` VALUES (9, 'activity', 'Northern Food Valley 2013', '08/06/2013', '', '', '&lt;p&gt;ระหว่างวันที่ 31ก.ค.- 4 ส.ค.56 ณ เชียงใหม่ฮอลล์ ศูนย์การค้าเซ็นทรัลพลาซ่า เชียงใหม่ แอร์พอร์ต&lt;/p&gt;\r\n', 'y', '', '10', '08/22/2013 11:00:26 am');
INSERT INTO `tb_news` VALUES (10, 'activity', 'การประชุมสัมมนาและแสดงนิทรรศการ เรื่อง การขับเคลื่อนอนาคตประเทศไทยด้วยระบบวิจัยของศูนย์ความเป็นเลิศ', '08/05/2013', '', '', '&lt;p&gt;ในวันพุธที่ 31 กรกฎาคม 2556 ณ ศูนย์การประชุมสถาบันวิจัยจุฬาภรณ์ กรุงเทพมหานคร&lt;/p&gt;\r\n', 'y', '', '11', '08/22/2013 10:43:19 am');
INSERT INTO `tb_news` VALUES (11, 'pr', 'เชิญชวนผู้สนใจเข้าร่วมการอบรม เรื่อง การเคลือบในสูญญากาศกับการประยุกต์ทางอุตสาหกรรม', '2013-08-19', '', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;ศูนย์ความเป็นเลิศด้านฟิสิกส์ ขอเชิญผู้สนใจเข้าร่วมการอบรม เรื่อง &amp;quot;การเคลือบในสูญญากาศกับการประยุกต์ทางอุตสาหกรรม&amp;quot; วันที่ 4 กันยายน 2556 ณ ห้องเทา-ทอง 1 ศูนย์ปฏิบัติการโรงแรมเทา-ทอง มหาวิทยาลัยบูรพา ชลบุรี&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;หากสนใจสามารถรับรายละเอียดเพิ่มเติม ได้&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.thep-center.org/uploadfile/img_pr/859550_230263733793437_1312629464_o.jpg&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none; font-family: Tahoma; font-size: 14px; line-height: normal; &quot;&gt;ที่นี่&lt;/a&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;และรับใบสมัครกดคลิ๊ก&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.thep-center.org/uploadfile/img_pr/1094062_230263807126763_1108450737_o.jpg&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none; font-family: Tahoma; font-size: 14px; line-height: normal;;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/p&gt;\r\n', 'n', '../../upload/7dff1e1e47.jpg', '', '2013-09-18 13:18:29');
INSERT INTO `tb_news` VALUES (12, 'gen-academic', 'สรุปรายชื่อผู้เข้าร่วมกิจกรรม Names of participant&#039;s Advanced Plasma Technology for Green Energy and Biomedical Applications', '2011-07-26', '', '', '&lt;p&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&amp;nbsp;Names of participant Advanced Plasma Technology for Green Energy and Biomedical Applications August 11 - 12, 2011 Centara Duangtawan Hotel Chiang Mai, Thailand&amp;nbsp;&lt;strong&gt;1.&lt;/strong&gt;&amp;nbsp;&lt;a href=&quot;&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none;&quot; target=&quot;mainFrame&quot;&gt;Names of participant&lt;/a&gt;&lt;/span&gt;&lt;/p&gt; ddddddddddddddddddddddd\r\n', 'n', '', '', '2013-10-25 15:24:07');
INSERT INTO `tb_news` VALUES (13, 'activity', 'ภาพบรรยากาศการเยี่ยมชมศูนย์ความเป็นเลิศด้านฟิสิกส์และการหารือความร่วมมือระหว่างกันของสถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน) ในวันจันทร์ที่ 19 สิงหาคม 2556 ณ ศูนย์ความเป็นเลิศด้านฟิสิกส์', '2013-08-19', '../img/picture/0685bc65.jpg', 'ภาพบรรยากาศการเยี่ยมชมศูนย์ความเป็นเลิศด้านฟิสิกส์และการหารือความร่วมมือระหว่างกันของสถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน)', 'ภาพบรรยากาศการเยี่ยมชมศูนย์ความเป็นเลิศด้านฟิสิกส์และการหารือความร่วมมือระหว่างกันของสถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน) ในวันจันทร์ที่ 19 สิงหาคม 2556 ณ ศูนย์ความเป็นเลิศด้านฟิสิกส์', 'y', '', '12', '2013-10-24 16:50:06');
INSERT INTO `tb_news` VALUES (14, 'pr', 'แนะนำโครงการร่วม US-CERN-Japan-Russia Accelerator School', '2013-05-30', '', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ศูนย์ความเป็นเลิศด้านฟิสิกส์ขอแนะนำโครงการดี ๆ ที่เหมาะสำหรับนักเรียน นักศึกษา และนักวิจัยที่มีความสนใจเกี่ยวกับเครื่องเร่งอนุภาค ซึ่งเป็นโครงการที่ผู้เข้าร่วมจะได้พบกับนักวิจัยชั้นนำจากทั่วโลก ภายใต้โครงการร่วม US-CERN-Japan-Russia Accelerator School ในหัวข้อ Introduction to Particle Accelerators ณ เมือง Shizuoka ประเทศญี่ปุ่น ระหว่างวันที่ 23-31 ตุลาคม 2556 โดยระหว่างกิจกรรมจะมีการบรรยายเบื้องต้นเกี่ยวกับเครื่องเร่งอนุภาคสำหรับนักเรียน นักศึกษา และผู้เริ่มต้น รวมไปถึงวิศวกรในภาคอุตสาหกรรมที่เกี่ยวข้อง โดยหัวข้อในการบรรยายได้คัดเลือกมาจากแม่เหล็กไฟฟ้าและพลศาสตร์ของลำอนุภาคระดับพื้นฐานเพื่อนำไปสู่การประยุกต์ใช้เครื่องเร่งอนุภาค&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;และที่สำคัญผู้เข้าร่วมโครงการสามารถสอบถามและปรึกษาหารือกับนักวิจัยชั้นนำได้อย่างเต็มที่เพราะที่พักจัดอยู่ในบริเวณเดียวกัน&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;หากสนใจสามารถดูรายละเอียดเพิ่มเติมได้ที่&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;a href=&quot;http://www-conf.kek.jp/accschool/index.html&quot; style=&quot;color: rgb(0, 0, 0); text-decoration: none; font-family: Tahoma; font-size: 14px; line-height: normal;&quot;&gt;http://www-conf.kek.jp/accschool/index.html&lt;/a&gt;&lt;/p&gt;\r\n', 'n', 'http://www.thep-center.org/upload/pic/poster.jpg', '', '2013-10-15 14:13:15');
INSERT INTO `tb_news` VALUES (15, 'network-academic', 'การเพิ่มขึ้นอย่างมโหฬารของจำนวนอนุภาคโปรตอนพลังงานระดับสัมพัทธภาพจากดวงอาทิตย์เมื่อวันที่ 20 มกราคม ค.ศ. 2005: การสังเกตโดย ยานอวกาศโลก', '2013-09-19', '', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ประมาณ 15 ครั้งต่อวัฏจักร 11 ปี ดวงอาทิตย์จะปล่อยอนุภาครังสีคอสมิกที่มีพลังงานและความเข้มสูงพอที่จะเพิ่มระดับกัมมันตรังสีที่ผิวโลกขึ้นเหนือระดับพื้นหลังที่มีที่มาจากรังสีคอสมิกจากกาแล็กซี เหตุการณ์เหล่านี้เรียกว่า การเพิ่มที่ระดับพื้นดิน (ground level enhancements หรือ GLEs) ซึ่งทำให้สามารถศึกษาการเร่งอนุภาคที่ดวงอาทิตย์ได้อย่างชัดเจนเป็นพิเศษ เนื่องจาก 1) อนุภาคใน GLEs เคลื่อนที่ใกล้ความเร็วแสง ซึ่งทำให้มีการเชื่อมต่ออย่างชัดเจนระหว่างอนุภาคและเหตุการณ์ที่ดวงอาทิตย์ และ 2) อนุภาคเหล่านี้มีระยะอิสระเฉลี่ยในอวกาศที่ยาว และฟลักซ์ต่อเวลาไม่ค่อยเปลี่ยนแปลงเนื่องจากกระบวนการการขนส่งในตัวกลางระหว่างดาวเคราะห์ ข้อมูลที่ได้จากการสังเกตและวิเคราะห์ GLEs เกี่ยวข้องอย่างชัดเจนกับสาขาวิชาสุริยฟิสิกส์ และยังน่าสนใจสำหรับดาราศาสตร์ฟิสิกส์ดั้งเดิมเนื่องจากเหตุการณ์นี้ท้าทายแบบจำลองสำหรับการเร่งอนุภาค (เช่น Roussev et al. 2004)&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; class=&quot;img-responsive&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/darasart/1.jpg&quot; style=&quot;margin:0 auto&quot; /&gt;&lt;/p&gt;\r\n', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ประมาณ 15 ครั้งต่อวัฏจักร 11 ปี ดวงอาทิตย์จะปล่อยอนุภาครังสีคอสมิกที่มีพลังงานและความเข้มสูงพอที่จะเพิ่มระดับกัมมันตรังสีที่ผิวโลกขึ้นเหนือระดับพื้นหลังที่มีที่มาจากรังสีคอสมิกจากกาแล็กซี เหตุการณ์เหล่านี้เรียกว่า การเพิ่มที่ระดับพื้นดิน (ground level enhancements หรือ GLEs) ซึ่งทำให้สามารถศึกษาการเร่งอนุภาคที่ดวงอาทิตย์ได้อย่างชัดเจนเป็นพิเศษ เนื่องจาก 1) อนุภาคใน GLEs เคลื่อนที่ใกล้ความเร็วแสง ซึ่งทำให้มีการเชื่อมต่ออย่างชัดเจนระหว่างอนุภาคและเหตุการณ์ที่ดวงอาทิตย์ และ 2) อนุภาคเหล่านี้มีระยะอิสระเฉลี่ยในอวกาศที่ยาว และฟลักซ์ต่อเวลาไม่ค่อยเปลี่ยนแปลงเนื่องจากกระบวนการการขนส่งในตัวกลางระหว่างดาวเคราะห์ ข้อมูลที่ได้จากการสังเกตและวิเคราะห์ GLEs เกี่ยวข้องอย่างชัดเจนกับสาขาวิชาสุริยฟิสิกส์ และยังน่าสนใจสำหรับดาราศาสตร์ฟิสิกส์ดั้งเดิมเนื่องจากเหตุการณ์นี้ท้าทายแบบจำลองสำหรับการเร่งอนุภาค (เช่น Roussev et al. 2004).&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;นอกจากนี้ GLEs ยังน่าสนใจในแง่ของการพยากรณ์และอธิบายผลกระทบทาง &amp;ldquo;สภาพอวกาศ&amp;rdquo; ของพายุสุริยะที่มีต่อกิจกรรมของมนุษย์ รังสีคอสมิกจากดวงอาทิตย์สามารถทำลายอุปกรณ์อิเล็กทรอนิกส์บนยานอวกาศ และเป็นอันตรายอย่างยิ่งต่อนักบินอวกาศ (Hu et al. 2009) การที่อนุภาค GLE เคลื่อนที่ด้วยความเร็วสูงมากใกล้ความเร็วแสง ทำให้เป็นตัวบ่งชี้ตัวแรกสำหรับพายุรังสีที่กำลังจะมาในบางครั้ง (Kuwabara et al. 2006) ในแง่ของผลกระทบต่อกัมมันตภาพรังสีที่ลูกเรือและอิเล็กทรอนิกส์บนเครื่องบินจะได้รับ เหตุการณ์ GLE เป็นเหตุการณ์ที่มีดวงอาทิตย์เป็นต้นเหตุประเภทเดียวที่สำคัญ เพราะว่าอนุภาคพลังงานต่ำ ซึ่งส่งผลอย่างสำคัญต่อยานอวกาศ แต่ไม่สามารถทะลุบรรยากาศสู่ระดับการบินของเครื่องบินได้ (Wilson et al. 2003; Lantos 2006) เส้นทางการบินข้ามบริเวณใกล้ขั้วโลกเหนือได้เพิ่มขึ้นอย่างมากในระยะหลัง เพราะว่าเป็นเส้นทางที่ประหยัดค่าใช้จ่ายมากที่สุดเมื่อบินจากอเมริกาเหนือสู่เอเชียตะวันออก (Hanson &amp;amp; Jensen 2002) แต่เส้นทางเหล่านี้รับอันตรายจากกัมมันตภาพรังสีจากอวกาศมากที่สุด เพราะสนามแม่เหล็กโลกไม่สามารถป้องกันได้ในบริเวณใกล้ขั้วโลก เป็นสิ่งที่ดีที่มีสถานีตรวจวัดนิวตรอนหลายสถานีที่ตั้งอยู่ที่แคนาดา รัสเซีย และกรีนแลนด์ ซึ่งเป็นตำแหน่งที่เหมาะสำหรับการเตือนภัยและติดตามความเสี่ยงตามเส้นทางบินข้ามบริเวณขั้วโลก&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;งานวิจัยชิ้นนี้ (Bieber et al. 2013) รายงานถึงการสังเกตด้วยเครื่องตรวจวัดนิวตรอนสำหรับ GLE ขนาดยักษ์ใหญ่เมื่อวันที่ 20 มกราคม ค.ศ. 2005 ซึ่งเป็นเหตุการณ์ที่รุนแรงที่สุดที่สังเกตุในรอบครึ่งศตวรรษ และใหญ่เป็นอันดับสองนับตั้งแต่เริ่มมีการสังเกตอย่างเป็นระบบในทศวรรษของปี ค.ศ.1930 เราวิเคราะห์ข้อมูลจากสถานีตรวจวัดนิวตรอน 11 สถานีในเครือ ยานอวกาศโลก (Spaceship Earth; Bieber &amp;amp; Evenson 1995) เสริมด้วยอีกสองสถานี บทความถัดไป (A. S&amp;aacute;iz et al. 2013, กำลังดำเนินการ) จะรายงานถึงแบบจำลองทางทฤษฎีสำหรับเหตุการณ์นี้ การหาระดับการกระเจิงระหว่างดาวเคราะห์ และการหาอัตราการปล่อยอนุภาคต่อเวลาจากพายุสุริยะสู่เส้นสนามแม่เหล็กที่เชื่อมระหว่างดวงอาทิตย์และโลก&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; class=&quot;img-responsive&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/darasart/1.jpg&quot; style=&quot;margin:0 auto&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ภาพที่ 1&lt;/strong&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;การเพิ่ม(ร้อยละ)ของไอออนที่มีพลังงานระดับสัมพัทธภาพจากดวงอาทิตย์ เหนือระดับรังสีคอสมิกพื้นหลังจากกาแล็กซี สำหรับ GLE ขนาดยักษ์เมื่อวันที่ 20 มกราคม ค.ศ. 2005 ณ สถานีตรวจวัดนิวตรอน 6 แห่งใกล้ขั้วโลกและใกล้ระดับทะเล นิวตรอนที่วัดคือรังสีคอสมิกทุติยภูมิจากการ&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; class=&quot;img-responsive&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/darasart/2.jpg&quot; style=&quot;margin:0 auto&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ภาพที่ 2&lt;/strong&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;ตำแน่งที่ตั้งและทิศทางการ &amp;ldquo;มอง&amp;rdquo; ของสถานีตรวจวัดนิวตรอน 13 สถานีที่พิจารณาในงานนี้ ณ 06.53 น. เวลาสากล (universal time; UT) ซึ่งเป็นเวลาที่มีอัตรานับรังสีสูงสุดใน GLE ขนาดยักษ์เมื่อวันที่ 20 มกราคม ค.ศ. 2005 ใน (a) พิกัดเชิงภูมิศาสตร์ของโลก (geographic coordinates) และ (b) พิกัด GSE (geocentric solar ecliptic coordinates) ที่บ่งบอกทิศทางในอวกาศ&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; class=&quot;img-responsive&quot; src=&quot;http://www.thep-center.org/uploadfile/img_pr/darasart/3.jpg&quot; style=&quot;margin:0 auto&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ภาพที่ 3&lt;/strong&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp;(a) ข้อมูลระดับ 1 นาทีจากขั้วโลกใต้ ทั้งจากเครื่องตรวจวัดนิวตรอนปกติ และเครื่องวัดนิวตรอน &amp;ldquo;เปลือย&amp;rdquo; ที่ไม่ห่อหุ้มด้วยตะกั่ว (b) สัดส่วนระหว่างการเพิ่มในเครื่องวัดสองชนิดนี้ สำหรับแต่ละนาที บ่งบอกดัชนีสเปกตรัม &amp;gamma; โดย ฟลักซ์ต่อโมเมนตัมขึ้นกับ p- &amp;gamma; ต่อเมื่ออนุภาคเพิ่มเริ่มมาจากดวงอาทิตย์ &amp;gamma; มีค่าที่ต่ำเนื่องจากอนุภาคที่มีพลังงานสูงกว่าจะมาถึงก่อน ต่อจากนั้นค่า &amp;gamma; จะเพิ่มสู่ค่าคงตัว เราพบว่า &amp;gamma; มีค่าที่ต่ำอีกครั้งหนึ่งตอน 06.55 น. UT ซึ่งตีความว่ามาจากการปล่อยอนุภาคจากดวงอาทิตย์เป็นครั้งที่สอง&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;References&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Bieber, J. W., Clem, J., Evenson, P., Pyle, R., S&amp;aacute;iz, A., &amp;amp; Ruffolo, D. 2013, Astrophys. J., 771, 92&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Bieber, J. W., &amp;amp; Evenson, P. 1995, in Proc. 24th ICRC (Rome), 4, 1316&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Hanson, E. R., Jr.,&amp;amp;Jensen,D. 2002,Avionics Today, http://www.aviationtoday.com/av/issue/feature/Over-the-Top-Flying-the-Polar-Routes_12647.html&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Hu, S., Kim, M.-H. Y., McClellan, G. E., &amp;amp; Cucinotta, F. A. 2009, Health Physics, 96, 465&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Kuwabara, T., Bieber, J. W., Clem, J., Evenson, P., &amp;amp; Pyle, R. 2006, Space Weather, 4, S10001&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Lantos, P. 2006, Radiat. Prot. Dosim., 118, 363&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;Roussev, I. I., Sokolov, I. V., Forbes, T. G., Gombosi, T. I., Lee, M. A., &amp;amp; Sakai, J. I. 2004, Astrophys. J. Lett., 605, L73&lt;/span&gt;&lt;/p&gt;\r\n', 'y', '', '', '2013-10-24 16:15:04');
INSERT INTO `tb_news` VALUES (16, 'network-academic', 'ผลของท่อนาโนคาร์บอนในเจลอิเล็กโทรไลต์ที่มีต่อประสิทธิภาพการเปลี่ยนพลังงานแสงอาทิตย์เป็นพลังงานไฟฟ้าของเซลล์แสงอาทิตย์ชนิดสีย้อมไวแสงที่มีซิงก์ออกไซด์เป็นฐาน', '2013-10-22', 'http://www.thep-center.org/uploadfile/img_pr/prayuk/1.jpg', 'คณะผู้วิจัย ห้องปฏิบัติการวิจัยฟิสิกส์ประยุกต์ มหาวิทยาลัยเชียงใหม่ สนใจที่จะพัฒนาและวิจัยเพื่อเพิ่มประสิทธิภาพในการเปลี่ยนพลังงานแสงให้เป็นพลังงานไฟฟ้าของเซลล์แสงอาทิตย์ชนิดสีย้อมไวแสง (dye-sensitized solar cells, DSSCs) ซึ่งเป็นหนึ่งในตัวเลือกที่พัฒนาแทนที่เซลล์แสงอาทิตย์ชนิดซิลิกอน เนื่องจากเป็นเซลล์แสงอาทิตย์ที่มีขั้นตอนในการทำงานไม่ยุ่งยาก และมีต้นทุนต่ำ', '&lt;p&gt;&lt;span style=&quot;font-family:tahoma; font-size:14px&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; คณะผู้วิจัย ห้องปฏิบัติการวิจัยฟิสิกส์ประยุกต์ มหาวิทยาลัยเชียงใหม่ สนใจที่จะพัฒนาและวิจัยเพื่อเพิ่มประสิทธิภาพในการเปลี่ยนพลังงานแสงให้เป็นพลังงานไฟฟ้าของเซลล์แสงอาทิตย์ชนิดสีย้อมไวแสง (dye-sensitized solar cells, DSSCs) ซึ่งเป็นหนึ่งในตัวเลือกที่พัฒนาแทนที่เซลล์แสงอาทิตย์ชนิดซิลิกอน เนื่องจากเป็นเซลล์แสงอาทิตย์ที่มีขั้นตอนในการทำงานไม่ยุ่งยาก และมีต้นทุนต่ำ [1] ปัจจุบันมีการผลิตเซลล์แสงอาทิตย์ชนิดนี้ออกมาจำหน่ายแล้ว แต่เซลล์ชนิดนี้ยังคงมีประสิทธิภาพต่ำ ซึ่งประสิทธิภาพจะขึ้นอยู่ปริมาณกระแสที่สร้างได้และค่าความต่างศักย์ของเซลล์ จึงสามารถทำการปรับปรุงได้โดยให้เซลล์สร้างกระแสได้มากขึ้นและเพิ่มความต่างศักย์ของเซลล์โดยลดการไหลย้อนกลับของกระแส ซึ่งจะขึ้นอยู่กับชนิดของโลหะออกไซด์ที่นำมาใช้เป็นชั้นโฟโตอิเล็กโทรด เนื่องด้วยองค์ความรู้ที่สั่งสมมาทางด้านวัสดุนาโน ZnO [2-3] คณะผู้วิจัยจึงสนใจที่จะปรับปรุงประสิทธิภาพของเซลล์แสงอาทิตย์ชนิดนี้โดยเลือกใช้ซิงก์ออกไซด์ (ZnO) เป็นชั้นโฟโตอิเล็กโทรด ซึ่งโครงสร้างและกลไกการทำงานของเซลล์ชนิดนี้ มีลักษณะดังรูปที่ 1&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;div&gt;&lt;img src=&quot;http://www.thep-center.org/uploadfile/img_pr/prayuk/1.jpg&quot; style=&quot;height:auto; margin:0 auto; max-width:100%&quot; /&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;รูปที่ 1 โครงสร้างและกลไกการทำงานของเซลล์แสงอาทิตย์ชนิดสีย้อมไวแสง&lt;/p&gt;\r\n', 'y', '', '', '2013-10-28 11:37:41');
INSERT INTO `tb_news` VALUES (17, 'special', 'รางวัลโนเบลฟิสิกส์ประจำปี 2013', '2013-10-25 11:05:25', '../images/131008_SCI_HiggsEnglert.jpg.CROP.promo-mediumlarge.jpg', 'Royal Swedish Academy of Sciences ได้ประกาศที่กรุงสตอกโฮล์ม ประเทศสวีเดน เมื่อวันที่ 8 ตุลาคมที่ผ่านมาว่า รางวัลโนเบลฟิสิกส์ประจำปี 2013 ได้ตัดสินมอบให้แก่นักฟิสิกส์ทฤษฎี 2 ท่านคือ ศาสตราจารย์ Francois Englert กับ ศาสตราจารย์ Peter W. Higg', ' Royal Swedish Academy of Sciences ได้ประกาศที่กรุงสตอกโฮล์ม ประเทศสวีเดน เมื่อวันที่ 8 ตุลาคมที่ผ่านมาว่า รางวัลโนเบลฟิสิกส์ประจำปี 2013 ได้ตัดสินมอบให้แก่นักฟิสิกส์ทฤษฎี 2 ท่านคือ ศาสตราจารย์ Francois Englert กับ ศาสตราจารย์ Peter W. Higg', 'y', '', '', '2013-10-25 11:05:25');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_personel`
-- 

CREATE TABLE `tb_personel` (
  `id` int(11) NOT NULL auto_increment,
  `code` int(11) NOT NULL,
  `first_th` varchar(255) collate utf8_unicode_ci NOT NULL,
  `first_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `last_th` varchar(255) collate utf8_unicode_ci NOT NULL,
  `last_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `position_th` varchar(255) collate utf8_unicode_ci NOT NULL,
  `position_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phone_th` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phone_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `photo` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- 
-- dump ตาราง `tb_personel`
-- 

INSERT INTO `tb_personel` VALUES (1, 1, 'ถิรพัฒน์', '', 'วิลัยทอง', '', 'ศาสตราจารย์ เกียรติคุณ ดร.', '', 'ผู้อำนวยการศูนย์ความเป็นเลิศด้านฟิสิกส์', '', '053-942650-3 ต่อ 101', '+66 53 942 650-3 ext 101', 'Thirapat@fnrf.science.cmu.ac.th', 'http://www.thep-center.org/upload/pic/personal/1.jpg', '2013-10-16 15:42:06');
INSERT INTO `tb_personel` VALUES (2, 2, 'สมศร', '', 'สิงขรัตน์', '', 'รศ.ดร.', '', 'รองผู้อำนวยการศูนย์ความเป็นเลิศด้านฟิสิกส์', '', '053-943379', '+66 53 -943 379', 'somsorn.s@gmail.com', 'http://www.thep-center.org/upload/pic/personal/somsorn.jpg', '2013-10-16 15:42:50');
INSERT INTO `tb_personel` VALUES (3, 3, 'ดวงมณี', '', 'ว่องรัตนะไพศาล', '', 'ผศ.ดร.', '', 'ผู้ช่วยผู้อำนวยการศูนย์ความเป็นเลิศด้านฟิสิกส์', '', '053-943375', '+66 53 943 375', 'dwongrat@thep-center.org', 'http://www.thep-center.org/upload/pic/personal/Aj.Duangmanee.jpg1.jpg', '2013-10-16 15:43:26');
INSERT INTO `tb_personel` VALUES (4, 4, ' ดุษฎี', '', 'สุวรรณขจร', '', 'ดร.', '', 'ผู้ช่วยผู้อำนวยการศูนย์ความเป็นเลิศด้านฟิสิกส์', '', ' 053-943379', '+66 53 -943 379', 'dusadee.suwann@gmail.com', 'http://www.thep-center.org/upload/pic/personal/20060615201428dusadeesuwannakachorn.jpg', '2013-10-16 15:43:56');
INSERT INTO `tb_personel` VALUES (5, 5, 'ศศิวิมล', '', 'หมู่ชาวใต้	', '', '', '', 'ผู้จัดการศูนย์ความเป็นเลิศด้านฟิสิกส์	', '', '053-942650-3 ต่อ 103', '+66 53 942 650-3 ext 103', 'sasivimol@thep-center.org', 'http://www.thep-center.org/upload/pic/personal/2.jpg', '08/23/2013 09:36:41 am');
INSERT INTO `tb_personel` VALUES (6, 6, 'กฤติยา', '', 'โอสถาพันธุ์', '', '', '', ' รักษาการหัวหน้าฝ่ายการเงิน การบัญชีและพัสดุ', '', '053-942650-3 ต่อ 102', '+66 53 942 650-3 ext 102', 'krittiya@thep-center.org', 'http://www.thep-center.org/upload/pic/personal/7.jpg', '08/23/2013 10:45:34 am');
INSERT INTO `tb_personel` VALUES (9, 7, '	สโรชา', '', 'นพคุณ', '', '', '', 'รักษาการหัวหน้าฝ่ายสนับสนุนงานวิจัยและพัฒนาบุคลากร	', '', '053-942650 ต่อ 109	', '', 'fellowship@thep-center.org', 'http://www.thep-center.org/upload/pic/personal/DSC02496.jpg1111.jpg', '2013-10-16 15:45:54');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_picture`
-- 

CREATE TABLE `tb_picture` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `caption` varchar(255) collate utf8_unicode_ci NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `pic_no` int(11) NOT NULL,
  `type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `folder` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modified` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

-- 
-- dump ตาราง `tb_picture`
-- 

INSERT INTO `tb_picture` VALUES (1, 'image-2.jpg', 'ทดลองเพิ่มภาพในแกลอรี', 1, 1, 'image/jpeg', 11264, 'img/picture', '07/18/2013 02:14:26 pm');
INSERT INTO `tb_picture` VALUES (26, '165d65a4.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 59402, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (3, '923aeb13.jpg', 'สบว. โลโก้', 2, 1, 'image/jpeg', 182470, 'img/picture', '07/29/2013 10:54:06 am');
INSERT INTO `tb_picture` VALUES (4, 'ef9b11ec.png', 'สกอ. โลโก้ test ดูเฉยๆ******************* 5555555', 2, 1, 'image/png', 35735, 'img/picture', '07/29/2013 10:55:43 am');
INSERT INTO `tb_picture` VALUES (5, '0426f7c7.jpg', 'ก่อนเริ่มการประชุม', 5, 1, 'image/jpeg', 46074, 'img/picture', '07/29/2013 11:05:58 am');
INSERT INTO `tb_picture` VALUES (6, 'ece133c5.jpg', 'ทักทาย', 5, 1, 'image/jpeg', 40428, 'img/picture', '07/29/2013 11:06:59 am');
INSERT INTO `tb_picture` VALUES (7, '3b2802bf.jpg', 'ทักทาย', 5, 1, 'image/jpeg', 45451, 'img/picture', '07/29/2013 11:23:03 am');
INSERT INTO `tb_picture` VALUES (8, 'eb7f35e0.jpg', 'กล่าวเปิดงาน', 5, 1, 'image/jpeg', 53518, 'img/picture', '07/29/2013 11:23:44 am');
INSERT INTO `tb_picture` VALUES (9, '310fd16c.jpg', 'กล่าวเปิดงาน', 5, 1, 'image/jpeg', 57314, 'img/picture', '07/29/2013 11:24:41 am');
INSERT INTO `tb_picture` VALUES (10, '56d110c9.jpg', 'ระหว่างงานประชุม', 5, 1, 'image/jpeg', 56559, 'img/picture', '07/29/2013 11:25:13 am');
INSERT INTO `tb_picture` VALUES (11, '94821269.png', 'โลโก้ จุฬา', 3, 1, 'image/png', 126622, 'img/picture', '07/29/2013 11:55:11 am');
INSERT INTO `tb_picture` VALUES (12, '40675d82.png', 'โลโก้ มหิดล', 3, 1, 'image/png', 318370, 'img/picture', '07/29/2013 11:56:20 am');
INSERT INTO `tb_picture` VALUES (13, '0eeebc9d.png', 'ม.เกษตร', 4, 1, 'image/png', 148522, 'img/picture', '07/29/2013 11:57:31 am');
INSERT INTO `tb_picture` VALUES (14, 'ff1a258e.png', 'ลาดกระบัง', 4, 1, 'image/png', 200778, 'img/picture', '07/29/2013 11:57:57 am');
INSERT INTO `tb_picture` VALUES (15, '62a035ed.jpg', 'testtttttt', 6, 1, 'image/jpeg', 7085, 'img/picture', '07/30/2013 10:17:33 am');
INSERT INTO `tb_picture` VALUES (16, '086d5dc7.png', '1111111', 6, 1, 'image/png', 126622, 'img/picture', '07/30/2013 11:13:23 am');
INSERT INTO `tb_picture` VALUES (17, '5b516037.png', '22222222', 6, 1, 'image/png', 148522, 'img/picture', '08/01/2013 03:43:51 pm');
INSERT INTO `tb_picture` VALUES (23, '6818416d.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 69878, 'img/picture', '08/22/2013 11:37:23 am');
INSERT INTO `tb_picture` VALUES (24, 'd840cf.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 63903, 'img/picture', '08/22/2013 11:37:23 am');
INSERT INTO `tb_picture` VALUES (25, 'e0282ff0.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 65481, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (27, '6b7b8646.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 39187, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (28, '0c539aa4.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 37227, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (29, '2db47b5b.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 51159, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (30, '8d88f70b.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 70254, 'img/picture', '08/22/2013 11:43:52 am');
INSERT INTO `tb_picture` VALUES (31, 'fc32a3a6.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 73630, 'img/picture', '08/22/2013 11:45:01 am');
INSERT INTO `tb_picture` VALUES (32, 'eb656c73.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 62361, 'img/picture', '08/22/2013 11:46:26 am');
INSERT INTO `tb_picture` VALUES (33, 'a3f32d88.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 61768, 'img/picture', '08/22/2013 11:47:01 am');
INSERT INTO `tb_picture` VALUES (34, '44c16bbc.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 61340, 'img/picture', '08/22/2013 11:47:37 am');
INSERT INTO `tb_picture` VALUES (35, 'e7bf3be7.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 63455, 'img/picture', '08/22/2013 11:48:07 am');
INSERT INTO `tb_picture` VALUES (36, '29f45656.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 55675, 'img/picture', '08/22/2013 11:48:28 am');
INSERT INTO `tb_picture` VALUES (37, 'cd6d3c16.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 65737, 'img/picture', '08/22/2013 11:49:30 am');
INSERT INTO `tb_picture` VALUES (38, 'ebbef1c8.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 64584, 'img/picture', '08/22/2013 11:49:30 am');
INSERT INTO `tb_picture` VALUES (39, '8b4579c.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 72370, 'img/picture', '08/22/2013 11:49:30 am');
INSERT INTO `tb_picture` VALUES (40, '566cf625.jpg', 'บรรยากาศภายในงาน', 10, 1, 'image/jpeg', 57190, 'img/picture', '08/22/2013 11:49:30 am');
INSERT INTO `tb_picture` VALUES (41, '97c298bd.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 54109, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (42, '3a9924ed.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 51194, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (43, '250ed974.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 56455, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (44, '47957c6e.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 70480, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (45, '5e3eb5c5.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 43988, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (46, '2c9e7c43.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 66409, 'img/picture', '08/22/2013 11:59:04 am');
INSERT INTO `tb_picture` VALUES (47, 'ef03c11.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 60257, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (48, 'd267050d.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 58105, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (49, 'c74cfd29.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 50470, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (50, '1ee01b72.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 68255, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (51, 'dca4c4d5.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 53242, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (52, 'ef371016.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 55793, 'img/picture', '08/22/2013 12:01:07 pm');
INSERT INTO `tb_picture` VALUES (53, '076fc6a2.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 43520, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (54, '2d9ea761.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 57348, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (55, '28a4ad79.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 71760, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (56, 'e82df02d.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 57119, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (57, '453e2c77.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 58855, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (58, 'b57f1a92.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 58174, 'img/picture', '08/22/2013 12:02:21 pm');
INSERT INTO `tb_picture` VALUES (59, '6e9adfea.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 53101, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (60, '23a0578.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 60392, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (61, '56eeb282.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 62661, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (62, '8796762f.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 53113, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (63, '07104096.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 70650, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (64, 'ef36d524.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 58237, 'img/picture', '08/22/2013 12:07:59 pm');
INSERT INTO `tb_picture` VALUES (65, 'e633168a.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 52610, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (66, 'db9cab57.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 59523, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (67, '639daa18.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 79571, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (68, 'ff88c1b.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 56227, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (69, 'd68c6e1b.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 68846, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (70, '26bbb539.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 41500, 'img/picture', '08/22/2013 12:09:51 pm');
INSERT INTO `tb_picture` VALUES (71, 'e0f2e8f0.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 45861, 'img/picture', '08/22/2013 12:11:07 pm');
INSERT INTO `tb_picture` VALUES (72, 'c44b2e8a.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 48879, 'img/picture', '08/22/2013 12:11:07 pm');
INSERT INTO `tb_picture` VALUES (73, 'ee1b8ac4.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 56364, 'img/picture', '08/22/2013 12:11:07 pm');
INSERT INTO `tb_picture` VALUES (74, '6f532ff7.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 51355, 'img/picture', '08/22/2013 12:11:07 pm');
INSERT INTO `tb_picture` VALUES (75, '681b10e8.jpg', 'ภาพบรรยากาศภายในงาน', 11, 1, 'image/jpeg', 45934, 'img/picture', '08/22/2013 12:11:07 pm');
INSERT INTO `tb_picture` VALUES (76, '0685bc65.jpg', 'บรรยากาศในห้องประชุม', 12, 1, 'image/jpeg', 46177, 'img/picture', '10/08/2013 10:36:49 am');
INSERT INTO `tb_picture` VALUES (77, '468f008d.jpg', 'บรรยากาศในห้องประชุม', 12, 1, 'image/jpeg', 59087, 'img/picture', '10/08/2013 02:06:48 pm');
INSERT INTO `tb_picture` VALUES (78, '15614ab.jpg', 'บรรยากาศในห้องประชุม', 12, 1, 'image/jpeg', 54801, 'img/picture', '10/08/2013 02:08:09 pm');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_re_center`
-- 

CREATE TABLE `tb_re_center` (
  `id` int(11) NOT NULL auto_increment,
  `re_center_code` varchar(255) collate utf8_unicode_ci NOT NULL,
  `re_center_en` text collate utf8_unicode_ci NOT NULL,
  `re_center_th` text collate utf8_unicode_ci NOT NULL,
  `director_en` text collate utf8_unicode_ci NOT NULL,
  `director_th` text collate utf8_unicode_ci NOT NULL,
  `address` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `tb_re_center`
-- 

INSERT INTO `tb_re_center` VALUES (1, 'TFP', 'Research Center in Thin Films Physics', 'ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง', '', 'ผศ.ดร.ขจรยศ อยู่ดี', 'ภาควิชาฟิสิกส์ คณะวิทยาศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย ถนนพญาไท แขวงวังใหม่ เขตปทุมวัน กรุงเทพฯ 10330');
INSERT INTO `tb_re_center` VALUES (2, 'PPP', 'Research Center in Particle Beams and Plasma Physics', 'ศูนย์วิจัยทางฟิสิกส์ของลำอนุภาคและพลาสมา', '', '', '');
INSERT INTO `tb_re_center` VALUES (3, 'NSP', 'Research Center in Nanoscale Physics', 'ศูนย์วิจัยทางนาโนสเกลฟิสิกส์', '', '', '');
INSERT INTO `tb_re_center` VALUES (4, 'IGP', 'Research Center in Integrated Physics', 'ศูนย์วิจัยทางฟิสิกส์บูรณาการ', '', '', '');
INSERT INTO `tb_re_center` VALUES (5, 'CTP', 'Research Center in Computational Physics', 'ศูนย์วิจัยทางฟิสิกส์คำนวณและทฤษฎี', '', '', '');
INSERT INTO `tb_re_center` VALUES (6, 'ThEP', 'Thailand Center of Excellence in Physics', 'สำนักงานกลางศูนย์ความเป็นเลิศด้านฟิสิกส์', '', '', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_re_lab`
-- 

CREATE TABLE `tb_re_lab` (
  `id` int(11) NOT NULL auto_increment,
  `re_lab_code` varchar(255) collate utf8_unicode_ci NOT NULL,
  `re_lab_en` text collate utf8_unicode_ci NOT NULL,
  `re_lab_th` text collate utf8_unicode_ci NOT NULL,
  `re_center_code` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `tb_re_lab`
-- 

INSERT INTO `tb_re_lab` VALUES (1, 'TFP/CU/1', 'Semiconductor Physics Research Laboratory', 'ห้องปฏิบัติการวิจัยฟิสิกส์สารกึ่งตัวนำ', 'TFP');
INSERT INTO `tb_re_lab` VALUES (2, 'TFP/KKU/2', 'Solid', 'ห้องปฏิบัติการวิจัยฟิสิกส์ของแข็ง', 'TFP');
INSERT INTO `tb_re_lab` VALUES (3, 'TFP/CMU/3', 'Applied Physics', 'ห้องปฏิบัติการวิจัยฟิสิกส์ประยุกต์', 'TFP');
INSERT INTO `tb_re_lab` VALUES (4, 'TFP/KMUTL/4', 'Thin Film', 'ห้องปฏิบัติการวิจัยเทคโนโลยีฟิล์มบาง', 'TFP');
INSERT INTO `tb_re_lab` VALUES (5, 'PPP/CMU/1', 'Plasma and Ion Beam', 'ห้องปฏิบัติการวิจัยพลาสมาและลำอนุภาค', 'PPP');
INSERT INTO `tb_re_lab` VALUES (6, 'PPP/CMU/2', 'Electron Femto', 'ห้องเฟมโตอิเล็กตรอน', 'PPP');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_slide`
-- 

CREATE TABLE `tb_slide` (
  `id` int(11) NOT NULL auto_increment,
  `slide_no` int(11) NOT NULL,
  `img_url` varchar(255) collate utf8_unicode_ci NOT NULL,
  `link_url` varchar(255) collate utf8_unicode_ci NOT NULL,
  `created` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modified` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `tb_slide`
-- 

INSERT INTO `tb_slide` VALUES (1, 1, '../slides/conf.kek_slide_400.png', '../views/pr-news.php?news_id=14', '2013-10-28 16:02:49', '2013-10-28 18:08:24');
INSERT INTO `tb_slide` VALUES (2, 2, '../slides/kekworkshop2_copy.jpg', 'sds', '2013-10-28 16:24:18', '2013-10-28 18:08:24');
INSERT INTO `tb_slide` VALUES (3, 3, '../slides/summer_korea_small.gif', 'dsvs', '2013-10-28 16:34:00', '2013-10-28 18:08:24');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_upload`
-- 

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `folder` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modified` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `tb_upload`
-- 

INSERT INTO `tb_upload` VALUES (1, '460650b3.doc', 'application/msword', 51712, 'upload', '07/16/2013 10:19:23 am');
INSERT INTO `tb_upload` VALUES (2, '15a34239.doc', 'application/msword', 51712, 'upload', '07/16/2013 10:29:20 am');
INSERT INTO `tb_upload` VALUES (3, '99987c40.pdf', 'application/pdf', 84939, 'upload', '07/16/2013 10:31:09 am');
INSERT INTO `tb_upload` VALUES (4, '14f3b457.doc', 'application/msword', 113152, 'upload', '07/16/2013 12:34:26 pm');
INSERT INTO `tb_upload` VALUES (5, '1a92ff5e.jpg', 'image/jpeg', 50671, 'upload', '07/16/2013 04:26:40 pm');
INSERT INTO `tb_upload` VALUES (6, '8b14ef80.jpg', 'image/jpeg', 67158, 'upload', '08/14/2013 09:46:50 am');
INSERT INTO `tb_upload` VALUES (7, '0af4c7c3.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 18384, 'upload', '08/20/2013 04:05:35 pm');
INSERT INTO `tb_upload` VALUES (8, '86f1101e74.xls', 'application/vnd.ms-excel', 93184, 'upload', '08/20/2013 04:11:54 pm');
INSERT INTO `tb_upload` VALUES (9, '6366fef2f3.xls', 'application/vnd.ms-excel', 36352, 'upload', '2013-08-28 11:01:41');
INSERT INTO `tb_upload` VALUES (10, '4f8d79e6.xls', 'application/vnd.ms-excel', 36352, 'upload', '2013-08-28 15:51:04');
INSERT INTO `tb_upload` VALUES (11, '7dff1e1e47.jpg', 'image/jpeg', 154009, 'upload', '2013-09-18 13:13:51');
INSERT INTO `tb_upload` VALUES (12, 'b003b8838f.sql', 'application/octet-stream', 134001, 'upload', '2013-10-16 16:24:36');
INSERT INTO `tb_upload` VALUES (13, 'e6018cd.gif', 'image/gif', 43, 'upload', '2013-10-22 12:21:12');
INSERT INTO `tb_upload` VALUES (14, 'eafa813295.doc', 'application/msword', 109568, 'upload', '2013-10-22 14:11:55');
INSERT INTO `tb_upload` VALUES (15, 'e42b6154de.doc', 'application/msword', 109568, 'upload', '2013-10-22 14:12:56');
INSERT INTO `tb_upload` VALUES (16, 'nano-crystal-glass.doc', 'application/msword', 109568, 'upload', '2013-10-22 16:18:42');
INSERT INTO `tb_upload` VALUES (17, '06fb5bd931.doc', 'application/msword', 109568, 'upload', '2013-10-22 16:19:57');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_user`
-- 

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `tb_user`
-- 

INSERT INTO `tb_user` VALUES (1, 'admin', '2013', 1, '2013-09-26 10:10');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_weblink`
-- 

CREATE TABLE `tb_weblink` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `url` varchar(255) collate utf8_unicode_ci NOT NULL,
  `category` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `tb_weblink`
-- 

