<?php

session_start();

// Config
require_once 'config.php';
$conf = new config();

// Database Connection
$conf->db_connect();

// Set timzone : Bkk +7 ---------------
$conf->db_set_time_zone();

// Functions
require_once 'functions.php';

?>