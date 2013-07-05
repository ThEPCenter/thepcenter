<?php

//**********************************************************************************************//
//This page is used for deleting the data in the 'tb_article' , 'tb_re_lab' and 'tb_re_center'.
//
//
//
//**********************************************************************************************//

require_once '../system/system.php';

$pathf = new config();
$controll = new controllers();

//Check USER************************************
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
//**********************************************

if(isset($_GET['del_lab'])){
    $del_lab = $_GET['del_lab'];
    /*
    $sql = "DELETE FROM tb_re_lab
            WHERE id=$del_lab;		
    ";
	
    @mysql_query($sql) or die(header("Location: index.php"));
    */
    header("Refresh: 2; url={$pathf->inc_file('lab')}#re_lab");
	
    echo "Sorry! You are not allow to delete the data.";
    //echo "The Lab id=$del_lab was deleted...";	
    exit;
}
else if(isset($_GET['del_center'])){
    $del_center = $_GET['del_center'];
    /*
    $sql = "DELETE FROM tb_re_center
            WHERE id=$del_center;		
    ";
	
    @mysql_query($sql) or die(header("Location: index.php"));
    */
    header("Refresh: 2; url={$pathf->inc_file('lab')}#re_center");
	
    echo "Sorry! You are not allow to delete the data.";
    //echo "The Center id=$del_lab was deleted...";	
    exit;

}else if(isset($_GET['del_article'])){	
    $del_article = $_GET['del_article'];
	
    //--------- Get path of the file to delete -------------
    $sql0 = "SELECT *  
            FROM tb_article
            WHERE id = $del_article
    ;";
	
    $result = mysql_query($sql0);
	
    $p = mysql_fetch_array($result);	
	
    $dir = $pathf->inc_dir('paper_upload') . '/' . $p['id'];
	
    //----------- Delete Record of article $id = $del_article ------------------------------------
	
    $sql = "DELETE FROM tb_article
            WHERE id=$del_article;		
    ";	
	
    @mysql_query($sql) or die(header("Location: index.php"));
	
    //Delete file ---------------------------------------------------------------------------------
    if(file_exists($dir)){
        removedir($dir);
    }
	
    header("Refresh: 2; url={$pathf->inc_file('show')}");
	
    //echo "Sorry! You are not allow to delete the data.";
    echo "The article id=$del_article was deleted...";	
    exit;
	
}else if(isset($_GET['del_file'])){	
    $del_file_id = $_GET['del_file'];
	
    $tbh = $_GET['tbh'];
    $ord = $_GET['ord'];
    $page = $_GET['page'];
	
    //--------- Get path of the file to delete -------------
    $sql0 = "SELECT *  
            FROM tb_article
            WHERE id = $del_file_id
    ;";
	
    $result = mysql_query($sql0);
	
    $p = mysql_fetch_array($result);	
	
    $dir = $pathf->inc_dir('paper_upload') .'/' . $p['id'];
	
    //Delete file ---------------------------------------------------------------------------------
    if(file_exists($dir)){
	removedir($dir);
    }
	
    //Edit data in field 'file_name'
    $sql = "UPDATE tb_article 
            SET file_name = 'No File'	
            WHERE id = $del_file_id;
    ";
		
    @mysql_query($sql) or die ('Error: '.mysql_error ());
	
    header("Refresh: 2; url={$pathf->inc_file('edit')}?id=$del_file_id&tbh=$tbh&ord=$ord&page=$page");
    echo "The file was deleted...";	
    exit;
	
}else{
    header("Location: index.php");
    exit;
}
?>