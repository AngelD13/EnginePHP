<!-- выбираем город -->
<div id="delete1">
<form action="" method="POST">
    <fieldset>
        <legend><b>Місто опитування</b></legend>
        <select name="select">
            <option value="">Оберіть місто</option>
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
</div>
