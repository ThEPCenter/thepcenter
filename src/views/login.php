<?php
require_once '../system/system.php';

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>        
        <div class="bs-example">
            <h2>Login</h2>
            <form role="form" name="form1" method="post" action="<?php controll('login'); ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Log in</button>                
            </form>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->
</body>
</html>