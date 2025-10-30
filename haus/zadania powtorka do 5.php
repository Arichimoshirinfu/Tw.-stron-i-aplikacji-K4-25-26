<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php #ZADANIE 1 ?>
<?php  /* 1 */ echo "Tu " . "funkcja " . "echo " ?> <br>
<?php echo "Tu funkcja echo" ?>   <br>
<?php echo 'Tu funkcja echo' ?> <br>
<?php echo ("Tu funkcja echo") ?> <br>

<?php /* 2 */ print "Zgłasza się fukncja print" ?> <br>
<?php print "Zgłasza " . "się " . "funkcja " . "print" ?> <br>

<?php # 3 ?>
 <?= "kokolala" ?> <br>
 <?= "cipiasamnida" ?> <br>

 <!-- 4 -->
<?php

#aa

// aa

/*
aaaa
aa
aa
aa
*/

?>
<hr>
<!-- ZADANIE2 (ZMIENNE) -->

<?php $malpa1="jeśc kupe" ?>
<?php $malpa2="lubie" ?>
<?php $bool="true" ?>
<?php $malpiszon="onyx to bot" ?>

<?php echo "$malpa2 " . "$malpa1" . " jednak " . "$malpiszon" ?> <br>

<?php 
define("koko" , "małpa");
define("szanel" , "rakkun to");
?>

<?= "szanel" . "koko" ?> <br>
<?php print szanel ?> <?php print koko ?> <br>
<?php var_dump($malpiszon) ?> <br>
<?php var_export(szanel) ?> <br>


<?php  
    var_dump($malpa1)
?>
<br>
<?= "kokolakocipiasamnida koko szanel" ?>
<br>
<?php 
echo koko . "$malpa1 ";
print szanel;
?>

<br>
<?php define("sperma" , "kutas")?>
<?php print sperma ?>

</body>
</html>