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
   <p>Rozpoczęcie tego roku szkolnego odbyło się w <?php echo date("l", mktime(0,0,0,9,1,2025)) ?> i był to <?php echo date("z" ,mktime(0,0,0,9,1,2025))?> dzień roku </p>
   <hr>
   <h1>ĆWICZENIA</h1>
   <?php $lala="8:30pm 24 january 2019" ?>
   <p><?php echo date("s, i, hA, d, l, M, Y", mktime(9,15,16,13,1,2025)) ?></p>
   <p><?php echo date("s, i, hA, d, l, M, Y", strtotime($lala)) ?></p>
   <p><?php echo time() ?></p> 
</body>
</html>