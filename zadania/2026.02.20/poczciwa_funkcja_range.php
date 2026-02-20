<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre,p{
            border: 1px double $rgba(83, 34, 34, 1);
            box-shadow: 1px 1px 5px black;
            width:300px;
            height:200px;
        }
    </style>
</head>
<body>
    
    <?php 
    $parzyste = range(0,12,2);
    $dziesiatki=range(-10,100,10);
    $polowki= range(-5.5,5.5,0.5);
    $litery_od_em = range("m","u",1);
    $litery_wstecz = range("X","E",1);
    ?>


    <pre> <?php print_r($parzyste); ?> </pre>

    <hr>

    <p> <?php foreach($parzyste as $parzyste2) echo "$parzyste2 " ?>
    </p>

    <hr>
    
    <p> <?php foreach($dziesiatki as $dziesiatki2) echo "$dziesiatki2 " ?> </p>

    <hr>
    
    <p> <?php foreach($polowki as $polowki2) echo "$polowki2 " ?>
    </p>

    <hr>
    
    <p> <?php foreach($litery_od_em as $litery_od_em2) echo "$litery_od_em2 " ?> </p>

    <hr>
    
    <p> <?php foreach($litery_wstecz as $litery_wstecz2) echo "$litery_wstecz2 " ?> </p>

</body>
</html>