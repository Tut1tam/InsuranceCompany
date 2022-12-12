<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Main -->
<div id="mainBody">
    <div class="container">
        <hr class="soften">
        <h1 class="sv" style="color: white">Об интернет-магазине</h1>
        <hr class="soften"/>	
        <div class="row" style=" padding-top: 25px; display:flex; align-content:center; justify-content:space-between; align-items:stretch; flex-wrap:nowrap;">
            <div class="span4" style="color: white; background:#2B3A55; border-radius:15px; padding:15px;">
                <h4 style="font-size:30px;"><span style="color:skyblue"><strong>Insurance Shop</span></strong></h4>
                <p class="shop" style="font-size: 20px"><span style="color:skyblue"><strong>Insurance Shop</span></strong> - интернет-магазин услуг страхования.
                    <br>На этом сайте вы можете приобрести услуги страхования.
                    <br>В <span style="color:skyblue"><strong>Insurance Shop</strong></span> есть услуги страхования жизни и здоровья, а также недвижимости.
                    <br>Все услуги страхования в <span style="color:skyblue"><strong>Insurance Shop</strong></span> имеют высокое качество и доступную цену.
                </p>
            </div>
            <div class="span4" style="color: white; background:#2B3A55; border-radius:15px; padding:15px;">
                <h4 class="sv" style="color: white">Обратная связь</h4>
                <?php if ($result == false) : ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <?php foreach ($errors as $error): ?>
                            <ul>
                                <li> - <?php echo $error; ?></li>
                            </ul>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="control-group">
                                <input type="text" name="name" placeholder="name" class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="email" placeholder="email" class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="subject" placeholder="subject"  class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <textarea rows="3" id="textarea" name="message" class="input-xlarge"></textarea>
                            </div>
                            <input class="btn btn-large" name="submit" type="submit" value="Отправить сообщение">
                        </fieldset>
                    </form>
                <?php else: ?>
                    <p>Ваше сообщение отправлено. Нас менеджер свяжется с вами позднее.</p>
                <?php endif; ?> 
            </div>
        </div>
<br><br><br><br><br><br><br><br>
    </div>
</div>
<!-- MainBody End -->

<?php include ROOT . '/views/layouts/footer.php'; ?>

