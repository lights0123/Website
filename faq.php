<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCrypto - FAQ</title>
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
                <a class="nav-link active" href="">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./downloads">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./develop">Develop an Actum App</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top wid">
            <img src="logo.png">
            <h1 class="display-4 bigger"><b>FAQ</b></h1>
        </div>
        <div class="jumbotron jumbotron-fluid pad wid">
            <h2 class="display-5">What is ActumCrypto?</h2>
            <p class="lead">ActumCrypto is a private blockchain system, where you can transfer digital tokens and cryptocurrencies.</p>
            <h2 class="display-5">What is Actum?</h2>
            <p class="lead">Actum is another name used to refer to certain parts of the ActumCrypto system. For example, they are Actum tokens, but they areon the ActumCrypto system.</p>
            <h2 class="display-5">Why the name Actum?</h2>
            <p class="lead">Actum is a Latin word meaning "transaction."</p>
            <h2 class="display-5">What is ActumCoin?</h2>
            <p class="lead">ActumCoin is the native currency of Actum. It is used for most monetary transactions, although there may be more cryptocurrencies on Actum in the future.</p>
            <h2 class="display-5">Why use Actum or ActumCoin?</h2>
            <p class="lead">The primary reason is that you cannot get cheated or scammed because Actum uses <a href="https://www.coindesk.com/making-sense-smart-contracts/">smart contracts</a>, which automatically conduct transactions. Another reason is that cryptocurrencies are anonymous and secure, which allows for more security.</p>
            <h2 class="display-5">What is ActumMiner?</h2>
            <p class="lead">ActumMiner is a program for your computer that helps to verify transactions on the Actum blockchain. In exchange for the computing power of your computer, you are given ActumCoin. mines transactions of all tokens and currencies on Actum, but payouts are in ActumCoin.</p>
            <h2 class="display-5">How does a blockchain work?</h2>
            <p class="lead">A blockchain is a system that uses many "nodes" that store a record of every transaction. Each of these "nodes" stores a record of every transaction, a decentralized and secure system is possible.</p>
            <h2 class="display-6">See more:</h2>
            <p class="lead">Read the Actum whitepaper <a href="./whitepaper">here</a>.</p>
            <p class="lead">For press inquires email us at <a href="mailto:info@actumcrypto.org">info@actumcrypto.org</a>.</p>
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
