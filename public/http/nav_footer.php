<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 4/13/17
 * Time: 10:21 PM
 * @param $active
 */



function navbar($active){
    echo "
    <body class=\"bg-1\">
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"index.php\">Raphael Miller</a>
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=$active[0]><a href=\"index.php\">Home</a></li>
                <li class=$active[1]><a href=\"resume.php\">Resume</a></li>
                <li class=$active[2]><a href=\"blog.php\">Blog</a></li>
                <li class=$active[3]><a href=\"project.php\">Projects</a></li>
            </ul>
        </div>
    </nav>";
}

function footer(){
echo "    
    <footer class=\"container-fluid text-center\">
        <a href=\"index.php\" title=\"To Top\">
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
        </a>
        <p>Website created by Raphael Miller <a href=\"#\">Back to top</a></p>
    </footer>";
}

function load_meta(){
    echo "
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"https://fonts.googleapis.com/css?family=Oxygen\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/custom.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"typewriter.js\"></script>
    ";
}
