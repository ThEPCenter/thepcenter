<?php
require_once '../system/system.php';
doc_head('ข่าวกิจกรรม');
?>
<link rel="stylesheet" href="<?php plugins('lightbox2.6/lightbox/css/lightbox.css'); ?>">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">

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
        border: 4px #99b433 solid;
    }
</style>

</head>

<body>
    <div class="container">
        <?php
        get_includes('header');

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
            echo '                            
            <div id="news-' . $n['id'] . '">
                <h3>' . htmlspecialchars_decode($n['title']) . $new_gif . '</h3>
                <p class="fg-color-green"><small><em>' . thai_date($n['date']) . '</small></em></p>
                <p>&nbsp;</p>
                ' . htmlspecialchars_decode($n['content_long']) . '
            </div>';
            ?>
            <div style="margin-left: 15px;">
                <div class="image-set">
                    <?php
                    $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$n['gallery_id']};";
                    $result_p = mysql_query($sql_p);
                    $no_p = mysql_num_rows($result_p);
                    $i = 0;
                    while ($p = mysql_fetch_array($result_p)) {
                        $i++;
                        echo '
                        
                    <a class="pic-link" href="../../ap/views/img/picture/' . $p['name'] . '" data-lightbox="gal-' . $n['gallery_id'] . '" title="' . $p['caption'] . '">                            
                        <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../ap/views/img/picture/' . $p['name'] . ') -50px 0; 
                            background-size: 200px auto; 
                            width: 100px;
                            height: 100px;">                            
                    </a>                        
                        ';
                    }
                    ?>  
                </div>
                <p>&nbsp;</p>
                <p>จำนวนทั้งหมด <? echo $no_p; ?> ภาพ</p>
                <p>&nbsp;</p>
                <p><a href="home.php">กลับหน้าหลัก</a> | <a href="activity-news.php">ไปหน้าข่าวกิจกรรม</a></p>
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
                if (mysql_num_rows($re_act) > 0) {
                    while ($a = mysql_fetch_array($re_act)) {

                        $sql_pic = "SELECT * FROM tb_picture 
                            WHERE gallery_id = {$a['gallery_id']} 
                            ORDER BY id;    
                        ";
                        $re_pic = mysql_query($sql_pic);
                        $pic = mysql_fetch_array($re_pic);

                        echo '                            
                                <tr>
                                    <td><a href="activity-news.php?news_id=' . $a['id'] . '"><img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../../Thep_Admin_Panel/ap/views/img/picture/' . $pic['name'] . ') -40px 0; 
                            background-size: 160px auto; 
                            width: 80px;
                            height: 80px;">
                                    </a></td>
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
        get_includes('footer');
        ?>

    </div>
    <!-- /.container -->
    <script src="<?php plugins('lightbox2.6/lightbox/js/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php plugins('lightbox2.6/lightbox/js/lightbox-2.6.min.js'); ?>"></script>
</body>
</html>