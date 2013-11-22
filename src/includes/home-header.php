<?php
/*
$sessionid = session_id();

$counter_id = "SELECT id FROM counter WHERE  sessionid = '$sessionid'  "; // Show All
$result = mysql_query($counter_id) or die(mysql_error());
$rs = mysql_fetch_array($result);
$counterid = $rs["id"];

$now = date("Y-m-d H:i:s");
if (!$result) {
    $sql = "INSERT INTO counter (`sessionid` ,`created` ,`updated`) VALUES ( '$sessionid','$now','$now')";
    mysql_query($sql);
}

$countershow = "SELECT id FROM counter ORDER BY id DESC"; // Show All
$result = mysql_query($countershow) or die(mysql_error());
$rs = mysql_fetch_array($result);
$counter = $rs["id"];
$counter = number_format($counter, 0, '', ',');
*/
?>

<div class="row">
    <a title="ศูนย์ความเป็นเลิศด้านฟิสิกส์" href="home.php"><img class="img-responsive" style="margin: 0 auto;" src="../images/head_1200.png"></a>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">จำนวนผู้เข้าชม: <?php echo $counter; ?> ครั้ง</div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-right" style="padding-right: 20px;"><?php login('<strong>สวัสดี ' . $_SESSION['login'] . '</strong> | <a href="logout.php">Logout</a>'); ?> <a title="เว็บฉบับภาษาไทย" href="home.php"><img style="width: 30px;" src="../images/thailand-flag.gif"></a> <a title="English version" href="home_en.php"><img style="width: 30px;" src="../images/en_ver.gif"></a></div>
</div>

<!-- /#header -->
<div class="pageline" id="firstpageline"></div>
