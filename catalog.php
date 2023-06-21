<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  href="./styles/catalog.css">
    <title>Каталог</title>
</head>
<body>
<?php

    include "details/header1.php";
    include "details/header.php";

    ?>

        <div class="menu-top">
            <div class="hrefs">
                <a class="aa" href="index.php">Главная страница / </a><a class="bb"  href="catalog.php">Каталог</a>
            </div>
            <div>
            <form class="poisk" method="POST">
            <input class="place" class="" type="text" placeholder="Поиск">
            <input class="button1" type="button">
            </form>
            </div>
        </div>
        <hr class="line1" color="#dadada" size="1px" style="margin-right: 100px;     margin-left: 100px; margin-top: 15px;">








        <div class="katalog1">

            <div class="catt1">
                    <ul class="ppp3">
                    <a href=""><p class="nazvanie1">Подарки</p></a>
                            <li><a class="lab" href="">Подарочные наборы</a></li>
                            <li><a class="lab" href="">Конфеты и торты</a></li>
                            <li><a class="lab" href="">Подарочные корзины</a></li>
                            <li><a class="lab" href="">Дополнения к букетам</a></li>
                    </ul>
                    <img class="imgimg" src="./png/a.png" alt="" height="180px">
            </div>

            <div class="catt2">
                    <ul class="ppp3">
                    <a href=""><p class="nazvanie1">Цветы</p></a>
                            <li><a class="lab1" href="">Бизнес-букеты</a></li>
                            <li><a  class="lab1" href="">Необычные</a></li>
                            <li><a  class="lab1" href="">Крафт</a></li>
                            <li><a  class="lab1" href="">VIP-букеты</a></li>
                            <li><a  class="lab1" href="">Полевые цветы</a></li>
                    </ul>
                    <img class="imgimg5" src="./png/b.png" alt="" height="180px">
            </div>

            <div class="catt3">
                    <ul class="ppp3">
                    <a href=""><p class="nazvanie1">Композиции</p></a>
                            <li><a  class="lab2" href="">Цветы в корзинах</a></li>
                            <li><a  class="lab2" href="">Цветы в коробках</a></li>
                            <li><a  class="lab2" href="">Подароные корзины</a></li>
                            <li><a  class="lab2" href="">Продуктовые корзины</a></li>
                    </ul>
                    <img class="imgimg" src="./png/c.png" alt="" height="180px">
            </div>

        </div>

        <div class="katalog2">

                <div class="catt4">
                    <ul class="ppp3">
                    <a href=""><p class="nazvanie1">Съедобные букеты</p></a>
                        <li><a  class="lab3" href="">Клубника в шоколаде</a></li>
                        <li><a  class="lab3" href="">Продуктовые букеты</a></li>
                        </ul>
                        <img class="imgimg1" src="./png/d.png" alt="" height="100px">
            </div>

                <div class="catt5">
                    <ul class="ppp3">
                        <a href=""><p class="nazvanie1">Воздушные шары</p></a>
                        <li><a  class="lab4" href="">Букеты из шаров</a></li>
                        <li><a  class="lab4" href="">Шары с наполнениями</a></li>
                        <li><a  class="lab4" href="">Все шары</a></li>
                        </ul>
                        <img class="imgimg11" src="./png/e.png" alt="" height="100px">
            </div>
                
                <div class="catt6">
                    <ul class="ppp3">
                    <a href=""><p class="nazvanie1">Открытки и игрушки</p></a>
                        <li><a  class="lab5" href="">Открытки ручной работы</a></li>
                        <li><a  class="lab5" href="">Игрушки</a></li>
                        </ul>
                        <img class="imgimg111" src="./png/f.png" alt="" height="130px">
            </div>

        </div>
        
        <hr class="line1" color="#dadada" size="1px" style="margin-right: 100px;     margin-left: 100px; margin-top: 50px;">


    <div class="mains">
        <div class="filter">
            <form action="">
                <p class="nazvanie1">Фильтры <img src="./png/filtr.png" alt=""></p><br>
                <p >Цена</p>
                <div class="prc">
                <p>От</p><input type="number" class="price">
                <p>До</p><input type="number" class="price"><br>
                </div>
                
                <hr class="line1" color="#dadada" size="1px" style="width: 100%; margin-left: -2px;">

                <select class="type" name="type">
                <option value="тип" hidden >Тип</option>
                <option value="корзина">Корзина</option>
                <option value="корзина">Съедобные</option>
                <option value="корзина">Корзина</option>
                </select><br>

                <hr class="line1" color="#dadada" size="1px" style="width: 100%; margin-left: -2px;">

                <select class="style" name="style">
                <option value="стиль" hidden >Стиль</option>
                <option value="Свадебный">Свадебный</option>
                </select><br>

                <hr class="line1" color="#dadada" size="1px" style="width: 100%; margin-left: -2px;">

                <select class="style" name="style">
                <option value="Цвет" hidden >Цвет</option>
                <option value="корзина">Красный</option>
                <option value="корзина">Фиолетовый</option>
                </select><br>

                <hr class="line1" color="#dadada" size="1px" style="width: 100%; margin-left: -2px;">

                <input type="button" class="btn1" value="Найти">
            </form>
        </div>
        <div class="flowerss">
            <p class="nazvanie11">Весь каталог</p>
            <div>
                тут будут товары
            </div>
        </div>
    </div>

<?php
include "details/bottom.php";
?>



</body>
</html>