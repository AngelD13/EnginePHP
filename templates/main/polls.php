<strong>Скрипт:</strong> опроса родителей
<br>

<?php
require_once 'c:\xampp\htdocs\EnginePHP\class\db.php';

// выбираем город

require 'c:\xampp\htdocs\EnginePHP\templates\main\city1.php';

// выбираем школу
if (@$_REQUEST['select']) {
    $select = $_REQUEST['select'];
    require 'c:\xampp\htdocs\EnginePHP\templates\main\school2.php';
    echo '<script type="text/javascript">',
        'document.getElementById("delete1").remove();',
        '</script>';
}

if (@$_REQUEST['select1']) {
    //$select1 = $_REQUEST['select1'];
    require 'c:\xampp\htdocs\EnginePHP\templates\main\opros3.php';
    echo '<script type="text/javascript">',
        'document.getElementById("delete2").remove();',
        '</script>';

}

?>