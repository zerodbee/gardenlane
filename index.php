<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet'  href="./styles/index.css">
    <title>Garden Lane</title>
    
</head>


<body>
    <?php 
    include "details/header1.php";
    include "details/header.php";
    ?>


<div class="banner">
    <a href=""><img class="banner" src="./png/banner.svg" alt=""></a>
</div>

<div class="menupoisk">
    <a class="katalog" href="catalog.php"><img class="poloski" src="./png/katalog.svg" alt=""><p class="poloski1">Каталог</p></a>

    <form class="poisk" method="POST">
        <input class="place" class="" type="text" placeholder="Поиск">
        <input class="button1" type="button">
        
        
    </form>

</div>


<div class="bestchoice">
    <p class="today">ЛУЧШЕЕ СЕГОДНЯ</p>
</div>

<div class="premium">
    <div class="i1">
    <img src="./png/1.png" alt="">
    <p class="font">Собственное <br> производство</p>
    </div>

    <div class="i1">
    <img src="./png/2.png" alt="">
    <p class="font">Фото букета <br> перед отправкой</p>
    </div>

    <div class="i1">
    <img src="./png/3.png" alt="">
    <p class="font">Собрано более <br> 500 тыс. букетов</p>
    </div>

    <div class="i1">
    <img src="./png/4.png" alt="">
    <p class="font">Доставка <br> до 60 минут</p>
    </div>

</div>

<div class="novinki">
<p class="today">НОВИНКИ КОМПОЗИЦИЙ</p>
</div>

<?php 
    include "details/mailing.php";
    include "details/bottom.php";
    ?>

</body>
</html>