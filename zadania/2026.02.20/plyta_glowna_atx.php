<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
    $str0= "Płyta główna ATX";
    $str = mb_str_split($str0, 1);
    
    foreach($str as $str1)
        if($str1 === "a" || $str1 === "A") 
           echo  "<span style='color:magenta;'>$str1</span>";
        
        else
        echo $str1;
        
    
?>
</body>
</html>