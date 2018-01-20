<!DOCTYPE html>
<!--
Copyright (c) 2017 Ryan Shane
All rights reserved.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCoin's Official Website!</title>
        <link rel="shortcut icon" href="logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="bg">
        <div class="jumbotron jumbotron-fluid padding-so-it-looks-good center">
            <img src="logo.png">
            <h1 class="display-4 bigger">ActumCoin</h1>
            <p class="lead big">ActumCoin is a decentrilized, peer-to-peer digital cryptocurrency.</p>
        </div>
        <div class="jumbotron jumbotron-fluid padding-so-it-looks-good center dark">
            <h1 class="display-4">Use ActumCoin</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <!-- material icon description -->
                        <button class="btn btn-use"><img class="use" src="learn.svg"></button><br>
                        Learn More About ActumCoin
                    </div>
                    <div class="col-sm">
                        <!-- material icon account balance wallet -->
                        <button class="btn btn-use"><img src="wallet.svg"></button><br>
                        Download An ActumCoin Wallet
                    </div>
                    <div class="col-sm">
                        <!-- material icon local atm -->
                        <button class="btn btn-use"><img src="buy-coin.svg"></button><br>
                        Buy/Sell ActumCoin
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <!-- material icon add shopping cart -->
                        <button class="btn btn-use">
                            <svg>
                                <use xlink:href="use-coin.svg"/>
                            </svg>
                        </button>
                        <br>
                        Buy Things With ActumCoin
                    </div>
                    <div class="col-sm">
                        <!-- material icon desktop windows -->
                        <button class="btn btn-use"><img src="computer.svg"></button><br>
                        Mine ActumCoin
                    </div>
                    <div class="col-sm">
                        <!-- material icon store -->
                        <button class="btn btn-use"><img src="store.svg"></button><br>
                        Incorporate ActumCoin Into Your Apps
                    </div>
                </div>
            </div>
        </div>
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- svg4everybody -->
        <script src="/path/to/svg4everybody.js"></script>
        <!-- JavaScript -->
        <script>svg4everybody(); // run it now or whenever you are ready</script>
    </body>
</html>
