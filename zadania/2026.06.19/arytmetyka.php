<?php
    class Arytmetyka
    {
        public ?float $num1 = null;
        public ?float $num2 = null;

        public function suma(){
            return $this->num1 + $this->num2;
        }

        public function roznica(){
            return $this->num1 - $this->num2;
        }

        public function iloczyn(){
            return $this->num1 * $this->num2;
        }

        public function iloraz(){
            if($this->num2 == 0){
                return null;
            } else
            return $this->num1 / $this->num2;
        }

        public function reszta(){
            if($this->num2 == 0){
                return null;
            } else
            return $this->num1 % $this->num2;
        }

        public function potega(){
            return $this->num1 ** $this->num2;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $aryt_obj = new Arytmetyka();
    $aryt_obj->num1 = 5;
    $aryt_obj->num2 = 7;
    ?> 

    <ul>
        <li>Suma liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?> jest równa <strong><?= $aryt_obj->suma()?></strong></li>

        <li>Odejmowanie liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?>jest równa <strong><?= $aryt_obj->roznica()?></strong></li>

        <li>Iloczyn liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?>jest równa <strong><?= $aryt_obj->iloczyn()?></strong></li>

        <li>Iloraz liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?>jest równa <strong><?= $aryt_obj->iloraz()?></strong></li>

        <li>Reszta z dzielenia liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?> jest równa <strong><?= $aryt_obj->reszta()?></strong></li>

        <li>Potęgowanie liczb <?= $aryt_obj->num1 ?> i <?= $aryt_obj->num2 ?> jest równa <strong><?= $aryt_obj->potega()?></strong></li>
    </ul>

</body>
</html>