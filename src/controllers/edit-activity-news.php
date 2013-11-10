<?php
require_once "../system/system.php";

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $featured_img = htmlspecialchars($_POST['featured_img'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $gallery_id = $_POST['gallery_id'];
    $modified = date("Y-m-d H:i:s");

    $sql = "UPDATE tb_news 
            SET type = '$type', title = '$title', date = '$date', featured_img = '$featured_img', content_long = '$content_long', new = '$new', gallery_id = $gallery_id, modified = '$modified'
            WHERE id = $id;";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/pr_news.php?news_id=$id");
    exit();
}

// ====================================
notlogin_js('../views/home.php');

if (!isset($_GET['edit_news'])) {
    js_redirect('../views/home.php');
}

//=====================================

function opt_check($x, $y) {
    if ($x == $y) {
        return ' selected';
    }
}

$edit_id = $_GET['edit_news'];
$sql = "SELECT * FROM tb_news WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
?>

<h2 class="text-center">แก้ไข ข่าวกิจกรรม</h2>                   

<form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="edit_id" type="hidden" value="<?php echo $p['id']; ?>">
    <input name="type" type="hidden" value="<?php echo $p['type']; ?>">
    <div class="form-group">
        <label>หัวข้อข่าว</label>
        <input type="text" name="title"  class="form-control" value="<?php echo htmlspecialchars_decode($p['title']); ?>" />
    </div>

    <div class="form-group">
        <label>วันที่</label>
        <input type="text" id="datepicker" name="date" value="<?php echo date("m/d/Y", strtotime($p['date'])); ?>">
    </div>
    <script>
        $(function() {                
            $( "#datepicker" ).datepicker();   // Date Picker
        }); /* END jQuery */
    </script>
    <p>&nbsp;</p>

    <h4>Feature image</h4>
    <p id="show-img">
        <img class="img-responsive" style="margin: auto;" src="<?php echo htmlspecialchars_decode($p['featured_img']); ?>">
    </p>
    <div class="form-group">
        <label>Feature image url</label>
        <input type="text" id="featured_img" name="featured_img"  class="form-control" value="<?php echo htmlspecialchars_decode($p['featured_img']); ?>" />
    </div>
    <script>
        $(function(){            
            $("#featured_img").blur(function(){            
                var img_url = $("#featured_img").val();
                $("#show-img").html("<img src=\"" + img_url + "\" style=\"max-width: 100%; height: auto; margin: auto;\">");           
            });
            
        });
    </script>
    <p>&nbsp;</p>

    <div class="form-group">
        <label>เนื้อหา</label>
        <textarea name="content_long">
            <?php echo htmlspecialchars_decode($p['content_long']); ?>
        </textarea>
        <script>
            CKEDITOR.replace('content_long');
        </script>
    </div>

    <strong>อื่นๆ</strong>
    <?php
    if ($p['new'] == 'y') {
        $chk = ' checked';
    }
    ?>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="new" value="y"<?php echo $chk; ?>> ข่าวใหม่
        </label>
    </div>
    <p>&nbsp;</p>

    <?php 
    $sql_g = "SELECT * FROM tb_gallery WHERE id = {$p['gallery_id']};";
    $re_g = mysql_query($sql_g);
    $g = mysql_fetch_array($re_g);
    ?>
    <div class="form-group">
        <label>แกลอรี</label>
        <input type="text" id="gallery" name="gallery"  class="form-control" value="<?php echo htmlspecialchars_decode($g['title']); ?>" disabled> <br />
        <input type="hidden" id="gal_id" name="gal_id" value="<?php echo $g['id'] ?>">
        <!-- Link trigger modal -->
        <a data-toggle="modal" href="#myModal">
            เลือกแกลอรีอื่น
        </a> 
        หรือ
        <a href="gallery.php?add_gal=new" target="_blank">เพิ่มแกลอรีใหม่</a>              
    </div>
    <div id="show-gall"></div>

    


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        $(function(){            
            var gal_id = $("#gal_id").val();
            $.get("<?php controll('show-gal'); ?>", {gallery_id: gal_id}, 
            function(data){ $("#show-gall").html(data); }
        );           
             
        });
    </script>

    <p>&nbsp;</p>
    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/activity-news.php?news_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
</form>
