<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/product">Управление Товарами</a></li>
                    <li class="active">Удалить Товар</li>
                </ol>
            </div>

            <h4>Удалить товар # <?php echo $id; ?></h4>

            <br/>

            <p>Уверены, что хотите удалить этот продукт?</p>
            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

