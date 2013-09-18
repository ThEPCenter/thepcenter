<?php

/*
 * *************************
  Controllers
 * *************************
 */

class controllers extends config {

    function get_file_type($file_name) {
        $name = strtolower($file_name);
        $nameArr = explode(".", $name);
        $num = count($nameArr);        
        return $nameArr[$num - 1];      
    }

// END function

    function rename_old($id, $year) {
        $dir = $this->inc_dir('paper_upload');

        if (file_exists($dir . '/' . $id)) {

            $sql_fname = "SELECT *  
		FROM tb_article
		WHERE id = $id
		;";
            $result_fname = mysql_query($sql_fname);

            $p = mysql_fetch_array($result_fname);

            $file_type = $this->get_file_type($p['file_name']);

            $new_file_name = $id . '_' . $year . '.' . $file_type;

            $old_path = $dir . '/' . $id . '/' . $p['file_name'];

            $new_path = $dir . '/' . $id . '/' . $new_file_name;

            if (file_exists($old_path)) {
                if (rename($old_path, $new_path)) {

                    $sql_update = "UPDATE tb_article 
                               SET
                                   file_name = '$new_file_name'
                               WHERE id = $id
                    ;";
                    @mysql_query($sql_update) or die('Error: ' . mysql_error());
                } else {
                    echo 'ERROR : Cannot rename file. [rename($old_path, $new_path)]';
                    exit;
                }
            } else {
                echo 'ERROR : No file found';
                exit;
            }
        }
    }

// END rename_old    

    function page_value() {
        $sql_count = "SELECT COUNT(*) AS num_rows
                            FROM tb_article                    
                ;";
        $result_count = mysql_query($sql_count);
        $p_num = mysql_fetch_array($result_count);
        return ceil($p_num['num_rows'] / _ROWS_PER_PAGE);
    }

    function greek_list() {
        include $this->inc_file('greek');
        while (list($k, $v) = each($greek1)) {
            echo '
                           [<span id="' . $k . '" class="letters" onclick="insertAtCaret(\'name\',\'' . $v . '\');return false;">' . $v . '</span>]';
        } // END while

        echo '<br />';

        while (list($k, $v) = each($greek2)) {
            echo '
                           [<span id="' . $k . '" class="letters" onclick="insertAtCaret(\'name\',\'' . $v . '\');return false;">' . $v . '</span>]';
        } // END while
    }

// END function

    function chk_dis($x, $y) {

        if ($x == $y) {
            echo ' checked';
        } else {
            echo ' disabled';
        }
    }
    
    function chk_nodis($x, $y){
        if ($x == $y) {
            echo ' checked';
        }
    }

    function check_type($get_type) {
        switch ($get_type) {
            case 'network_academic':
                return 'network_academic';
                break;
            case 'pr':
                return 'pr';
                break;
            case 'activity':
                return 'activity';
                break;
            case 'gen_academic':
                return 'gen_academic';
                break;
            default:
                return 'network_academic';
                break;
        }
    } // END function check_news

    function check_news($get_type, $check_type, $what_page) {
        $news = $this->check_type($get_type);
        if ($what_page == 'add') {            
            $this->chk_dis($news, $check_type);        
        } else {
            $this->chk_nodis($news, $check_type);
        }
    } // END function check_news



    function num_news($new_type){
        $sql = "SELECT *  
                FROM tb_news
                WHERE type = '$new_type';
               ";
        $result = mysql_query($sql);
        echo mysql_num_rows($result);
    }
    
    function name_news($news_type){
        switch($news_type){
            case 'network_academic':
                echo 'ข่าววิชาการจากเครือข่าย';
                break;
            case 'pr':
                echo 'ข่าวประชาสัมพันธ์';
                break;
            case 'activity':
                echo 'ข่าวกิจกรรม';
                break;
            case 'gen_academic':
                echo 'ข่าววิชาการทั่วไป';
                break;
            default:
                return 'ไม่พบข้อมูล';
                break;
        }
    }
    

}// END class controllers
?>