//hatta haja man desing maratab9a ok 


<?php

$data = new ProductsController();
$products = $data->getAllProducts();
$categories = new CategoriesController();
$categories = $categories->getAllCategories();


?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                <?php
                    if(count($products) > 0) :
                ?>
                <?php
                    foreach($products as $product) :
                ?>
                <div class="col-md-6 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="card-header bg-light">
                            <h3 class="card-title">
                                <?php
                                    echo $product['product_title'];
                                ?>
                            </h3>
                        </div>
                        <div class="card-img-top">
                            <img src="<?php echo $product['product_image'];?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <?php
                                echo $product['short_desc'];
                            ?>
                        </div>
                        <div class="card-footer">
                            <span class="badge bg-success p-2">
                                <?php
                                    echo $product['product_price'];
                                ?>dh
                            </span>
                            <span class="badge bg-dark p-2">
                                <strike>
                                    <?php
                                        echo $product['old_price'];
                                    ?>dh
                                </strike>
                            </span>
                        </div>
                    </div>
                </div>
                    
                <?php
                    endforeach;
                ?>
                <?php
                    endif;
                ?>
            </div>      
        </div> 
        <div class="col-md-4">
            <h3 class="text-secondary m-3 text-center">
                Catégories
            </h3>
            <ul class="list-group">
                <?php
                    foreach($categories as $category) :
                ?>
                    <li class="list-group-item text-center">
                        <a href="#" class="btn btn-link">
                            <?php
                                echo $category['cat_title'];
                            ?>
                        </a>
                    </li>
                <?php
                    endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>