<?php
/**
 * Движок на PHP
 * @author Angel
 */
include_once "class/Engine.php"; //Подключаем класс - движка
//include_once "class/AuthClass.php"; //Подключаем класс - авторизации
$engine = new Engine(); //Создаем объект класса Engine

include_once "templates/main/header.php"; //Подключаем шапку сайта

var_dump($_page_file);

if ($engine->getError()) { //Если возникли ошибки, выводим сообщение на экран
    echo "<div style='border:1px solid red;padding:10px;margin: 10px auto; 
        width: 500px;'>" . $engine->getError() . "</div>";
}
var_dump($_page_file);
echo $engine->getContentPage(); //Выводим страницы сайта

include_once "templates/main/footer.php";//Подключаем подвал сайта