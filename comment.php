<?php

if (isset($_POST['submit'])) {
    leave();
}

include "./db.php";

$id_on = mysqli_real_escape_string($link, $_POST['id_on']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$content = mysqli_real_escape_string($link, $_POST['content']);

$sql = "INSERT INTO `comments` (`id`, `id_on`, `name`, `date`, `content`) VALUES (NULL, $id_on, '$name', CURRENT_DATE(), '$content')";

mysqli_query($link, $sql);

// leave
leave();

// leave function
function leave() {
    $referrer = $_SERVER['HTTP_REFERER'];
    header("Location: $referrer");
}
