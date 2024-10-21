<?php

namespace Templates;

class OrderTemplate extends BaseTemplate
{
    public function getTemplate(string $str_list): string
    {
        $template = parent::getBaseTemplate();
        $resultTemplate = sprintf($template, 'Создание заказа', $str_list);
        return $resultTemplate;
    }
}