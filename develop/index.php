<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Actum - Develop an App</title>
        <link rel="shortcut icon" href="../logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body class="bg-img">
        <button class="nav-collapse" onclick="reveal();">
            <!-- material icon menu -->
            <img src="../svg/nav.svg">
        </button>
        <ul class="nav hidden nav-nice">
            <li class="nav-item">
                <a class="nav-link" href="../">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../downloads">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">Develop an Actum App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../tokens">List of Actum Tokens</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top">
            <img src="../logo.png">
            <h1 class="display-4 bigger"><b>Develop an Actum App</b></h1>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">Advantages of Actum</h1>
            <p class="lead wid">Actum is a blockchain, which inherently has many advantages, including reliability, low cost, and speed. Actum also has no transaction fees, allowing you to have completely free usage. Also, since Actum is a blockchain, if one server loses all of it's data, it can be reset by the rest of the blockchain, and no data is lost, improving reliability and reducing downtime.</p>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">Actum Smart Contracts</h1>
            <p class="lead wid">Smart contracts are a type of program that are programmed to preform transactions, and cannot be interfered with. This means that Actum smart contracts are free from fraud and unexpected changes. With your own Actum token and smart contracts, you can create a rewards program, a cryptocurrency, a market, or anything else you can think of!</p>
            <p class="lead wid">Smart contracts can be programmed with conditional statements that rely on outside factors to be satisfied. This means that you can create an app that automatically pays workers for completing tasks, reward customers for shopping at your store, pay out prizes for winning a game, or anything else you can think of!</p>
            <a class="btn btn btn-dark" href="./create">Create an Actum App!</a>
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
