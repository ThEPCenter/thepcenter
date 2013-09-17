<?php
require_once '../system/system.php';
if ($_POST) {
    $id = $_POST['edit_id'];
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $update = date("Y-m-d H:i:s");
    $sql = "REPLACE INTO tb_industrial 
            VALUES 
                ($id, '$title', '$content','$date', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());
    header("Refresh: 2; url=../views/industrial.php");
    echo "Edit Article Successed...";
    exit;
}
?>
<h2 style="text-align: center;">แก้ไขบทความ</h2>

<?php
$edit_id = $_GET['edit_article'];
$sql = "SELECT * FROM tb_industrial WHERE id = $edit_id;";
$result = mysql_query($sql);
$p = mysql_fetch_array($result);
?>
<div class="page-region">
    <div class="page-region-content"> 
        <form name = "form1" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="edit_id" type="hidden" value="<?php echo $p['id']; ?>">
            <table class="bordered">
                <tr>
                    <td>
                        ชื่อเรื่อง
                    </td>
                    <td>
                        <div class="input-control text">
                            <input type="text" name="title" value="<?php echo htmlspecialchars_decode($p['title']); ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        วันที่
                    </td>

                    <td>
                        <input type="text" id="datepicker" name="date" value="<?php echo $p['date']; ?>">
                    </td>
                </tr>
                <script>
                    $(function() {                
                        $( "#datepicker" ).datepicker();   // Date Picker
                    }); /* END jQuery */
            
                </script>
                <tr>
                    <td>
                        เนื้อหา
                    </td>
                    <td>
                        <div class="input-control textarea">
                            <textarea name="content">
                                <?php echo htmlspecialchars_decode($p['content']); ?>
                            </textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Submit" /> <a href="../views/industrial.php" title="Cancel"><strong>Cancel</strong></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>