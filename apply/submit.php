<?php

// check if complete
if (isset($_POST['submit'])) {
    leave(false);
}

// name and email
$n = $_POST['n'];
$e = $_POST['e'];

// construct message
switch (isset($_POST['p'])) {
    case true:
        $sn = $_POST['sn'];
        $p = $_POST['p'];
        $w = $_POST['w'];
        $c = $_POST['c'];
        $msg = "$n " . ($sn == "" ? "" : "(a.k.a. $sn) ") . "has applied to be added to the vendors list. Their website is $w, offer $p products" . ($c == "" ? "." : ", and commented $c.") . "\nYou can reply at $e.";
        break;
    case false:
        $tn = $_POST['tn'];
        $ts = $_POST['ts'];
        $ta = $_POST['ta'];
        $tv = $_POST['tv'];
        $msg = "$n has applied to create a token called $tn, with a symbol of $ts. The token will have an initial amountof $ta at a value of ATC$tv.\nYou can reply at $e.";
        break;
}

// send
mail("admin@actumcrypto.org", "Application", $msg, "From: $e\r\n");
leave(true);

// return
function leave(bool $c) {
    $referrer = $_SERVER['HTTP_REFERER'] . "?c=$c";
    header("Location: $referrer");
}
