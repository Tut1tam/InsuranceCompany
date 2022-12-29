<?php include ROOT . '/views/layouts/header.php'; ?>

<?php
use App\models\Product;

?>

<!-- Main -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div id="sidebar" class="span3">
                <div class="well well-small" ">
                    <a id="myCart" href="/cart/">
                        <img src="/template/themes/images/ico-cart.png" alt="cart">
                        <span id="cart-count">
                            <?php echo $totalQuantity; ?>
                        </span> Товары в вашей корзине
                        <!-- <span class="badge badge-warning pull-right">
                            <?php echo $totalPrice; ?> р.
                        </span> -->
                    </a>
                </div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked" >
                    <?php foreach ($categories as $category): ?>
                        <li class="<?php if ($category['id'] == 1) echo 'subMenu open'; ?>">
                            <a href="/catalog/category-<?php echo $category['id'];?>">
                                <?php echo $category['name']; ?>
                            </a>
                            <?php if ($category['id'] == 1): ?>
                                <ul>
                                    <li><a href="/catalog/category-<?php echo $category['id'];?>">Всё</a></li>
                                    <?php if (isset($subCategories) && is_array($subCategories)): ?>
                                        <?php foreach ($subCategories as $subCategory): ?>
                                            <li>
                                                <a href="/catalog/category-<?php echo $category['id']."-".$subCategory['id'];?>">
                                                    <i class="icon-chevron-right"></i>
                                                        <?php echo $subCategory['name']; ?> 
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <br/>
            </div>
            <!-- Sidebar end -->
            
            <div class="span9">
                <ul class="breadcrumb" >
                    <li><a href="/">Домашняя страница</a> <span class="divider">/</span></li>
                    <li><a href="/catalog/category-1">Товары</a> <span class="divider">/</span></li>
                    <li class="active">Информация о Товаре</li>
                </ul>	
                <div class="row">	  
                    <div id="gallery" class="span3">
                        <a href="<?php echo Product::getImage($product['id']); ?>" title="Fujifilm FinePix S2950 Digital Camera">
                            <img src="<?php echo Product::getImage($product['id']); ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
                        </a>
                        <div id="differentview" class="moreOptopm carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                                    <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                                    <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                                </div>
                                <div class="item">
                                    <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                                    <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                                    <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                                </div>
                            </div>
                        </div>

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <span class="btn"><i class="icon-envelope"></i></span>
                                <span class="btn" ><i class="icon-print"></i></span>
                                <span class="btn" ><i class="icon-zoom-in"></i></span>
                                <span class="btn" ><i class="icon-star"></i></span>
                                <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                                <span class="btn" ><i class="icon-thumbs-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <h3 style="color: white; font-weight: bold"><?php echo $product['name'];?> </h3>
                        <hr class="soft"/>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <label class="control-label"><span style="color: white; font-weight: bold"><?php echo $product['price'];?> р.</span></label>
                                <div class="controls">
                                    <a class="btn add-to-cart" onclick="location.reload();" data-id="<?php echo $product['id'];?>" href="#">Добавить
                                        <i class="icon-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <hr class="soft clr"/>
                        <p style="color: white; font-weight: bold; font-size: 20px">
                            <?php echo $product['description'];?>
                        </p>
                        <a class="btn btn-small pull-right" href="#detail" >Подробнее</a>
                        <br class="clr"/>
                        <a href="#" name="detail"></a>
                        <hr class="soft"/>
                    </div>

                    <div class="span9">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4 style="color: white; font-weight: bold; font-size: 20px">Информация о товаре</h4>
                                <table class="table table-bordered" style="background-color: #2B3A55; border-radius:10px;">
                                    <tbody>
                                        <tr class="techSpecRow"><th colspan="2" style="color: white; font-weight: bold">Product Details</th></tr>
                                        <tr class="techSpecRow"><td class="techSpecTD1" style="color: white; font-weight: bold; font-size: 20px">Бренд: </td><td class="techSpecTD2" style="color: white; font-weight: bold; font-size: 20px"><?php echo $product['brand'];?></td></tr>
                                        <tr class="techSpecRow"><td class="techSpecTD1" style="color: white; font-weight: bold; font-size: 20px">Код:</td><td class="techSpecTD2" style="color: white; font-weight: bold; font-size: 20px"><?php echo $product['code'];?></td></tr>
                                        <tr class="techSpecRow"><td class="techSpecTD1" style="color: white; font-weight: bold; font-size: 20px">Цена:</td><td class="techSpecTD2" style="color: white; font-weight: bold; font-size: 20px"><?php echo $product['price'];?></td></tr>
                                        <tr class="techSpecRow"><td class="techSpecTD1" style="color: white; font-weight: bold; font-size: 20px">Описание:</td><td class="techSpecTD2" style="color: white; font-weight: bold; font-size: 20px"> <?php echo $product['description'];?></td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- MainBody End -->

<?php include ROOT . '/views/layouts/footer.php'; ?>

