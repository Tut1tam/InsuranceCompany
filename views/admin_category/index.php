<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<?php
use App\models\Category;
?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li class="active">Управление Категориями</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить категорию</a>
            <a href="/admin/subcategory/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить подкатегорию</a>

            <h4>Список категорий</h4>

            <br/>

            <table class="subMenu table-bordered table-striped table">
                <tr>
                    <th>ID Категории:</th>
                    <th>Название</th>
                    <th>Порядок сортировки</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr class="dropdown">
                        <td><?php echo $category['id'];?></td>
                        <td><?php echo $category['name'];?>
                            <?php if (!empty(Category::getSubCategoriesListAdmin($category['id'])) == $category['id']): ?>
                                <table class="table table-striped">                          
                                    <tr>
                                        <th>ID Подкатегории:</th>
                                        <th>Название</th>
                                        <th>ID Категории:</th>
                                        <th>Порядок сортировки</th>
                                        <th>Статус</th>
                                        <th></th>
                                        <th></th>
                                    </tr>                                                                            
                                    <?php foreach (Category::getSubCategoriesListAdmin($category['id']) as $subcategory): ?>
                                        <tr>
                                            <td><?php echo $subcategory['id'];?></td>
                                            <td><?php echo $subcategory['name'];?></td>
                                            <td><?php echo $subcategory['category_id'];?></td>
                                            <td><?php echo $subcategory['sort_order'];?></td>
                                            <td><?php echo $subcategory['status'];?></td>
                                            <td><a href="/admin/subcategory/update/<?php echo $subcategory['id'];?>" title="Edit">Редактировать</a></td>
                                            <td><a href="/admin/subcategory/delete/<?php echo $subcategory['id'];?>" title="Delete">Удалить</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php endif; ?>
                        </td>    
                        <td><?php echo $category['sort_order'];?></td>
                        <td><?php echo $category['status'];?></td>
                        <td><a href="/admin/category/update/<?php echo $category['id'];?>" title="Edit">Редактировать</a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id'];?>" title="Delete">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
