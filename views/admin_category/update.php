<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/category">Управление Категориями</a></li>
                    <li class="active">Изменить Категорию</li>
                </ol>
            </div>

            <h4>Изменить Категорию</h4>

            <br/>
            <?php if(isset($errors) && (is_array($errors))): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: red;"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form class="form-horizontal" action="" method="post">
                <div class="control-group">
                    <label class="control-label" for="name">Название<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="name" id="name" value="<?php echo $category['name'];?>" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="sortOrder">Порядок сортировки<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="sortOrder" id="sortOrder" value="<?php echo $category['sort_order'];?>" placeholder="Order">
                    </div>
                </div>              
                <div class="control-group">
                    <label class="control-label" for="status">Статус</label>
                    <div class="controls">
                        <select id="status" name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Показано</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрытый</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <input type="submit" name="submit" class="btn btn-default" value="Save" />    
                <br/><br/>
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>