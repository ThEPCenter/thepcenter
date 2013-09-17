<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
if (!isset($_GET['edit_gal']) && !$_POST) { header("Location: gallery.php"); }
$gal_id = $_GET['edit_gal'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php
        get_inc('meta_script');
        get_inc('lightbox');
        ?>
        <title>แก้ไขแกลอรี</title>
        <script>
            $(function(){
                $.get("<?php echo path_controll('edit-gal'); ?>", {gal_id: "<?php echo $gal_id; ?>"}, 
                    function(data){ $('#edit-gal').html(data); }
                );                
            });
        </script>
    </head>
    <body class="metrouicss">
        <?php get_inc('header'); ?>
        <div class="page bg-color-blueLight" id="edit-gal">
        </div> <!-- END .page -->
        <?php get_inc('footer'); ?>
    </body>
</html>