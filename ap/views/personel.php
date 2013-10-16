<?php
require_once "../system/system.php";
if (!isset($_SESSION['login'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php get_includes('meta_script'); ?>        
        <title>บุคลากร</title>
        <script>
            $(function(){
                $('#add').click(function(){
                    $('#add-personel').load("<?php controll('add-personel'); ?>");
                    $('#add-personel').toggle();
                    $('#person-table').toggle();
                });
                
            });
        </script>
    </head>
    <body class="metrouicss">
        <?php get_includes('header'); ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2 style="text-align: center;">บุคลากร</h2>

            <div class="page-region">
                <div class="page-region-content">
                    <hr>
                    <a id="add" class="fg-color-green" style="cursor: pointer;"><i class="icon-plus-2"></i><i class="icon-user"></i>เพิ่มบุคลากร</a>
                    <div id="add-personel" style="display: none;"></div>
                    <div>&nbsp;</div>                    
                    <?php
                    $sql = "SELECT * FROM tb_personel ORDER BY code;";
                    $result = mysql_query($sql);
                    ?>
                    <table class="bordered" id="person-table">
                        <?php
                        if (mysql_num_rows($result) > 0) {
                            while ($p = mysql_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td align="center">                                            
                                        <img src="<?php echo $p['photo'] ?>" style="width: auto; height: 143px;">
                                    </td>                                        
                                    <td>                                            
                                        <p><?php echo $p['title_th'] . ' ' . $p['first_th'] . ' ' . $p['last_th']; ?></p>                                            
                                        <p>ตำแหน่ง : <? echo $p['position_th'] ?></p>                                            
                                        <address>
                                            เบอร์โทรศัพท์ : <?php echo $p['phone_th'] ?><br />
                                            Email: <?php echo $p['email'] ?><br />
                                        </address>
                                        <a style="cursor: pointer;" class="fg-color-yellow" id="edit-<?php echo $p['id']; ?>"><i class="icon-wrench"></i>แก้ไขข้อมูล</a> |&nbsp;
                                        <a style="cursor: pointer;" class="fg-color-red"  id="del-<?php echo $p['id']; ?>"><i class="icon-cancel-2"></i>ลบข้อมูล</a>
                                    </td>                                        
                                </tr>
                                <script>
                                    $(function(){
                                        $('#edit-<?php echo $p['id']; ?>').click(function(){
                                            $.get("<?php controll('edit-personel'); ?>", {edit_id: "<?php echo $p['id']; ?>"}, 
                                            function(data){ $('#page-index').html(data); }
                                        );
                                        });
                                                                        
                                        $('#del-<?php echo $p['id']; ?>').click(function(e) {
                                            $.Dialog({
                                                'title'      : 'ลบข้อมูลบุคลากร',
                                                'content'    : 'คุณแน่ใจที่จะลบข้อมูลของ<br /><?php echo $p['title_th'] . ' ' . $p['first_th'] . ' ' . $p['last_th']; ?>',
                                                'draggable'  : true,
                                                'keepOpened' : true,
                                                'position'    : {
                                                    'zone'    : 'center',
                                                    'offsetY'   : '200'
                                                },
                                                'buttonsAlign': 'right',
                                                'buttons'    : {
                                                    'ลบ'        : {
                                                        'action': function() {
                                                            window.location = "<?php controll('delete'); ?>?del_person=<?php echo $p['id']; ?>";
                                                        }
                                                    },
                                                    'ยกเลิก'    : {
                                                        'action': function() {}
                                                    }
                                                }
                                            });

                                        });
                                                                        
                                    });
                                </script>
                                <?php
                            } /* END while */
                        } else {
                            ?>
                            <tr>
                                <td colspan="2" align="center"><b>ขออภัยไม่พบข้อมูล</b></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END #page-index -->
        <?php get_includes('footer'); ?>        
    </body>
</html>