<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--title-->
    <title>Doors2 | Coming Soon</title>

    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<div class="text-center coming-soon">
    <div class="container">
        <div class="coming-soon-content">
            <a href="index.html"><img class="img-responsive" src="images/home/logo2.png" alt="" /></a>
            <h2>We Will Be <span>Back Soon</span></h2>
            <p>We are working on our website design. We are sure this new website will completely blow your mind!</p>
            <div id="countdown">
                <ul class="list-inline">
                    <li>
                        <p>Days</p>
                        <span class="days time-font">00</span>
                    </li>
                    <li>
                        <p>Hours</p>
                        <span class="hours time-font">00</span>
                    </li>
                    <li>
                        <p>Min</p>
                        <span class="minutes time-font">00</span>
                    </li>
                    <li>
                        <p>Sec</p>
                        <span class="seconds time-font">00</span>
                    </li>
                </ul>
            </div>
            <ul class="list-inline socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <p class="copyright">&copy; 2015 <a href="#">Doors ii.</a> All rights reserved.</p>
    </div>
</div>

<!--/#scripts-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/coundown-timer.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
    //Countdown js
    $("#countdown").countdown({
            date: "10 december 2015 12:00:00",
            format: "on"
        },
        function() {
            // callback function
        });
</script>
</body>
</html>