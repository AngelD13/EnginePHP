<?php
    require_once 'c:\xampp\htdocs\EnginePHP\class\db.php';

?>

<form action="" method="POST">
    <fieldset>
        <legend>Город опроса</legend>
        <select name="select">
            <option value="">Выберите город</option>
            <?php
                $city = R::getAll('SELECT `name`,`prefix` FROM `city`');
                foreach ($city as $value) {
            ?>
            <option value="<?php echo $value['prefix']?>"><?php echo $value['name'];?></option>
            <?php
                }
                
            ?>
        </select>
        <br>
        <input type="submit" value="Отправить">
    </fieldset>
    
</form>

<?php
// выбираем город
if (@$_REQUEST['select']) {
    $select = $_REQUEST['select'];
    ?>
        <form action="" method="POST">
        <div>
        <fieldset>
            <legend>Школа</legend>
            <select name="select1">
                <option value="#">Выберите школу</option>
                <?php
                    $table = $select."school";
                    $school = R::getAll("SELECT `name` FROM `".$table."`");
                    foreach ($school as $value) {
                ?>
                <option value=""><?php echo $value['name']; ?></option>
                <?php
                    }
                ?>
            </select>
            <br>
            <input type="submit" value="Отправить">
        </fieldset>
        </div>
        </form>
    <?php
    // выбираем школу
    if (@$_REQUEST['select1']) {
        ?>
            <form action="" method="post">
            <div class="Fields">
            <!-- Возраст опрашиваемого -->
                <fieldset>
                    <legend><b>Скільки вам років?</b></legend>
                    <label><input type="radio" name="ages" value="11">з 20 по 35</label><br>
                    <label><input type="radio" name="ages" value="12">з 35 по 55</label><br>
                    <label><input type="radio" name="ages" value="13">з 55 та старше</label><br>
                </fieldset>
            </div>
            </form>
        <?php

    } else {
        echo "<font color=red>Выберите школу!</font>";
    } // конец выбора города
    }
    else {
        echo "<font color=red>Выберите город!</font>";
    } // конец выбора города

?>