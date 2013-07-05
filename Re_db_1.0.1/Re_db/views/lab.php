<?php
require_once '../system/system.php';

$pathf = new config();
$templ = new template();

//Check USER************************************
if(!isset($_SESSION['login'])){
	header("Location: index.php");
}
//**********************************************

//Option selected --------------------
function OPS($x, $y){
	if($x==$y){
		return ' selected';
	}
}
//------------------------------------

// POST =======================================================================================================================================================
if($_POST['lab_id']){// Edit Lab ----------------------------------
	$lab_id = $_POST['lab_id'];
	$re_lab_code = htmlspecialchars($_POST['lab_code'], ENT_QUOTES);
	$re_lab_en = htmlspecialchars($_POST['lab_en'], ENT_QUOTES);
	$re_lab_th = htmlspecialchars($_POST['lab_th'], ENT_QUOTES);
	$re_center_code = htmlspecialchars($_POST['center_code'], ENT_QUOTES);
	
	$sql = "UPDATE 
                    tb_re_lab 
		SET 
                    re_lab_code = '$re_lab_code', re_lab_en = '$re_lab_en', re_lab_th = '$re_lab_th', re_center_code = '$re_center_code'					
		WHERE 
                    id = $lab_id
        ;";		
	@mysql_query($sql) or die ('Error: '.mysql_error ());
		
	header("Refresh: 1; url=lab.php");
	echo "Lab Edited ...";
	exit;
}

else if($_POST['center_id']){// Edit Center ---------------------------
	$center_id = $_POST['center_id'];
	$re_center_code = htmlspecialchars($_POST['center_code'], ENT_QUOTES);
	$re_center_en = htmlspecialchars($_POST['center_en'], ENT_QUOTES);
	$re_center_th = htmlspecialchars($_POST['center_th'], ENT_QUOTES);
	$director_en = htmlspecialchars($_POST['director_en'], ENT_QUOTES);
	$director_th = htmlspecialchars($_POST['director_th'], ENT_QUOTES);
	$center_address = htmlspecialchars($_POST['center_address'], ENT_QUOTES);
	
	$sql = "UPDATE 
                    tb_re_center 
		SET 
                    re_center_code = '$re_center_code', re_center_en = '$re_center_en', re_center_th = '$re_center_th', director_en = '$director_en', director_th = '$director_th', address = '$center_address'					
		WHERE 
                    id = $center_id
        ;";		
	@mysql_query($sql) or die ('Error: '.mysql_error ());
		
	header("Refresh: 1; url=lab.php");
	echo "Center Edited ...";
	exit;	
}

else if($_POST['addL']=='addLab'){ // Add Lab ---------------------
	$lab_code = htmlspecialchars($_POST['lab_code'], ENT_QUOTES);
	$lab_en = htmlspecialchars($_POST['lab_en'], ENT_QUOTES);
	$lab_th = htmlspecialchars($_POST['lab_th'], ENT_QUOTES);
	$center_code = htmlspecialchars($_POST['center_code'], ENT_QUOTES);
	
	$sql = "INSERT INTO 
                    tb_re_lab 
                VALUES
                    (0, '$lab_code', '$lab_en', '$lab_th', '$center_code')
        ;";
	@mysql_query($sql) or die ('Error: '.mysql_error ());
	
	header("Refresh: 1; url=lab.php");
	echo "Adding New Lab ...";
	exit;
}

else if($_POST['addC']=='addCenter'){ // Add Center -----------------
	$center_code = htmlspecialchars($_POST['center_code'], ENT_QUOTES);
	$center_en = htmlspecialchars($_POST['center_en'], ENT_QUOTES);
	$center_th = htmlspecialchars($_POST['center_th'], ENT_QUOTES);
	$director_en = htmlspecialchars($_POST['director_en'], ENT_QUOTES);
	$director_th = htmlspecialchars($_POST['director_th'], ENT_QUOTES);
	$center_address = htmlspecialchars($_POST['center_address'], ENT_QUOTES);
	
	$sql = "INSERT INTO 
                    tb_re_center 
                VALUES
                    (0, '$center_code', '$center_en', '$center_th', '$director_en', '$director_th', '$center_address')
        ;";
	@mysql_query($sql) or die ('Error: '.mysql_error ());
	
	header("Refresh: 1; url=lab.php");
	echo "Adding New Center ...";
	exit;
}
// END POST ===================================================================================================================================================

// START HTML
$script_tag = '
        <script type="text/javascript">
        function editLab(x){
            window.location = "lab.php?lab_id=" + x;
        }

        function editCenter(x){
            window.location = "lab.php?center_id=" + x;
        }

        function addLab(){
            window.location = "lab.php?add_lab=1";
        }

        function addCenter(){
            window.location = "lab.php?add_center=1";
        }

        function delLab(x){
            var r = confirm("Are you sure to delete Lab id=" + x + "?");
            if (r==true){
                window.location = "' . $pathf->inc_file('delete') . '?del_lab=" + x;
            }else{
                window.location = "lab.php";
            }
        }

        function delCenter(x){
            var r = confirm("Are you sure to delete Center id=" + x + "?");
            if (r==true){
                window.location = "delete.php?del_center=" + x;
            }else{
                window.location = "lab.php";
            }
        }
        </script>
';

echo $templ->getHead(4.01, 'Research Center and Lab.', '', $script_tag, '');
?>

<body>
<div style="margin: 0 auto; width: 900px;">
<?php 

require_once $pathf->inc_file('header'); 

if($_GET['lab_id']){ //Edit Lab ----------------------------------------------
	
	$lab_id = $_GET['lab_id'];
	$sql = "SELECT *  
		FROM tb_re_lab
		WHERE id = $lab_id
	;";	
	$result = mysql_query($sql);
	$p = mysql_fetch_array($result);
?>
<style type="text/css">
table, tr, td{
	border: solid 0px black;
}
</style>
<h2 align="center">Edit Laboratory</h2>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table>
    	<tr valign="top">    		
			<input name="lab_id" type="hidden" id="lab_id" size="20" value="<?php echo $p['id']; ?>" /></td>
        
        	<td width="100">Lab Code: </td>
			<td><input name="lab_code" type="text" id="lab_code" size="20" value="<?php echo $p['re_lab_code']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top"> 
        	<td width="100">English Name: </td>
			<td><input name="lab_en" type="text" id="lab_en" size="100" value="<?php echo $p['re_lab_en']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top">
        	<td width="100">Thai Name: </td>
			<td><input name="lab_th" type="text" id="lab_en" size="100" value="<?php echo $p['re_lab_th']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<?php
$sql2 = "SELECT *  
	FROM tb_re_center
	ORDER BY id
	;"; 
$result2 = mysql_query($sql2);
?>
        <tr valign="top">
            <td>Center Code: </td>
            <td>            	
                <select id="center_code" name="center_code">
            <?php while($p2 = mysql_fetch_array($result2)) {
			echo '
					<option value="'. $p2['re_center_code'] . '"' . OPS($p2['re_center_code'], $p['re_center_code']) . '>'. $p2['re_center_code'] . '</option>';
			}?>
            	</select>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center">
      			<input style="height: 30px" type="submit" name="Submit" value="Confirm Edit" />
        		<a id="cancel" href="lab.php"><strong>Cancel</strong></a>
            </td> 	
    	</tr>
    </table>
    
</form>
<?php 
} // END Edit Lab ---------------------------------------------------------------

else if($_GET['center_id']){ // Edit Center -------------------------------------

	$center_id = $_GET['center_id'];
	$sql = "SELECT *  
		FROM tb_re_center
		WHERE id=$center_id
	;";

	$result = mysql_query($sql);
	$p = mysql_fetch_array($result);
?>
<style type="text/css">
table, tr, td{
	border: solid 0px black;
}
</style>
<h2 align="center">Edit Research Center</h2>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table>
    	<tr valign="top">    		
            <input name="center_id" type="hidden" id="cen_id" size="20" value="<?php echo $p['id']; ?>" />
        
            <td width="200">Center Code: </td>
            <td><input name="center_code" type="text" id="center_code" size="10" value="<?php echo $p['re_center_code']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top"> 
            <td width="200">English Name: </td>
            <td><input name="center_en" type="text" id="center_en" size="100" value="<?php echo $p['re_center_en']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top">
            <td width="200">Thai Name: </td>
            <td><input name="center_th" type="text" id="center_th" size="100" value="<?php echo $p['re_center_th']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
        <tr valign="top">
            <td width="200">Director's Name in English : </td>
            <td><input name="director_en" type="text" id="director_en" size="50" value="<?php echo $p['director_en']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
        <tr valign="top">
            <td width="200">Director's Name in Thai : </td>
            <td><input name="director_th" type="text" id="director_th" size="50" value="<?php echo $p['director_th']; ?>" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
        <tr valign="top">
            <td width="200">Address : </td>
            <td><textarea id="center_address" name="center_address"  rows="2" cols="100"><?php echo $p['address']; ?></textarea></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
            <td>&nbsp;</td>
            <td align="center">
                <input style="height: 30px" type="submit" name="Submit" value="Confirm Edit" />
                <a id="cancel" href="lab.php"><strong>Cancel</strong></a>
            </td> 	
    	</tr>
    </table>
</form>

<?php
} // END Edit Center ------------------------------------------------------------

else if($_GET['add_lab']==1){ // Add New lab ------------------------------------
?>
<style type="text/css">
table, tr, td{
	border: solid 0px black;
}
</style>
<h2 align="center">Add New Research Lab.</h2>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table>
    	<tr valign="top">    		
            <input name="addL" type="hidden" id="addL" size="20" value="addLab" /></td>
        
            <td width="100">Lab Code: </td>
            <td><input name="lab_code" type="text" id="lab_code" size="20" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top"> 
            <td width="100">English Name: </td>
            <td><input name="lab_en" type="text" id="lab_en" size="100" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top">
            <td width="100">Thai Name: </td>
            <td><input name="lab_th" type="text" id="lab_en" size="100" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<?php
$sql2 = "SELECT *  
	FROM tb_re_center
	ORDER BY id
	;"; 
$result2 = mysql_query($sql2);
?>
        <tr valign="top">
            <td>Center Code: </td>
            <td>            	
                <select id="center_code" name="center_code">
            <?php while($p2 = mysql_fetch_array($result2)) {
			echo '
					<option value="'. $p2['re_center_code'] . '">'. $p2['re_center_code'] . '</option>';
			}?>
            	</select>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center">
      			<input style="height: 30px" type="submit" name="Submit" value="Confirm Add" />
        		<a id="cancel" href="lab.php"><strong>Cancel</strong></a>
            </td> 	
    	</tr>
    </table>
    
</form>

<?php
} // END Add New lab ------------------------------------

else if($_GET['add_center']==1){ // Add New Center ------------------------------
?>
<style type="text/css">
table, tr, td{
	border: solid 0px black;
}
</style>
<h2 align="center">Add New Research Center</h2>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table>
    	<tr valign="top">    		
            <input name="addC" type="hidden" id="addC" size="20" value="addCenter" />
        
            <td width="100">Center Code: </td>
            <td><input name="center_code" type="text" id="center_code" size="10" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top"> 
            <td width="100">English Name: </td>
			<td><input name="center_en" type="text" id="center_en" size="100" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top">
            <td width="100">Thai Name: </td>
			<td><input name="center_th" type="text" id="center_th" size="100" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr valign="top">
            <td width="200">Director's Name in English : </td>
			<td><input name="director_en" type="text" id="director_en" size="50" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
        <tr valign="top">
            <td width="200">Director's Name in Thai : </td>
			<td><input name="director_th" type="text" id="director_th" size="50" value="" /></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
        <tr valign="top">
            <td width="200">Address : </td>
            <td><textarea id="center_address" name="center_address"  rows="2" cols="100"></textarea></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr>
            <td>&nbsp;</td>
            <td align="center">
      		<input style="height: 30px" type="submit" name="Submit" value="Confirm Add" />
        	<a id="cancel" href="lab.php"><strong>Cancel</strong></a>
            </td> 	
    	</tr>
    </table>
</form>
<?php
} // END Add New Center ---------------------------------------------------------

// Show Center Address detail --------------------------------------------------//
else if($_GET['center_address'] == 'view'){
	$center_code = $_GET['center_address'];
?>

<h2 align="center">Research Center's Address</h2>
<table id="re_center" cellspacing="0" cellpadding="2">
<?php
$sql = "SELECT *  
	FROM tb_re_center
	ORDER BY id
	;";

$result = mysql_query($sql); 
?>	
	<tr>
    	<th>No.</th>	
	<th>Center Code</th>
        <th>Director</th>
        <th>Address</th>
	</tr>
<?php
while($p = mysql_fetch_array($result)) {
	
	$id = $p['id'];
	
	echo '
	<tr>
		<td>' . $p['id'] . '</td>
		<td align="center">' . $p['re_center_code'] . '</td>		
		<td>' . $p['director_th'] . '</td>
		<td>'. $p['address'] .'</td>					
	</tr>	
	';
} // END while

echo '</table>
<div>&nbsp;</div>
<div style="text-align: center; font-weight: bold;"><a href="lab.php"><< Back</a></div>
';	

}// END Show Center Address detail

else{ // Show Center and Lab Tables ---------------------------------------------//
?>
<h2 align="center">Research Center</h2>
<table id="re_center" cellspacing="0" cellpadding="2">
<?php
$sql = "SELECT *  
	FROM tb_re_center
	ORDER BY id
	;";

$result = mysql_query($sql); 

echo '
    <tr>
        <th>id</th>
        <th>Center code</th>
        <th>Center\'s Name in English</th>
        <th>Center\'s Name in Thai</th>
        <th>Director\'s Name in English</th>
        <th>Director\'s Name in Thai</th>
        <th>Address</th>
';

echo '  <th>...</th>
    </tr>';

while($p = mysql_fetch_array($result)) {
	
	$id = $p['id'];
	
	echo '
	<tr>
            <td>' . $p['id'] . '</td>
            <td align="center">' . $p['re_center_code'] . '</td>
            <td width="340">' . $p['re_center_en'] . '</td>
            <td width="272">' . $p['re_center_th'] . '</td>
            <td>' . $p['director_en'] . '</td>
            <td>' . $p['director_th'] . '</td>
            <td><a href="lab.php?center_address=view">view</a></td>
            <td><button id="' . $p['id'] . '" title="Edit" onclick="editCenter('. $p['id'] .');">Edit</button> <button title="Delete" onclick="delCenter(' . $p['id'] . ');">Delete</button> </td>			
	</tr>	
	';
}
	
?>
	<tr>
            <td colspan="7">&nbsp;</td>
            <td><button id="add_center" onclick="addCenter()"><strong>Add New Center</strong></button></td>
	</tr>
</table>

<p>&nbsp;</p><p>&nbsp;</p>

<h2 align="center">Research Laboratory</h2>
<table id="re_lab" cellspacing="0" cellpadding="2">
<?php
$sql = "SELECT *  
	FROM tb_re_lab
	ORDER BY id
	;";

$result = mysql_query($sql);

echo '
    <tr>
        <th>id</th>
        <th>Lab. code</th>
        <th>Lab. \'s Name in English</th>
        <th>Lab. \'s Name in Thai</th>
        <th>Center code</th>
';

echo '<th>...</th>
	</tr>';

while($p = mysql_fetch_array($result)) {
	
	$id = $p['id'];
	
	echo '
	<tr>
		<td>' . $p['id'] . '</td>
		<td width="100">' . $p['re_lab_code'] . '</td>
		<td width="290">' . $p['re_lab_en'] . '</td>
		<td width="230">' . $p['re_lab_th'] . '</td>
		<td align="center">' . $p['re_center_code'] . '</td>
		<td><button id="' . $p['id'] . '" title="Edit" onclick="editLab('. $p['id'] .');">Edit</button> <button title="Delete" onclick="delLab(' . $p['id'] . ');">Delete</button> </td>			
	</tr>	
	';
}
	
?>
	<tr>
		<td colspan="5">&nbsp;</td>
		<td><button id="add_lab" onclick="addLab()"><strong>Add New Lab</strong></button></td>
	</tr>
</table>

<?php } // END Show Lab And Center Tables ---------------------------------------------

require_once $pathf->inc_file('footer');
?>
</body>
</html>