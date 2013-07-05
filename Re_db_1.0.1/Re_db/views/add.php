<?php
// 
require_once '../system/system.php';

$pathf = new config();
$templ = new template();
$controll = new controllers();

//Check USER************************************
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}
//**********************************************
//Insert data into DATABASE =================================================
if ($_POST) {
    //Get variable value from FORM-------------------------------
    //**************Don't forget to protect a XSS ***************
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $author = htmlspecialchars($_POST['author'], ENT_QUOTES);
    $c_author = htmlspecialchars($_POST['c_author'], ENT_QUOTES);
    $journal = htmlspecialchars($_POST['journal'], ENT_QUOTES);
    $vol = htmlspecialchars($_POST['vol'], ENT_QUOTES);
    $issue = htmlspecialchars($_POST['issue'], ENT_QUOTES);
    $apage = htmlspecialchars($_POST['apage'], ENT_QUOTES);
    $year = $_POST['year'];
    $impact = $_POST['impact'];
    $research_center = htmlspecialchars($_POST['research_center'], ENT_QUOTES);
    $research_lab = htmlspecialchars($_POST['research_lab'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);

    //upload file--------------------------------------------------
    if ($_FILES['efile']['error'] == 0) {
        $file = $_FILES['efile']['tmp_name'];
        $efile_name = htmlspecialchars($_FILES['efile']['name'], ENT_QUOTES);

        $sql_max = "SELECT MAX(id) AS max_id  
                    FROM tb_article
            ;";

        $result_max = mysql_query($sql_max);
        $max_id = mysql_fetch_array($result_max);

        $new_file_name = $max_id['max_id'] . '_' . $year . '.' . $controll->get_file_type($efile_name);

        // Delete old file (if file exist)                                
        $dir_del = $pathf->inc_dir('paper_upload') . '/' . $max_id['max_id'] + 1;

        if (file_exists($dir_del)) {
            removedir($dir_del);
        }

        //insert data into database -----------------------------
        $sql = "INSERT INTO 
				tb_article 
			VALUES 
				(0, '$name', '$author', '$c_author', '$journal', '$vol', '$issue', '$apage', $year, $impact, '$research_center', '$research_lab', '$detail', '$new_file_name');
			";

        @mysql_query($sql) or die(mysql_error());

        $new_id = mysql_insert_id();

        $dir = $pathf->inc_dir('paper_upload') . '/' . $new_id;
        
        $page = $controll->page_value($new_id);

        if (mkdir($dir)) {//Create folder and upload file to this folder
            $path = $dir . '/' . $new_file_name;

            if (move_uploaded_file($file, $path)) { //upload file to path folder		
                header("Refresh: 2; url=show.php?page=$page#$new_id");
                echo "Adding new Article and uploading file ...";
                exit;
            } else {
                echo 'ERROR Upload file';
                exit;
            }
        } else {
            header("Refresh: 2; url=../index.php");
            echo "ERROR Make directory";
            exit;
        }
    } else { // No file upload **************************************
        //insert data into database -----------------------------
        $sql = "INSERT INTO 
				tb_article 
			VALUES 
				(0, '$name', '$author', '$c_author', '$journal', '$vol', '$issue', '$apage', $year, $impact, '$research_center', '$research_lab', '$detail', 'No File');
			";

        @mysql_query($sql) or die(mysql_error());

        $new_id = mysql_insert_id();

        $page = $controll->page_value($new_id);

        header("Refresh: 2; url=show.php?page=$page#$new_id");
        echo "Adding New Article ...";
        exit;
    }
} // END if(POST)
// ==============================================================================
// START HTML
$style_tag = '
        <style type="text/css">
            table, tr, td{
                border: solid 0px black;
            }
        </style>
';

echo $templ->getHead(4.01, 'Add New Article', $style_tag, '', 'title');
?>

<body>
<?php require_once $pathf->inc_file('header'); ?>
    <h2 align="center">Add New Article</h2>

    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td style="vertical-align: top;">Name:</td>
                <td>
                    <div>
                        <textarea id="name" name="name"  rows="2" cols="100"></textarea>
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
                           [<span id="show_ex">Show example</span>] [<span id="clear">Clear</span>]
                        </div>
                    </div>
                    <div id="show">Example</div>
                    <!-- AJAX code for check "name" -->
                    <!-- END NAME -->
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr valign="top">
                <td>Author:</td>
                <td>
                    <textarea name="author" type="text" id="author" rows="2" cols="100" ></textarea>
                </td>
            </tr>
            <tr>
                <td>Corresponding Author:</td>
                <td>
                    <input name="c_author" type="text" id="c_author" size="50" />
                </td>
            </tr>
            <tr>
                <td>Journal:</td>
                <td>
                    <input name="journal" type="text" id="journal" size="100" />
                    <!-- list of Journal by AJAX from "journal_name" field -->
                </td>
            </tr>
            <tr>
                <td>Volume:</td>
                <td>
                    <input name="vol" type="text" id="vol" size="10" />
                    &nbsp; Issue/No.: <input name="issue" type="text" id="issue" size="10" />
                    &nbsp; Page: <input name="apage" type="text" id="apage" size="18" />
                </td>
            </tr>
            <tr>
                <td>Year:</td>
                <td>
<?php $thisYear = date('Y'); ?>
                    <select id="year" name="year">                
<?php
for ($i = 2009; $i <= $thisYear; $i++) {
    echo '<option value="' . $i . '">' . $i . '</option>';
}
?>
                    </select>
                    &nbsp; IF: <input name="impact" type="text" id="impact" size="10" value="0" />
                </td>
            </tr>
            <tr>
                        <?php
                        $sql2 = "SELECT *  
	FROM tb_re_center
	ORDER BY id
	;";
                        $result2 = mysql_query($sql2);
                        ?>
                <td>Research Center:</td>
                <td>
                    <select id="research_center" name="research_center">
                <?php
                while ($p2 = mysql_fetch_array($result2)) {
                    echo '<option value="' . $p2['re_center_code'] . '">' . $p2['re_center_code'] . '</option>';
                }
                ?>
                    </select>	
                    &nbsp; Research Lab:	
                    <select id="research_lab" name="research_lab">
                        <?php
                        $sql3 = "SELECT *  
	FROM tb_re_lab
	ORDER BY id
	;";
                        $result3 = mysql_query($sql3);
                        ?>
                        <option value="...">...</option>
                        <?php
                        while ($p3 = mysql_fetch_array($result3)) {
                            echo '<option value="' . $p3['re_lab_code'] . '">' . $p3['re_lab_code'] . '</option>';
                        }
                        ?>
                        <!-- code AJAX for list "lab" by "Research Center" -->
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <td>Detail:</td>
                <td><textarea name="detail" cols="100" rows="2">-</textarea></td>
            </tr>
            <tr>
                <td>File Upload:</td>
                <td><input type="file" name="efile" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="center">
                    <input style="height: 30px" type="submit" name="Submit" value="Add" />
                    <a href="index.php" title="Cancel"><strong>Cancel</strong></a>
                </td>
            </tr>
        </table>
    </form>
    <div>&nbsp;</div>
<?php require_once $pathf->inc_file('footer'); ?>
</body>
</html>