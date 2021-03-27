<!-- Hot Deal Products Start Here -->
<?php 
    $listproduct =array(
        array(
            "tieude"=>"Poly and Bark Vortex Side",
            "img1"=>img_product_path."test.jpg",
            "img2"=>img_product_path."7.jpg",
            "price"=>"$84.45",
            "priceNew"=>"$105.50",
            "sale"=>"20"
        ),
        array(
            "tieude"=>"Light Inverted Pendant Quick",
            "img1"=>img_product_path."24.jpg",
            "img2"=>img_product_path."25.jpg",
            "price"=>"$84.45",
            "priceNew"=>"$105.50",
            "sale"=>"20"
        ),
        array(
            "tieude"=>"Terra Xpress HE Cooking",
            "img1"=>img_product_path."42.jpg",
            "img2"=>img_product_path."43.jpg",
            "price"=>"$84.45",
            "priceNew"=>"$105.50",
            "sale"=>"15"
        ),
        array(
            "tieude"=>"Calandiva Wrapped 12cm",
            "img1"=>img_product_path."30.jpg",
            "img2"=>img_product_path."31.jpg",
            "price"=>"$180.45",
            "priceNew"=>"$200.50",
            "sale"=>"20"
        ),
        array(
            "tieude"=>"Eames and Bark  Style",
            "img1"=>img_product_path."7.jpg",
            "img2"=>img_product_path."10.jpg",
            "price"=>"$180.45",
            "priceNew"=>"$200.50",
            "sale"=>"20"
        ),
        array(
            "tieude"=>"Eames and Bark  Style",
            "img1"=>img_product_path."7.jpg",
            "img2"=>img_product_path."10.jpg",
            "price"=>"$180.45",
            "priceNew"=>"$200.50",
            "sale"=>"20"
        )
        
        
        );

?>
<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                <?php
                    foreach($listproduct as $value){
                    ?>
                        <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="<?php echo $value["img1"];?>" alt="single-product">
                                <img class="secondary-img" src="<?php echo $value["img2"];?>" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php"><?php echo $value["tieude"];?></a></h4>
                                <p><span class="price"><?php echo $value["price"];?></span><del class="prev-price"><?php echo $value["priceNew"]?></del></p>
                                <div class="label-product l_sale"><?php echo $value["sale"];?><span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <?php
                    }
                ?>
                                        </div>

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->