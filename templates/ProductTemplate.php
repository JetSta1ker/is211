<?php
include ("BaseTemplate.php");

class ProductTemplate extends BaseTemplate {
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

    public function getPageTemplate(array $arr): string 
    {
        $template = parent::getBaseTemplate();
        $str= "<h1>". $arr['name'] . ", ". $arr['price'] ."</h1>";
        $resultTemplate = sprintf($template, 'Страница товара', $str);
        return $resultTemplate;
    }
}