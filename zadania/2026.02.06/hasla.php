<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hasla.css">
</head>
<body>

<?php
    $haslo1= "mbank.pl";
    $haslo2= "rnbank.pl";
?>

<table>

<tr>
    <th> <?php echo $haslo1 ?> </td>
    <th> <?php echo $haslo2 ?> </td>
</tr>

<tr>
    <td colspan=2>
         <?php
         if ($haslo1 === $haslo2)
            echo "Hasła są takie same";
        else 
            echo "Hasła są różne";
          ?> 
    </td>
</tr>

</table>

</body>
</html>