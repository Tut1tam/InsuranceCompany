<?php include ROOT . '/views/layouts/header.php'; ?>
<?php
use app\models\User;
use app\models\Order;
?>

<div id="mainBody" style="height: 800px">
    <div class="container">
        <hr class="soften">
        <h1 style="color: white">Личный кабинет</h1>
        <hr class="soften"/>	
        <div class="row">
            <div class="span12">
                <h3 style="color: white">Ваши возможности</h3>
                <br>
                <h4 style="color: white; text-align: center; font-weight: bold; font-size: 40px">Добро пожаловать, <i style="color: whitesmoke;"><?php echo $userName; ?></i></h4>
                <br>
                <h3><a style="color: white; font-weight: bold; font-size: 40px" href="/cabinet/edit">Изменить личную информацию</a></h3>
                <br>
            </div>           
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>



