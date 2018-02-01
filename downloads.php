<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCrypto - Downloads</title>
        <link rel="shortcut icon" href="logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="bg-img">
        <button class="nav-collapse" onclick="reveal();">
            <!-- material icon menu -->
            <img src="svg/nav.svg">
        </button>
        <ul class="nav hidden nav-nice">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./develop">Develop an Actum App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./tokens">List of Actum Tokens</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top wid">
            <img src="logo.png">
            <h1 class="display-4 bigger"><b>Downloads</b></h1>
        </div>
        <div class="jumbotron jumbotron-fluid pad" id="wallet">
            <h1 class="display-4 wid">ActumCoinWallet</h1>
            <p class="lead wid">Actum wallets are a secure way to store ActumCoin and other Actum tokens. The core Actum wallet, ActumCoinWallet, has the ability to store, send and receive ActumCoin and other tokens.</p>
            <p class="lead wid"><b>ActumCoinWallet is not available yet because it is not finished.</b></p>
            <a class="btn btn btn-dark disabled" href="">Download ActumCoinWallet for Windows 7/8/8.1/10</a>
            <a class="btn btn btn-dark disabled" href="">Download ActumCoinWallet for OSX</a>
            <a class="btn btn btn-dark disabled" href="">Download ActumCoinWallet for Linux</a>
            <!-- Add app store and google play buttons/icons once available -->
        </div>
        <div class="jumbotron jumbotron-fluid pad" id="miner">
            <h1 class="display-4 wid">ActumMiner</h1>
            <p class="lead wid">ActumMiner is the official software for mining the Actum blockchain. Since all Actum tokens are on the same blockchain, they are all mined together however, payouts are in ActumCoin.</p>
            <p class="lead wid"><b>ActumMiner is not available yet because it is not finished.</b></p>
            <a class="btn btn btn-dark disabled" href="">Download ActumMiner for Windows 7/8/8.1/10</a>
            <a class="btn btn btn-dark disabled" href="">Download ActumMiner for OSX</a>
            <a class="btn btn btn-dark disabled" href="">Download ActumMiner for Linux</a>
        </div>
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>
            var hidden = true;
            function reveal() {
                if (hidden) {
                    $(".hidden").attr("class", "nav reveal nav-nice");
                } else {
                    $(".reveal").attr("class", "nav hidden nav-nice");
                }
                hidden = !hidden;
            }
        </script>
    </body>
</html>
