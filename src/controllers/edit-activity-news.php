<?php
require_once "../system/system.php";

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $gallery_id = $_POST['gallery_id'];
    $update = date("Y-m-d H:i:s");

    $sql = "UPDATE tb_news 
            SET type = '$type', title = '$title', date = '$date', content_long = '$content_long', new = '$new', gallery_id = $gallery_id, last_update = '$update'
            WHERE id = $id;";
    @mysql_query($sql) or die(mysql_error());
    header("Location: ../views/pr_news.php?news_id=$id");
    exit();
}

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

    <div class="form-group">
        <label>แกลอรี</label>
        <span>เลือกแกลอรี หรือ </span><a href="gallery.php?add_gal=new" target="_blank">เพื่มแกลอรีใหม่</a>
        <select name="gallery_id" class="form-control" id="gallery_id">
            <?php
            $sql_g = "SELECT * FROM tb_gallery;";
            $result_g = mysql_query($sql_g);
            while ($g = mysql_fetch_array($result_g)) {
                echo '<option id="gal-' . $g['id'] . '" value="' . $g['id'] . '"' . opt_check($p['gallery_id'], $g['id']) . '>' . $g['title'] . '</option>';
            }// END while
            ?>
        </select>        
    </div>
    <div class="show-gall"></div>
    <script>
        $(function(){            
            var gal_id = $("option[selected]").val();
            $.get("<?php controll('show-gal'); ?>", {gallery_id: gal_id}, 
                function(data){ $(".show-gall").html(data); }
            );
            /*
             
            $("#gallery_id").click(function(){
                $(document).ajaxStart(function(){
                    $(".show-gall").html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                });
                var gal_id = $("option[selected]").val();
                $.get("<?php controll('show-gal'); ?>", {gallery_id: gal_id}, 
                function(data){ $(".show-gall").html(data); }
            );
            });
            
             */
        });
    </script>

    <p>&nbsp;</p>
    <button type="submit" class="btn btn-default">Submit</button> | <a href="../views/pr_news.php?news_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
</form>