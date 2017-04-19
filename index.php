<?php
/**
 * Created by PhpStorm.
 * User: Joshua
 * Date: 13-4-2017
 * Time: 14:58
 */

?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Portfolio Joshua Latusia</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body>

    <div id="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Portfolio Joshua Latusia</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Project 1</a></li>
                                <li><a href="#">Project 2</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">All finished projects</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">All current projects</a></li>
                            </ul>
                        </li>
                    </ul>



                    <!-- Social media link buttons -->

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://github.com/joshuaRMS" target="_blank">My Github</a></li>
                        <li><a href="https://bitbucket.org/RMSjoshua/" target="_blank">My Bitbucket</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- /.navbar- default -->




        <div id="header-container">

            <button class="btn btn-success" onclick="$(this).hide();"> Click me</button>

        </div> <!-- header-container -->


        <p>Work In Progress</p>
    </div> <!-- container -->




<script src="js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>
