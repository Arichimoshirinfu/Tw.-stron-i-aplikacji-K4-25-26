<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="witajswiecieja.css">
</head>
<body>
    
    

<table>

    <tr>

    <?php 

    $hello="Kon'nichiwa sekai";
    $test= str_split($hello, 1);
    foreach($test as $kuku)
        echo "<td>$kuku</td>"

    ?>

    </tr>

</table>
    

</body>
</html>