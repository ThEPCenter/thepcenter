<?php
require_once '../system/system.php';
$sql_g = "SELECT * FROM tb_gallery;";
$result_g = mysql_query($sql_g);
echo '<select name="gallery_id">
    <option value="">...</option>';
while ($g = mysql_fetch_array($result_g)) {
    echo '<option value="' . $g['id'] . '">' . $g['title'] . '</option>';    
}
echo '</select>';
?>