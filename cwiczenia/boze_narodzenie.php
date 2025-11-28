<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
ul{
    list-style-type:disc;
}
    </style>
</head>
<body>
<ul>

<li> Pierwszy dzień świąt Bożego Narodzenia wypada w tym roku w: <?php echo date("l", strtotime("24 december 2025")) ?> </li>

 <li>Drugi dzień świąt Bożego Narodzenia wypada w tym roku w: <?php echo date("l", strtotime("25 december 2025")) ?> </li>

</ul>
</body>
</html>