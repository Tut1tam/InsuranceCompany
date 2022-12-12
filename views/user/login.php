<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="span3">
                <div class="well well-small">
                    <a id="myCart" href="/cart/">
                        <img src="/template/themes/images/ico-cart.png" alt="cart">
                        <span id="cart-count">
                            <?php echo $totalQuantity; ?>
                        </span> Товары в вашей корзине
                    </a>
                </div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <?php foreach ($categories as $category): ?>
                        <li class="<?php if ($category['id'] == 1) echo 'subMenu open'; ?>">
                            <a href="/catalog/category-<?php echo $category['id']; ?>">
                                <?php echo $category['name']; ?>
                            </a>
                            <?php if ($category['id'] == 1): ?>
                                <ul>
                                    <li><a href="/catalog/category-<?php echo $category['id']; ?>">Все</a></li>
                                    <?php if (isset($subCategories) && is_array($subCategories)): ?>
                                        <?php foreach ($subCategories as $subCategory): ?>
                                            <li>
                                                <a href="/catalog/category-<?php echo $category['id'] . "-" . $subCategory['id']; ?>">
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
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Домашняя страница</a> <span class="divider">/</span></li>
                    <li class="active">Логин</li>
                </ul>
                <h3 style="color: white">Логин</h3>
                <hr class="soft"/>

                <div class="row">
                    <div class="span2"> &nbsp;</div>
                    <div class="span4">
                        <div class="well">
                            <h5>УЖЕ ЗАРЕГИСТРИРОВАНЫ?</h5>
                            <?php if (isset($errors) && (is_array($errors))): ?>
                                <?php foreach ($errors as $error): ?>
                                    <ul>
                                        <li style="color: red;"> - <?php echo $error; ?></li>
                                    </ul>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <form action="" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail1">Email</label>
                                    <div class="controls">
                                        <input class="span3" name="email" type="text" id="inputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword1">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" class="span3"  id="inputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn">Sign in</button> <a href="/forgetpass">Забыли пароль?</a> <a href="/register">Зарегистрироваться</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>
<!-- MainBody End -->

<?php include ROOT . '/views/layouts/footer.php'; ?>
