<?php
require_once '../system/system.php';
doc_head('Executive and Staff');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header_en'); ?>

        <div class="row" id="show-personel">
            <div class="col-md-12">

                <h2 style="text-align: center;">Executive and Staff</h2>

                <?php
                // ========= Add personel ====================================
                $admin_txt = '  
                <p>
                    <a id="add-personel" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Add</a>
                </p>
                <hr>
                <script>
                        $(function() {
                            $("#add-personel").click(function() {
                                $(document).ajaxStart(function() {
                                    $("#show-personel").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\"></div>");
                                });
                                $("#show-personel").load("' . controller('add-personel') . '");
                            });
                        });
                </script>         
                            ';
                admin($admin_txt);

                // ------------------------------------------------------------
                $sql = "SELECT * FROM tb_personel ORDER BY code;";
                $result = mysql_query($sql);
                ?>
                
                <table class="table table-bordered">
                    <?php
                    if (mysql_num_rows($result) > 0) {
                        while ($p = mysql_fetch_array($result)) {
                            ?>
                            <tr>
                                <td align="center">
                                    <img src="<?php echo $p['photo'] ?>" class="img-responsive" style="width: auto; max-height: 190px;">
                                </td>
                                <td>                                            
                                    <p><?php echo $p['title_en'] . ' ' . $p['first_en'] . ' ' . $p['last_en']; ?></p>                                            
                                    <p>Position : <? echo $p['position_en'] ?></p>                                            
                                    <address>
                                        Tel. : <?php echo $p['phone_en'] ?><br />
                                        Email: <?php echo $p['email'] ?><br />
                                    </address>

                                    <?php
                                    // ===================== Edit Personel Data ====================
                                    $admin_txt = '  
                                <p>
                                    <a id="edit-personel-' . $p['id'] . '" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
                                </p>                              
                                    <script>
                                    $(function() {
                                        $("#edit-personel-' . $p['id'] . '").click(function() {
                                            $(document).ajaxStart(function() {
                                                $("#show-personel").html("<div class=\"span12 text-center\" ><img src=\"../images/demo_wait.gif\" /></div>");
                                            });
                                            $.get("' . controller('edit-personel') . '", {edit_personel: "' . $p['id'] . '"},
                                                function(data) {
                                                    $("#show-personel").html(data);
                                                }
                                            );
                                        });
                                    });
                                </script> 
                                        ';

                                    admin($admin_txt);
                                    // ------------------------------------------------------------------------
                                    ?>

                                </td>                                        
                            </tr>
                            <?php
                        } /* END while */
                    } else {
                        ?>
                        <tr>
                            <td colspan="2" align="center"><b>ขออภัยไม่พบข้อมูล</b></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

            </div>
        </div>

        <?php get_includes('footer_en'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
