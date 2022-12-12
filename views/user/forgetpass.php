<?php include ROOT . '/views/layouts/header.php' ?>

<!-- Main -->
<div id="mainBody">
	<div class="container">
	<div class="row">
	    <div class="span12">
            <ul class="breadcrumb">
		        <li><a href="/">Домашняя страница</a> <span class="divider">/</span></li>
		        <li class="active">Забыли пароль?</li>
            </ul>
	        <h3> ЗАБЫЛИ ПАРОЛЬ?</h3>
	        <hr class="soft"/>
	
	<div class="row">
		<div class="span12" style="min-height:900px">
			<div class="well">
			<h5>Сбросить пароль</h5><br/>
                Пожалуйста, введите адрес электронной почты для вашей учетной записи. Вам будет отправлен проверочный код. Получив код подтверждения, вы сможете выбрать новый пароль для своей учетной записи.<br/><br/><br/>
            <?php if ($result): ?>
                <h4>Мы отправили новый пароль на вашу почту!</h4>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul style="color:#ff0000;">
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
			    <form action="" method="post">
			        <div class="control-group">
				        <label class="control-label" for="inputEmail1">E-mail</label>
				        <div class="controls">
				            <input class="span3" name="email" type="text" id="inputEmail1" placeholder="Email">
				        </div>
			        </div>
			        <div class="controls">
			            <button type="submit" name="submit" class="btn block">Submit</button>
			        </div>
			    </form>
            <?php endif; ?>
		</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<?php include ROOT . '/views/layouts/footer.php' ?>
