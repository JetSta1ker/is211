<?php
include ("BaseTemplate.php");

class ProductsTemplate extends BaseTemplate {
    public function getTemplate(array $arr): string 
    {
        $template = parent::getBaseTemplate();
        $str= '';
        foreach( $arr as $key => $item ) {
            $str.= "<h1>". $item['name'] . ", ". $item['price'] ."</h1>";
        }
        $resultTemplate = sprintf($template, 'Список товаров', $str);
        return $resultTemplate;
    }
}