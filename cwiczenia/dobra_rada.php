<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("dobra_rada", "Bez chleba, to się nie najesz.");
    ?>

    <h3> 
        <?= dobra_rada ?>
    </h3>

  <p> DO stałej DOBRA_RADA stosuję funkcję strlen: <?= strlen(dobra_rada)?> </p>
  <p> DO stałej DOBRA_RADA stosuję funkcję str_word_count: <?= str_word_count(dobra_rada) ?></p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strrev: <?= strrev(dobra_rada) ?> </p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strpos: <?= strpos(dobra_rada, "to") ?> </p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  str_replace: <?= str_replace("chleba", "mięsa", dobra_rada) ?></p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strtolower: <?= strtolower(dobra_rada) ?></p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strtoupper: <?= strtoupper(dobra_rada) ?></p> 
  <p> DO stałej DOBRA_RADA stosuję funkcję  ucwords: <?= ucwords (dobra_rada) ?> </p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  trim: <?= trim(dobra_rada) ?></p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strstr: <?= strstr(dobra_rada, "nie") ?></p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  substr: <?= substr(dobra_rada, 10, 5) ?> </p>
  <p> DO stałej DOBRA_RADA stosuję funkcję  strpad: <?= str_pad(dobra_rada, 41, " -_-", STR_PAD_BOTH); ?> </p>
</body>
</html>