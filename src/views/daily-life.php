<?php
require_once '../system/system.php';
doc_head('ฟิสิกส์ในชีวิตประจำวัน');
$type = 'daily-life';
?>       
</head>

<body>
    <div class="container">
        <?php get_includes('header'); ?>

        <div id="show-social" class="row">

            <?php
            if (isset($_GET['article_id'])) {
                $article_id = $_GET['article_id'];
                ?>

                <div class="col-sm-9 col-md-9">

                    <?php
                    
                    //========== Edit Social ==============================
                    $admin_txt = '  
                    <p>
                        <a id="edit-social" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
                    </p>                            
                    <script>
                        $(function() {
                            $("#edit-social").click(function() {
                                $(document).ajaxStart(function() {
                                    $("#show-social").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                                });
                                $.get("' . controller('edit-social') . '", {edit_social:' . $article_id . '},
                                function(data) {
                                    $("#show-social").html(data);
                                }
                                );
                            });

                        });
                    </script>
                             ';
                    admin($admin_txt);
                    
                    // =========================================================
                    
                    $sql = "SELECT * FROM tb_social WHERE id = $article_id AND type = '$type';";
                    $result = mysql_query($sql);
                    if (!empty($result)) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                
                    <div>
                        <h2>' . htmlspecialchars_decode($p['title']) . '</h2>
                        <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                        ' . htmlspecialchars_decode($p['content_long']) . '
                    </div>
                
                            ';
                        }
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>                
                </div>

                <div class="col-sm-3 col-md-3">                    
                    <h3 class="text-center">บทความย้อนหลัง</h3>
                    <?php
                    $sql = "SELECT * FROM tb_social WHERE type = '$type' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                        <p><a href="' . $type . '.php?article_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></p>
                        <hr>
                            ';
                        } // END while
                        ?>
                        <a href="<?php echo $type; ?>.php?show=all"><em>บทความทั้งหมด</em></a>
                        <?php
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>
                </div>
                <?php
            } elseif (isset($_GET['show'])) {
                echo '<h2 class="text-center">ฟิสิกส์ในชีวิตประจำวัน</h2>';
                
                // ========= AJAX for Add social ====================================
                $admin_txt = '  
                <p>
                    <a id="add-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Add</a>
                </p>
                <hr>
                <script>
                    $(function() {
                        $("#add-news").click(function() {
                            $(document).ajaxStart(function() {
                                $("#show-social").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                            });
                            $.get("' . controller('add-social') . '", {add_social: "' . $type . '"},
                            function(data) {
                                $("#show-social").html(data);
                            }
                            );
                        });

                    });
                </script>
                        ';
                admin($admin_txt);
                
                // ====================================================================
                
                $sql = "SELECT * FROM tb_social WHERE type = '$type' ORDER BY date DESC;";
                $result = mysql_query($sql);
                if (mysql_num_rows($result) > 0) {
                    while ($p = mysql_fetch_array($result)) {
                        echo '
                        <h3><a href="' . $type . '.php?article_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></h3>
                        <small><em>' . thai_date($p['date']) . '</em></small>
                        <hr>
                            ';
                    } // END while
                }
            } else {
                ?>

                <div class = "col-sm-9 col-md-9">

                    <?php
                    $sql = "SELECT * FROM tb_social WHERE type = '$type' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        $p = mysql_fetch_array($result);

                        echo '                
                    <div>
                        <h3>' . htmlspecialchars_decode($p['title']) . '</h3>
                        <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                        ' . htmlspecialchars_decode($p['content_long']) . '
                    </div>
                
                            ';
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>                
                </div>

                <div class="col-sm-3 col-md-3">                    
                    <h3 class="text-center">บทความย้อนหลัง</h3>
                    <?php
                    $sql = "SELECT * FROM tb_social WHERE type = '$type' ORDER BY date DESC;";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            echo '
                        <p><a href="' . $type . '.php?article_id=' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></p>
                        <hr>
                            ';
                        } // END while
                        ?>
                        <a href="<?php echo $type; ?>.php?show=all"><em>บทความทั้งหมด</em></a>
                        <?php
                    } else {
                        echo '
                        <div class="bs-example">
                            <p>ขออภัย ไม่พบข้อมูล</p>
                        </div>
                        ';
                    }
                    ?>
                </div>
                <?
            }
            ?>

        </div>
        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->
</body>
</html>