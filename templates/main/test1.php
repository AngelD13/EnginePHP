<?php
    require_once 'c:\xampp\htdocs\EnginePHP\class\db.php';
    //onchange="document.location=this.options[this.selectedIndex].value"
   
    if (isset($_REQUEST['select']) == "") {
        echo "Не выбран город!";
    } else {
        $select = $_REQUEST['select'];
?>

<form action="" method="POST">
    <div>
    <fieldset>
        <legend>Школа</legend>
        <select >
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
}
?>
