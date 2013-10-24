<?php
require_once '../system/system.php';
notlogin_header('index.php');
doc_head('แก้ไขสไลด์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="bs-example">
            <table>
                <tr>
                    <th>อันดับ</th>
                    <th>URL</th>
                    <th>ภาพตัวอย่าง</th>
                </tr>
                <tr>
                    <td>อันดับ</td>
                    <td>URL</td>
                    <td>ภาพตัวอย่าง</td>
                </tr>
            </table>

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
