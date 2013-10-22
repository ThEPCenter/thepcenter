<?php

require_once '../system/system.php';
$name_check = htmlspecialchars($_GET['name_check'], ENT_QUOTES);

$pattern = "[\w\-\.\(\)\s]+(\.[a-zA-Z]{2,})";
// RegEx ตรงนี้ยังใช้ไม่ได้

echo $name_check;

if (ereg($pattern, $name_check)) {
    $sql = "SELECT * FROM tb_upload WHERE name = '$name_check';";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {
        echo ' <span style="color: red; font-weight: bold;">ขออภัยชื่อนี้ซ้ำ</span>';
    } else {
        echo ' <span style="color: green; font-weight: bold;">ชื่อนี้สามารถใช้ได้</span>';
    }
    
} else {
    echo ' <span style = "color: red; font-weight: bold;">ขออภัยชื่อนี้ใช้ไม่ได้</span>';
}
?>
