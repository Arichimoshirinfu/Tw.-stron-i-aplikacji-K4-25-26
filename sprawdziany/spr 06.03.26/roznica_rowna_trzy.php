<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="roznica_rowna_trzy.css">
</head>
<body>
    
    <table>

    <?php 

        for($a=0;$a<=9;$a++){
            echo "<tr>";
            for($b=0;$b<=9;$b++)
                if($a - $b == 3 || $b - $a == 3)
                    echo "<td class='help'>$a|$b</td>";
                else
                    echo "<td>$a|$b</td>";
            
            echo "</tr>";
        }

    ?>

    </table>

</body>
</html>