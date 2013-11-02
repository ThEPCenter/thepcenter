<?php
require_once '../system/system.php';
login_header('index.php');

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>        
        <div class="row">
            <h2 class="text-center">Login</h2>            
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-4">
                <?php get_controll('login-form'); ?>                    
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>        

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->
</body>
</html>