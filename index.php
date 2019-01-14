<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


//  Используемые шпаргалки
//  Шаблон  страници на PHP - https://zarabotat-na-sajte.ru/uroki-php/kak-sdelat-sayt-na-php.html
$pdo = new PDO('mysql:host=localhost;dbname=php_cours; charset=utf8', 'root', '9959095');
//var_dump($pdo);

$statement = $pdo->query('SELECT * FROM hobby');
$arrs = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($arrs);






?>
<!DOCTIPE HTML>
<html>
<head>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/head.php'; ?>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/body.php'; ?>

    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>

</body>
</html>










