<?php
require_once '../system/system.php';



if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
}

$sql = "SELECT * FROM tb_picture WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            <h2 class="text-center">_blank</h2>
            <form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $p['id'] ?>">
                
                <div class="form-group">
                    <label>ชื่อภาพ</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $p['name'] ?>">
                </div>
                
                <div class="form-group">
                    <label>Caption / คำอธิบาย</label>
                    <textarea class="form-control" name="name" rows="2"><?php echo $p['caption'] ?></textarea>
                </div>
                
                <input type="submit" value="Submit" class="btn btn-default"> <a href="gallery.php" style="font-weight: bold;">Cancel</a>

            </form>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
