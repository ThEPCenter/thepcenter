<?php
require_once '../system/system.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>test php</title>
        <style type="text/css">
            #area{

            }
            #super, #subsc, #greek{
                text-decoration: underline;
                color: green;
                cursor: pointer;
            }
            #super, #subsc{
                text-decoration: none;
            }
            #greek_list{
                display:none;
                border: solid 1px green;
                width: 700px;
            }
            .help{
                font-size: 12px;
                cursor: help;
                color: navy;
            }
            #show{
                font-size: 16px;
                background-color: #CF9;
                width: 700px;
            }
            .letters{
                cursor: pointer;
                color: blue;
            }
            .letters:hover{
                font-weight: bold;
                color: green;
            }
        </style>
        <script type="text/javascript" src="jquery.js"></script>

        <script>

            $(function(){

<?php
//require_once 'greek.php';

/*
  while(list($key, $value) = each($greek1)){
  echo '
  $("#' . $key . '").click(function(){
  $("#area").val($("#area").val() + "' . $value . '");

  });';
  } // END while

  while(list($key, $value) = each($greek2)){
  echo '
  $("#' . $key . '").click(function(){
  $("#area").val($("#area").val() + "' . $value . '");

  });';
  } // END while
 */
?>
                //Show Example
                $("#show_ex").click(function(){
                    $("#show").html($("#area").val());
                });
	
                //Superscript
                /*
                $("#super").click(function(){
                        $("#area").val($("#area").val() + "<sup></sup>");		
                });
                 */
	
                //Subscript
                /*
                $("#subsc").click(function(){
                        $("#area").val($("#area").val() + "<sub></sub>");		
                });
                 */
	
                //Show or hide Greek letter list
                $("#greek").click(function(){
                    $("#greek_list").toggle("slow");
                });
	
	
            }); //END jQuery6

            //Inserting a text where cursor is --------------------------------------------------
            //<textarea id="textareaid"></textarea>
            //<a href="#" onclick="insertAtCaret('textareaid','text to insert');return false;">

            function insertAtCaret(areaId,text) {
                var txtarea = document.getElementById(areaId);
                var scrollPos = txtarea.scrollTop;
                var strPos = 0;
                var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? 
                    "ff" : (document.selection ? "ie" : false ) );
                if (br == "ie") { 
                    txtarea.focus();
                    var range = document.selection.createRange();
                    range.moveStart ('character', -txtarea.value.length);
                    strPos = range.text.length;
                }
                else if (br == "ff") strPos = txtarea.selectionStart;

                var front = (txtarea.value).substring(0,strPos);  
                var back = (txtarea.value).substring(strPos,txtarea.value.length); 
                txtarea.value=front+text+back;
                strPos = strPos + text.length;
                if (br == "ie") { 
                    txtarea.focus();
                    var range = document.selection.createRange();
                    range.moveStart ('character', -txtarea.value.length);
                    range.moveStart ('character', strPos);
                    range.moveEnd ('character', 0);
                    range.select();
                }
                else if (br == "ff") {
                    txtarea.selectionStart = strPos;
                    txtarea.selectionEnd = strPos;
                    txtarea.focus();
                }
                txtarea.scrollTop = scrollPos;
            }
            //--END Inserting a text where cursor is ---------------------------------
        </script>
    </head>

    <body>

        <div>
            <textarea id="area" rows="2" cols="100"></textarea>
            <br />
            [<span id="super" onclick="insertAtCaret('area','<sup></sup>');return false;"><sup>Superscript</sup></span>]
            [<span id="subsc" onclick="insertAtCaret('area','<sub></sub>');return false;"><sub>Subscript</sub></span>] <span class="help">Help.</span>
            <br /><span id="greek">Greek Letters</span>
            <span style="color: #666; font-size: 12px;">Clik to show or hide greek letter list.</span>
            <span class="help">Help.</span>
            <div id="greek_list">
                <?php
//Greek letter buttons 
                include 'greek.php';
                while (list($k, $v) = each($greek1)) {
                    echo '
[<span id="' . $k . '" class="letters" onclick="insertAtCaret(\'area\',\'' . $v . '\');return false;">' . $v . '</span>]';
                }// END while

                echo '<br />';

                while (list($k, $v) = each($greek2)) {
                    echo '
[<span id="' . $k . '" class="letters" onclick="insertAtCaret(\'area\',\'' . $v . '\');return false;">' . $v . '</span>]';
                }// END while
                ?>
            </div>

            <div style="margin-top: 10px;">
                <button id="show_ex" style="height: 30px;">Show example</button>
            </div>
        </div>
        <div>&nbsp;</div>
        <div id="show"></div>

        <div>&nbsp;</div>
        --------------------------------------------------------------------------
        <table>
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
                        <option value="TFP/CU/1">TFP/CU/1</option>
                        <option value="TFP/KKU/2">TFP/KKU/2</option>
                        <option value="TFP/CMU/3">TFP/CMU/3</option>
                        <option value="TFP/KMUTT/4">TFP/KMUTT/4</option>
                        <option value="PPP/CMU/1">PPP/CMU/1</option>
                        <option value="PPP/CMU/2">PPP/CMU/2</option>
                        <!-- code AJAX for list "lab" by "Research Center" -->
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <td>Detail:</td>
                <td><textarea name="detail" cols="100" rows="2"></textarea></td>
            </tr>
            <tr>
                <td>File Upload:</td>
                <td><input type="file" name="efile" size="30"></td>
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

    </body>
</html>