<?php include ROOT . '/views/layouts/header.php'; ?>

<?php
use \App\models\Category;
use \App\models\Product;

?>

<!-- Main -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div id="sidebar" class="span3">
                <div class="well well-small">
                    <a id="myCart" href="/cart/">
                        <img src="/template/themes/images/ico-cart.png" alt="cart">
                        <span id="cart-count">
                            <?php echo $totalQuantity; ?>
                        </span> Товары в вашей корзине
                        <span class="badge badge-warning pull-right">
                            <?php echo $totalPrice; ?> р.
                        </span>
                    </a>
                </div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <?php foreach ($categories as $category): ?>
                        <li class="subMenu<?php if ($category['id'] == $categoryId) echo 'open';?>">
                            <a href="#">
                                <?php echo $category['name']; ?>
                            </a>
                            <ul>
                                <li><a href="/catalog/category-<?php echo $category['id'];?>">Всё</a></li>
                                <?php if (!empty(Category::getSubCategoriesList($category['id'])) && is_array(Category::getSubCategoriesList($category['id']))): ?>
                                    <?php foreach (Category::getSubCategoriesList($category['id']) as $subCategory): ?>
                                        <li>
                                            <a href="/catalog/category-<?php echo $category['id']."-".$subCategory['id'];?>">
                                                <i class="icon-chevron-right"></i>
                                                    <?php echo $subCategory['name']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <br/>
            </div>
            <!-- Sidebar end -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Домашняя страница</a> <span class="divider">/</span></li>
                    <li class="active" style="color: black">LEGO</li>
                </ul>
                <h3 class="opt" style="color: white"><?php echo Category::getSubCategoryName($categoryId, $subCategoryId); ?>
                </h3>	
                <hr class="soft"/>
                <p class="opt" style="color: white; font-weight: bold; font-size: 20px">
                    На данной странице вы можете найти все виды страхования, по категории <span style="color:skyblue"><strong><?php echo $categories[$categoryId-1]['name']; ?></strong></span>.
                </p>
                <hr class="soft"/>
                <p style="color: white; text-align: center; font-weight: bold;font-size: 20px">Товары</p>
                <br class="clr"/>
                <!-- Content -->
                <div class="tab-content">
                    <!-- Content list -->
                    <div class="tab-pane" id="listView">
                        <?php if (isset($subCategoryProducts) && is_array($subCategoryProducts)): ?>
                            <?php foreach ($subCategoryProducts as $product): ?>
                                <div class="row">
                                    <div class="span2">
                                        <img class="product" src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>
                                            <?php if ($product['is_new']): ?>
                                                Новый |
                                            <?php endif; ?>
                                            <?php if ($product['availability']): ?>
                                                Доступный
                                            <?php endif; ?>
                                        </h3>			  
                                        <hr class="soft"/>
                                        <h4><?php echo $product['name'];?></h4>
                                        <p>
                                            <?php echo $product['title']; ?>
                                        </p>
                                        <a class="btn btn-small pull-right" href="/product/<?php echo $product['id'];?>">Посмотреть детали</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $<?php echo $product['price'];?></h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Добавляет товар для сравнения
                                            </label><br/>

                                            <a href="/product/<?php echo $product['id'];?>" class="btn btn-large btn-primary"> Добавить <i class=" icon-shopping-cart"></i></a>
                                            <a href="/product/<?php echo $product['id'];?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p style="color: white; font-size: 20px; font-weight: bold; text-align: center">Нет товаров</p>
                        <?php endif; ?>
                        <hr class="soft"/>
                    </div>
                    <!-- Content list end -->
                    <!-- Content block -->
                    <div class="tab-pane  active" id="blockView">
                        <ul class="thumbnails">
                            <?php if (isset($subCategoryProducts) && is_array($subCategoryProducts)): ?>
                                <?php foreach ($subCategoryProducts as $product): ?>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <img class="product" src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                            </a>
                                            <div class="caption">
                                                <h5><?php echo $product['name'];?></h5>
                                                <h4 style="text-align:center">
                                                    <a class="btn" href="/product/<?php echo $product['id'];?>"> 
                                                        <i class="icon-zoom-in"></i>
                                                    </a> 
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
                        <hr class="soft"/>
                    </div>
                </div>
                <?php echo $pagination->get(); ?>
                <!-- Pagination end -->
                <br class="clr"/>
            </div>
        </div>
    </div>
</div>
<div class="footer" style="margin-top: 200px">
<?php include ROOT . '/views/layouts/footer.php'; ?>
</div>
