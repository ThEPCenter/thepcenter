<?php
require_once '../system/system.php';
doc_head('ข่าวกิจกรรม');
?>
<link rel="stylesheet" href="<?php plugins('lightbox2.6/lightbox/css/lightbox.css'); ?>">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">

<!-- Datepicker -->
<link href="../plugins/jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css" rel="stylesheet" />
<style>
    #ui-datepicker-div{
        width: 316px;
    }
</style>
<style>
    .pic-link{
        text-decoration: none;
    }
    .pic-link:hover{
        text-decoration: none;
    }
    /* lightbox  */
    .image-row {
        *zoom: 1;
        margin-bottom: 20px;
    }
    .image-row:after {
        content: "";
        display: table;
        clear: both;
    }
    .example-image {
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -ms-border-radius: 2px;
        -o-border-radius: 2px;
        border-radius: 2px;
        margin: 2px 2px;
        border: 4px #FFFFFF solid;
    }
    .example-image:hover {
        border: 2px #003399 solid;
    }
</style>

</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>
        <div class="row">
            <?php
            if ($_GET['news_id']) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = $news_id;";
                $result = mysql_query($sql);
                $n = mysql_fetch_array($result);
                if ($n['new'] == 'y') {
                    $new_gif = ' <img src="../images/new1.gif">';
                } else {
                    $new_gif = '';
                }
                admin('<p><a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a></p>');
                ?>
                <script>
                    $(function(){
                        $('#edit-news').click(function(){
                            $(document).ajaxStart(function(){
                                $('#show-news').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                            });
                            $.get("<?php controll('edit-activity-news'); ?>", {edit_news: "<?php echo $n['id']; ?>"}, 
                            function(data){ $('#show-news').html(data); }
                        );
                        });
                                                                                
                    });
                </script>
                <div id="show-news" class="col-sm-9 col-md-9">
                    <?php
                    echo '                            
            <div id="news-' . $n['id'] . '">
                <h2>' . htmlspecialchars_decode($n['title']) . $new_gif . '</h2>
                <p class="fg-color-green"><small><em>' . thai_date($n['date']) . '</small></em></p>
                ' . htmlspecialchars_decode($n['content_long']) . '
            </div>';
                    ?>
                    <p>&nbsp;</p>

                    <div style="margin-left: 15px;">
                        <div class="image-set">
                            <?php
                            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$n['gallery_id']};";
                            $result_p = mysql_query($sql_p);
                            if (!empty($result_p)) {
                                $no_p = mysql_num_rows($result_p);
                                $i = 0;
                                while ($p = mysql_fetch_array($result_p)) {
                                    $i++;
                                    echo '
                        
                    <a class="pic-link" href="../img/picture/' . $p['name'] . '" data-lightbox="gal-' . $n['gallery_id'] . '" title="' . $p['caption'] . '">                            
                        <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../img/picture/' . $p['name'] . ') -50px 0; 
                            background-size: 130px auto; 
                            width: 65px;
                            height: 65px;">                            
                    </a>                      
                        ';
                                } // END while
                                ?>

                            </div>

                            <p>จำนวนทั้งหมด <?php echo $no_p; ?> ภาพ</p>
                        <?php } // END if (!empty($result_p))  ?>
                        <p>&nbsp;</p>
                        <p><a href="home.php">กลับหน้าหลัก</a> | <a href="activity-news.php">ไปหน้าข่าวกิจกรรม</a></p>
                    </div>

                </div>

                <div class="col-sm-3 col-md-3">
                    <h3 class="text-center">ข่าวกิจกรรม</h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE (id != $news_id)
                        AND (type = 'activity')
                        ORDER BY date DESC
                        LIMIT 4;";
                    $re_etc = mysql_query($sql_etc);
                    while ($etc = mysql_fetch_array($re_etc)) {
                        echo '
                    <p><a href="' . $etc['type'] . '-news.php?news_id=' . $etc['id'] . '">' . htmlspecialchars_decode($etc['title']) . '</a></p>                    
                    <hr>
                    ';
                    } // END while
                    ?>
                </div>

                <?php
            } else {
                $sql_act = "SELECT * FROM tb_news 
                WHERE type = 'activity' 
                ORDER BY date DESC;
            ";
                $re_act = mysql_query($sql_act);
                ?>
                <table class="table">
                    <?php
                    if (!empty($re_act)) {
                        while ($a = mysql_fetch_array($re_act)) {
                            echo '                            
                                <tr>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '">
                             ';
                            $sql_pic = "SELECT * FROM tb_picture 
                            WHERE gallery_id = {$a['gallery_id']} 
                            ORDER BY id;    
                        ";
                            $re_pic = mysql_query($sql_pic);
                            if (!empty($re_pic)) {
                                $pic = mysql_fetch_array($re_pic);
                            }
                            echo '               
                                            <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background:no-repeat #ccc url(../img/picture/' . $pic['name'] . ') -40px 0; 
                            background-size: 130px auto; 
                            width: 65px;
                            height: 65px;">                            
                                    </a>
                                    </td>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '">' . $a['title'] . '</a></td>
                                </tr>                            
                                    ';
                        } // END while
                    } else {
                        echo '<tr><td>ขออภัยไม่พบข้อมูล</td></tr>';
                    }
                    ?>
                </table>

                <?php
            } // END if GET else 
            ?>
        </div>
        <?php
        get_includes('footer');
        ?>

    </div>    
    <!-- /.container -->    
    <?php get_includes('bootstrap-core'); ?>
    <!-- Lightbox JavaScript
================================================== -->
    <script src="<?php plugins('lightbox2.6/lightbox/js/lightbox-2.6.min.js'); ?>"></script>
</body>
</html>