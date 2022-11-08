<?php

$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$usertelephone = trim(filter_var($_POST['usertelephone'], FILTER_SANITIZE_NUMBER_INT));



$error = '';
if(strlen($username) < 2)
  $error = "Введіть ім'я";
else if (strlen($usertelephone) < 5)
  $error = "Введіть телефон";



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

$sql = 'INSERT INTO callme(username, usertelephone) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $usertelephone]);

echo "Done";
