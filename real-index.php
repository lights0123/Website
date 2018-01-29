<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Actum's Official Website!</title>
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
                <a class="nav-link active" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./downloads">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./develop">Develop an Actum App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./tokens">List of Actum Tokens</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top">
            <img src="logo.png">
            <h1 class="display-4 bigger"><b>Actum</b></h1>
            <p class="lead wid">Actum is a system of smart contracts. These are programmed to preform transactions, and cannot be interfered with. This means that Actum smart contracts are free from fraud and unexpected changes. With your own Actum token and smart contracts, you can create a rewards program, a cryptocurrency, a market, or anything else you can think of!</p>
            <p class="lead wid">A blockchain is free from downtime and slow regulatory processes, so Actum tokens transfer are fast and reliable. Actum apps can also use ActumCoin, the native cryptocurrency of Actum as a payment method.</p>
            <a class="btn btn btn-dark" href="./develop/develop">Create your Actum app!</a>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">ActumCoin</h1>
            <p class="lead wid">ActumCoin is the native cryptocurrency of Actum. It can be used like USD or EUR to purchase goods and services. It can also be used in a core smart contract type, an <b>atomic exchange,</b> which exchanges a set amount of ActumCoin for other Actum tokens.</p>
            <button class="btn btn btn-dark">Buy ActumCoin!</button>
            <a class="btn btn btn-dark" href="./vendors">Use ActumCoin!</a>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">ActumCoinWallet</h1>
            <p class="lead wid">Actum wallets are a secure way to store ActumCoin and other Actum tokens. The core Actum wallet, ActumCoinWallet, has the ability to store, send and receive ActumCoin and other tokens, but you can make your own custom Actum wallet for your token or business.</p>
            <a class="btn btn btn-dark" href="./downloads#wallet">Download ActumCoinWallet!</a>
            <button class="btn btn btn-dark">Create an Actum Wallet!</button>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">ActumMiner</h1>
            <p class="lead wid">Mining is a process of authenticating transactions on a blockchain. In return, a miner is granted small amounts of a cryptocurrency. ActumMiner is the official software for mining the Actum blockchain. Since all Actum tokens are on the same blockchain, they are all mined together however, payouts are in ActumCoin.</p>
            <p class="lead wid">Since Actum uses a modified version of round-robin mining, all miners are granted a fair chance at minig a block, and earning ActumCoin</p>
            <a class="btn btn btn-dark" href="./downloads#miner">Download ActumMiner!</a>
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
