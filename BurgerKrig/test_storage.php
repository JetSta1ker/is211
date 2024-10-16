<?php 
include ("./services/FileStorage.php");

$store = new FileStorage();
$arrData =
    [
        ['id' => 1, 'name' => 'Гамбургер', 'price' => 450.00],
        ['id' => 2, 'name' => 'Чизбургер', 'price' => 360.00],
        ['id' => 3, 'name' => 'Чикенбургер', 'price' => 500.00],
    ];
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);