<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>_blank_sidebar</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page secondary with-sidebar bg-color-blueLight" id="page-index">

            <div class="page-header">
                <div class="page-header-content">
                    <h2>_blank_sidebar</h2>
                </div>
            </div>


            <div class="page-sidebar">

                <p style="font-size: 20px; text-align: center;">Sidebar</p>

                <ul>
                    <li class="sticker sticker-color-orange"><a href="#">Item 1</a></li>
                    <li class="sticker sticker-color-orangeDark"><a href="#">Item 2</a></li>
                    <li class="sticker sticker-color-green"><a href="#">Item 3</a></li>
                    <li class="sticker sticker-color-pink"><a href="#">Item 4</a></li>
                    <li class="sticker sticker-color-red dropdown" data-role="dropdown">
                        <a>Item 5</a>
                        <ul class="sub-menu light sidebar-dropdown-menu" style="display: none;">
                            <li><a href="#">Sub Item 1</a></li>
                            <li><a href="#">Sub Item 2</a></li>
                            <li><a href="#">Sub Item 3</a></li>
                            <li><a href="#">Sub Item 4</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="bg-color-lighten" style="height: 330px; margin-top: 80px;">Ad Here</div>

            </div> <!-- END .page-sidebar -->


            <div class="page-region">
                <div class="page-region-content">

                    <h2 style="text-align: center;">Content</h2>

                    <p>************************************************</p>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div> <!-- END .page-region -->


        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>