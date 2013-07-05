<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>_blank_accordion</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2>_blank_accordion</h2>

            <div class="page-region">
                <div class="page-region-content">
                    <ul class="accordion span10" data-role="accordion">
                        <li class="active">
                            <a href="#">frame 1</a>
                            <div>
                                <h3>frame 1</h3>                                            
                                <p>******************************************</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">frame 2</a>
                            <div>
                                <h3>frame 2</h3>
                                <p>++++++++++++++++++++++++++++++++++++++++</p>
                            </div>
                        </li>
                    </ul>

                </div>
                
                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
            
        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>