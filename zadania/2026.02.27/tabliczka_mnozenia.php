<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tamn.css">
</head>
<body>
    
    <table>
<!-- petla ma robic 10 razy row z kazdym mnozeniem  -->
        <?php for($a=0;$a<=10;$a++)
                if($a==0)
                    echo "<td>x</td>";
                else
                    echo "<td>$a</td>";

        ?>
    </table>

</body>
</html>