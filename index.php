<!DOCTYPE html>
<!--
Copyright (c) 2017 Ryan Shane
All rights reserved.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCoin's Official Website is coming soon!</title>
        <link rel="shortcut icon" href="logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="jumbotron padding-so-it-looks-good">
            <h1 class="display-4 bigger">Website Coming Soon!</h1>
            <p class="lead big">ActumCoin is an open-source cryptocurrency that uses the <a href="https://en.wikipedia.org/wiki/SHA-3">SHA3-512 algorithm</a>. Check out our <a href="https://github.com/ActumCoin">GitHub</a>!</p>
            <hr class="my-4">
            <p class="lead big" id="countdown">Website coming in <i>x</i>.</p>
        </div>
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- JavaScript -->
        <script>
            //countdown end date
            var countdownDate = new Date("Feb 14 2018 20:00:00").getTime();

            var x = setInterval(function () {
                //today's datetime
                var now = new Date().getTime();
                //distance between now an the count down date
                var distance = countdownDate - now;

                //calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                //display countdown
                $("#countdown").html("Website coming in " + days + " days, " + hours + " hours, " + minutes + " minutes, and " + seconds + " seconds.");
                //if the count down is finished say rn
                if (distance < 0) {
                    clearInterval(x);
                    $("#countdown").html("Coming like right now!");
                }
            }, 1000);
        </script>
    </body>
</html>
