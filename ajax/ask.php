<?php

$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$telephone = trim(filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT));
$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS));


$error = '';
if(strlen($name) < 2)
  $error = "Введіть ім'я. Неправильно ввели ім'я!";
else if (strlen($email) < 5)
  $error = "Введіть email. Неправильно ввели email!";
else if (strlen($telephone) < 5)
  $error = "Введіть телефон. Неправильно ввели телефон!";
else if (strlen($message) < 2)
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

$sql = 'INSERT INTO clients(name, email, telephone, message) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$name, $email, $telephone, $message]);

echo "Done";
