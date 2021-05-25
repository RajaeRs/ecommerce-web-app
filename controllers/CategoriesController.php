<?php

class CategoriesController{
    public function getAllCategories(){
        $categories = Category::getAll();
        return $categories;
    }

    public function getCategorie(){
        if(isset($_POST["cat_id"])){
            $data = array(
                'id' => $_POST["cat_id"]
            );
            $categorie = Category::getCategorieById($data);
            return $categorie;
        }
    }

    public function newCategorie(){
        if(isset($_POST["submit"])){
            $data = array(
                "cat_title" => $_POST["cat_title"],
            );
            $result = Category::addCategorie($data);
            if($result === "ok"){
                Session::set("success","Categorie ajouté");
                Redirect::to("categories");
            }else{
                echo $result;
            }
        }
    }

}