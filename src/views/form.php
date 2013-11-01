<?php
require_once '../system/system.php';
doc_head('แบบฟอร์มต่างๆ');
?>
<style>
    .form-link{
        cursor: pointer;
        background-color: #cccccc; 
        height: 40px; 

    }
    .form-link:hover{
        color: black;
    }
</style>
<script>
    $(function(){
        $('#research-form').click(function(){
            $('#show-form').load("<?php controll('show-research'); ?>");
        });
        $('#fellowship-form').click(function(){
            $('#show-form').load("<?php controll('show-fellowship'); ?>");
        });
        $('#supply-form').click(function(){
            $('#show-form').load("<?php controll('show-supply'); ?>");
        });
        $('#financial-form').click(function(){
            $('#show-form').load("<?php controll('show-financial'); ?>");
        });
        $('#administration-form').click(function(){
            $('#show-form').load("<?php controll('show-administration'); ?>");
        });
    });
</script>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>            
        <div class="row" id="show-form">
            <h2 class="text-center">แบบฟอร์มต่างๆ</h2>
            <table style="width: 250px; margin: 10px auto;">
                <tr>
                    <td id="research-form" class="text-center form-link">แบบฟอร์ม : ฝ่ายงานวิจัยและนวัตกรรม</td>
                </tr>
            </table>
            <table style="width: 250px; margin: 10px auto;">
                <tr>
                    <td id="fellowship-form" class="text-center form-link">แบบฟอร์ม : ฝ่ายทุนบัณฑิตศึกษา</td>
                </tr>
            </table>
            <table style="width: 250px; margin: 10px auto;">
                <tr>
                    <td id="supply-form" class="text-center form-link">แบบฟอร์ม : งานพัสดุ และครุภัณฑ์</td>
                </tr>
            </table>
            <table style="width: 250px; margin: 10px auto;">
                <tr>
                    <td id="financial-form" class="text-center form-link">แบบฟอร์ม : ฝ่ายการเงินและบัญชี</td>
                </tr>
            </table>
            <table style="width: 250px; margin: 10px auto;">
                <tr>
                    <td id="administration-form" class="text-center form-link">แบบฟอร์ม : ฝ่ายธุรการ และอื่นๆ</td>
                </tr>
            </table>
        </div>
        <p>&nbsp;</p>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->
</body>
</html>