<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    $id = $_POST['gallery_id'];
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
    $modified = date("Y-m-d H:i:s");
    $sql = "REPLACE INTO tb_gallery VALUES ($id, '$title', '$detail' , '$modified');";
    @mysql_query($sql) or die(mysql_error());

    header("Location: gallery.php?gal_id=$id");
    exit();
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
} else {
    header("Location: home.php");
    exit();
}

$sql = "SELECT * FROM tb_gallery WHERE id = $edit_id;";
$result = mysql_query($sql);
$g = mysql_fetch_array($result);

doc_head('Edit Gallery');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center">Add Gallery</h2>

                <form class="form-horizontal" role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="gallery_id" value="<?php echo $g['id']; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อแกลอรี</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="title" value="<?php echo $g['title'] ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">คำอธิบาย /รายละเอียด</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="2" name="detail"><?php echo $g['detail']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" value="Edit" class="btn btn-default"> <a href="gallery.php" style="font-weight: bold;">Cancel</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
