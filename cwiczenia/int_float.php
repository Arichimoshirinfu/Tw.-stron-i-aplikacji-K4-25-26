<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href=int_float.css>
</head>
<body>
    <!-- ZADANIE 1. -->
    <?php 
    $a=123;
    $b=321;
    $c=1.2;
    $d=-1.0E-5;
    ?>
<!-- ZADANIE 2. -->
<fieldset>
    <legend>AD.2</legend>
<p>Zmienna <i>$a</i> ma wartość: <b><?= $a ?></b> a funkcja <code>is_int()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_int($a)) ?> </span></b></code></p>


<p>Zmienna $b ma wartość: <b><?= $b ?> </b>a funkcja <code>is_int()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_int($b)) ?> </span></b></code></p>


<p>Zmienna <i>$c</i> ma wartość: <b> <?= $c ?> </b> a funkcja <code>is_int()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_int($c)) ?> </span></code></b></p> 


<p>Zmienna <i>$d</i> ma wartość: <b><?= $d ?> </b> a funkcja <code>is_int()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_int($d)) ?></b></code> </span> </p>

<hr>

<p>Zmienna <i>$a</i> ma wartość: <b><?= $a ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_float($a)) ?></b></code> </span> </p>


<p>Zmienna <i>$c</i> ma wartość: <b><?= $b ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_float($b)) ?></b></code> </span> </p>


<p>Zmienna <i>$c</i> ma wartość: <b><?= $c ?> </b> a funkcja <code>is_float()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_float($c)) ?></b></code> </span> </p>


<p>Zmienna <i>$d</i> ma wartość: <b><?= $d ?> </b> a funkcja <code>is_float()</code> zwraca dla niej wynik: <b><code><span class="span"> <?php var_dump(is_float($d)) ?></b></code> </span></p>   

</fieldset>

<!-- ZADANIE 3. -->
<?php 
$dodaj= "59.85" + 100;
?>
<fieldset>
    <legend>AD.3</legend>
<p> Zmienna <i>$dodaj</i> ma wartość <b><?= $dodaj ?></b> a funkcja <code>is_numeric</code> zwraca dla niej wynik: <span class="span"> <code><?php var_dump(is_numeric($dodaj)) ?> </code></span></p>
</fieldset>
<!-- ZADANIE 4. -->

<fieldset>
    <legend>AD.4</legend>
<p>Stała <code>PHP_INT_MAX</code> ma wartość: <b> <?php echo PHP_INT_MAX ?> </b> </p>
<p>Stała <code>PHP_INT_MIN</code> ma wartość: <b><?php echo PHP_INT_MIN ?> </b> </p>
<p>Stała <code>PHP_INT_SIZE</code> ma wartość: <b> <?php echo PHP_INT_SIZE ?> </b> </p>
<p>Stała <code>PHP_FLOAT_MAX</code> ma wartość: <b> <?php echo PHP_FLOAT_MAX ?> </b> </p>
<p>Stała <code>PHP_FLOAT_MIN</code> ma wartość: <b> <?php echo PHP_FLOAT_MIN ?> </b> </p>
<p>Stała <code>PHP_FLOAT_DIG</code> ma wartość: <b> <?php echo PHP_FLOAT_DIG ?> </b> </p>
<p>Stała <code>PHP_FLOAT_EPSILON</code> ma wartość: <b> <?php echo PHP_FLOAT_EPSILON ?> </b> </p>
</fieldset>

</body>
</html>