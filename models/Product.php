<?php
class Product{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function getProductByCat($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()->prepare('SELECT * FROM products WHERE product_category_id = :id');
            $stmt->execute(array(":id" => $id));
            return $stmt->fetchAll();
            $stmt->close();
            $stmt =null;
        }catch(PDOException $ex){
            echo "erreur " .$ex->getMessage();
        }
    }
}



