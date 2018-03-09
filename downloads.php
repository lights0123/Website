<?php
include_once 'include/include.php';
pageHeader("Downloads");
?>
        <div class="jumbotron jumbotron-fluid pad pad-top wid">
            <img src="./svg/logo.svg">
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
        <footer class="footer jumbotron jumbotron-fluid pad wid">
            <p class="lead">Join our official <a href="http://reddit.com/r/actumcrypto">subreddit</a>!</p>
            <p class="lead">Join our <a href="https://discord.gg/ybzTrHS">Discord server</a>!</p>
        </footer>
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
