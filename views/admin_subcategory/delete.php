<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель Администратора</a></li>
                    <li><a href="/admin/category">Управление Категориями</a></li>
                    <li class="active">Удалить Подкатегорию</li>
                </ol>
            </div>

            <h4>Удалить Подкатегорию # <?php echo $id; ?></h4>

            <br/>

            <p>Уверены, что хотите удалить эту подкатегорию?</p>
            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

