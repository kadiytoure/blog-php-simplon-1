<?php
$array = scandir('post');
$files = [];
foreach ($array as $file) {
    if ($file === '.') {
        continue;
    }
    if ($file === '..') {
        continue;
    }
    $files[] = $file;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Awesome Blog</title>
</head>
<body>
    <h1>My Awesome Blog</h1>
    <nav><a href="create.html">New Post</a></nav>
    <?php foreach ($files as $file) { ?>
    <article>
        <h2><?php echo basename($file, '.txt'); ?></h2>
        <p><?php echo file_get_contents('post/' . $file); ?></p>
    </article>
    <?php } ?>
</body>
</html>