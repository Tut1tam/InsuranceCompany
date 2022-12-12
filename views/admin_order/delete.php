<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/product">Управление Заказами</a></li>
                    <li class="active">Удалить Заказ</li>
                </ol>
            </div>

            <h4>Удалить Заказ # <?php echo $id; ?></h4>

            <br/>

            <p>Вы точно хотите удалить Заказ?</p>
            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

