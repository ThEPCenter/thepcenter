<?php 
include "../system/system.php";

$pathf = new config();

if($_POST){
	//Get values of user login and escape username and password for use in SQL
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);

		while(list($k, $v)= each($user)){
			if($username == $k && $pass == $v){
				$_SESSION['login'] = $username;
				$_SESSION['pass'] = $pass;
				break;				
			}else{
				unset($_SESSION['login']);
				unset($_SESSION['pass']);
			}
		}// END while
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThEP Research Database System</title>
<link rel="stylesheet" type="text/css" href="<?php echo $pathf->path_file('article'); ?>" />
<style type="text/css">
table, tr, td{
	border: solid 0px black;
}
</style>

</head>

<body>
<?php
if(isset($_SESSION['login'])){
	include '../includes/header.php'; ?>
<div align="center">
	<h2 align="center">Search Article</h2>
	<input size="100" value="Coming soon............." /> 
</div>
<?php
}else{
?>
<div id="header">
	<h1 align="center">ThEP Redb ver. 1.0.1</h1>	
</div>

<div id="content">
	<h2 align="center">Please Log in</h2>
	<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
	<table align="center">
    	<tr>
        	<td>Username:</td>
        	<td>
            	<input name="username" type="text" id="username" size="28" />
            	<!-- AJAX code for check "name" -->
        	</td>
    	</tr>
    	<tr>
        	<td>Password:</td>
        	<td>
            	<input name="password" type="password" id="password" size="28" />
        	</td>
   	 	</tr>
    	<tr>
      		<td>&nbsp;</td>
      		<td align="center"><input type="submit" name="Submit" value="Log in" /></td>
    	</tr>
        <tr>
    		<td>&nbsp;</td>
    		<td>&nbsp;</td>
		</tr>
        <tr>
    		<td>&nbsp;</td>
    		<td>Go to <a href="<?php echo DOMAIN; ?>"><?php echo DOMAIN_NAME; ?></a></td>
		</tr>
	</table>
	</form>
</div>
<?php } ?>

<div>&nbsp;</div>

<?php
include $pathf->inc_file('footer');
?>
</body>
</html>