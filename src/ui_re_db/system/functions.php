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

function head_order($htb, $tbh, $ord) {
    if ($htb == $tbh) {
        if ($ord == 'ASC') {
            $ordh = 'DESC';
        } else {
            $ordh = 'ASC';
        }
    } else {
        $ordh = 'ASC';
    }
    return $ordh;
}

//END function head_order

function article_table_head($htb) {
    switch ($htb) {
        case "id":
            $str = 'id';
            break;
        case "name":
            $str = 'Title';
            break;
        case "author":
            $str = 'Author';
            break;
        case "c_author":
            $str = 'Corresponding author';
            break;
        case "journal":
            $str = 'Journal';
            break;
        case "volume":
            $str = 'Volume';
            break;
        case "issue":
            $str = 'Issue/ No.';
            break;
        case "page":
            $str = 'Page';
            break;
        case "year":
            $str = 'Year';
            break;
        case "impact":
            $str = 'Impact factor';
            break;
        case "research_center":
            $str = 'Center Code';
            break;
        case "research_lab":
            $str = 'Lab Code';
            break;
        case "detail":
            $str = 'Detail';
            break;
        case "file_name":
            $str = 'E-file';
            break;
    }
    return $str;
}

//END function article_table_head
?>