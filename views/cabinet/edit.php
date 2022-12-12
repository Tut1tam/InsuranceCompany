<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h3 style="color: white">Изменить личную информацию</h3>
                <hr class="soft"/>
                <div class="row">
                    <div class="span9">
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
                                    <h4>Ваш адрес</h4>
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
                                            <input type="text" name="city" id="city" value="<?php echo $city;?>" placeholder="city"/> 
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="state">Край<sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="state" id="state" value="<?php echo $state;?>" placeholder="State"/>
                                        </div>
                                    </div>	
                                    <div class="control-group">
                                        <label class="control-label" for="postcode">Индекс<sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="postcode" id="postcode" value="<?php echo $postcode;?>" placeholder="Zip / Postal Code"/> 
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="country">Страна<sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="country" id="country" value="<?php echo $country;?>" placeholder="Country"/> 
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
                                            <input type="text"  name="phone" id="phone" value="<?php echo $phone;?>" placeholder="Phone"/>
                                        </div>
                                    </div>

                                    <p><sup>*</sup>Обязательное поле</p>

                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="btn btn-large btn-success" type="submit" name="submit" value="Edit" />
                                        </div>
                                    </div>		
                                </form>
                            <?php else: ?>
                                <p>Наша информация обновляется!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>
