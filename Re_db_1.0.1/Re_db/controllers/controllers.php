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

        switch ($nameArr[$num - 1]) {
            case "pdf" :
                return 'pdf';
                break;
            case "doc" :
                return 'doc';
                break;
            case "docx" :
                return 'docx';
                break;
            case "jpg" :
                return 'jpg';
                break;
            case "png" :
                return 'png';
                break;
            default :
                return 'pdf';
        }
    }

// END function
    
    function rename_old($id, $year){        
        $dir = $this->inc_dir('paper_upload');
        
        if(file_exists($dir . '/' . $id)){
            
            $sql_fname = "SELECT *  
		FROM tb_article
		WHERE id = $id
		;";
            $result_fname = mysql_query($sql_fname);
        
            $p = mysql_fetch_array($result_fname);
        
            $file_type = $this->get_file_type($p['file_name']);

            $new_file_name = $id . '_'  . $year . '.' . $file_type;
            
            $old_path = $dir . '/' . $id . '/' . $p['file_name'];
            
            $new_path = $dir . '/' . $id . '/' . $new_file_name;
            
            if(file_exists($old_path)){
                if(rename($old_path, $new_path)){
                    
                    $sql_update = "UPDATE tb_article 
                               SET
                                   file_name = '$new_file_name'
                               WHERE id = $id
                    ;";
                    @mysql_query($sql_update) or die('Error: ' . mysql_error());
                    
                }else{
                    echo 'ERROR : Cannot rename file. [rename($old_path, $new_path)]';
                    exit;
                }
            }else{
                echo 'ERROR : No file found';
                exit;
            }
            
        }
    } // END rename_old    


    function page_value() {
        $sql_count = "SELECT COUNT(*) AS num_rows
                            FROM tb_article                    
                ;";
        $result_count = mysql_query($sql_count);
        $p_num = mysql_fetch_array($result_count);
        return ceil($p_num['num_rows'] / _ROWS_PER_PAGE);
    }
    
    function greek_list(){
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
    } // END function

} // END class controllers
?>