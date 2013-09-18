$(function(){

	//Show Example ****************** Sould use AJAX to protect a XSS *******************
	$("#show_ex").click(function(){
		$("#show").html($("#name").val());
	});	
	
	//Clear
	$("#clear").click(function(){
		$("#name").val('');
		$("#show").html('');
	});
	
	//Show or hide Greek letter list
	$("#greek").click(function(){
		$("#greek_list").toggle("slow");
	});
	
	
}); //END jQuery


// Inserting a text where cursor is --------------------------------------------------
// <textarea id="textareaid"></textarea>
// <a href="#" onclick="insertAtCaret('textareaid','text to insert');return false;">

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
// --END Inserting a text where cursor is ---------------------------------
// Credit: http://www.scottklarr.com/topic/425/how-to-insert-text-into-a-textarea-where-the-cursor-is/
//
// How to insert text into a textarea where the cursor is
// Posted On Oct 11, 2008 at 10:16 pm
/* ******************************
 * This javascript function will allow you to easily inject text into a textarea wherever the caret/cursor is currently at. 
 * In addition, it also makes sure that the cursor and textarea scroll amount are in the correct place after the insertion. 
 * I have tested and verified this works in Firefox, IE7, Opera, Flock, Safari, and Maxthon. * 
 * 
 */
//