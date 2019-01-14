<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


echo 'Это начало update_art php';
$oid = $_POST['oid'];
echo $oid.'<br>';

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
//$updet_query = $pdo->query("SELECT * FROM `hobby` WHERE `id_article`= '$id'");

$updat_art = $pdo->query("UPDATE `hobby` SET `id_article`= '$id',`article`='$art',`author`='$auth',`text_article`='$texp_art' WHERE `id_article`= '$oid'");
var_dump($updat_art);

header('Location: index.php');
// Добавление записи  в базу данных php_cours, таблица hobby
//$statement = $pdo->query("INSERT INTO `hobby`(`id_article`, `article`, `author`, `text_article`) VALUES ('$id', '$art', '$auth', '$texp_art')");

//INSERT INTO `hobby`(`id_article`, `article`, `author`, `text_article`) VALUES ([value-1],[value-2],[value-3],[value-4])
//INSERT INTO `hobby`(`id_article`, `article`, `author`, `text_article`) VALUES ($id,$art,$auth,$texp_art)
//header('Location: index.php');


?>