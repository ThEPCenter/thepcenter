<?php

session_start();

// Config
require_once 'config_5.5.php';
$conf_5_5 = new config();

// Database Connection
$conf_5_5->db_connect();

// Set timzone : Bkk +7 ---------------
$conf_5_5->db_set_time_zone();

// Functions
require_once 'functions.php';

?>