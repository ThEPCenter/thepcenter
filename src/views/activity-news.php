<?php
require_once '../system/system.php';

if (isset($_GET['news_id'])):
    $news_id = $_GET['news_id'];
    $sql_news = "SELECT * FROM tb_news WHERE id = '$news_id';";
    $result_news = mysql_query($sql_news);
    $news = mysql_fetch_object($result_news);
    $title = $news->title;
else :
    $title = 'ข่าวกิจกรรม';
endif;
doc_head($title . " - ศูนย์ความเป็นเลิศด้านฟิสิกส์");

$news_type = 'activity';
?>

<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo $title; ?>">
<?php if (isset($_GET['news_id'])): ?>
    <meta property="og:description" content="<?php echo $news->content_short; ?>">
    <meta property="og:image" content="<?php echo $news->featured_img; ?>">
<?php endif; ?>
<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']; ?>">
<meta property="og:site_name" content="Thailand Center of Excellence in Physics (ThEP)">
<meta property="og:updated_time" content="<?php $ttime = strtotime($news->modified); echo date("Y-m-d", $ttime) . 'T' . date("H:i:s+07:00", $ttime); ?>">

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
    .table tbody>tr>td {
        border-top : none;
        border-bottom: solid 1px #ddd;
    }
</style>

</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>
        <div class="row" id="show-news">
            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = $news_id;";
                $result = mysql_query($sql);
                $n = mysql_fetch_array($result);
                ?>

                <div class="col-sm-9 col-md-9">
                    <?php
                    // =========================== Edit News ======================================
                    $admin_txt = '
                    <p><a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a></p>
                    <script>
                        $(function() {
                            $("#edit-news").click(function() {
                                $(document).ajaxStart(function() {
                                    $("#show-news").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                                });
                                $.get("' . controller('edit-activity-news') . '", {edit_news: "' . $n['id'] . '"},
                                function(data) {
                                    $("#show-news").html(data);
                                }
                                );
                            });

                        });
                    </script>    
                            ';
                    admin($admin_txt);
                    // -------------------------------------------------------------------

                    echo '                            
            <div id="news-' . $n['id'] . '">
                <h2>' . htmlspecialchars_decode($n['title']) . '</h2>
                <p class="fg-color-green"><small><em>' . thai_date($n['date']) . '</small></em></p>
                <p>&nbsp;</p>
                ' . htmlspecialchars_decode($n['content_long']) . '
            </div>';
                    ?>
                    <p>&nbsp;</p>

                    <div>
                        <div class="image-set">
                            <?php
                            $sql_p = "SELECT * FROM tb_picture WHERE gallery_id = {$n['gallery_id']} ORDER BY id ASC;";
                            $result_p = mysql_query($sql_p);
                            if (!empty($result_p)) {
                                $no_p = mysql_num_rows($result_p);
                                $i = 0;
                                while ($p = mysql_fetch_array($result_p)) {
                                    $i++;
                                    echo '
                        
                    <a class="pic-link" href="../../upload02/img/picture/' . $p['name'] . '" data-lightbox="gal-' . $n['gallery_id'] . '" title="' . $p['caption'] . '">                            
                        <img class="example-image" src="../images/pixel-vfl3z5WfW.gif" alt="image ' . $i . ' 0f ' . $no_p . ' thumb" 
                            style="vertical-align: middle; 
                            background: no-repeat white url(../../upload02/img/picture/' . $p['name'] . ') -50px 0; 
                            background-size: 240px auto; 
                            width: 160px;
                            height: 160px;">                            
                    </a>                      
                        ';
                                } // END while
                                ?>

                            </div>

                            <p>จำนวนทั้งหมด <?php echo $no_p; ?> ภาพ</p>
                        <?php } // END if (!empty($result_p))   ?>
                        <p>&nbsp;</p>
                        <p><a href="home.php">กลับหน้าหลัก</a> | <a href="activity-news.php">ไปหน้าข่าวกิจกรรม</a></p>
                    </div>

                </div>

                <div class="col-sm-3 col-md-3">
                    <h3 class="text-center header-type">ข่าวกิจกรรมย้อนหลัง</h3>
                    <?php
                    $sql_etc = "SELECT * FROM tb_news 
                        WHERE type = 'activity'
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
                    <a class="all-title" href="activity-news.php"><em>หัวข้อข่าวทั้งหมด</em></a>
                </div>

                <?php
            } else {
                ?>
            <div class="col-md-12">
                <h2 class="text-center header-type">ข่าวกิจกรรม</h2>
                <?php
                // ========= Add news ====================================
                $admin_txt = '  
                <p>
                    <a id="add-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Add</a>
                </p>
                <hr>
                
                <script>
                    $(function() {
                        $("#add-news").click(function() {
                            $(document).ajaxStart(function() {
                                $("#show-news").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                            });
                            $.get("' . controller('add-news') . '", {add_news: "' . $news_type . '"},
                            function(data) {
                                $("#show-news").html(data);
                            }
                            );
                        });

                    });
                </script>
                       ';
                admin($admin_txt);
                // -----------------------------------------------------------------

                $sql_act = "SELECT * FROM tb_news 
                WHERE type = 'activity' 
                ORDER BY date DESC;
            ";
                $re_act = mysql_query($sql_act);
                ?>
                
                <?php if (!empty($re_act)): ?>
                    <?php
                    $sql_act = "SELECT * FROM tb_news 
                WHERE type = 'activity' 
                ORDER BY date DESC;
            ";
                $re_act = mysql_query($sql_act);
                    $no_p = mysql_num_rows($re_act);
                    $i = 0; 
                    ?>
                    <?php while ($a = mysql_fetch_array($re_act)): ?>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 text-center">
                            <a title="<?php echo htmlspecialchars_decode($a['title']); ?>" 
                               href="activity-news.php?news_id=<?php echo $a['id']; ?>">                                
                                <img style="max-width: 100%; height: auto;" src="<?php echo $a['featured_img']; ?>">
                                
                            </a>
                        </div>
                        <div class="col-sm-9 col-md-10">
                            <a href="activity-news.php?news_id=<?php echo $a['id']; ?>"><?php echo $a['title']; ?></a><br> 
                                <small><em><?php echo thai_date($a['date']); ?></em></small></td>
                        </div>                    
                    </div>
                    <hr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center">ขออภัยไม่พบข้อมูล</p>
                <?php endif; ?>                
            </div>
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