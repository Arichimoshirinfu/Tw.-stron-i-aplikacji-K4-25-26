<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kokoa{
            list-style-type:decimal-leading-zero;
        }
        </style>
</head>
<body>
<?php
    $link1="https://youtube.com";
    $link2="https://wp.pl";
    $link3="https://facebook.com";
    $title="Pierwsza strona z PHP-em";
    ?>
     <h1>
<ol>
    <li><?= $title ?> </li>
</ol>
    </h1>

    <ol class="kokoa">
    <li> <a href="<?= $link1 ?>" target="_blank"> Youtube </a> </li>
    <li><a href="<?= $link2 ?>" target="_blank">Poczta WP </a> </li>
    <li><a href="<?= $link3 ?>" target="_blank"> Facebook </a> </li>
</ol>
</body>
</html>