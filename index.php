<?php
require_once './autoload.php';
require_once ("./views/includes/header.php");

require_once './controllers/HomeController.php';

$home = new HomeController();

$pages = ['home','cart','dashboard','updateProduct','deleteProduct','addProduct','emptycart','show','cancelcart','register','login','checkout','logout','products','orders','addOrder','categories','addCategorie','deleteCategorie','updateCategorie'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct" || $page === "updateProduct" || $page === "addProduct" || $page === "products" || $page === "orders" || $page === "categories" || $page === "addCategorie" || $page === "deletCategorie" || $page === "updateCategorie" ){
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                $admin = new AdminController();
                $admin->index($page);
            }else{
                include('views/includes/404.php');
            }
        }else{
            $home->index($page);
        }
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index("home");
}


require_once ("./views/includes/footer.php");
