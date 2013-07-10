<?php

//For testing

//=========== System constant definition ==============

define("HOST", "localhost");
define("USER", "root");
define("PASS", "1234");
define("DB_NAME", "db_thep");

define("HOME", "http://www.thep-center.org");
define("MAIN", "index.php");

//=====================================================

@mysql_connect(HOST, USER, PASS) or die(mysql_error());
mysql_select_db(DB_NAME);
mysql_query("SET NAMES UTF8");

// Set timzone Bkk +7---------------
$timezone = "Asia/Bangkok"; 
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
mysql_query("SET SESSION time_zone = '+7:00'");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThEP International Publication (Demo)</title>
<link rel="stylesheet" type="text/css" href="Re_db/article.css" />
<style type="text/css">
a{
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
</style>

</head>

<body>
<div style="margin: 0 auto; width: 1200px;">

<h2 align="center">ThEP International Publication (Demo)</h2>
<?php
//GET ======================================================================================================================================================== 
if(isset($_GET['year'])){
	$year = $_GET['year'];
?>	
<div>
<?php 
for($m=2012; $m>=2009; $m--){
	if($m == $year){
		echo '<strong>' . $m . '</strong>';
	}else{
		echo '<a href="?year=' . $m . '">' . $m . '</a>';
	}
	
	echo '&nbsp;';
}
echo '&nbsp;<a href="index">ALL</a>';
?>
	<br />
    <span>-----------------------------------------------</span>	
</div>
<div>&nbsp;</div>
	<div style="background-color: #0C6;"><strong>YEAR <?=$year;?></strong></div>
    <div>&nbsp;</div>
<?php
	$sql = "SELECT *  
		FROM tb_re_center
		ORDER BY id
		;";
	$result = mysql_query($sql);
		
	while($p = mysql_fetch_array($result)){// By RE Center
	
		echo '<strong>' . $p['re_center_en'] . ' (' . $p['re_center_code'] . ')</strong>' ; 
		
		echo'<div>&nbsp;</div>	
	<table cellspacing="0" cellpadding="5">
    	<tr>
        	<th>No.</th>
            <th>Title</th>
            <th>Corresponding author</th>
            <th>Journal</th>
            <th>Impact factor</th>            
        </tr>
	';
	
		$center = $p['re_center_code'];
	
		$sql1 = "SELECT *  
			FROM tb_article
			WHERE (year = $year) AND (research_center = '$center') 
			ORDER BY impact DESC
			;";
		//AND (SUBSTRING_INDEX(research_lab, '/', 1) = '$re_center')
	
		$result1 = mysql_query($sql1);
		$l = 0;
		while($p1 = mysql_fetch_array($result1)) {
		
			$l++;
		
			echo'
		<tr>
			<td>' . $l . '</td>
			<td width="500"><a href="Re_db/paper_upload/'. $p1['id'] . '/' . $p1['file_name'] .'" target="_blank">' . htmlspecialchars_decode($p1['name']) . '</a></td>
			<td width="170">' . $p['c_author'] . '</td>
			<td>' . $p1['journal'] . '</td>
			<td>' . $p1['impact'] . '</td>
		</tr>
			';
	
	
		}//END WHILE

	echo'
	</table>
	<p>&nbsp;</p>';		
	}//END WHILE
	
	include 'Re_db/footer.php';
	echo '
</body>
</html>
	';	
	exit;
}
// END GET ============================================================================================================================================
?>
<div>
	<?php 
	for($m=2012; $m>=2009; $m--){	
		echo '<a href="?year=' . $m . '">' . $m . '</a> ';
	}
	echo '&nbsp;<a href="index"><strong>ALL</strong></a>';	
	?>
    <br />
    <span>-----------------------------------------------</span>
</div>
<div>&nbsp;</div>
<?php

for($j = 2012; $j >= 2009; $j--){//By Year
	
	echo '<div style="background-color: #0C6;"><strong>YEAR ' . $j . '</strong></div>
	<div>&nbsp;</div>';
	
	$sql1 = "SELECT *  
		FROM tb_re_center
		ORDER BY id
		;";
	$result1 = mysql_query($sql1);
		
	while($p1 = mysql_fetch_array($result1)){// By RE Center
	
		echo '<strong>' . $p1['re_center_en'] . ' (' . $p1['re_center_code'] . ')</strong>' ; 
		
		echo'<div>&nbsp;</div>	
	<table cellspacing="0" cellpadding="5">
    	<tr>
        	<th>No.</th>
            <th>Title</th>
            <th>Corresponding author</th>
            <th>Journal</th>
            <th width="106">Impact factor<br />(' . ($j - 1) . ')</th>            
        </tr>
	';
	
		$center = $p1['re_center_code'];
	
		$sql = "SELECT *  
			FROM tb_article
			WHERE (year = $j) AND (research_center = '$center') 
			ORDER BY impact DESC
			;";
		//AND (SUBSTRING_INDEX(research_lab, '/', 1) = '$re_center')
	
		$result = mysql_query($sql);
		$l = 0;
		while($p = mysql_fetch_array($result)) {
		
			$l++;
		
			echo'
		<tr>
			<td>' . $l . '</td>
			<td width="500"><a href="Re_db/paper_upload/'. $p['id'] . '/' . $p['file_name'] .'" target="_blank">' . htmlspecialchars_decode($p['name']) . '</a></td>
			<td width="170">' . $p['c_author'] . '</td>
			<td width="355">' . $p['journal'] . '</td>
			<td align="center">' . $p['impact'] . '</td>
		</tr>
			';
	
	
		}//END WHILE

	echo'
	</table>
	<p>&nbsp;</p>';		
	}//END WHILE
	
}//END FOR
?>

</div>
<div>&nbsp;</div>
<?php include 'Re_db/footer.php'; ?>
</body>
</html>