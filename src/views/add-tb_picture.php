<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    for ($i = 1; $i <= 6; $i++) {
        
        $id = htmlspecialchars($_POST['id_' . $i], ENT_QUOTES);
        $name = htmlspecialchars($_POST['name_' . $i], ENT_QUOTES);
        $caption = htmlspecialchars($_POST['caption_' . $i], ENT_QUOTES);
        $gallery_id = $_POST['gallery_id_' . $i];
        $pic_no = htmlspecialchars($_POST['pic_no_' . $i], ENT_QUOTES);
        $type = htmlspecialchars($_POST['type_' . $i], ENT_QUOTES);
        $size = htmlspecialchars($_POST['size_' . $i], ENT_QUOTES);
        $folder = htmlspecialchars($_POST['folder_' . $i], ENT_QUOTES);
        $modified = date("Y-m-d H:i:s");

        $sql = "INSERT INTO tb_picture
                    VALUES ($id, '$name', '$caption', '$gallery_id', $pic_no, '$type', '$size', '$folder', '$modified');        
                    ";
        @mysql_query($sql) or die(mysql_error());
        
    } // END for
    header("Location: gallery.php?gal_id=$gallery_id");
    exit();
}

/*
  $gallery_id = $_GET['gallery_id'];

  $sql_g = "SELECT * FROM tb_gallery
  WHERE id = $gallery_id;
  ";
  $re_g = mysql_query($sql_g);
  $g = mysql_fetch_array($re_g);
 */
doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <h2 class="text-center">เพิ่มข้อมูลภาพในตาราง tb_table <?php echo $g['title']; ?></h2>
                <form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

                    <input name="gallery_id" type="hidden" value="<?php echo $g['id']; ?>">
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>caption</th>
                            <th>gallery_id</th>
                            <th>pic_no</th>
                            <th>type</th>
                            <th>size</th>
                            <th>folder</th>
                        </tr>
                        <?php
                        for ($i = 1; $i <= 6; $i++) {
                            echo '                                
                    <tr>
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="id_'.$i.'">id</label>
                                <input type="text" class="form-control" id="id_'.$i.'" name="id_'.$i.'" placeholder="id">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="name_'.$i.'">name</label>
                                <input type="text" class="form-control" id="name_'.$i.'" name="name_'.$i.'" placeholder="name">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="caption_'.$i.'">caption</label>
                                <input type="text" class="form-control" id="caption_'.$i.'" name="caption_'.$i.'" placeholder="caption">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="gallery_id_'.$i.'">gallery_id</label>
                                <input type="text" class="form-control" id="gallery_id_'.$i.'" name="gallery_id_'.$i.'" placeholder="gallery_id">
                            </div>
                        </td>
                                                                       
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="pic_no_'.$i.'">id</label>
                                <input type="text" class="form-control" id="pic_no_'.$i.'" name="pic_no_'.$i.'" placeholder="pic_no">
                            </div>
                        </td> 
                        
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="type_'.$i.'">type</label>
                                <input type="text" class="form-control" id="type_'.$i.'" name="type_'.$i.'" placeholder="type">
                            </div>
                        </td>                       
                             
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="size_'.$i.'">size</label>
                                <input type="text" class="form-control" id="size_'.$i.'" name="size_'.$i.'" placeholder="size">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="folder_'.$i.'">folder</label>
                                <input type="text" class="form-control" id="folder_'.$i.'" name="folder_'.$i.'" placeholder="folder">
                            </div>
                        </td>
                        
                    </tr>
                                ';
                        }
                        ?>
                    </table>
                    <input type="submit" value="Submit" class="btn btn-default"> <a href="gallery.php" style="font-weight: bold;">Cancel</a>


                </form>
                <p>&nbsp;</p>
                <hr>
                
                <h2 class="text-center">ข้อมูลภาพในตาราง tb_table <?php echo $g['title']; ?></h2>
                <?php
                $sql = "SELECT * FROM tb_picture ORDER BY id DESC;";
                $result = mysql_query($sql);
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>caption</th>
                        <th>gallery_id</th>
                        <th>pic_no</th>
                        <th>type</th>
                        <th>size</th>
                        <th>folder</th>
                        <th>modified</th>
                    </tr>
                    <?php
                    while ($p = mysql_fetch_array($result)) {
                        echo '
                    <tr>
                        <td>' . $p['id'] . '</td>
                        <td>' . $p['name'] . '</td>
                        <td>' . $p['caption'] . '</td>
                        <td>' . $p['gallery_id'] . '</td>
                        <td>' . $p['pic_no'] . '</td>
                        <td>' . $p['type'] . '</td>
                        <td>' . $p['size'] . '</td>
                        <td>' . $p['folder'] . '</td>
                        <td>' . $p['modified'] . '</td>
                    </tr>
                    ';
                    }
                    ?> 

                </table>
                
            </div>
            

        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
