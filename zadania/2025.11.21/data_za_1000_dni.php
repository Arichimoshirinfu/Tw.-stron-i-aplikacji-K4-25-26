<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dataza1000dni.css">
</head>
<body>
<p class="abc"> Dzisiejsza data: <b><?php echo date("d.m.Y") ?> </b></p>
<p class="def"> Data za 1000 dni: <?= date("d.m.Y", strtotime("+1000 days")) ?> </p>

</body>
</html>