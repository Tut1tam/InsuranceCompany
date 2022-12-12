<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Изменить товар</li>
                </ol>
            </div>

            <h4>Изменить Товар</h4>

            <br/>
            <?php if(isset($errors) && (is_array($errors))): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: red;"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="control-group">
                    <label class="control-label" for="name">Название<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="name" id="name" value="<?php echo $product['name'];?>" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="code">Код<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="code" id="code" value="<?php echo $product['code'];?>" placeholder="Code">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="price">Цена<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="price" id="input_email" value="<?php echo $product['price'];?>" placeholder="Price">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="category_id">Категория<sup>*</sup></label>
                    <div class="controls">
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"';?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="subcategory_id">Подкатегория<sup>*</sup></label>
                    <div class="controls">
                        <select name="subcategory_id">
                            <?php if (is_array($subCategoriesList)): ?>
                                <?php foreach ($subCategoriesList as $subCategory): ?>
                                    <option value="<?php echo 1; ?>"
                                        <?php if ($product['sub_category_id'] == $subCategory['id']) echo ' selected="selected"';?>>
                                        <?php echo $subCategory['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="brand">Бренд</label>
                    <div class="controls">
                        <input type="text" name="brand" id="brand" value="<?php echo $product['brand'];?>" placeholder="Brand">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="image">Изображение</label>
                    <div class="controls">
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" /><br/>
                        <input type="file" name="image" id="image" value="<?php echo $product['image']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="description">Описание</label>
                    <div class="controls">
                        <textarea name="description"><?php echo $product['description'];?></textarea>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="availability">Доступность</label>
                    <div class="controls">
                        <select id="availability" name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="is_new">Новый</label>
                    <div class="controls">
                        <select id="is_new" name="is_new">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="is_featured">Рекомендованный</label>
                    <div class="controls">
                        <select id="is_featured" name="is_featured">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="status">Статус</label>
                    <div class="controls">
                        <select id="status" name="status">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Показано</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Скрытый</option>
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