<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">กรอกข้อมูลนักฟิสิกส์ / นักวิจัย</h2>

                <ol>
                    <li>
                        <h3>กรอกข้อมูลแบบ online</h3>
                        <div class="row">
                            <div class="col-md-4" style="border: solid 1px #333;">
                                <form method="post" action="http://thep-center.org/researcher/index.php/login/process">
                                    <p><strong>Username:</strong> <input type="text" required="" name="username"></p>
                                    <p style="margin-top: 12px;"><strong>Password:</strong> <input type="password" required name="password"></p>
                                    <p style="margin-top: 10px; margin-bottom: 10px;"><button type="submit" class="btn btn-default">เข้าสู่ระบบ</button></p>
                                </form>
                            </div>

                        </div>
                        <p style="margin-top: 10px;">สามารถขอ username และ password สำหรับเข้าสู่ระบบเพื่อกรอกข้อมูลแบบ  online</p>
                        <address>
                            โดยติดต่อผู้ดูแลระบบ: สุทธิพงษ์ ศรีกอก<br>
                            Email: suttipong@thep-center.org<br>                        
                            โทรศัพท์: 053-942-650-3 ต่อ 108<br>                            
                            โทรศัพท์มือถือ: 086-428-8048<br>
                            โทรสาร (FAX): 053-222774<br>
                        </address>
                        <strong>หมายเหตุ</strong> หากต้องการความรวดเร็ว ให้ส่งชื่อ-นามสกุล เป็นภาษาอังกฤษ พร้อมอีเมลที่ติดต่อได้ มายังอีเมล suttipong@thep-center.org แล้วผู้ดูแลระบบจะส่ง username และ password ให้ท่านทางอีเมล ภายใน 1 - 2 วันทำการ
                        <p>&nbsp;</p>
                    </li>
                    <li><h3>กรอกข้อมูลแบบ offline</h3>
                        หากท่านไม่สะดวกกรอกข้อมูลแบบ online สามารถกรอกข้อมูลแบบ offline แทนได้<br>
                        โดยดาวน์โหลดเอกสาร <a style="text-align: center;" href="../files/form_research/ThEP-CV-01_2015_01_30.docx">
                            แบบฟอร์มข้อมูลนักฟิสิกส์ / นักวิจัย (ThEP-CV-01) (<<< click เพื่อดาวน์โหลด)
                        </a> เพื่อนำไปกรอกข้อมูล<br>
                        เมื่อกรอกข้อมูลเสร็จแล้วให้ส่งมาที่<br>
                        Email: suttipong@thep-center.org<br>
                        หรือ โทรสาร (FAX): 053-222774<br>
                        หรือ ทางไปรษณีย์: สุทธิพงษ์ ศรีกอก ศูนย์ความเป็นเลิศด้านฟิสิกส์ ตู้ ปณ.70 มหาวิทยาลัยเชียงใหม่ อ.เมือง จ.เชียงใหม่ 50202                       

                    </li>
                </ol>
            </div>

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
