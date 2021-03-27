<?php
    include "config.php";
    include head_path."header.php";
    include com_general_path."bannerPopup.php";    
    include com_general_path."newsLetterPopup.php";
    include com_general_path."mainHeader.php";
    include com_general_path."categoriesMenu&SliderArea.php";
    if($index_layout==true){
        include com_idx_path."brandBanner.php";
        include com_idx_path."hotDealsProduct.php";
        include com_idx_path."bigBanner.php";
        include com_idx_path."arrivalsProduct1.php";
        include com_idx_path."arrivalsProduct2.php";
        include com_idx_path."likeProduct.php";
        include com_idx_path."brandBannerend.php";

    }if($err404_layout==true){
        include com_general_path."breadCrumb.php";
        include com_404_path."error404.php";
    
    }
    if($about_layout==true){
        include com_general_path."breadCrumb.php";
        include com_about_path."aboutUS.php";    
    }
    if($blog_layout==true){
        include com_general_path."breadCrumb.php";
        include com_blog_path."blogPage.php";
    }
    if($cart_layout==true){
        include com_general_path."breadCrumb.php";
        include com_cart_path."cartMain.php";
    }
    if($compare_layout==true){
        include com_general_path."breadCrumb.php";
        include com_compare_path."comparePage.php";
    
    }
    if($contact_layout==true){
        include com_general_path."breadCrumb.php";
        include com_contact_path."contact.php";
    
    }
    if($fogot_layout==true){
        include com_general_path."breadCrumb.php";
        include com_fogot_path."registerAccount.php";
    }
    if($login_layout==true){
        include com_general_path."breadCrumb.php";
        include com_login_path."loginPage.php";
    }
    if($product_layout==true){
        include com_general_path."breadCrumb.php";
        include com_product_path."realateProduct.php";
    }
    if($register_layout==true){
        include com_general_path."breadCrumb.php";
        include com_register_path."registerAccount.php";
    }
    if($shop_layout==true){
        include com_general_path."breadCrumb.php";
        include com_shop_path."shopPage.php";
    }
    if($single_blog_layout==true){
        include com_general_path."breadCrumb.php";
        include com_singleBlog_path."singleBlog.php";
    }
    if($wishlist_layout==true){
        include com_general_path."breadCrumb.php";
        include com_wishList_path."wishList.php";
    }
    include com_general_path."supportArea.php";
    include footer_path."footer.php";
    include footer_path."quickView.php";
?>