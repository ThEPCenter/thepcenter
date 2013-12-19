<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    $id = $_POST['id'];
    $gallery_id = $_POST['gallery_id'];
    $file_name = htmlspecialchars($_POST['file_name'], ENT_QUOTES);
    $caption = htmlspecialchars($_POST['caption'], ENT_QUOTES);
    $modified = date("Y-m-d H:t:s");

    $sql = "UPDATE tb_picture SET name = '$file_name', caption = '$caption', modified = '$modified' WHERE id = $id;";

    @mysql_query($sql) or die(mysql_error());

    header("Location: gallery.php?gal_id=$gallery_id");
    exit();
}


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
            <h2 class="text-center header-type">แก้ไขข้อมูลภาพ <span style="color: #333;"><?php echo $p['name']; ?></span></h2>
            <form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $p['id'] ?>">
                <input type="hidden" name="gallery_id" value="<?php echo $p['gallery_id'] ?>">

                <p class="text-center"><img style="max-width: 100%; height: auto;" src="../../upload02/img/picture/<?php echo $p['name']; ?>"></p>
                <p>&nbsp;</p>
                
                <div class="form-group">
                    <label>ชื่อไฟล์ภาพ</label>
                    <input class="form-control" type="text" name="file_name" value="<?php echo $p['name'] ?>">
                </div>

                <div class="form-group">
                    <p><strong>URL ของไฟล์ภาพ</strong></p>
                    <p style="background-color: #eee;" class="p-input"><?php echo DOMAIN . '/upload02/img/picture/' . $p['name'] ?></p>
                </div>

                <div class="form-group">
                    <label>Caption / คำอธิบาย</label>
                    <textarea class="form-control" name="caption" rows="2"><?php echo $p['caption'] ?></textarea>
                </div>

                <input type="submit" value="Submit" class="btn btn-default"> <a href="gallery.php?gal_id=<?php echo $p['gallery_id']; ?>" style="font-weight: bold;">Cancel</a>

            </form>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
