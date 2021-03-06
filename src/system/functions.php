<?php

// ===================== Functions =========================

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

// END function removedir

function fileExist($id, $file_name, $dir, $exist, $notex) {
    $path = $dir . '/' . $id . '/' . $file_name; // Please Check directory first!!!!!!!!!!!!
    if (file_exists($path)) {
        $fileEx = $exist;
    } else {
        $fileEx = $notex;
    }
    return $fileEx;
}

// END function fileExist

function get_file_type($file_name) {
    $name = strtolower($file_name);
    $nameArr = explode(".", $name);
    $num = count($nameArr);
    return $nameArr[$num - 1];
}

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

// =============== Controllers =================
function controller($name) {
    $conf = new config();
    return $conf->controllers($name);
}

function controll($name) {
    echo controller($name);
}

function get_controll($name) {
    $conf = new config();
    require_once $conf->controllers($name);
}

// ================ Includes ===================
function includes($name) {
    $conf = new config();
    echo $conf->includes($name);
}

function get_includes($name) {
    $conf = new config();
    require_once $conf->includes($name);
}

// ================= Plugins ======================
function plugins($file_name) {
    $conf = new config();
    echo $conf->plugins($file_name);
}

function script($file_name) {
    $conf = new config();
    echo '<script src="' . $conf->script($file_name) . '"></script>';
}

function style($file_name) {
    $conf = new config();
    echo '<link href="' . $conf->style($file_name) . '" rel="stylesheet">';
}

// ======================= Theme =======================
function theme($file_name) {
    $conf = new config();
    echo $conf->themes($file_name);
}

function views($name) {
    $conf = new config();
    echo $conf->views($name);
}

function get_views($name) {
    $conf = new config();
    require_once $conf->views($name);
}

function uploads($file_name) {
    $conf = new config();
    echo $conf->uploads($file_name);
}

function doc_head($title) {
    get_includes('doc-head');
    echo '
        <title>' . $title . '</title>
    ';
}

// ============ SESSION =======================================================
function login($output, $not_login = '') {
    if (isset($_SESSION['login'])) {
        echo $output;
    } else {
        echo $not_login;
    }
}

function user_property($property) {
    if (isset($_SESSION['login'])): $login_name = $_SESSION['login']; else : $login_name = ''; endif;
    $sql = "SELECT * FROM tb_new_user WHERE username = '{$login_name}';";
    $result = mysql_query($sql);
    if (!empty($result)) {
        $u = mysql_fetch_array($result);
        return $u[$property];
    } else {
        return '';
    }
}

function user($property) {
    echo user_property($property);
}

function admin($yes, $no = '') {
    if (user_property('level') == 10) {
        echo $yes;
    } else {
        echo $no;
    }
}

function header_redirect($location) {
    header("Location: $location");
    exit();
}

function js_redirect($location) {
    echo '
<script>
window.location = " ' . $location . ' ";
</script>
    ';
    exit();
}

function login_header($location) {
    if (isset($_SESSION['login'])) {
        header_redirect($location);
    }
}

function notlogin_header($location) {
    if (!isset($_SESSION['login'])) {
        header_redirect($location); 
    }
}

function is_login_header($location_1, $location_2) {
    if (isset($_SESSION['login'])) {
        header_redirect($location_1);
    } else {
        header_redirect($location_2);
    }
}

function login_js($location) {
    if (isset($_SESSION['login'])) {
        js_redirect($location);
    }
}

function notlogin_js($location) {
    if (!isset($_SESSION['login'])) {
        js_redirect($location);
    }
}

function is_login_js($location_1, $location_2) {
	 if (isset($_SESSION['login'])) {
        js_redirect($location_1);
    }else{
		js_redirect($location_2);
	}
}

// ============= News ===================
function name_news($news_type) {
    switch ($news_type) {
        case 'network-academic':
            echo 'ข่าววิชาการจากเครือข่าย';
            break;
        case 'pr':
            echo 'ข่าวประชาสัมพันธ์';
            break;
        case 'activity':
            echo 'ข่าวกิจกรรม';
            break;
        case 'gen-academic':
            echo 'ข่าววิชาการทั่วไป';
            break;
        default:
            return 'ไม่พบข้อมูล';
            break;
    }
}

// ============================================

function social_name_th($social_type){
    if($social_type == 'industrial'){
        echo 'ฟิสิกส์อุตสาหกรรม';
    }elseif ($social_type == 'daily-life') {
        echo 'ฟิสิกส์ในชีวิตประจำวัน';
    }
}

?>