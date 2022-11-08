<?php

$namebuy = trim(filter_var($_POST['namebuy'], FILTER_SANITIZE_SPECIAL_CHARS));
$emailbuy = trim(filter_var($_POST['emailbuy'], FILTER_SANITIZE_EMAIL));
$telephonebuy = trim(filter_var($_POST['telephonebuy'], FILTER_SANITIZE_NUMBER_INT));
$messagebuy = trim(filter_var($_POST['messagebuy'], FILTER_SANITIZE_SPECIAL_CHARS));


$error = '';
if(strlen($namebuy) < 2)
  $error = "Введіть ім'я. Неправильно ввели ім'я!";
else if (strlen($emailbuy) < 5)
  $error = "Введіть email. Неправильно ввели email!";
else if (strlen($telephonebuy) < 5)
  $error = "Введіть телефон. Неправильно ввели телефон!";
else if (strlen($messagebuy) < 2)
  $error = "Введіть повідомлення.";


if($error != '') {
  echo $error;
  exit();
}


$user = 'root';
$password = 'root';
$db = 'etazhi';
$host = 'localhost';
$port = 3306;


$dsn = 'mysql:host='.$host.';dbname='.$db.';port='.$port;
$pdo = new PDO($dsn, $user, $password);

$sql = 'INSERT INTO buy(namebuy, emailbuy, telephonebuy, messagebuy) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$namebuy, $emailbuy, $telephonebuy, $messagebuy]);

echo "Done";
