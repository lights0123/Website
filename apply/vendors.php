<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ActumCrypto - Apply</title>
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
                <a class="nav-link" href="../develop">Develop an Actum App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../tokens">List of Actum Tokens</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top wid">
            <img src="../logo.png">
            <h1 class="display-4 bigger"><b>ActumCrypto</b></h1>
            <?php
            if (isset($_GET['c'])) {
                if ($_GET['c'] === "1") {
                    echo '<div class="alert alert-success" role="alert">Your application has been sent successfully!</div>';
                }
            }
            ?>
            <form action="./submit" method="post">
                <div class="form-group">
                    <label for="n">Organization Name*</label>
                    <input type="text" class="form-control" id="n" name="n" placeholder="Enter organization name" required>
                </div>
                <div class="form-group">
                    <label for="sn">Store Name (if different from organization's name)</label>
                    <input type="text" class="form-control" id="sn" name="sn" placeholder="Enter store name">
                </div>
                <div class="form-group">
                    <label for="e">Email Address*</label>
                    <input type="email" class="form-control" id="e" name="e" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="p">Products*</label>
                    <input type="text" class="form-control" id="p" name="p" placeholder="Enter store products" required>
                    <small class="form-text text-muted">Give examples of products or general product categories.</small>
                </div>
                <div class="form-group">
                    <label for="w">Website*</label>
                    <input type="text" class="form-control" id="w" name="w" placeholder="Enter website url" required>
                </div>
                <div class="form-group">
                    <label for="c">Comments</label>
                    <textarea class="form-control" id="c" name="c" placeholder="Enter any comments"></textarea>
                </div>
                <small class="form-text text-muted">*These fields are required</small>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
