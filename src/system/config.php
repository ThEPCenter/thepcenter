<?php

//******************************
//___________CONFIG______________
//*******************************
define("VERSION", "0.9a");

//=========== definition ===============================

define("HOST", "localhost");

define("USER", "root");
define("PASS", "1234");
define("DB_NAME", "db_thep");

define("DOMAIN", "http://localhost/thepcenter"); /* setting for real website =>  "http://www.thep-center.org"  */
define("DOMAIN_NAME", "www.thep-center.org");

define("MAIN", "index.php");

define("BASEPATH", DOMAIN . "/src/");

define("_MAIN_UI_", "");

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

    function db_connect() {
        @mysql_connect(HOST, USER, PASS) or die(mysql_error());
        mysql_select_db(DB_NAME);
        mysql_query("SET NAMES UTF8");
    }

    function db_set_time_zone() {
        // Set timzone Bkk +7---------------
        $timezone = "Asia/Bangkok";
        if (function_exists('date_default_timezone_set'))
            date_default_timezone_set($timezone);

        mysql_query("SET SESSION time_zone = '+7:00'");
    }

    // ====== Base Directory & Path ======================
    function base_dir($dir) {
        return BASEPATH . $dir;
    }

    function controllers_path($name) {
        return $this->base_dir('controllers') . $name . '.php';
    }

    function includes_path($name) {
        return $this->base_dir('includes') . $name . '.php';
    }

    function script_path($file_name) {
        return $this->base_dir('script') . $file_name;
    }

    function views_path($name) {
        return $this->base_dir('views') . $name . '.php';
    }

    // =======================================
    // ===========File and Directory  ======================

    function controllers($name) {
        return '../controllers/' . $name . '.php';
    }

    function includes($name) {
        return '../includes/' . $name . '.php';
    }

    function plugins($file_name) {
        return '../plugins/' . $file_name;
    }

    function script($file_name) {
        return '../script/' . $file_name;
    }

    function style($file_name) {
        return '../style/' . $file_name;
    }
    
    function themes($file_name){
        return '../themes/' . $file_name;
    }

    function views($name) {
        return '../views/' . $name . '.php';
    }

    function uploads($file_name) {
        return '../upload/' . $file_name;
    }

    // ===========================================   
}

// END class config
?>