<?php
require_once '../system/system.php';
doc_head('ข่าวพิเศษ');
?>
<style>
    .img-box {
        text-align: center;
        max-width: 700px;
        margin: 0 auto;
    }
    .img-box .img-responsive{
        margin: 5px auto;
    }
    .img-box p span {
        font-weight: bold;
        font-style: italic;
    }
    .img-box p small {
        word-break: break-all;
    }
</style>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="bs-example">
            <h2 style="text-align: center;">รางวัลโนเบลฟิสิกส์ประจำปี  2013</h2>
            <p>&nbsp;</p>

            <div class="img-box">
                <img class="img-responsive" src="../images/131008_SCI_HiggsEnglert.jpg.CROP.promo-mediumlarge.jpg">
                <p>
                    <span>ศาสตราจารย์ Francois Englert (ซ้าย) และ ศาสตราจารย์ Peter W. Higgs (ขวา)</span>
                    <br>
                    <small>(ขอบคุณภาพจาก http://www.slate.com/articles/health_and_science/science/2013/10/higgs_nobel_prize_importance_who_should_have_gotten_the_award.html)</small>
                </p>
            </div>
            <p>&nbsp;</p>

            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Royal Swedish Academy of Sciences ได้ประกาศที่กรุงสตอกโฮล์ม ประเทศสวีเดน เมื่อวันที่ 8 ตุลาคมที่ผ่านมาว่า รางวัลโนเบลฟิสิกส์ประจำปี 2013 ได้ตัดสินมอบให้แก่นักฟิสิกส์ทฤษฎี 2 ท่านคือ ศาสตราจารย์ Francois Englert กับ ศาสตราจารย์ Peter W. Higgs ด้วยเหตุผล “สำหรับการค้นพบเชิงทฤษฎีถึงกลไกที่ทำให้เราเข้าใจจุดกำเนิดของมวลของอนุภาคมูลฐาน ซึ่งได้รับการยืนยันแล้วเมื่อไม่นานมานี้จากผลการทดลองของระบบหัววัด ATLAS กับ ระบบหัววัด CMS ที่เครื่องเร่งอนุภาค Large Hadron Collider (LHC) ณ ศูนย์วิจัย CERN”
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                การมีตัวตนอยู่ของดวงดาว มนุษย์ หรือแม้แต่เชื้อจุลินทรีย์ ล้วนเกี่ยวข้องกับคำถามพื้นฐานที่ว่าอนุภาคมีมวล (mass) ได้อย่างไร ? กล่าวคือทำไมอนุภาคบางชนิดเช่นควาร์ก (quark) ซึ่งเป็นอนุภาคองค์ประกอบของอนุภาคโปรตอนและนิวตรอน จึงมีมวล แต่ทำไมอนุภาคอย่างเช่นโฟตอน (photon) ซึ่งเป็นอนุภาคองค์ประกอบของแสง จึงไม่มีมวล คำถามนี้ท้าทายนักฟิสิกส์เสมอมา
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ในปี ค.ศ. 1964 ศาสตราจารย์ Englert กับ Robert Brout ได้ร่วมกันเสนอแนวคิดต่อคำตอบของปัญหานี้ไว้ในบทความทางวิชาการชื่อ Broken Symmetry and the Mass of Gauge Vector Mesons ตีพิมพ์ในวารสาร Physical Review Letters 13(9):321  ในเวลาไล่เลี่ยกันนั้น แต่ใช้กระบวนการแก้ปัญหาที่ต่างกัน ศาสตราจารย์ Higgs ก็ได้เสนอแนวคิดต่อปัญหาเดียวกันนี้ในบทความชื่อ Broken Symmetries and the Masses of Gauge Bosons ตีพิมพ์ในวารสาร Physical Review Letters 13(16):508   แล้วก็ตามติดมาด้วยผลงานของนักวิจัยกลุ่มที่ 3 ที่ใช้กลวิธีอีกแบบ คือ Gerald Guralnik, Carl Hagen และ Tom Kibble ที่บทความชื่อ Global Conservation Laws and Massless Particles ตีพิมพ์ในวารสาร Physical Review Letters 13(20):585 แต่เป็นศาสตราจารย์ Higgs ที่ในช่วงต้นของทศวรรษปี ค.ศ. 1970 มีผลงานทั้งการตีพิมพ์บทความวิชาการด้านนี้และการไปร่วมประชุมทางวิชาการอย่างต่อเนื่องโดดเด่นกว่าใครๆ จึงทำให้ตอนแรกๆ เมื่อจะเอ่ยถึงกลไกที่ทำให้เกิดมวลของอนุภาค คนในวงการจึงมักเรียกกันทีเล่นทีจริงว่า “Higgs mechanism” และเรียกขานอนุภาคใหม่ที่มีบทบาทกับกลไกนี้ว่า “Higgs boson” แต่แล้วก็ได้พัฒนาจนกลายเป็นเรื่องจริงจังในที่สุด
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                เพื่อพิสูจน์แนวคิดดังกล่าว จำต้องหาอนุภาค Higgs boson ให้พบ ภารกิจหลักประการหนึ่งของโครงการ LHC ที่มีมูลค่า 1.3 แสนล้านบาท (ร่วมลงขันโดย 111 ประเทศ) ของศูนย์วิจัย CERN ที่ประเทศสวิสเซอร์แลนด์ก็คือค้นหาอนุภาคนี้ และในที่สุด หลังจากรอคอยมาร่วมครึ่งศตวรรษ ทีมนักวิจัยของ CERN ก็ได้ประกาศการค้นพบเบื้องต้นเมื่อตอนต้นเดือนกรกฎาคมปีที่แล้ว ซึ่งในวันนั้นศาสตราจารย์ Higgs กับ ศาสตราจารย์ Englert เป็นแขกรับเชิญพิเศษร่วมอยู่ในวินาทีประวัติศาสตร์นั้นด้วย ศาสตราจารย์ Higgs ดีใจมาก กล่าวทั้งน้ำตาคลอเบ้าว่า “It is an incredible thing that it has happened in my lifetime.” ต่อมาเมื่อตอนต้นปีนี้ CERN ได้ประกาศยืนยันการค้นพบอีกครั้งหลังได้วิเคราะห์อย่างละเอียดแล้ว
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ศาสตราจารย์ Higgs เป็นชาวอังกฤษ ปัจจุบันอายุ 84 ปี เป็นศาสตราจารย์เกียรติคุณประจำ University of Edinburge  ส่วนศาสตราจารย์ Englert เป็นชาวเบลเยี่ยม ปัจจุบันอายุ 81 ปี เป็นศาสตราจารย์เกียรติคุณประจำ Universite Libre de Bruxelles ที่กรุงบรัสเซลล์ ประเทศเบลเยี่ยม    เนื่องด้วยรางวัลโนเบลมีเงื่อนไขว่าจะมอบให้กับผู้ที่ยังคงมีชีวิตอยู่เท่านั้น และจะไม่ให้เกิน 3 คน / ครั้ง ดังนั้นจึงเป็นที่น่าเสียดายว่า รางวัลนี้ไม่ได้มีชื่อของศาสตราจารย์ Brout ด้วย เพราะท่านเสียชีวิตไปก่อนแล้วในปีค.ศ. 2011 และบางท่านมีความเห็นว่าเหตุผลประการหนื่งที่คณะของ ศาสตราจารย์ Kibble ไม่มีชื่อร่วมด้วยเพราะจะทำให้จำนวนผู้ที่ได้รับรางวัลเกิน 3 ชื่อ
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ผลงานนี้ทำให้ทฤษฎี Standard Model ซึ่งเป็นทฤษฎีด้านอนุภาคมูลฐานที่ประสบความสำเร็จมากที่สุดขณะนี้มีความสมบูรณ์ขึ้นมาก แต่ก็ยังคงมีคำถามปลายเปิดอยู่อีกไม่น้อย เช่น อันตรกิริยาของแรงดึงดูดระหว่างมวล (gravitational interactions) เกิดขึ้นได้อย่างไร หรือ Standard Model คิดให้อนุภาคนิวตริโนไม่มีมวล แต่ผลการทดลองเมื่อเร็วๆนี้พบว่าแท้จริงแล้วนิวตริโนมีมวล จะก้าวข้ามความขัดแย้งนี้อย่างไร เป็นต้น  ……………………… ภารกิจของนักฟิสิกส์จึงยังคงไม่สิ้นสุด
            </p>
            <p>&nbsp;</p>

            <div class="img-box">
                <img class="img-responsive" src="../images/image.jpg">
                <p>            
                    <span>ศาสตราจารย์ Thomas W. B. Kibble ปัจจุบันอายุ 81 ปี และเป็นศาสตราจารย์เกียรติคุณของ Imperial College London</span>
                    <br>
                    <small>(ขอบคุณภาพจาก http://www.myscience.org.uk/wire/tom_kibble_receives_the_dirac_medal_for_higgs_theory-2013-imperial/image_h200.jpg)</small>
                </p>
            </div>
            <p>&nbsp;</p>

            <div class="img-box">
                <img class="img-responsive" src="../images/LHC close-up.jpg">
                <p>            
                    <span>ระบบหัววัด ATLAS หนัก 7,000 ตัน มีมูลค่าประมาณ 1.5 หมื่นล้านบาท</span>
                    <br>
                    <small style="text-align: center;; word-break: break-all;">(ขอบคุณภาพจาก https://news.brown.edu/pressreleases/2010/02/lhc)</small>
                </p>
            </div>
            <p>&nbsp;</p>

            <div class="img-box">
                <img class="img-responsive" src="../images/CMS.jpg"><p></p>
                <p>
                    <span>ระบบหัววัด CMS หนัก 12,500 ตัน มีมูลค่าประมาณ 1.4 หมื่นล้านบาท</span>
                    <br>
                    <small style="text-align: center;; word-break: break-all;">(ขอบคุณภาพจาก http://news.medill.northwestern.edu/chicago/news.aspx?id=177344&amp;print=1)</small>
                </p>
            </div>
            <p>&nbsp;</p>


            <h3>เอกสารแนะนำอ่านประกอบ</h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1. นรพัทธ์ ศรีมโนภาษ, “LHC และการทดลองที่เกี่ยวข้อง : เครื่องมือไขปริศนาฟิสิกส์อนุภาคถึงจักรวาลวิทยา”, วารสารฟิสิกส์ไทย ปีที่ 25 ฉบับที่ 2 : มิถุนายน – สิงหาคม 2551, หน้า 16 - 20
            </p>
            <p>&nbsp;</p>


        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script type='text/javascript'>

        $(function(){
            
        });

    </script>
</body>
</html>
