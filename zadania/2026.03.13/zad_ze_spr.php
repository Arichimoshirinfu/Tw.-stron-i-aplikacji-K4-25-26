<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="zad_ze_spr.css">
</head>
<body>
<table>    
<?php

    foreach(range("a","z") as $male){
        echo "<tr>";
        foreach(range("A","Z",) as $duze){
            if(strtoupper($male) == $duze)
                echo "<td class='black'>" . $male . "~" . "$duze</td>";
                else
                echo "<td>$male~$duze</td>";
            
        }
        echo "</tr>";}

?>
</table>
</body>
</html>