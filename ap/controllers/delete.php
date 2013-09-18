<?php

//**********************************************************************************************//
//This page is used for deleting the data in the 'tb_picture' , 'tb_gallery' and 'tb_news'.
//
//
//
//**********************************************************************************************//

require_once '../system/system.php';

$pathf = new config();
$controll = new controllers();

//Check USER************************************
if (!isset($_SESSION['login'])) {
    header("Location: ../views/index.php");
    exit;
}
//**********************************************

if (isset($_GET['del_pic'])) {
    $del_pic = $_GET['del_pic'];

    $sql_g = "SELECT * FROM tb_picture WHERE id = $del_pic;";
    $r_g = mysql_query($sql_g);
    $g = mysql_fetch_array($r_g);

    $path = $controll->inc_dir('views') . '/img/picture/' . $g['name'];

    $sql = "DELETE FROM tb_picture WHERE id = $del_pic;";
    @mysql_query($sql) or die(header("Location: index.php"));

    if (file_exists($path)) {
        unlink($path);
    }

    header("Refresh: 2; url={$pathf->inc_file('gallery')}");
    echo "The picture id = $del_pic was deleted ...";
    exit;
} 
    
if(isset($_GET['del_person'])){
    $del_person = $_GET['del_person'];
    $sql = "DELETE FROM tb_personel WHERE id = $del_person;";
    @mysql_query($sql) or die(header("Location: ../views/personel.php"));
    header("Refresh: 2; url=../views/personel.php");
    echo "The personel id = $del_person was deleted ...";
    exit;
}

header("Location: {$pathf->inc_file('gallery')}");
exit;
?>