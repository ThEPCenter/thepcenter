<?php
require_once '../system/system.php';
doc_head('Executive and Staff');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header_en'); ?>

        <div class="row">
            <h2 style="text-align: center;">Executive and Staff</h2>
            <?php
            $sql = "SELECT * FROM tb_personel ORDER BY code;";
            $result = mysql_query($sql);
            ?>
            <table class="table-bordered" style="margin: 0 auto;">
                <?php
                if (mysql_num_rows($result) > 0) {
                    while ($p = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <td align="center">
                                <img src="<?php echo $p['photo'] ?>" class="img-responsive" style="width: auto; max-height: 143px;">
                            </td>
                            <td>                                            
                                <p><?php echo $p['title_en'] . ' ' . $p['first_en'] . ' ' . $p['last_en']; ?></p>                                            
                                <p>Position : <? echo $p['position_en'] ?></p>                                            
                                <address>
                                    Tel. : <?php echo $p['phone_en'] ?><br />
                                    Email: <?php echo $p['email'] ?><br />
                                </address>
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

        <?php get_includes('footer_en'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
