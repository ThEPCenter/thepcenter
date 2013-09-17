<?php

//===================== Functions =========================

function removedir($dr) {
    $d = opendir($dr);
    while ($file = readdir($d)) {
        if ($file == "." || $file == "..") {
            continue;
        }
        if (is_dir($dr . "/" . $file)) {
            rmdir($dr . "/" . $file);
        } else {
            unlink($dr . "/" . $file);
        }
    }

    closedir($d);

    return rmdir($dr);
}

//END function removedir

function fileExist($id, $file_name, $dir, $exist, $notex) {
    $path = $dir . '/' . $id . '/' . $file_name; // Please Check directory first!!!!!!!!!!!!
    if (file_exists($path)) {
        $fileEx = $exist;
    } else {
        $fileEx = $notex;
    }
    return $fileEx;
}

//END function fileExist

function thai_date($str_date, $show_day = "n") {
    $time_stamp = strtotime($str_date);
    $days = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
    $months = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $d = date('w', $time_stamp);
    $day = $days[$d];
    $date = date('j', $time_stamp);
    $m = date('m', $time_stamp) - 1;
    $month = $months[$m];
    $year = date('Y', $time_stamp) + 543;
    if ($show_day == 'y') {
        return "วัน$day ที่ $date $month พ.ศ.$year";
    } else {
        return "$date $month $year";
    }
}

function path_controll($action) {
    $conf = new config();
    return $conf->inc_dir('controllers') . '/' . $action . '.php';
}

function controll($action) {
    require_once path_controll($action);
}

function get_inc($inc) {
    $conf = new config();
    require_once $conf->inc_dir('includes') . '/' . $inc . '.php';
}

function get_dir($dir) {
    $conf = new config();
    return $conf->inc_dir($dir);
}

function plugins() {
    echo get_dir('plugins');
}

function get_plugins() {
    return get_dir('plugins');
}

function main_ui($type) {
    return get_plugins() . '/' . _MAIN_UI_ . '/' . $type;
}

function main_ui_css() {
    echo main_ui('css');
}

function main_ui_js() {
    echo main_ui('javascript');
}

function title($title) {
    echo "<title>$title</title>";
}

// File Upload
function get_type($file_name){
    $controll = new controllers();
    return $controll->get_file_type($file_name);
}

// News
function th_name_news($news_type){
    $controll = new controllers();
    return $controll->name_news($news_type);
}

function news_type($get_type){
    $controll = new controllers();
    return $controll->check_type($get_type);
}

function news_check($get_type, $check_type, $what_page){
    $controll = new controllers();
    return $controll->check_news($get_type, $check_type, $what_page);
}

function number_news($new_type){
    $controll = new controllers();
    echo $controll->num_news($new_type);
}
?>