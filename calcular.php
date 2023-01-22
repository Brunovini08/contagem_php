<?php

$num = $_POST['num'];
$cubo = ($num * $num * $num);
$count = 0;

while ($num <= $cubo) {
    if ($num % 2 == 0) {
        echo $num ."<br/>";
        $count ++;
    }
    $num ++;
}