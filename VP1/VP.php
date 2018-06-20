<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$home = $_POST['home'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];

$dsn = "mysql:host=localhost;dbname=LF;charset=utf8";
$pdo = new PDO($dsn, 'root', '');

//$id_user = $pdo->prepare("SELECT id FROM user WHERE email = :email");
//$id_user->bindParam(':email', $email, PDO::PARAM_STR);
//$id_user->execute();

$id_user = "SELECT id FROM user WHERE email = '$email'";
$idU = $pdo ->query($id_user);
$data = $idU->fetchAll(PDO::FETCH_OBJ);

$stmt = $pdo->prepare("INSERT INTO user (name, email, tel, street, home, part, appt, floor, comment) VALUES (:name, :email, :phone, :street, :home, :part, :appt, :floor, :comment)");

$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':phone', $phone, PDO::PARAM_INT);
$stmt->bindParam(':street', $street, PDO::PARAM_STR);
$stmt->bindParam(':home', $home, PDO::PARAM_STR);
$stmt->bindParam(':part', $part, PDO::PARAM_STR);
$stmt->bindParam(':appt', $appt, PDO::PARAM_STR);
$stmt->bindParam(':floor', $floor, PDO::PARAM_INT);
$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);

$order = $pdo->prepare("INSERT INTO orders (id_user, name_user, street, home, part, appt, floor, comment) VALUES (:id_user, :name_user, :street, :home, :part, :appt, :floor, :comment)");

$order->bindParam(':id_user', $id_user, PDO::PARAM_INT);
$order->bindParam(':name_user', $name, PDO::PARAM_STR);
$order->bindParam(':street', $street, PDO::PARAM_STR);
$order->bindParam(':home', $home, PDO::PARAM_STR);
$order->bindParam(':part', $part, PDO::PARAM_STR);
$order->bindParam(':appt', $appt, PDO::PARAM_STR);
$order->bindParam(':floor', $floor, PDO::PARAM_INT);
$order->bindParam(':comment', $comment, PDO::PARAM_STR);

if ($data == null){
    $stmt->execute();
    $order->execute();
} else {
    $order->execute();
};
