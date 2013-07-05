<?php 
require_once '../system/system.php'; 

$pathf = new config();
$templ = new template();

include $pathf->inc_file('paging');

//Check USER************************************
if(!isset($_SESSION['login'])){
	header("Location: index.php");
}

// DOCTYPE & Head
$style_tag = '
        <style type="text/css">
            #paging{
		text-align: center;
            }
        </style>
';

echo $templ->getHead(4.01, 'ThEP Article', $style_tag, '', '')
?>

<body>
<div style="margin: 0 auto; width: 1200px;">
<?php 
include $pathf->inc_file('header');

//Read order of current page
$current_page = 1;
if(isset($_GET['page'])){
	$current_page = $_GET['page'];	
}

//Set rows per page and find the starting row
$rows_per_page = _ROWS_PER_PAGE;
$start_row = paging_start_row($current_page, $rows_per_page);

if(isset($_GET['tbh'])){
	$tbh = $_GET['tbh'];
	$ord = $_GET['ord'];	
}else{
	$tbh = 'id';
	$ord = 'ASC';
}

$sql = "SELECT SQL_CALC_FOUND_ROWS *  
		 FROM tb_article
		 ORDER BY $tbh $ord 
		 LIMIT $start_row, $rows_per_page;";

$result = mysql_query($sql);

//Find number of rows
$found_rows = mysql_query("SELECT FOUND_ROWS();");
$total_rows = mysql_result($found_rows, 0, 0);

//total page number
$total_pages = paging_total_pages($total_rows, $rows_per_page);

function fileLink($id, $file_name, $dir){	
	$path = $dir . '/' . $id . '/' . $file_name;	
	$ex = '<a href="' . $path . '" target="_blank">view/ download</a>';
	$notex = 'No File';
	return fileExist($id, $file_name, $dir, $ex, $notex);	
} //END function fileLink

//Show the result
echo '
<h2 align="center">ThEP Articles</h2>
<table cellspacing="0" cellpadding="5">
'; 

$num_f = mysql_num_fields($result);

echo '<tr>';

$htb = array();

for($i = 0; $i < $num_f; $i++){
	$htb[] = mysql_field_name($result, $i);
}

for($i = 0; $i < $num_f; $i++){
	echo '<th><a href="show.php?tbh=' . $htb[$i] . '&ord=' . head_order($htb[$i], $tbh, $ord) . '">' . article_table_head($htb[$i]) . '</a></th>';
}

echo '<th><img src="' . $pathf->inc_dir('image') . '/settings.png" height="25" border="0" /></th>
	</tr>';	

while($p = mysql_fetch_array($result)) {	

	$id = $p['id'];	
	
	//fist 100 caractor of detail
	$detail = substr($p['detail'], 0, 100) . "...";	
	
	echo '
	<tr id="' . $id . '">
		<td width="20">' . $p['id'] . '</td>
		<td width="200">' . htmlspecialchars_decode($p['name']) . '</td>
		<td width="200">' . $p['author'] . '</td>
		<td>' . $p['c_author'] . '</td>
		<td width="200">' . $p['journal'] . '</td>
		<td>' . $p['volume'] . '</td>	
		<td>' . $p['issue'] . '</td>
		<td>' . $p['page'] . '</td>
		<td>' . $p['year'] . '</td>
		<td>' . $p['impact'] . '</td>
		<td align="center">' . $p['research_center'] . '</td>
		<td>' . $p['research_lab'] . '</td>
		<td>' . $detail . '</td>
		<td>'. fileLink($id, $p['file_name'], $pathf->inc_dir('paper_upload')) .'</td>
		<td><button id="' . $p['id'] . '" title="Edit" onclick="goEdit('. $p['id'] .');">Edit</button> <button title="Delete" onclick="goDelete(' . $p['id'] . ');">Delete</button> </td>			
	</tr>
	
	';
}// END while
	
?>
</table>
    <div>&nbsp;</div>

<!-- Show page number and links -->
    <div id="paging">
<?php 
//Show page number
echo "Page: $current_page / $total_pages <p />";

$page_range = 5;
$qry_string = "tbh=$tbh&ord=$ord";

//Create link between pages
$page_str = paging_pagenum($current_page, $total_pages, $page_range, $qry_string);

echo $page_str;
mysql_close()
?>
    </div>
</div>

<div>&nbsp;</div>
<?php include $pathf->inc_file('footer'); ?>

<script type="text/javascript">
function goEdit(x){
    window.location = "edit.php?id=" + x + "&tbh=<?php echo $tbh; ?>&ord=<?php echo $ord;?>&page=<?php echo $current_page;?>";
}

function goDelete(y){
    var r=confirm("Are you really want to delete this article?");
	
    if (r==true){
        window.location = "<?php echo $pathf->inc_file('delete'); ?>?del_article=" + y ;
    }
}
</script>

</body>
</html>