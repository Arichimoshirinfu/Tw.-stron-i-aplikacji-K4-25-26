<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="uczen50.css">
</head>
<body>
    <form>
    <table>
        <caption>Oceny</caption>
    

        <?php
        for($a=1; $a<=50; $a++){
            echo "<tr>";
            echo "<td>" . "<label for=uczen$a>" . "Uczeń $a:" . "</label>" . "</td>";
            echo "<td>" . "<input type='text' " . "name=uczen$a " . "id=uczen$a" . ">" . "<br>" . "</td>";
            echo "</tr>";
        }
        ?>
        <tr><td colspan="2"><input type="submit" value="Zapisz" name="zapisz"></td></tr>
    
    </table>
    </form>
</body>
</html>