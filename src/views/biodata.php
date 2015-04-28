<?php
require_once '../system/system.php';
doc_head('กรอกข้อมูลนักฟิสิกส์ / นักวิจัย - ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

<style>
    .click-link{
        color:green;
    }
    .click-link:hover {
        color: #039;
    } 
</style>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">กรอกข้อมูลนักฟิสิกส์ / นักวิจัย</h2>

                <ol>
                    <li>
                        <h3>กรอกข้อมูลแบบ online <a target="_blank" href="http://thep-center.org/researcher" title="ระบบจัดการฐานข้อมูลนักวิจัย (ThEP Researcher Database Management System)"><span class="click-link"><< Click >></span></a></h3>
                        <p><a target="_blank" href="http://thep-center.org/researcher">ระบบจัดการฐานข้อมูลนักวิจัย (ThEP Researcher Database Management System)</a></p>
                        <p style="margin-top: 10px;">สามารถขอ username และ password สำหรับเข้าสู่ระบบเพื่อกรอกข้อมูลแบบ  online</p>
                        <address>
                            โดยติดต่อผู้ดูแลระบบ: ธนพล สุประดิษฐ์พงศ์ <br>
                            Email: thanapol@thep-center.org<br>                        
                            โทรศัพท์: 053-942-650-3 ต่อ 107<br>                            
                            โทรศัพท์มือถือ: 089-191-6601<br>
                            โทรสาร (FAX): 053-222774<br>
                        </address>
                        <strong>หมายเหตุ</strong> หากต้องการความรวดเร็ว ให้ส่งชื่อ-นามสกุล เป็นภาษาอังกฤษ พร้อมอีเมลที่ติดต่อได้ มายังอีเมล thanapol@thep-center.org แล้วผู้ดูแลระบบจะส่ง username และ password ให้ท่านทางอีเมล ภายใน 1 - 2 วันทำการ
                        <p>&nbsp;</p>
                    </li>
                    <li><h3>กรอกข้อมูลแบบ offline</h3>
                        หากท่านไม่สะดวกกรอกข้อมูลแบบ online สามารถกรอกข้อมูลแบบ offline แทนได้<br>
                        โดยดาวน์โหลดเอกสาร แบบฟอร์มข้อมูลนักฟิสิกส์ / นักวิจัย (ThEP-CV-01) 
                        <a class="click-link" style="text-align: center; font-size: 16px; font-weight: bold;" title="Click to download" href="../files/form_research/ThEP-CV-01_2015_03_23.docx">
                            << Click เพื่อดาวน์โหลด >>
                        </a> เพื่อนำไปกรอกข้อมูล<br>
                        เมื่อกรอกข้อมูลเสร็จแล้วให้ส่งมาที่<br>
                        Email: thanapol@thep-center.org<br>
                        หรือ โทรสาร (FAX): 053-222774<br>
                        หรือ ทางไปรษณีย์: ธนพล สุประดิษฐ์พงศ์ ศูนย์ความเป็นเลิศด้านฟิสิกส์ ตู้ ปณ.70 มหาวิทยาลัยเชียงใหม่ อ.เมือง จ.เชียงใหม่ 50202                       

                    </li>
                </ol>
            </div>

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
