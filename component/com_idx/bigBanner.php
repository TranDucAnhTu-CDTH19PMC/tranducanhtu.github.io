       <!-- Big Banner Start Here -->
       <?php
        $banner =array(
        array(
            "img1"=>img_banner_path."banner3-1.jpg",
            "img2"=>img_banner_path."banner3-2.jpg",
        ),
        array(
            "img1"=>img_banner_path."banner3-3.jpg",
            "img2"=>"",      
        ),
        array(
            "img1"=>img_banner_path."banner3-4.jpg",
            "img2"=>img_banner_path."banner3-5.jpg",     
        ),
        array(
            "img1"=>img_banner_path."banner3-6.jpg",
            "img2"=>"",     
        ),
        array(
            "img1"=>img_banner_path."banner3-7.jpg",
            "img2"=>img_banner_path."banner3-8.jpg",     
        )
        );
        ?>
        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <?php 
                    foreach($banner as $value)
                    {?>
                    <div class="banner-box">
                        <div class="col-img">
                            <a href="#"><img src="<?php echo $value["img1"];?>" alt="banner 3"></a>
                        </div>
                        <div class="col-img">
                            <a href="#"><img src="<?php echo $value["img2"];?>" alt="banner 3"></a>
                        </div>
                    </div>
                <?php }?>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->