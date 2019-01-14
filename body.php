
 <?php echo 'Это начало Body php';?>



    <div class="row">
        <?php foreach ($arrs as $arr):?>
            <div class="col-md-12">
                <h4> ID: <?php echo $arr['id_article'].'   ---   '. $arr['article'].'<br>';?></h4>
                <?php $id =$arr['id_article']?>
                <?php //echo $id?>
                <i><h6> <?php echo $arr['author'].'<br>';?></h6></i>

                <?php
                $text = substr($arr['text_article'],0,1000);
                echo $text;
                ?>
                <div class="row">
                    <a href=<?php echo "read.php?id=".$id?> >  /      Читать полностью     / </a>
                    <a href=<?php echo "update_article.php?id=".$id?> >  /      Редактировать     / </a>
                    <a href= <?php echo "delete.php?id=".$arr['id_article']?>>  /      Удалить     / </a>
                    <i><h2> .</h2></i>

                </div>
            </div>
        <?php endforeach;?>
    </div>




 <?php echo 'Это конец Body php';?>

