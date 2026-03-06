<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="help.css">
</head>
<body>
    
    <table>
        <?php 
        for ($c=0;$c<=10;$c++)
            if ($c == 0)
                echo "<th>X</th>";
            else
                echo "<th>$c</th>";

        for($a=1;$a<=10;$a++){
                echo "<tr><th>$a</th>";
                for($b=1;$b<=10;$b++)
                    if($a*$b == $a * $a)
                        echo "<td class='srodek'>".($b * $a)."</td>";
                    else
                        echo "<td>".($b * $a)."</td>";

                echo "</tr>";}

        ?>
    </table>

</body>
</html>