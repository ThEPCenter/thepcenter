<?php
require_once '../system/system.php';
doc_head('Gallery');
?>
<link rel="stylesheet" href="<?php plugins('lightbox2.6/lightbox/css/lightbox.css'); ?>">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <?php
        if (isset($_GET['gal_id'])) {
            $gal_id = $_GET['gal_id'];

            $sql = "SELECT * FROM tb_gallery WHERE id = $gal_id;";
            $result = mysql_query($sql);
            $g = mysql_fetch_array($result);


            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$g['id']} ORDER BY id ASC;";
            $re_p = mysql_query($sql_p);
            $pic_no = mysql_num_rows($re_p);
            ?>
            <div class="row" style="background-color: #e7e3b1;">
                <h2 class="text-center"><?php echo $g['title'] ?></h2>
                <?php
                $i = 0;
                while ($p = mysql_fetch_array($re_p)) {
                    $i++;
                    echo '
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div style="width: 197px; height: 236px; border:1px solid rgba(0, 0, 0, .1);">
                        <div style="width: 195px; height: 195px; overflow: hidden; border-bottom: 1px solid rgba(0, 0, 0, .1);">
                            <a class="pic-link" href="../../upload02/img/picture/' . $p['name'] . '" data-lightbox="gal-' . $p['gallery_id'] . '" title="' . $p['caption'] . '"> 
                                <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $pic_no . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../upload02/img/picture/' . $p['name'] . ') -50px 0; 
                            background-size: 300px auto; 
                            width: 195px;
                            height: 195px;">
                            </a>    
                        </div>
                        <p>' . $p['name'] . '<br>
                            <a href="edit-picture.php?edit_id=' . $p['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Edit Picture</a>
                        </p>
                    </div>
                </div>
                        ';
                } // END while p
                ?>
                <p>&nbsp;</p>
            </div>
            <p>&nbsp;</p>

            <div class="row" style="background-color: #e7e3b1;">
                <div class="col-md-12">
                    <strong>จำนวนทั้งหมด <?php echo $pic_no; ?> ภาพ</strong> &nbsp;  
                    <a title="Edit Gallery" href="edit-gallery.php?edit_id=<?php echo $gal_id; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit Gallery</a> &nbsp;| &nbsp;
                    <a title="Add picture" href="add-picture.php?gallery_id=<?php echo $gal_id; ?>"><span class="glyphicon glyphicon-plus"></span> Add picture</a>
                    <p>&nbsp;</p>
                    <a title="Back to gallery page." href="gallery.php"><span class="glyphicon glyphicon-arrow-left"></span> กลับหน้าแกลอรี</a>
                </div>
                <p>&nbsp;</p>
            </div>

            <?php
        } else {
            ?>

            <?php
            $sql = "SELECT * FROM tb_gallery ORDER BY id DESC;";
            $result = mysql_query($sql);
            $gal_no = mysql_num_rows($result);
            ?>
            <div class="row" style="background-color: #e7e3b1;">
                <h2 class="text-center">Gallery</h2>                
                <div class="col-md-12">
                    <p><a href="add-gallery.php"><span class="glyphicon glyphicon-plus"></span> Add New Gallery</a></p>
                    <hr>
                    <div class="row">
                        <?php
                        while ($gal = mysql_fetch_array($result)) {

                            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$gal['id']} ORDER BY id;";
                            $re_p = mysql_query($sql_p);
                            $pic_no = mysql_num_rows($re_p);
                            $pic = mysql_fetch_array($re_p);
                            echo '
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div style="width: 197px; height: 240px; border:1px solid rgba(0, 0, 0, .1);">
                        <div style="width: 195px; height: 195px; overflow: hidden; border-bottom: 1px solid rgba(0, 0, 0, .1);">
                            <a title="' . $gal['title'] . '" href="gallery.php?gal_id=' . $gal['id'] . '">
                                <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../upload02/img/picture/' . $pic['name'] . ') -50px 0; 
                            background-size: 300px auto; 
                            width: 195px;
                            height: 195px;">
                            </a>                            
                        </div>
                        <div style="max-width: 195px;">
                            <a title="' . $gal['title'] . '" href="gallery.php?gal_id=' . $gal['id'] . '"><small>' . $gal['title'] . '...</small></a><br>
                            <small>' . $pic_no . ' ภาพ</small> &nbsp; 
                           <a title="Edit Gallery" href="edit-gallery.php?edit_id=' . $gal['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Edit Gallery</a>
                        </div>
                    </div>
                </div>
                        ';
                        }
                        ?>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <p>&nbsp;</p>
            </div>            
            <p>&nbsp;</p>

            <div class="row" style="background-color: #e7e3b1;">
                <div class="col-md-12">
                    <strong>จำนวนทั้งหมด <?php echo $gal_no; ?> แกลอรี</strong> &nbsp;
                    <a href="add-gallery.php"><span class="glyphicon glyphicon-plus"></span> Add New Gallery</a>
                </div>
                <p>&nbsp;</p>
            </div>

            <?php
        } // END if GET
        ?>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>

    <script src="<?php plugins('lightbox2.6/lightbox/js/lightbox-2.6.min.js'); ?>"></script>
</body>
</html>
