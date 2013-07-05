<?php
require_once '../system/system.php';

$pathf = new config();
$templ = new template();
$controll = new controllers();


//Check USER************************************
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}
//**********************************************
//Edit data in tb_article ================================================================================================================================
if (isset($_POST['a_id'])) {
    //Get variable value from FORM-------------------------------
    //**************Don't forget to protect a XSS ***************
    $id = $_POST['a_id'];
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $author = htmlspecialchars($_POST['author'], ENT_QUOTES);
    $c_author = htmlspecialchars($_POST['c_author'], ENT_QUOTES);
    $journal = htmlspecialchars($_POST['journal'], ENT_QUOTES);
    $volume = htmlspecialchars($_POST['vol'], ENT_QUOTES);
    $issue = htmlspecialchars($_POST['issue'], ENT_QUOTES);
    $apage = htmlspecialchars($_POST['apage'], ENT_QUOTES);
    $year = $_POST['year'];
    $impact = $_POST['impact'];
    $research_center = htmlspecialchars($_POST['research_center'], ENT_QUOTES);
    $research_lab = htmlspecialchars($_POST['research_lab'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
    //$efile = $_POST['efile'];

    $get_page = $_POST['get_page'];

    if ($_FILES['efile']['error'] == 0) { //IF new file upload ---------------------------------------------------------------------------------------------
        //GET value of new file
        $file = $_FILES['efile']['tmp_name'];
        $efile_name = htmlspecialchars($_FILES['efile']['name'], ENT_QUOTES);
        
        $new_file_name = $id . '_' . $year . '.' . $controll->get_file_type($efile_name);        

        // Delete old file ---------------------------------------------------------------------------------
        $sql2 = "SELECT *  
		FROM tb_article
		WHERE id = $id
	;";
        $result2 = mysql_query($sql2);

        $p2 = mysql_fetch_array($result2);

        $dir2 = $pathf->inc_dir('paper_upload') . '/' . $id; // remove this if upload new file and upload new file to this folder    
        
		//Delete old file ---------------------------------------------------------------------------------
        if (file_exists($dir2)) {
            removedir($dir2);
        }
        //END Delete old file -----------------------------------------------------------------------------//
		
        //Replace all fields ----------------------------------------------------------------------------
        $sql = "REPLACE INTO tb_article 
                VALUES
                    ($id, '$name', '$author',  '$c_author', '$journal', '$volume', '$issue', '$apage', $year, $impact, '$research_center', '$research_lab', '$detail', '$new_file_name')
        ;";
        @mysql_query($sql) or die('Error: ' . mysql_error());

        //END Replase all fields --------------------------------------------------------------------------//
        //upload new file ---------------------------------------------------------
        $sql3 = "SELECT *  
		FROM tb_article
		WHERE id = $id
	;";
        $result3 = mysql_query($sql3);

        $p3 = mysql_fetch_array($result3);

        $path_ex = $pathf->inc_dir('paper_upload') . '/' . $id; // <<<< delete or upload file to this folder
        
        $path_new = $path_ex . '/' . $new_file_name;

        if (file_exists($path_ex)) {            
            removedir($path_ex);
        }		
          
        if (mkdir($path_ex)) {//Create folder and upload file to this folder
            if (move_uploaded_file($file, $path_new)) {				
             
                header("Refresh: 2; url=show.php?page=$get_page#$id");
                echo "Data Updated and New File uploded ...";
                exit;
            }else{
                header("Refresh: 2; url=show.php#?page=$get_page#$id");
                echo "ERROR: Can not upload new file ...";
                exit;
            }
        } else {
            header("Refresh: 2; url=index.php");
            echo "ERROR Make directory";
            exit;
        }       
        
    } else { // No new file uploaded ***************************** 
        $sql = "UPDATE tb_article 
                SET 
                    name = '$name', author = '$author', c_author = '$c_author', journal = '$journal', volume = '$volume', issue ='$issue', page = '$apage', 
                    year = '$year', impact = '$impact', research_center = '$research_center', research_lab = '$research_lab', detail = '$detail'
		WHERE 
                    id = $id
        ;";
        @mysql_query($sql) or die('Error: ' . mysql_error());        
        
        // Rename file        
        $controll->rename_old($id, $year);
        
        header("Refresh: 1; url=show.php?page=$get_page#$id");
        echo "Data Updated ...";
        exit;
    } // END no new file upload ---------------------------------------------------------------------------------------------------------------------------

    
} // END IF POST 
 
 //END Edit data in tb_article =============================================================================================================================
 
 //Check id to edit =======================
if (!$_GET['id'] || $_GET['id'] < 1) {
    header("Location: show.php");
    exit;
} else {
    $id = $_GET['id'];
    $tbh = $_GET['tbh'];
    $ord = $_GET['ord'];
    $page = $_GET['page'];
}
//=========================================

//Option selected --------------------
function OPS($x, $y) {
    if ($x == $y) {
        return ' selected';
    }
} // END function OPS

function fileNameLink($id, $file_name, $dir) {
    $path = $dir . '/' . $id . '/' . $file_name;
    $ex = '<a href="' . $path . '" target="_blank">' . $file_name . '</a>';
    $notex = 'No File';
    echo fileExist($id, $file_name, $dir, $ex, $notex);
} // END function fileNameLink

// =======================================================================

$sql = "SELECT *  
	FROM tb_article
	WHERE id = $id
	;";

    $result = mysql_query($sql);

    $p = mysql_fetch_array($result);

    $year = $p['year'];
    $res = $p['research_center'];
    $lab = $p['research_lab'];

// START HTML
$style_tag = '
        <style type="text/css">
            table, tr, td{
                border: solid 0px black;
            }
        </style>';

$script_tag = '
        <script type="text/javascript">
            function goDelFile(x){
                var r=confirm("Are you really want to delete that file?");	
                if (r==true){
                    window.location = "' . $pathf->inc_file('delete') . '?del_file=" + x + "&tbh=' . $tbh . '&ord= ' . $ord . '&page=' . $page . '" ;
                }
            }

            //Cancel edit-----------------------------
            function cancelEdit(){
                window.location = "index.php";
            }
            //-----------------------------------
        </script>';

echo $templ->getHead(4.01, 'Edit Article', $style_tag, $script_tag, 'title');    
?>

    <body>
        <?php require_once $pathf->inc_file('header'); ?>
        <h2 align="center">Edit Article Data id=<?= $id; ?></h2>

        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td style="vertical-align: top;">Name:</td>
                    <td>
                        <div>
                            <textarea id="name" name="name"  rows="2" cols="100"><?php echo $p['name']; ?></textarea>
                            <br />
                            [<span id="super" onclick="insertAtCaret('name','<sup></sup>');return false;"><sup>Superscript</sup></span>]
                            [<span id="subsc" onclick="insertAtCaret('name','<sub></sub>');return false;"><sub>Subscript</sub></span>]
                            <span class="help">Help.</span>
                            <br /><span id="greek">Greek Letters</span>
                            <span style="color: #666; font-size: 12px;">Click to show or hide greek letter list.</span>
                            <span class="help">Help.</span>
                            <div id="greek_list">
                                <?php $controll->greek_list(); ?>
                            </div>
                            <div style="margin-top: 10px;">
                                [<span id="show_ex">Show example</span>]
                            </div>
                        </div>
                        <div id="show"><?php echo htmlspecialchars_decode($p['name']); ?></div>
                        <!-- AJAX code for check "name" -->
                        <!-- END NAME -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="a_id" type="hidden" id="a_id" size="50" value="<?php echo $p['id']; ?>" />
                        <input name="get_page" type="hidden" id="get_page" size="50" value="<?php echo $page; ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Author:</td>
                    <td>
                        <textarea name="author" type="text" id="author" rows="2" cols="100" ><?php echo $p['author']; ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Corresponding Author:</td>
                    <td>
                        <input name="c_author" type="text" id="c_author" size="50" value="<?php echo $p['c_author']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Journal:</td>
                    <td>
                        <input name="journal" type="text" id="journal" size="98" value="<?php echo $p['journal']; ?>" />
                        <!-- list of Journal by AJAX from "journal_name" field -->
                    </td>
                </tr>
                <tr>
                    <td>Volume:</td>
                    <td>
                        <input name="vol" type="text" id="vol" size="10" value="<?php echo $p['volume']; ?>" />
                        &nbsp; Issue/No.: <input name="issue" type="text" id="issue" size="10" value="<?php echo $p['issue']; ?>" />
                        &nbsp; Page: <input name="apage" type="text" id="apage" size="18" value="<?php echo $p['page']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td>
                        <select id="year" name="year">
                            <?php
                            $thisYear = date('Y');
                            for ($i = 2009; $i <= $thisYear; $i++) {
                                echo '
				<option value="' . $i . '"' . OPS($year, $i) . '>' . $i . '</option>
			';
                            }
                            ?>
                        </select>
                        &nbsp; IF: <input name="impact" type="text" id="impact" size="10" value="<?php echo $p['impact']; ?>" />
                    </td>
                </tr>
                <?php
                $sql2 = "SELECT *  
                        FROM tb_re_center
                        ORDER BY id
                ;";
                $result2 = mysql_query($sql2);
                ?>
                <tr>
                    <td>Research Center:</td>
                    <td>
                        <select id="research_center" name="research_center">
                            <?php
                            while ($p2 = mysql_fetch_array($result2)) {
                                echo '<option value="' . $p2['re_center_code'] . '"' . OPS($res, $p2['re_center_code']) . '>' . $p2['re_center_code'] . '</option>';
                            }
                            ?>                
                        </select>
                        <?php
                        $sql3 = "SELECT *  
                                FROM tb_re_lab
                                ORDER BY id
                        ;";
                        $result3 = mysql_query($sql3);
                        ?>	
                        &nbsp; Research Lab:	
                        <select id="research_lab" name="research_lab">
                            <option value="..."<?php echo OPS($lab, '...'); ?>>...</option>
                            <?php
                            while ($p3 = mysql_fetch_array($result3)) {
                                echo '<option value="' . $p3['re_lab_code'] . '"' . OPS($lab, $p3['re_lab_code']) . '>' . $p3['re_lab_code'] . '</option>';
                            }
                            ?>
                            <!-- AJAX code for list "lab" by "Research Center" -->
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Detail:</td>
                    <td><textarea name="detail" cols="100" rows="2"><?php echo $p['detail']; ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>E-file :</td>
                    <td>
                        <?php fileNameLink($id, $p['file_name'], $pathf->inc_dir('paper_upload')); ?>        	
                        <p>Upload a new file <?php echo fileExist($id, $p['file_name'], $pathf->inc_dir('paper_upload'), '(and delete old file)', ''); ?> : <input type="file" name="efile" size="30"></p>            
                        <?php
                        $str = '<style type="text/css">#del_file:hover{color: #F00;}</style>
			<p>Delete File only : <span id="del_file" style="border: solid 2px #F00; font-weight: bold; cursor: pointer;" onclick="goDelFile(' . $id . ')">Delete File</span></p>';

                        echo fileExist($id, $p['file_name'], $pathf->inc_dir('paper_upload'), $str, '');
                        ?>                    	
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="center">
                        <input style="height: 30px" type="submit" name="Submit" value="Confirm Edit" />
                        <a id="cancel" href="show.php?tbh=<?php echo $tbh; ?>&ord=<?php echo $ord; ?>&page=<?php echo $page; ?>#<?php echo $id; ?>"><strong>Cancel</strong></a>
                    </td>
                </tr>
            </table>
        </form>
        <div>&nbsp;</div>
        <?php require_once $pathf->inc_file('footer'); ?>
    </body>
</html>