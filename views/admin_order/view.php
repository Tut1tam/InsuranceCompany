<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<?php
use App\models\Order;
?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/order">Управление Заказами</a></li>
                    <li class="active">Посмотреть Продукт</li>
                </ol>
            </div>
            
            <h4>Посмотреть Заказ</h4>
            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID Заказа:</th>
                    <th>Название</th>
                    <th>Телефон</th>
                    <th>Комментарий</th>
                    <th>UserID:</th>
                    <th>Date</th>
                    <th>Товары</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php if ($order): ?>
                    <tr>
                        <td><?php echo $order['id'];?></td>
                        <td><?php echo $order['user_name'];?></td>
                        <td><?php echo $order['user_phone'];?></td>
                        <td><?php echo $order['user_comment'];?></td>
                        <td><?php echo $order['user_id'];?></td>
                        <td><?php echo $order['date'];?></td>
                        <td><?php echo $order['products'];?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                        <td><a href="/admin/order/update/<?php echo $order['id'];?>" title="Edit">Edit</a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id'];?>" title="Edit">Delete</a></td>
                    </tr>
                <?php endif; ?>
            </table>
            <br/><br/>
            <h5>Продукты:</h5>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>ID Товара:</th>
                            <th>Название</th>
                            <th>Код</th>
                            <th>Заголовок</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product['id'];?></td>
                                <td><?php echo $product['name'];?></td>
                                <td><?php echo $product['code'];?></td>
                                <td><?php echo $product['title'];?></td>
                                <td><?php echo $product['price'];?></td>
                                <td><?php echo $quantity[$product['id']];?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="5" style="text-align:right"><strong>ВСЕГО К ОПЛАТЕ: </strong></td>
                            <td style="display:block"> <strong> $<?php echo $totalPrice; ?> </strong></td>
                        </tr>
                    </table>
                <br/><br/>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>


