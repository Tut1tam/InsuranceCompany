<?php include ROOT . '/views/layouts/header.php'; ?>

<?php
use App\components\Cart;
use App\models\Product;

?>

<!-- Main -->
<div id="mainBody" style="height:70vh;">
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
                        <!-- <span class="badge badge-warning pull-right">
                            $<?php echo $totalPrice; ?>
                        </span> -->
                    </a>
                </div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <?php foreach ($categories as $category): ?>
                        <li class="<?php if ($category['id'] == 1) echo 'subMenu open'; ?>">
                            <a href="/catalog/category-<?php echo $category['id'];?>">
                                <?php echo $category['name']; ?>
                            </a>
                            <?php if ($category['id'] == 1): ?>
                                <ul>
                                    <li><a href="/catalog/category-<?php echo $category['id'];?>">All</a></li>
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
                <ul class="breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">КОРЗИНА ПОКУПАТЕЛЯ</li>
                </ul>
                <h3 style="color: white">  КОРЗИНА ПОКУПАТЕЛЯ (<?php echo Cart::countItems();?> Товар(ы))<a href="/catalog/category-1/" class="btn btn-large pull-right"><i class="icon-arrow-left"></i>Продолжить покупку</a></h3>
                <hr class="soft"/>
                <?php if (\App\models\User::isGuest()): ?>
                <table class="table table-bordered" style="background-color: currentColor">
                    <tr><th style="color: white">Я УЖЕ ЗАРЕГИСТРИРОВАН </th></tr>
                    <tr> 
                        <td>
                            <form class="form-horizontal" action="/login/" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail" style="color: white; font-weight: bold">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword1" style="color: white; font-weight: bold">Пароль</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Войти</button><p style="color: white; font-size: 20px; font-weight: bold"> ИЛИ </p><a href="/register/" class="btn">Зарегистрируйтесь сейчас!</a>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <a href="/forgetpass" style="text-decoration:underline; color: white; font-weight: bold">Забыли пароль?</a>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
                <?php endif; ?>
                <?php if ($productsInCart != false): ?>
                    <table class="table table-bordered" style="background-color: #2B3A55">
                        <thead>
                            <tr>
                                <th style="color: white; font-size: 20px; font-weight: bold">Товар</th>
                                <th style="color: white; font-size: 20px; font-weight: bold">Описание</th>
                                <th style="color: white; font-size: 20px; font-weight: bold">Количество/обновление</th>
                                <th style="color: white; font-size: 20px; font-weight: bold">Цена</th>
                                <th style="color: white; font-size: 20px; font-weight: bold">Всего</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td style="color: white; font-size: 20px; text-align: center; font-weight: bold"> <img width="60" src="<?php echo Product::getImage($product['id']); ?>" alt=""/><p>Название: <?php echo $product['name']?></p></td>
                                    <td style="color: white; font-size: 20px; text-align: center; font-weight: bold"><br/>Услуга</td>
                                    <td>
                                        <div class="input-append">
                                            <input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" value="<?php echo $_SESSION['products'][$product['id']];?>" size="16" type="text">
                                            <a href="/cart/delete/<?php echo $product['id'];?>">
                                                <button class="btn" type="button">
                                                    <i class="icon-minus"></i>
                                                </button>
                                            </a>   
                                            <a href="/cart/add/<?php echo $product['id'];?>">
                                                <button class="btn" type="button">
                                                    <i class="icon-plus"></i>
                                                </button>
                                            </a>
                                            <a href="/cart/deleteProduct/<?php echo $product['id'];?>">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="icon-remove icon-white"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                    <td style="color: white; font-size: 20px; text-align: center; font-weight: bold"><?php echo $product['price'];?> р.</td>
                                    <td style="color: white; font-size: 20px; text-align: center; font-weight: bold"><?php echo $_SESSION['products'][$product['id']] * $product['price'];?> р.</td>
                                </tr>
                                <?php $totalPrice = $totalPrice + $product['price'];?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4" style="text-align:right"><strong style="color: white; font-weight: bold">ВСЕГО К ОПЛАТЕ: </strong></td>
                                <td class="label label-important" style="display:block; text-align: center"> <strong> <?php echo $totalPrice;?> р.</strong></td>
                            </tr>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h3 style="color: white">Нет товаров в корзине</h3>
                <?php endif; ?>
                <a href="/catalog/category-1/" class="btn btn-large"><i class="icon-arrow-left"></i>Продолжить покупку</a>
                <a href="/cart/checkout/" class="btn btn-large pull-right"><i class="icon-arrow-right right"></i>Следующая</a>
            </div>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
