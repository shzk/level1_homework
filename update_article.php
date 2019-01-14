<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo 'начало update article php';
echo '<br>';
echo $_GET['id'];
$idi = $_GET['id'];
echo '<br>';
echo $id;
echo '<br>';

$pdo = new PDO('mysql:host=localhost;dbname=php_cours; charset=utf8', 'root', '9959095');
var_dump($pdo);
echo '<br>';
$updet_query = $pdo->query("SELECT * FROM `hobby` WHERE `id_article`= '$idi'");
var_dump($updet_query);

echo '<br>';
$arr= $updet_query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($arr);


echo '<br>';
$id_article = $arr[0]['text_article'];
echo $id_article;


?>

<form action="update_art.php" method="post">
    Old Id: <input type="text" name="oid" value="<?php echo $arr[0]['id_article'];?>" >
    Id: <input type="text" name="id" value="<?php echo $arr[0]['id_article'];?>" >
    <br>
    Название статьи: <input type="text" name="art"  value= "<?php echo $arr[0]['article'];?>" >
    <br>
    Автор: <input type="text" name="auth"  value= "<?php echo $arr[0]['author'];?> " >
    <br>
    Текст статьи: <input type="text" name="texp_art"  value= "<?php echo $arr[0]['text_article'];?>" >
    <input type="submit" value="Отправить">
</form>

