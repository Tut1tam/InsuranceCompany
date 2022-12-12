<?php include ROOT . '/views/layouts/header.php'; ?>

<?php
use App\components\Cart;
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
                            $<?php echo $totalPrice; ?>
                        </span>
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
                    <li class="active;" style ="font-weight: bold">КОРЗИНА ПОКУПАТЕЛЯ</li>
                </ul>
                <h3 style="color: white; font-weight: bold">  КОРЗИНА ПОКУПАТЕЛЯ [<?php echo Cart::countItems();?> Товар(ы)]</h3>
                <hr class="soft"/>
                
                <?php if ($result): ?>
                    <p>Заказ отправлен</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    
                    <table class="table table-bordered">
                        <tr><th style="text-transform: uppercase; color: white; font-weight: bold">Для оформления заказа заполните форму ниже, наш менеджер свяжется с вами</th></tr>
                        <tr>
                            <td>
                                <form class="form-horizontal" action="" method="post">
                                    <div class="control-group">
                                        <label class="control-label" for="inputName" style="color: white; font-weight: bold">Имя</label>
                                        <div class="controls">
                                            <input name="userName" type="text" id="inputName" value="<?php echo $userName; ?>" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPhone" style="color: white; font-weight: bold">Телефон</label>
                                        <div class="controls">
                                            <input name="userPhone" type="text" id="inputPhone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputComment" style="color: white; font-weight: bold">Комментарий</label>
                                        <div class="controls">
                                            <textarea name="userComment" cols="21" rows="5" id="inputComment"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn-primary" style="color: white; font-weight: bold">ОТПРАВИТЬ</button>
                                        </div>
                                    </div>
                                </form>				  
                            </td>
                        </tr>
                    </table>
                <?php endif; ?>
                <a href="/cart/" class="btn btn-large"><i class="icon-arrow-left" style="color: white; font-weight: bold"></i> Корзина </a>
            </div>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
