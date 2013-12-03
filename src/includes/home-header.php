<?php
/*
$sessionid = session_id();
echo $sessionid . '  xxxxxxxxxx yyyyyyyyyy';
//$counter_id	= $db->GetOne("SELECT id FROM counter WHERE  sessionid = '$sessionid'  ");
$counter_id = "SELECT id FROM counter WHERE  sessionid = '$sessionid';"; // Show All
$result = mysql_query($counter_id) or die(mysql_error());
// $rs = mysql_fetch_array($result);
// $counterid = $rs["id"];
$now = date("Y-m-d H:i:s");
$nums = mysql_num_rows($result);
echo " Number = $nums ";
if ($nums == 0) {
    $sql = "INSERT INTO counter
  VALUES (0, '$sessionid','$now','$now');";
    @mysql_query($sql) or die(mysql_error());
}
$countershow = "SELECT id FROM counter ORDER BY id DESC"; // Show All
$result = mysql_query($countershow) or die(mysql_error());
$rs = mysql_fetch_array($result);
$counter = $rs["id"];
$counter = number_format($counter, 0, '', ',');
*/
?>

<div class="row">
    <a title="ศูนย์ความเป็นเลิศด้านฟิสิกส์" href="home.php"><img class="img-responsive" style="margin: 0 auto;" src="../images/thep_head_9_1200.png"></a>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">จำนวนผู้เข้าชม: <?php echo $counter; ?> ครั้ง</div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-right" style="padding-right: 20px;"><?php login('<strong>สวัสดี ' . $_SESSION['login'] . '</strong> | <a href="logout.php">Logout</a>'); ?> <img title="เว็บฉบับภาษาไทย" style="width: 30px;" src="../images/thailand-flag.gif"> <a title="English version" href="home_en.php"><img style="width: 30px;" src="../images/en_ver.gif"></a></div>
</div>

<!-- /#header -->
<div class="pageline" id="firstpageline"></div>
