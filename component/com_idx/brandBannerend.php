<!-- Brand Banner Area Start Here -->
<?php
        $bannerend =array(
        array(
            "img1"=>img_brand_path."1.jpg",
            "img2"=>img_brand_path."2.jpg",
            "img3"=>img_brand_path."3.jpg",

        ),
        array(
            "img1"=>img_brand_path."1.jpg",
            "img2"=>img_brand_path."2.jpg",
            "img3"=>img_brand_path."3.jpg",
        ),
        array(
            "img1"=>img_brand_path."1.jpg",
            "img2"=>img_brand_path."2.jpg", 
            "img3"=>img_brand_path."3.jpg",    
        ),
        array(
            "img1"=>img_brand_path."2.jpg",
            "img2"=>img_brand_path."3.jpg",
            "img3"=>img_brand_path."4.jpg",
        ),
        array(
            "img1"=>img_brand_path."2.jpg",
            "img2"=>img_brand_path."3.jpg", 
            "img3"=>img_brand_path."4.jpg",    
        ),
        array(
            "img1"=>img_brand_path."2.jpg",
            "img2"=>img_brand_path."3.jpg",
            "img3"=>img_brand_path."4.jpg",
        ),
        array(
            "img1"=>img_brand_path."2.jpg",
            "img2"=>img_brand_path."3.jpg", 
            "img3"=>img_brand_path."4.jpg",    
        )
        );
        ?>
<div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-20">
                    <h2>Best Seller</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="<?php echo img_banner_path."h1-band1.jpg"?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                        <?php
                            foreach($bannerend as $value)
                            {?>
                            <div class="single-brand">
                                <a href="#"><img class="img" src="<?php echo $value["img1"]?>" alt="brand-image"></a>
                                <a href="#"><img src="<?php echo $value["img2"]?>" alt="brand-image"></a>
                                <a href="#"><img src="<?php echo $value["img3"]?>" alt="brand-image"></a>
                            </div>
                        <?php }?>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="<?php echo img_banner_path."h1-band2.jpg"?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a href="#">
                    <img src="<?php echo img_banner_path."5.jpg"?>" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a href="#">
                    <img src="<?php echo img_banner_path."h1-band3.jpg"?>" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>