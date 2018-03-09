<?php
include_once 'include/include.php';
pageHeader("Page Not Found");
?>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="./svg/logo.svg">
	<h1 class="display-4 bigger"><b>404!!</b></h1>
</div>
<div class="jumbotron jumbotron-fluid pad wid" id="pay">
	<h1 class="display-4">Looks like we messed up!</h1>
	<h2 class="display-5">The link to this page may be old or broken. If this problem persists, contact us at <a
				href="mailto:admin@actumcrypto.org">admin@actumcrypto.org</a>. Click <a href="/">here</a> to return
		home.</h2>
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
