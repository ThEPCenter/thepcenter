<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    for ($i = 1; $i <= 3; $i++) {
        $id = $_POST['id-' . $i];
        $number = $_POST['no-' . $i];
        $img_url = htmlspecialchars($_POST['img-url-' . $i], ENT_QUOTES);
        $link_url = $_POST['link-url-' . $i];
        $modified = date("Y-m-d H:i:s");

        $sql = "UPDATE tb_slide
            SET slide_no = '$number', img_url = '$img_url', link_url = '$link_url', modified = '$modified'
            WHERE id = $id;";
        @mysql_query($sql) or die(mysql_error());
    } // END for
    header("Location: home.php");
    exit();
}

doc_head('แก้ไขสไลด์');
?>
<style>
    th{
        text-align: center;
    }
    td{
        padding: 10px;		
    }
</style>
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="bs-example">

            <h2 class="text-center">แก้ไขสไลด์</h2>
            <?php /*
              <p><a id="add-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span>เพิ่มสไลด์</a></p>
              <script>
              $(function(){
              $('#add-news').click(function(){
              $(document).ajaxStart(function(){
              $('.bs-example').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
              });
              $(".bs-example").load("../controllers/add-slide.php");
              });

              });
              </script>
              <div>&nbsp;</div>
             */
            ?>

            <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table class="table-bordered">
                    <tr>
                        <th>อันดับ</th>
                        <th>URL</th>
                        <th>ภาพตัวอย่าง</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM tb_slide ORDER BY slide_no;";
                    $result = mysql_query($sql);
                    $i = 0;
                    if (!empty($result)) {
                        while ($p = mysql_fetch_array($result)) {
                            $i++;
                            echo '
                    <tr>                        
                        <td>
                            <input type="hidden" name="id-' . $i . '" value="' . $p['id'] . '">
                            <label class="sr-only">Number</label>
                            <input name="no-' . $i . '" type="text" id="no-' . $i . '" class="text-center" value="' . $p['slide_no'] . '" size="1" disabled>
                        </td>
                        <td>
                            <label>URL รูปภาพ</label>
                            <textarea name="img-url-' . $i . '" id="img-url-' . $i . '" class="form-control" rows="2">' . htmlspecialchars_decode($p['img_url']) . '</textarea>
                            <p>&nbsp;</p>
                            <label>URL link slide</label>
                            <textarea name="link-url-' . $i . '" cols="50" id="link-url-' . $i . '"  class="form-control" rows="2">' . htmlspecialchars_decode($p['link_url']) . '</textarea>
                        </td>
                        <td>
                            <div  id="img-' . $i . '" style="max-width: 450px; height: auto;">
                                <img src="' . htmlspecialchars_decode($p['img_url']) . '" style="max-width: 100%; height: auto;">
                            </div>
                        </td>                   	    
                    </tr>
                    ';
                        } // END while
                    } // END if
                    ?>

                </table>
                <p>&nbsp;</p>
                <p class="text-center"><button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;<a style="font-weight: bold;" href="home.php" title="ยกเลิก">Cancel</a></p>

            </form>

        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
    <script>
        $(function(){            
<?php
$sql = "SELECT * FROM tb_slide ORDER BY number;";
$result = mysql_query($sql);
$l = 0;
while ($p = mysql_fetch_array($result)) {
    $l++;
    echo '
            $("#img-url-' . $l . '").blur(function(){            
                var img_url = $("#img-url-' . $l . '").val();
                $("#img-' . $l . '").html("<img src=\"" + img_url + "\" style=\"max-width: 100%; height: auto;\">");           
            });            
    ';
}
?>            
        
    });
    </script>
</body>
</html>
