<?php
/**
 * Creates the header for a page.
 *
 * @param null $title Title of the page to render
 */
function pageHeader($title = null)
{
    if ($title === null) $title = "ActumCrypto!";
    else $title = "ActumCrypto - " . $title;

    /**
     *
     */
    $menu = [
        '/' => 'Home',
        '/faq' => 'FAQ',
        '/downloads' => 'Downloads',
        '/develop' => 'Develop an Actum App'
    ];

    $currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $currentPage = pathinfo($currentPage, PATHINFO_FILENAME); //Remove '.php' extension if included
    if ($currentPage === "/index") $currentPage = "/";
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?= htmlspecialchars($title) ?></title>
		<link rel="shortcut icon" href="/logo.ico"/>
		<!-- Bootstrap CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
			  integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
			  crossorigin="anonymous">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/css/main.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113481337-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());

			gtag('config', 'UA-113481337-1');
		</script>
	</head>
<body class="bg-img">
<button class="nav-collapse" onclick="reveal();">
	<!-- material icon menu -->
	<img src="/svg/nav.svg">
</button>
<ul class="nav hidden nav-nice">
    <?php
    foreach ($menu as $url => $pageTitle) {
        $active = $url === $currentPage;
        ?>
		<li class="nav-item">
			<a class="nav-link <?= $active ? "active" : "" ?>" href="<?= $active ? "#" : $url ?>"><?= $pageTitle ?></a>
		</li>
        <?php
    }
    ?>
</ul>
    <?php
}