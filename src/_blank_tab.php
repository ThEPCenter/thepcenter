<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>_blank_tab</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2>_blank_tab</h2>

            <div class="page-region">
                <div class="page-region-content">
                    <div class="page-control span12" data-role="page-control">
                        <span class="menu-pull"></span>
                        <div class="menu-pull-bar"></div>

                        <ul>
                            <li class="active"><a href="#page1">#page1</a></li>
                            <li><a href="#page2">#page2</a></li>
                            <li><a href="#page3">#page3</a></li>
                            <li><a href="#page4">#page4</a></li>
                            <li><a href="#page5">#page5</a></li>


                            <li class="place-right"><a href="#page6"><i class="icon-cog nrm"></i></a></li>
                        </ul>

                        <div class="frames">

                            <div class="frame active" id="page1">
                                <h3>Page 1</h3>
                                <p>*************************</p>
                            </div>


                            <div class="frame" id="page2">
                                <h3>Page 2</h3>
                                <p>********************************</p>
                            </div>

                            <div class="frame" id="page3">
                                <h3>Page 3</h3>
                                <p>**********************************</p>
                            </div>

                            <div class="frame" id="page4">
                                <h3>Page 4</h3>
                                <p>***********************************</p>
                            </div>

                            <div class="frame" id="page5">
                                <h3>Page 5</h3>
                                <p>**************************************</p>
                            </div>

                            <div class="frame" id="page6">
                                <h3>Page 6</h3>
                                <p>***************************************</p>
                            </div>

                        </div>
                    </div>

                </div>
                
                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>
                
            </div> <!-- -->
            
        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>