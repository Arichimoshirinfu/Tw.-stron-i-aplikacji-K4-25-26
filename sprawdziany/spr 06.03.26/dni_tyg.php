<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dni_tyg.css">
</head>
<body>
    <?php
    $dni_tyg = ["pon", "wto", "śro", "czw", "pią", "sob", "nie"];
    ?>
    <table>
        <tr>
            <?php
            foreach($dni_tyg as $dni)
                if($dni == "wto" || $dni == "czw" || $dni == "sob")
                    echo "<td class='sr'>$dni</td>";
                else
                    echo "<td>$dni</td>";
                ?>
        </tr>
    </table>
</body>
</html>