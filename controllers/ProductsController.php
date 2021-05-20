<?php

class ProductsController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
    }
    public function getProductsByCategory($id){
        if(isset($id)){
            $data = array(
                'id'=>$id
            );
            $products = Product::getProductByCat($data);
            return $products;
        }
    }
}