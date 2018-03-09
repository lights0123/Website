<?php
include_once 'include/include.php';
pageHeader();
?>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="./svg/logo.svg">
	<h1 class="display-4 bigger"><b>ActumCrypto</b></h1>
	<p class="lead">ActumCrypto is a blockchain and system of smart contracts. These are programmed to preform
		transactions, and cannot be interfered with. This means that Actum smart contracts are free from fraud and
		unexpected changes. With your own Actum token and smart contracts, you can create a rewards program, a
		cryptocurrency, a market, or anything else you can think of!</p>
	<p class="lead">A blockchain is free from downtime and slow regulatory processes, so Actum tokens transfer are fast
		and reliable. Actum apps can also use ActumCoin, the native cryptocurrency of Actum as a payment method.</p>
	<a class="btn btn btn-dark" href="./develop">Create your Actum app!</a>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">ActumCoin</h1>
	<p class="lead">ActumCoin is the native cryptocurrency of the ActumCrypto system. It can be used like USD or EUR to
		purchase goods and services. It can also be used in a core smart contract type, an <b>atomic exchange,</b> which
		exchanges a set amount of ActumCoin for other Actum tokens.</p>
	<button class="btn btn btn-dark">Buy ActumCoin!</button>
	<a class="btn btn btn-dark" href="./vendors">Use ActumCoin!</a>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">ActumCoinWallet</h1>
	<p class="lead">Actum wallets are a secure way to store ActumCoin and other Actum tokens. The core Actum wallet,
		ActumCoinWallet, has the ability to store, send and receive ActumCoin and other tokens, but you can make your
		own custom Actum wallet for your token or business.</p>
	<a class="btn btn btn-dark" href="./downloads#wallet">Download ActumCoinWallet!</a>
	<button class="btn btn btn-dark">Create an Actum Wallet!</button>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">ActumMiner</h1>
	<p class="lead">Mining is a process of authenticating transactions on a blockchain. In return, a miner is granted
		small amounts of a cryptocurrency. ActumMiner is the official software for mining the Actum blockchain. Since
		all Actum tokens are on the same blockchain, they are all mined together however, payouts are in ActumCoin.</p>
	<p class="lead">Since the ActumCrypto system uses a modified version of round-robin mining, all miners are granted a
		fair chance at mining a block, and earning ActumCoin</p>
	<a class="btn btn btn-dark" href="./downloads#miner">Download ActumMiner!</a>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">News</h1>
    <?php
    include "./db.php";

    $sql = "SELECT * FROM news WHERE id=(SELECT max(id) FROM news)";

    $result = mysqli_query($link, $sql);

    $row = mysqli_fetch_row($result);
    ?>
	<a href="./article?a=<?= $row[0] ?>"><h2 class="display-5"><?= $row[1] ?></h2></a>
	<small class="form-text text-muted"><?= $row[2] ?></small>
	<p class="lead"> <?php
        $pos = strpos($row[3], ' ', 100);
        $a = substr($row[3], 0, $pos);
        if ($a == $row[3]) {
            echo $a;
        } else {
            echo $a . '... <a href="./article?a=' . $row[0] . '">Read More</a>';
        } ?> </p>
	<p class="lead">This is displaying a preview of the newest news article. Click <a href="./news">here</a> to see more
		articles. </p>
</div>
<footer class="footer jumbotron jumbotron-fluid pad wid">
	<p class="lead">Join our official <a href="http://reddit.com/r/actumcrypto">subreddit</a>!</p>
	<p class="lead">Join our <a href="https://discord.gg/ybzTrHS">Discord server</a>!</p>
</footer>
<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
