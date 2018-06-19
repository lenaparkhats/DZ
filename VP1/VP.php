<?php
$dsn = "mysql:host=localhost;dbname=LF;charset=utf8";
$pdo = new PDO($dsn, 'root', '');
//$stmt = $pdo ->query('SELECT * FROM user');
//$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);

//print_r($result);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$home = $_POST['home'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];

$em = "SELECT name FROM user WHERE email = '$email'";

$stmt = $pdo ->query($em);

$id_user = "SELECT id FROM user WHERE email = $email";

$idU = $pdo ->query($id_user);

$quer = "INSERT INTO user (Name, email, tel, street, home, part, appt, floor, comment) VALUES ($name, $phone, $email, $street, $home, $part, $appt, $floor, $comment)";

$order = "INSERT INTO orders (id_user, name_user, street, home, part, appt, floor, comment) VALUES ($id_user, $name, $street, $home, $part, $appt, $floor, $comment)";

if ($stmt == null){
    $stmt = $pdo ->query($quer);
    $stmt = $pdo ->query($order);
} else {
    $idU = $pdo ->query($id_user);
    $stmt = $pdo ->query($order);
};
