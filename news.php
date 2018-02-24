<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCrypto - News</title>
        <link rel="shortcut icon" href="./logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
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
            <h1 class="display-4 bigger"><b>News</b></h1>
        </div>
       <?php
include "./db.php";


$sql = "SELECT * FROM `news` ORDER BY id DESC";
$result = mysqli_query($link, $sql);


while ($row = mysqli_fetch_assoc($result)) {

?>
	

<div class="jumbotron jumbotron-fluid pad wid" id="<?= $row['id'] ?>">
<a  href="./article?a=<?= $row['id'] ?>"><h2 class="display-4"><?= $row['title'] ?></h2></a>
                <small class="form-text text-muted"><?= $row['date'] ?></small>
                <p class="lead"><?php 
                $pos=strpos($row['content'], ' ',100);
                $a = substr($row['content'],0,$pos );
                if ($a == $row['content']) {
                	echo $a;
                } else {
                	echo $a . '... <a href="./article?a=' . $row['id'] . '">Read More</a>';
                } ?></p>
            </div>
        <?php }
        ?>
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
