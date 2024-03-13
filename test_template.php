<?php
include ("./templates/ProductsTemplate.php");
include ("./services/FileStorage.php");

$store = new FileStorage();
$arrData = $store->loadData('data.json');

$templ = new ProductsTemplate();
echo $templ->getTemplate($arrData);