<?php
$dsn = "mysql:host=localhost;dbname=LF;charset=utf8";
$pdo = new PDO($dsn, 'root', '');

$orders = "SELECT * FROM orders";
$orders_query = $pdo->query($orders);
$data = $orders_query->fetchAll(PDO::FETCH_ASSOC);

$user = "SELECT * FROM user";
$user_query = $pdo->query($user);
$user_data = $user_query->fetchAll(PDO::FETCH_ASSOC);

echo "<h3>Список заказов</h3>";
echo '<pre>';
print_r($data);
echo "<br><br><h3>Список пользователей</h3>";
echo '<pre>';
print_r($user_data);