<?php
include_once '../include/include.php';
pageHeader("Develop An App");
?>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="../svg/logo.svg">
	<h1 class="display-4 bigger"><b>Develop an Actum App</b></h1>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">Advantages of Actum</h1>
	<p class="lead">Actum is a blockchain, which inherently has many advantages, including reliability, low cost, and
		speed. Actum also has no transaction fees, allowing you to have completely free usage. Also, since Actum is a
		blockchain, if one server loses all of it's data, it can be reset by the rest of the blockchain, and no data is
		lost, improving reliability and reducing downtime.</p>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<h1 class="display-4">Actum Smart Contracts</h1>
	<p class="lead">Smart contracts are a type of program that are programmed to preform transactions, and cannot be
		interfered with. This means that Actum smart contracts are free from fraud and unexpected changes. With your own
		Actum token and smart contracts, you can create a rewards program, a cryptocurrency, a market, or anything else
		you can think of!</p>
	<p class="lead">Smart contracts can be programmed with conditional statements that rely on outside factors to be
		satisfied. This means that you can create an app that automatically pays workers for completing tasks, reward
		customers for shopping at your store, pay out prizes for winning a game, or anything else you can think of!</p>
	<a class="btn btn btn-dark" href="./create">Create an Actum App!</a>
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
