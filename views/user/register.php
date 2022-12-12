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
                            <a href="/catalog/category-<?php echo $category['id'];?>">
                                <?php echo $category['name']; ?>
                            </a>
                            <?php if ($category['id'] == 1): ?>
                                <ul>
                                    <li><a href="/catalog/category-<?php echo $category['id'];?>">Все</a></li>
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

            <!-- Регистрация -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Домашняя страница</a> <span class="divider">/</span></li>
                    <li class="active" style="color: black">Регистрация</li>
                </ul>
                <h3 style="color: white; text-align: center;">Регистрация</h3>
                <div class="well">
                    <?php if (!$result): ?>
                        <?php if (isset($errors) && (is_array($errors)) && (!empty($errors))): ?>
                            <div class="alert-block alert-error fade in">
                                <?php foreach ($errors as $error): ?>
                                    <ul>
                                        <li> - <?php echo $error; ?></li>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Form -->
                        <form class="form-horizontal" action="" method="post">
                            <h4>Ваши персональные данные</h4>
                            <div class="control-group">
                                <label class="control-label" for="inputFname1">Имя<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="firstName" id="inputFname1" value="<?php echo $firstName;?>" placeholder="Имя">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputLname">Фамилия<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="lastName" id="inputLname" value="<?php echo $lastName;?>" placeholder="Фамилия">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input_email">Email<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="email" id="input_email" value="<?php echo $email;?>" placeholder="Email">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputPassword1">Пароль<sup>*</sup></label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword1" value="<?php echo $password;?>" placeholder="Пароль">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Дата рождения<sup>*</sup></label>
                                <div class="controls">
                                    <input type="date" name="birth" value="<?php echo $birth;?>" placeholder="дд-мм-г" />
                                </div>
                            </div>
                            <h4>Your address</h4>
                            <div class="control-group">
                                <label class="control-label" for="company">Компания</label>
                                <div class="controls">
                                    <input type="text" name="company" id="company" value="<?php echo $company;?>" placeholder="компания"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="address">Адрес<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="address" id="address" value="<?php echo $address;?>" placeholder="Адрес"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="city">Город<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="city" id="city" value="<?php echo $city;?>" placeholder="Город"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="state">Регион<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="state" id="state" value="<?php echo $state;?>" placeholder="Регион"/>
                                </div>
                            </div>	
                            <div class="control-group">
                                <label class="control-label" for="postcode">Индекс<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="postcode" id="postcode" value="<?php echo $postcode;?>" placeholder="Индекс"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="country">Страна<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" name="country" id="country" value="<?php echo $country;?>" placeholder="Страна"/>
                                </div>
                            </div>	
                            <div class="control-group">
                                <label class="control-label" for="aditionalInfo">Дополнительная информация</label>
                                <div class="controls">
                                    <textarea name="info" id="aditionalInfo" cols="26" rows="3">Дополнительная информация</textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="phone">Мобильный телефон<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text"  name="phone" id="phone" value="<?php echo $phone;?>" placeholder="phone"/>
                                </div>
                            </div>

                            <p><sup>*</sup>Обязательное поле</p>

                            <div class="control-group">
                                <div class="controls">
                                    <input type="hidden" name="email_create" value="1">
                                    <input type="hidden" name="is_new_customer" value="1">
                                    <input class="btn btn-large btn-success" type="submit" name="submit" value="Зарегистрироваться" />
                                </div>
                            </div>		
                        </form>
                    <?php else: ?>
                        <p>Вы зарегистрированы! Добро пожаловать!</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MainBody End -->

<?php include ROOT . '/views/layouts/footer.php'; ?>
