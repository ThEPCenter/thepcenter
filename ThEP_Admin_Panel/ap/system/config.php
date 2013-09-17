<?php
//******************************
//___________CONFIG______________
//*******************************
define("VERSION", "1.0");

//=========== definition ===============================

define("HOST", "localhost");

define("USER", "root");
define("PASS", "1234");
define("DB_NAME", "db_thep");

define("DOMAIN", "http://localhost/ThEP_Admin_Panel"); /* setting for real web=>  http://www.thep-center.org  */
define("DOMAIN_NAME", "thep-center.org");

define("MAIN", "index.php");

define("BASEPATH", DOMAIN . "/ap/");

define("_MAIN_UI_", "Metro-UI-CSS-master");

define("_ROWS_PER_PAGE", 10);

//=======================================================
//=================== System Users =====================
//Users are in the system.
global $user;

$user = array(
    'pr001' => 'xxx',
    're001' => 'yyy'
);

//=======================================================

class config {
    
    function db_connect(){
        @mysql_connect(HOST, USER, PASS) or die(mysql_error());
        mysql_select_db(DB_NAME);
        mysql_query("SET NAMES UTF8");
    }
    
    function db_set_time_zone(){
        // Set timzone Bkk +7---------------
        $timezone = "Asia/Bangkok"; 
        if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone); 

        mysql_query("SET SESSION time_zone = '+7:00'");
    }

    function config_dir($dir) {
        switch ($dir) {
            case "controllers" :
                return BASEPATH . 'controllers';
                break;
            case "image" :
                return BASEPATH . 'image';
                break;
            case "includes" :
                return BASEPATH . 'includes';
                break;
            case "script" :
                return BASEPATH . 'script';
                break;
            case "style" :
                return BASEPATH . 'style';
                break;
            case "system" :
                return BASEPATH . 'system';
                break;
            case "upload" :
                return "upload";
                break;
            case "views" :
                return BASEPATH . 'views';
                break;
        }
    }

// END function config_dir

    function path_file($file_name) {
        switch ($file_name) {
            // controllers
            case "delete" :
                return $this->config_dir('controllers') . '/delete_news.php';
                break;
            case "logout" :
                return $this->config_dir('controllers') . '/logout.php';
                break;

            // includes
            case "footer" :
                return $this->config_dir('includes') . '/footer.php';
                break;            
            case "header" :
                return $this->config_dir('includes') . '/header.php';
                break;
            case "meta_script" :
                return $this->config_dir('includes') . '/meta_script.php';
                break;
            case "paging" :
                return $this->config_dir('includes') . '/paging.inc.php';
                break;

            // script
            case "jquery" :
                return $this->config_dir('script') . '/jquery.js';
                break;
            case "title" :
                return $this->config_dir('script') . '/title.js';
                break;            

            // style
            case "site" :
                return $this->config_dir('style') . '/site.css';
                break;

            // system
            case "config" :
                return $this->config_dir('system') . '/config.php';
                break;
            case "functions" :
                return $this->config_dir('system') . '/functions.php';
                break;
            case "system" :
                return $this->config_dir('system') . '/system.php';
                break;
            
            // views
            case "add_news" :
                return $this->config_dir('views') . '/add_news.php';
                break;
            case "edit_news" :
                return $this->config_dir('views') . '/edit_news.php';
                break;
            case "index" :
                return $this->config_dir('views') . '/index.php';
                break;
            case "show" :
                return $this->config_dir('views') . '/show_news.php';
                break;
        }
    }

// END function path_file

    function inc_dir($dir) {
        switch ($dir) {
            case "controllers" :
                return '../controllers';
                break;
            case "image" :
                return '../image';
                break;
            case "includes" :
                return '../includes';
                break;
            case "plugins" :
                return '../../plugins';
                break;
            case "script" :
                return '../script';
                break;
            case "style" :
                return '../style';
                break;
            case "system" :
                return '../system';
                break;
            case "upload" :
                return '../../upload';
                break;
            case "views" :
                return '../views';
                break;
        }
    }

// END function inc_dir

    function inc_file($file_name) {
        switch ($file_name) {
            // controllers
            case "controllers" :
                return $this->inc_dir('controllers') . '/controllers.php';
                break;
            case "delete" :
                return $this->inc_dir('controllers') . '/delete.php';
                break;
            case "logout" :
                return $this->inc_dir('controllers') . '/logout.php';
                break;

            // includes
            case "footer" :
                return $this->inc_dir('includes') . '/footer.php';
                break;
            case "header" :
                return $this->inc_dir('includes') . '/header.php';
                break;            
            case "meta_script" :
                return $this->inc_dir('includes') . '/meta_script.php';
                break;
            case "paging" :
                return $this->inc_dir('includes') . '/paging.inc.php';
                break;

            // script
            case "jquery" :
                return $this->inc_dir('script') . '/jquery.js';
                break;
            case "title" :
                return $this->inc_dir('script') . '/title.js';
                break;

            // style
            case "site" :
                return $this->inc_dir('style') . '/site.css';
                break;

            // system
            case "config" :
                return $this->inc_dir('system') . '/config.php';
                break;
            case "functions" :
                return $this->inc_dir('system') . '/functions.php';
                break;
            case "system" :
                return $this->inc_dir('system') . '/system.php';
                break;
            // views
            case "add" :
                return $this->inc_dir('views') . '/add.php';
                break;
            case "edit" :
                return $this->inc_dir('views') . '/edit.php';
                break;
            case "gallery" :
                return $this->inc_dir('views') . '/gallery.php';
                break;
            case "index" :
                return $this->inc_dir('views') . '/index.php';
                break;
            case "lab" :
                return $this->inc_dir('views') . '/lab.php';
                break;
            case "picture" :
                return $this->inc_dir('views') . '/picture.php';
                break;
            case "show" :
                return $this->inc_dir('views') . '/show.php';
                break;
        }
    } // END function inc_file
    
} // END class config


class template extends config {
    
    function getDoct($version){ 
        if($version == 4.01){
            return '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        }else if($version == 5){
            return '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">';
        }
    } // END getDoct
        
    
    function getTitle($html_ver, $title){        
        $title_tag = '<title>'. $title .'</title>';        
        if($html_ver == 4.01){
            return $this->getDoct($html_ver) . $title_tag;
        }else if($html_ver == 5){
            return $this->getDoct($html_ver) . $title_tag;
        }       
    } // END getTitle
    
    function getstyle_script($style_tag, $script_tag, $script_name){
        $style_link = '
        <link rel="stylesheet" type="text/css" href="' . $this->inc_file('article') . '" />';        
        $jquery_link = '
        <script type="text/javascript" src="' . $this->inc_file('jquery') . '"></script>';        
        $script_link = (empty($script_name)) ? 
            $jquery_link : $jquery_link . '
        <script type="text/javascript" src="' . $this->inc_file($script_name) . '"></script>';   
        return $style_link . $style_tag . $script_link . $script_tag;
    }
    
    function getHead($html_ver, $title, $style_tag, $script_tag, $script_name){
        return  $this->getTitle($html_ver, $title) . 
                $this->getstyle_script($style_tag, $script_tag, $script_name).'    
    </head>
    ';        
    } // END getHead
    
    
} // END class template

?>