<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


echo 'Это начало new_art php';
echo '<br>';

$id = $_POST['id'];
echo $id.'<br>';

$art = $_POST['art'];
echo $art.'<br>';

$auth = $_POST['auth'];
echo $auth.'<br>';

$texp_art = $_POST['texp_art'];
echo $texp_art.'<br>';

echo '<br>';
$pdo = new PDO('mysql:host=localhost;dbname=php_cours; charset=utf8', 'root', '9959095');
var_dump($pdo);
$statement = $pdo->query("INSERT INTO `hobby`(`id_article`, `article`, `author`, `text_article`) VALUES ('$id', '$art', '$auth', '$texp_art')");

header('Location: index.php');


?>