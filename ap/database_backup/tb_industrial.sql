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

INSERT INTO `tb_industrial` VALUES (1, 'รางวัล การประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรม ประจำปี 2010 (Price for Industrial Applications of Physics)', '&lt;p&gt;รางวัลการประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรมได้ริเริ่มขึ้นในปี 1977 โดย American Institute of Physics (AIP) เพื่อเป็นการประชาสัมพันธ์คุณค่าของการวิจัยฟิสิกส์ต่อภาคอุตสาหกรรม เพื่อเป็นการให้กำลังใจงานค้นคว้าวิจัยฟิสิกส์ที่มีประโยชน์ต่ออุตสาหกรรม และเพื่อกระตุ้นให้นักศึกษาประจักษ์ถึงความสำคัญของวิชาฟิสิกส์ในงานวิจัยของภาคอุตสาหกรรม&lt;/p&gt;\r\n\r\n&lt;p&gt;ปัจจุบันเป็นรางวัลที่มี 2 เจ้าภาพที่ทำหน้าที่สลับกัน คือ ระหว่าง AIP กับ American Physical Society (APS) แต่มีสปอนเซอร์หลักรายเดียว คือ บริษัท เยนเนอรัลมอเตอร์ โดยในปีที่ AIP เป็นเจ้าภาพจะให้รางวัลแก่นักวิจัย หรือ คณะนักวิจัยที่ประสบความสำเร็จในการพัฒนาเทคโนโลยีไม่ว่าจะเป็นในแง่ผลิตภัณฑ์, กระบวนการ หรืออุปกรณ์เครื่องมือที่ได้พิสูจน์แล้วว่ามีประโยชน์ต่อภาคอุตสาหกรรมจริง ส่วนในปีถัดไปที่ APS เป็นเจ้าภาพจะให้รางวัลแก่นักวิจัยหรือคณะนักวิจัยที่มีผลงานวิจัยที่มีศักยภาพโดดเด่นที่จะประสบความสำเร็จในอนาคต รางวัลที่ได้รับคือ เงินสด 10,000 เหรียญสหรัฐ ค่าเดินทางไปรับรางวัล และใบประกาศเกียรติคุณ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;http://cnxlove.com/thepcenter/upload/industrial/street.jpg&quot; style=&quot;background-color:rgb(239, 244, 255); border:5px solid rgb(239, 244, 255); box-sizing:border-box; color:rgb(0, 0, 0); float:left; font-family:segoe ui semilight,open sans,verdana,arial,helvetica,sans-serif; font-size:15px; height:auto; line-height:18.65625px; width:130px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;สำหรับในปี 2010 นี้ ได้ประกาศผลออกมาแล้วว่าผู้ที่ได้รับรางวัลมีคนเดียว คือ โรเบิร์ต สตรีท (Robert Street) จากผลงานการเป็นผู้บุกเบิกศาสตร์และเทคโนโลยีของซิลิกอนอสัณฐานที่เจือไฮโดรเจน (hydrogenated amorphous silicon) รวมถึงการพัฒนาระบบแสดงภาพจากรังสีเอ๊กซ์แบบจอแบน&lt;/p&gt;\r\n\r\n&lt;p&gt;โรเบิร์ต หรือที่เพื่อน ๆ เรียกว่า &amp;quot;บ๊อบ&amp;quot; ได้รับปริญญาเอกจากมหาวิทยาลัยเคมบริดจ์ ในปี 1971 จากงานศึกษาวิจัยเรื่องฟิสิกส์ของแก้วคัลโคจีนายด์ (chalcogenide glasses) หลังจากนั้นได้ไปเป็นนักวิจัยหลังปริญญาเอก (postdoc) ที่มหาวิทยาลัยเชฟฟิลด์ แล้วไปเป็นนักวิจัยเยี่ยมเยือน (visiting scientist) ที่สถาบันวิจัยแม็กพลังค์ที่เมืองสตุตการ์ด ประเทศเยอรมนี ต่อมาในปี 1976 ได้ไปร่วมงานกับ Palo Alto Research Center (PARC) ของบริษัท Xerox ที่แคลิฟอร์เนีย สหรัฐอเมริกา&lt;/p&gt;\r\n\r\n&lt;p&gt;ที่ PARC บ๊อบได้เริ่มค้นคว้าวิจัยเรื่องการเคลื่อนย้ายของอิเล็กตรอน, ความไม่สมบูรณ์ (defects), การกลับมารวมตัวกัน (recombination) และบทบาทของไฮโดรเจนในซิลิกอนอสัณฐาน (amorphous silicon หรือ a-Si) จนในที่สุดได้เขียนเป็นตำราเกี่ยวกับคุณสมบัติของ a-Si ในช่วงปลายทศวรรษปี 1980 บ๊อบได้เริ่มวิจัยค้นคว้าเพื่อพัฒนาระบบแสดงภาพจากรังสีเอ๊กซ์แบบจอแบนโดยการประยุกต์ใช้ทรานซิสเตอร์และโฟโต้ไดโอดที่สร้างจากฟิมล์บาง a-Si จนในที่สุดในปี 1996 PARC ได้ตั้งบริษัทลูกขึ้นมาชื่อ &amp;quot;dpiX&amp;quot; เพื่อทำธุรกิจด้านเทคโนโลยีเอ๊กซ์เรย์ดิจิตอลซึ่งได้ครองตลาดด้านระบบแสดงภาพเอ๊กเรย์ทางการแพทย์มานับตั้งแต่นั้น&lt;/p&gt;\r\n\r\n&lt;p&gt;ปัจจุบันบ๊อบยังคงให้ความสำคัญกับการวิจัยพัฒนาศาสตร์และเทคโนโลยีที่เกี่ยวข้องกับการแสดงภาพจากรังสีแบบจอแบน รวมถึงการพัฒนาทรานซิสเตอร์จากฟิมล์บางของเซมิคอนดักเตอร์สารอินทรีย์ การพิมพ์ลายวงจรด้วยลำเจ็ท จอภาพที่โค้งงอได้ ลวดนาโนซิลิกอน และเซลล์สุริยะที่มีโครงสร้างแบบใหม่ บ๊อบได้เคยตีพิมพ์ผลงานวิจัยมาแล้วประมาณ 400 เรื่อง และมีผลงานจดสิทธิบัตร 60 ชิ้น&lt;/p&gt;\r\n\r\n&lt;p&gt;เรียบเรียงจาก&amp;nbsp;&lt;a href=&quot;http://www.aip.org/industry/prize&quot; style=&quot;box-sizing: border-box; font-family: &#039;Segoe UI&#039;, &#039;Open Sans&#039;, Verdana, Arial, Helvetica, sans-serif; font-size: 11pt; color: rgb(46, 146, 207); text-decoration: none; line-height: 13pt;&quot; target=&quot;_blank&quot;&gt;http://www.aip.org/industry/prize&lt;/a&gt;&lt;/p&gt;\r\n', '10/13/2010', '08/25/2013 04:22:02 pm');
INSERT INTO `tb_industrial` VALUES (2, 'รางวัล การประยุกต์ด้านฟิสิกส์เพื่ออุตสาหกรรม ประจำปี 2012 (Price for Industrial Applications of Physics)', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;อีริค ฟูลเลอร์ตัน เรียนจบปริญญาตรีสาขาฟิสิกส์จาก Harvey Mudd College ที่เมือง Claremont มลรัฐแคลิฟอร์เนีย เมื่อปีค.ศ. 1984 แล้วไปจบปริญญาเอกสาขาฟิสิกส์จาก University of California วิทยาเขต San Diego ในปีค.ศ. 1991 โดยหัวข้อวิทยานิพนธ์นั้นเกี่ยวกับการปลูกผลึกและการหาลักษณะเฉพาะของซูเปอร์แลตทิซแบบโลหะ หลังจากนั้นได้ไปเป็นนักวิจัยหลังปริญญาเอก (postdoctoral fellow) อยู่กับกลุ่มวิจัยฟิล์มบางแม่เหล็ก ในแผนกวัสดุศาสตร์ที่ Argonne National Laboratory ต่อมาในปีค.ศ. 1993 ได้ตำแหน่งประจำเป็นนักวิทยาศาสตร์ที่เชี่ยวชาญด้านฟิล์มแม่เหล็กชนิดคู่ควบ (coupled magnetic films&lt;/p&gt;\r\n\r\n&lt;p&gt;ERIC FULLERTON&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;http://cnxlove.com/thepcenter/upload/industrial/fullerton.jpg&quot; style=&quot;border:5px solid rgb(239, 244, 255); box-sizing:border-box; float:left; height:auto; width:130px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;ในปีค.ศ. 1997 ได้ย้ายไปทำงานเป็นนักวิจัยอยู่ที่ศูนย์วิจัยอัลมาเด็นของ IBM (IBM Almaden Research Center) จนถึงปีค.ศ. 2003 ซึ่งได้ย้ายไปทำงานกับ Hitachi Global Storage Technologies (HGST) ในตำแหน่งผู้จัดการของกลุ่มวิจัยด้านพื้นฐานของวัสดุที่มีโครงสร้างนาโน (Fundamentals of Nanostructured Materials) งานวิจัยของ ดร.อีริคทั้งที่ IBM และ HGST ยังคงโฟกัสอยู่ที่เรื่องวัสดุแม่เหล็กเพื่อการบันทึกชนิดคู่ควบแบบแลกเปลี่ยน (exchanged-coupled magnetic recording media) เพื่อการบันทึกที่มีความหนาแน่นสูงในสารแม่เหล็ก ในปีค.ศ. 2007 ดร. อีริค ได้ไปรับตำแหน่งศาสตราจารย์ทางวิศวกรรมไฟฟ้าและคอมพิวเตอร์และวิศวกรรมนาโนที่สถาบันที่เรียนจบมาคือที่ UC San Diego และยังดำรงผู้อำนวยการของศูนย์วิจัยด้านการบันทึกด้วยแม่เหล็ก (Center of Magnetic Recording Research) ด้วย ศาสตราจารย์ อีริคมีผลงานตีพิมพ์มากกว่า 240 เรื่องและถือครองสิทธิบัตรที่จดในสหรัฐอเมริกาถึง 50 ชิ้น โดยมีอยู่ชิ้นหนึ่งที่ได้รับการคัดเลือกโดยวารสาร Technology Review Magazine ของ MIT ให้เป็น &amp;ldquo; หนึ่งในห้าสิทธิบัตรที่น่าจับตามองประจำปี 2001&amp;rdquo; นอกจากนี้ศาสตราจารย์อีริคยังเคยได้รับรางวัลและการยกย่องจากสถาบันที่มีชื่อเสียงอีกมากมาย&lt;/p&gt;\r\n\r\n&lt;p&gt;เรียบเรียงจาก&amp;nbsp;&lt;a href=&quot;http://www.aip.org/industry/prize&quot; style=&quot;box-sizing: border-box; font-family: &#039;Segoe UI&#039;, &#039;Open Sans&#039;, Verdana, Arial, Helvetica, sans-serif; font-size: 11pt; color: rgb(46, 146, 207); text-decoration: none; line-height: 13pt;&quot; target=&quot;_blank&quot;&gt;http://www.aip.org/industry/prize&lt;/a&gt;&lt;/p&gt;\r\n', '05/01/2012', '08/25/2013 04:34:05 pm');
