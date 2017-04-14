<?php include("nav_footer.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php load_meta(); ?>

    <link rel="stylesheet" type="text/css" href="public/http/css/custom.css"/>
    <title>Index</title>
</head>

<?php navbar(array("active","","","")); ?>

    <!--Start carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="assets/cabbagesinner.jpg" alt="New York">
                <div class="carousel-caption">
                    <h1 class="typewriter">
                        <a href="" class="typewrite" data-period="6000" data-type='[ "Cabbage & Condoms" ]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>

            <div class="item">
                <img src="assets/chicagosearstower.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h1 class="typewriter">
                        <a href="" class="typewrite" data-period="6000" data-type='[ "Sears Tower, Chicago, IL" ]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>

            <div class="item">
                <img src="assets/koreaband.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                    <h1 class="typewriter">
                        <a href="" class="typewrite" data-period="6000" data-type='[ "Hondae District, Seoul, ROK" ]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>
        </div>

    <!--Left and right controls-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>



    <!--End carousel-->
    <div class="container-fluid bg-1">
        <div class="row">
            <div class="col-sm-4 ">
            </div>
            <div class="col-sm-4">
                <h2 class="h2-mod-light">
                    About Me
                </h2>
                <p class="prettyPrint-light">
                    A mild mannered computer science major trying to make it through my major, one segmentation fault
                    at a time. Websites, Databasing and anywhere in between.
                </p>
            </div>
            <div class="col-sm-4 ">
                <img src="assets/me-photo.jpg" class="img-circle" width="300" height="400">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-2">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="h2-mod">
                    What I do
                </h2>
                <p class="prettyPrint">
                    As a computer science major, I am still in the grips of what I want to accomplish in the field.
                    Its hard to decide when everything looks so interesting. As part of my journey this website will be
                    to explain my feelings of going into each topic that my collegiate career represents and discovering
                    what I feel most inclined to do. <br><br><br>

                    In addition to my Major I also enjoy travelling. My dream is to become financially stable enough to
                    travel the world and have a beer in every country (that sells it legally). A guy can dream right?
                    <br><br><br>

                    Currently, my travels have only spanned 4 continents, but with any luck I'll hope two cross of the
                    last two on my list before i reach my thirties. Time is running out so I have to find a good way
                    of making money on my way over. With today's technology its possible to telecommute to work and with
                    any luck the telecommuting trend can continue during my career, if not I can always pack up and move
                    to a new area.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="assets/ghana.jpg" class="img-responsive img-rounded card">
            </div>
            <div class="col-sm-4">
                <img src="assets/tokentrain.jpg" class="img-responsive img-rounded card">
                <img src="assets/candc.jpg" class="img-responsive img-rounded card">
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3">
        <div class="row">
            <div class="col-sm-4">
                <img src="assets/meandnatchan.jpg" class="img-responsive img-rounded card">
            </div>
            <div class="col-sm-3">
                <h1 class="h1-mod">Where to Contact</h1>
                <div class="btn btn-group-sm btn-group">
                    <a href="https://www.facebook.com/gemini88mill" class="btn btn-default hover-png">
                        <img src="png/facebook_alt.png" class="img-responsive">
                    </a>
                    <a href="https://www.linkedin.com/in/raphael-miller-947a8a85/" class=" btn btn-primary hover-png" id="hover">
                        <img src="png/linkedin_alt.png" class="img-responsive">
                    </a>
                    <a href="https://twitter.com/gemini88mill" class="btn btn-primary hover-png">
                        <img src="png/twitter_alt.png" class="img-responsive">
                    </a>
                    <a href="https://github.com/gemini88mill" class="btn btn-primary hover-png">
                        <img src="png/github_alt.png" class="img-responsive">
                    </a>

                </div>
            </div>
            <div class="col-sm-5">

            </div>
        </div>
    </div>

<?php footer(); ?>


</body>
</html>