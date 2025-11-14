<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rozpoczecierokuszkolnego.css">
</head>
<body>
<!-- Date, time, strtotime, mktime -->
   <p>Rozpoczęcie tego roku szkolnego odbyło się w <?php echo date("l", mktime(0,0,0,9,1,2025)) ?> i był to  dzień roku <?php echo date("z" ,mktime(0,0,0,9,1,2025))?></p>
   <p> <?php echo time() + 60*60*24 ?> </p>
</body>
</html>