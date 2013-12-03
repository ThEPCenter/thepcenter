<?php  
require_once 'system.php'; 

$sql = "SELECT * FROM counter;";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
    $output[] = $row;
}
print(json_encode($output));
mysql_close();
?>
