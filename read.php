<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo 'Это начало read php';
//echo $_GET['id'];
$id = $_GET['id'];
//echo $id;

$pdo = new PDO('mysql:host=localhost;dbname=php_cours; charset=utf8', 'root', '9959095');
//var_dump($pdo);
$statement = $pdo->query("SELECT * FROM `hobby` WHERE `id_article`= '$id'");
$arrs = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($arrs);
//$text = $arr['text_article'];


?>


<div class="row">
    <?php foreach ($arrs as $arr):?>
        <div class="col-md-12">
            <h4> ID: <?php echo $arr['id_article'].'   ---   '. $arr['article'].'<br>';?></h4>
            <?php $id =$arr['id_article']?>
            <?php echo $id?>
            <i><h4> <?php echo $arr['author'].'<br>';?></h4></i>

            <?php
            $text = $arr['text_article'];
            echo $text;
            ?>
            <div class="row">
                <a href=<?php echo "index.php"?>> >  /      вернуться назад     / </a>
                <a href="#">  /      Редактировать     / </a>
                <a href= <?php echo "delete.php?id=".$arr['id_article']?>>  /      Удалить     / </a>

                <?php
                //$statement = $pdo->query("DELETE FROM `hobby` WHERE `id_article`= $arr['id_article']");
                ?>



                </a>
            </div>
        </div>
    <?php endforeach;?>
</div>

