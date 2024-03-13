<?php
include("./controllers/Product.php");
include("./controllers/Order.php");

class Router {
    public function route(string $url):string 
    {
        $path = parse_url($url, PHP_URL_PATH);  
        //     /products/12

        $pieces = explode("/", $path);          
        // [0]- пусто, [1]- products, [2]- 12
        
        $id = 0;
        // Идентификатор найден
        if (isset($pieces[2]) && !empty($pieces[2])) {
            $id = intval($pieces[2]);
        }
        
        $resource = $pieces[1];
        $html_result = "";
        switch ($resource) {
            case "products":
                $product = new Product();
                if ($id)
                    $html_result = $product->get($id);
                else
                    $html_result = $product->getAll();
                break;
            case "orders":
                $order = new Order();
                $html_result = $order->create();
                break;
            default:
                break;
        }
        
        return $html_result;
    }
}