<!-- <script type="text/javascript">
    document.getElementById("delete1").remove();
</script> -->

<div id="delete2">
<form action="" method="POST">
        <fieldset>
            <legend><b>Школа</b></legend>
            <select name="select1">
                <option value="#">Оберіть школу</option>
                <?php
                    $table = $select."school";
                    $school = R::getAll("SELECT `id`, `name` FROM `".$table."`");
                    foreach ($school as $value) {
                ?>
                <option value="<?php echo $value['id']?>"><?php echo $value['name']; ?></option>
                <?php
                    }
                ?>
            </select>
            <br>
            <input type="submit" value="Отправить">
        </fieldset>
</form>
</div>
