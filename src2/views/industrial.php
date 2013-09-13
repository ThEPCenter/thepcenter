<?php
require_once '../system/system.php';
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>       
</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-xs-6 col-md-4">                
                <div class="bs-example bs-example-tabs">
                    <p style="font-size: 20px; text-align: center;">สารสนเทศสำหรับ<br />ผู้ประกอบการ</p>

                    <ul>
                        <li class="sticker sticker-color-orange"><a href="../../upload/industrial/Board.pdf" target="_blank">คณะกรรมการที่ปรึกษา<br />ภาคการผลิตและบริการ</a></li>
                        <li class="sticker sticker-color-orangeDark"><a href="../../upload/industrial/Message.pdf" target="_blank">สารจากผู้อำนวยการศูนย์ฯ</a></li>
                        <li class="sticker sticker-color-green"><a href="../../upload/industrial/Members.pdf" target="_blank">"ทำเนียบ" ห้องปฏิบัติการ<br />ทางฟิสิกส์</a></li>
                        <li class="sticker sticker-color-pink"><a href="../../upload/industrial/thep.pdf" target="_blank">ตัวอย่างงานวิจัย</a></li>
                        <li class="sticker sticker-color-red dropdown" data-role="dropdown">
                            <a>การร่วมบริจาคทุนเพื่อศูนย์วิจัย</a>
                            <ul class="sub-menu light sidebar-dropdown-menu" style="display: none;">
                                <li><a href="../upload/industrial/STI-Policy.pdf" target="_blank">STI</a></li>
                                <!--
                                <li><a href="">To Do List1</a></li>
                                <li><a href="">To Do List2</a></li>
                                <li><a href="">To Do List3</a></li>
                                -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-md-8">
                <div class="bs-example">
                    <?php
                    $sql = "SELECT * FROM tb_industrial ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                            <div>
                                <h3>' . htmlspecialchars_decode($p['title']) . '</h3>
                                <p class="fg-color-green"><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content']) . '
                            </div>
                            <p>&nbsp;</p>
                            <hr>
                    ';
                        }
                    } else {
                        echo "ขออภัย ไม่พบข้อมูล";
                    }
                    get_includes('footer');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</body>
</html>