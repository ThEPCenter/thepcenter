<?php
/*
//****************************************************
//ThEP Research Database System vesion 1.0.1 beta
//Created: June 5, 2013. 10:35 am GMT+7(BKK).
//last update : June 13, 2013. 4:36 pm GMT+7(BKK).
//
|
|
|
*/
//****************************************************

session_start();

// Config
require_once 'config.php';
$conf = new config();

// Database Connection
$conf->db_connect();

// Set timzone : Bkk +7---------------
$conf->db_set_time_zone();

// Functions
require_once 'functions.php';

?>