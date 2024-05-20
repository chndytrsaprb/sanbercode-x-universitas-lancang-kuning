<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new animal('shaun');
echo "name : " . $sheep->name . "<br>";
echo "legs : " .$sheep->legs . "<br>";
echo "cold-blooded : " .$sheep->cold_blooded . "<br><br>";

$frog = new frog('buduk');
echo "name : " .$frog ->name . "<br>";
echo "legs : " .$frog ->legs . "<br>";
echo "cold-blooded : " .$frog->cold_blooded . "<br>";
echo $frog->jump() . "<br><br>";

$sungokong = new ape('kera sakti');
echo "name : " .$sungokong ->name . "<br>";
echo "legs : " .$sungokong ->legs . "<br>";
echo " cold-blooded : " .$sungokong->cold_blooded . "<br>";
echo $sungokong ->yell() . "<br>";
?>
