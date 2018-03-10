<?php
if (!isset($_GET['a']) || $_GET['a'] == "") {
    header("Location:  ./news");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>ActumCrypto - News</title>
	<link rel="shortcut icon" href="./logo.ico"/>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
		  integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="bg-img">
<button class="nav-collapse" onclick="reveal();">
	<!-- material icon menu -->
	<img src="../svg/nav.svg">
</button>
<ul class="nav hidden nav-nice">
	<li class="nav-item">
		<a class="nav-link" href="./">Home</a>
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
</ul>
<div class="jumbotron jumbotron-fluid pad pad-top wid">
	<img src="./svg/logo.svg">
</div>
<?php
include "./db.php";

$id = mysqli_real_escape_string($link, $_GET['a']);

$sql = "SELECT * FROM `news` WHERE id=$id";
$result = mysqli_query($link, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    ?>
	<div class="jumbotron jumbotron-fluid pad wid" id="<?= $row['id'] ?>">
		<p class="lead"><a href="./news">Back to all news</a></p>
		<h1 class="display-4"><?= $row['title'] ?></h2>
			<small class="form-text text-muted"><?= $row['date'] ?></small>
            <?php
            if ($row['image'] != '0') {
                echo '<img src="./images/' . $row['id'] . '.png">';
            }
            ?>
			<p class="lead"><?= $row['content'] ?></p>
	</div>
    <?php
}
$sql2 = "SELECT * FROM comments WHERE id_on=$id";

$result2 = mysqli_query($link, $sql2);

?>
<div class="jumbotron jumbotron-fluid pad wid">
	<h2 class="display-5">Comments</h2>
    <?php

    if (mysqli_num_rows($result2) == 0) {
        ?>
		<p class="lead">There are no comments yet.</p>
        <?php
    }

    while ($row = mysqli_fetch_assoc($result2)) {
        ?>
		<p class="lead condensed"><b><?= htmlspecialchars($row['name']) ?></b></p>
		<small class="form-text text-muted condensed"><?= $row['date'] ?></small>
		<p class="lead condensed pad-bottom"><?= htmlspecialchars($row['content']) ?></p>
        <?php
    }
    ?>
	<h3 class="display-6">Post a Comment</h3>
	<form action="./comment" method="post">
		<input type="hidden" name="id_on" value="<?= $id ?>">
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
