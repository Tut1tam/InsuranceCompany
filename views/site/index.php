<?php include ROOT . '/views/layouts/header.php'; ?>

<?php
use \App\models\Category;
use \App\models\Product;

?>

<div id="mainBody" style="display:flex;flex-direction:column; justify-content:center; align-items:center; align-content:center;">


<div class="well well-small"  style="font-size:20px; color:white; background:#2B3A55; border-radius: 25px; border:none; height:150px; width:70%;display:flex; justify-content:center; align-items:center; align-content:center;">
    <p><span style="color:skyblue;"><strong>INSURANCE COMPANY<strong></span> - юридическое лицо, созданное в соответствии с законодательством Российской Федерации для осуществления 
        деятельности по страхованию и (или) перестрахованию и получившее лицензию на осуществление соответствующего 
        вида страховой деятельности в установленном настоящим Законом порядке.</p>
</div>



<div class="well well-small" style="color:white; background:#2B3A55; border-radius: 25px; border:none;">
    <h4>Рекомендуемые услуги</h4>
    <div class="cycle-slideshow" 
            data-cycle-fx=carousel
            data-cycle-timeout=5000
            data-cycle-carousel-visible=3
            data-cycle-carousel-fluid=true
            data-cycle-slides="div.item"
            data-cycle-prev="#prev"
            data-cycle-next="#next"
            >                        
        <?php foreach ($sliderProducts as $sliderItem): ?>
            <div class="item">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="/product/<?php echo $sliderItem['id'];?>">
                                <img class="product" src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="">
                            </a>
                            <div class="caption">
                                <h5><?php echo $sliderItem['name'];?></h5>
                                <h4 style="text-align:center">
                                    <!-- <a class="btn" href="/product/<?php echo $sliderItem['id'];?>">
                                        <i class="icon-zoom-in"></i>
                                    </a> -->
                                    <a class="btn add-to-cart" data-id="<?php echo $sliderItem['id'];?>" href="#">Добавить
                                        <i class="icon-shopping-cart"></i>
                                    </a>
                                    <a class="btn btn-primary" href="#">
                                        <?php echo $sliderItem['price']; ?> р.
                                    </a>
                                </h4>
                            </div>
                        </div>    
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>
        <a class="left carousel-control" id="prev" href="#featured" data-slide="prev">‹</a>
        <a class="right carousel-control" id="next"  href="#featured" data-slide="next">›</a>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="span9">		
                <h4 style="color: white; font-weight: bold">Последние услуги</h4>
                <ul class="thumbnails">
                    <?php if (isset($latestProducts) && (is_array($latestProducts))): ?>
                        <?php foreach ($latestProducts as $product): ?>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="/product/<?php echo $product['id'];?>">
                                        <img class="product" src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                    </a>
                                    <div class="caption">
                                        <h5><?php echo $product['name'];?></h5>
                                        <h4 style="text-align:center">
                                            <!-- <a class="btn" href="/product/<?php echo $product['id'];?>">
                                                <i class="icon-zoom-in"></i>
                                            </a> -->
                                            <a class="btn add-to-cart" data-id="<?php echo $product['id'];?>" href="#">Добавить
                                                <i class="icon-shopping-cart"></i>
                                            </a>
                                            <a class="btn btn-primary" href="#">
                                                <?php echo $product['price'];?> р.
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>	
            </div>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
