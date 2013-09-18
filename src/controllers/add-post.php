<?php
require_once '../system/system.php';

if ($_POST) {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $author = htmlspecialchars($_POST['author'], ENT_QUOTES);
    $date = date("Y-m-d ", strtotime($_POST['date'])) . date("H:i:s");
    $content = htmlspecialchars($_POST['post-content'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $update = date("Y-m-d H:i:s");

    $sql = "INSERT INTO 
                tb_post
            VALUES 
                (0, '$title', '$author', '$date', '$content', '$category', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());

    header("Refresh: 2; url=../views/post.php");
    echo "Adding post Successed...";
    exit;
}
?>
<h2>เพิ่ม Post</h2> 
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">    
    <table>
        <tr>
            <td>Title</td>
            <td>
                <input type="text" name="title">
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td>
                <input type="text" name="author">
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>
                <input type="text" id="datepicker" name="date">
                <script>
                    $(function() { 
                        $("#datepicker").datepicker();        
                    });            
                </script>
            </td>
        </tr>
        <tr>
            <td>Content</td>
            <td>
                <textarea name="post-content">

                </textarea>
                <script>
                    CKEDITOR.replace('post-content');
                </script>                
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <input type="text" name="category">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center">
                <input type="submit" value="Submit" /> <a href="../views/news.php?news=<?php echo $news; ?>" title="Cancel"><strong>Cancel</strong></a>
            </td>
        </tr>
    </table>
</form>
<div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>
