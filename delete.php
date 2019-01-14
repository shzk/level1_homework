<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//echo 'Это начало delete php';
echo $_GET['id'];
$id = $_GET['id'];
echo $id;
//cho "DELETE FROM `hobby` WHERE `id_article`= $_GET['id']";

//$statement = $pdo->query("DELETE FROM `hobby` WHERE `id_article`= $_GET['id']");


//echo "DELETE FROM `hobby` WHERE `id_article`= '$id'"
$pdo = new PDO('mysql:host=localhost;dbname=php_cours; charset=utf8', 'root', '9959095');
$statement = $pdo->query("DELETE FROM `hobby` WHERE `id_article`= '$id'");

//$query ="DELETE FROM `hobby` WHERE `id_article`= '$id'";
 header('Location: index.php');

?>