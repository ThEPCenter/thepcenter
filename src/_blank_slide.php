<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'meta_script.php'; ?>        
        <title>_blank_slide</title>
    </head>

    <body class="metrouicss">

        <?php require_once 'header.php'; ?>

        <div class="page bg-color-blueLight" id="page-index">

            <h2>_blank_slide</h2>

            <div class="page-region">
                <div class="page-region-content">


                    <div class="hero-unit">
                        <div id="carousel1" class="carousel" data-role="carousel" data-param-duration="300" style="height: 350px;">
                            <div class="slides">

                                <div class="slide" id="slide1" style="left: 0px;">
                                    <h2>Slide 1</h2>

                                </div>

                                <div class="slide" id="slide2" style="display: block; left: 580px;">
                                    <h2>Slide 2</h2>

                                </div>

                                <div class="slide" id="slide3" style="display: block; left: -580px;">
                                    <h2>Slide 3</h2>

                                </div>

                            </div>

                            <span class="control left"><i class="icon-arrow-left-3"></i></span>
                            <span class="control right"><i class="icon-arrow-right-3"></i></span>

                            <div class="markers">
                                <ul>
                                    <li class=""><a href="javascript:void(0)" data-num="0"></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-num="1"></a></li>
                                    <li class=""><a href="javascript:void(0)" data-num="2"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>

            </div>
        </div> <!-- END #page-index -->

        <?php require_once 'footer.php'; ?>

    </body>
</html>