<?php
    include_once "class/Auth.php";

    if ($auth->isAuth()) {
        // Если пользователь авторизован, приветствуем:  
        echo "Здравствуйте, " . $auth->getLogin();
        //Показываем кнопку выхода
        echo "<br /><br /><a href=\"?is_exit=1\">Выйти</a>";
    } else {

?>

<form method="post" action="">
    
    Логин: <input type="text" name="login" value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; ?>" /> <br/>
    Пароль: <input type="password" name="password" value="" /><br/>
    <input type="submit" value="Войти" />
</form>


<?php
    // else end
    }
?>
