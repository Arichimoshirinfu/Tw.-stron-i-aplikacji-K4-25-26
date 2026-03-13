<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">

    <input type="email" placeholder="email" name="email" id="email"><br>
    <input type="date" name="data" id="data"><br>
    <input type="month" name="mies" id="mies"><br>
    <input type="time" name="czas" id="czas"><br>
    <input type="week" name="tydz" id="tydz"><br>
    <button type="submit">Wyślij</button>

    </form>

    <pre>
        <?php
        print_r($_POST)
        ?>
    </pre>

</body>
</html>