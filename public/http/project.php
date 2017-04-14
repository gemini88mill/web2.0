<?php include("nav_footer.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php load_meta(); ?>

    <title>Projects</title>
</head>
<body class="bg-1">
<?php navbar(array("","","","active")); ?>

    <div class="conatiner-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1 class="prettyPrint-header-projects">Flights.jar</h1>
                <img src="assets/flights_screenshots.png" class="img-responsive">
                <br><br><br>
                <p class="prettyPrint-light">
                    A Java Application that uses Google's Flights API to look up in order to find flights to specific
                    airports and destinations. The program uses a Framework called Laterna to give the GUI a retro
                    nCurses feel to Java. The objective for this project was to recreate a 90's computer application
                    that would simulate a typical computer application that a user would use to provide flight details
                    for users. <br><br><br>
                </p>

                <form method="get" action="">
                    <button type="submit" class="btn btn-default prettyPrintButton">Download Source</button>
                </form>
                <br><br>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

<?php footer(); ?>

</body>
</html>