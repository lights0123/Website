<?php
include_once 'include/include.php';
pageHeader("List of ActumCoin Accepting Vendors");
?>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="./svg/logo.svg">
	<h1 class="display-4 bigger"><b>Vendors That Accept ActumCoin</b></h1>
</div>
<div class="jumbotron jumbotron-fluid pad wid">
	<p class="lead">Apply to get on this list <a href="./apply/vendors">here</a>.</p>
	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">Vendor</th>
			<th scope="col">Products</th>
			<th scope="col">Website</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<th scope="row"></th>
			<td></td>
			<td><a href=""></a></td>
		</tr>
		</tbody>
	</table>
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
