<?php
include_once 'include/include.php';
if (!isset($_GET['a']) || $_GET['a'] == "") {
    header("Location:  /news");
}
pageHeader('news');
?>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="./svg/logo.svg">
</div>
<?php
include "./db.php";

$articleID = mysqli_real_escape_string($link, $_GET['a']);

$articleQuery = "SELECT * FROM `news` WHERE id=$articleID";
$articles = mysqli_query($link, $articleQuery);


while ($article = mysqli_fetch_assoc($articles)) {
    ?>
	<div class="jumbotron jumbotron-fluid pad wid" id="<?= $article['id'] ?>">
		<p class="lead"><a href="./news">Back to all news</a></p>
		<h1 class="display-4"><?= $article['title'] ?></h1>
		<small class="form-text text-muted"><?= $article['date'] ?></small>
        <?php
        if ($article['image'] != '0') {
            echo '<img src="./images/' . $article['id'] . '.png">';
        }
        ?>
		<p class="lead"><?= $article['content'] ?></p>
	</div>
    <?php
}
$CommentsQuery = "SELECT * FROM comments WHERE id_on=$articleID";

$comments = mysqli_query($link, $CommentsQuery);

?>
<div class="jumbotron jumbotron-fluid pad wid">
	<h2 class="display-5">Comments</h2>
    <?php
    if (mysqli_num_rows($comments) == 0) {
        ?>
		<p class="lead">There are no comments yet.</p>
        <?php
    }

    while ($comment = mysqli_fetch_assoc($comments)) {
        ?>
		<p class="lead condensed"><b><?= $comment['name'] ?></b></p>
		<small class="form-text text-muted condensed"><?= $comment['date'] ?></small>
		<p class="lead condensed pad-bottom"><?= $comment['content'] ?></p>
        <?php
    }
    ?>
	<h3 class="display-6">Post a Comment</h3>
	<form action="./comment" method="post">
		<input type="hidden" name="id_on" value="<?= $articleID ?>">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Enter display name">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="content" placeholder="Enter comment"></textarea>
		</div>
		<button type="submit" name="submit" class="btn btn-secondary">Post</button>
	</form>
	<br>
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
