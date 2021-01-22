<?php
    require_once 'c:\xampp\htdocs\EnginePHP\class\Polls.php';
    require_once 'c:\xampp\htdocs\EnginePHP\class\db.php';

$names = R::getAll('SELECT `name`,`prefix` FROM `city`');
foreach ($names as $value) {
    echo $value['prefix'].' = '.$value['name'];
}

if (isset($_REQUEST['surname'])) {
    $name = $names[$_REQUEST['surname']];
    echo "Вы выбрали: {$_REQUEST['surname']}, {$name}";
}
?>
<form action="<?=$_SERVER['SCRIP_NAME'] ?>" method="POST">
    Выберите город:
    <select>
        <?=selectItems($names, $_REQUEST['surname'])?>
    </select> <br />
    <input type="submit" value="Выбрать город">

</form>