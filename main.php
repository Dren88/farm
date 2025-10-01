<?php
include_once 'autoload.php';

$farm = new Farm();
$farm->fillFarm(10, 'Cow');
$farm->fillFarm(20, 'Chicken');
//echo get_class($farm);
echo '<pre>';
print_r($farm);
//print_r($farm->countAnimal());
echo '</pre>';
//echo $farm->countAnimal();