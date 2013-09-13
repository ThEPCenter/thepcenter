<?php 
require_once '../system/system.php'; 
doc_head('CNXLOVE.com');
?>
        <!-- Datepicker -->
        <link href="<?php plugins('jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css'); ?>" rel="stylesheet" />
        <style>
            #ui-datepicker-div{
                width: 316px;
            }
        </style>
        <script src="<?php plugins('jqueryui/jquery-1.10.2.js'); ?>"></script>
        <script src="<?php plugins('jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js'); ?>"></script>
        <!-- CKEditor -->
        <script src="<?php plugins('ckeditor/ckeditor.js'); ?>"></script>
        <script>
            $(function(){
                $('#add-post').click(function(){                    
                    $.get("<?php controll('add-post'); ?>", {add_post: "new_post"}, 
                        function(data){ $('#content').html(data); }
                    );
                });
            });
        </script>
    </head>

    <body>

        <div id="pagewrap">

<?php get_includes('header'); ?>

            <div id="content">
                <div id="add-post" style="cursor: pointer;">Add Post</div>
                <?php get_controll('show-post'); ?>
            </div>
            <!-- /#content --> 
            
<?php get_includes('footer'); ?>        

        </div>
        <!-- /#pagewrap -->

    </body>
</html>
