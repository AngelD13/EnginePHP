<?php

    if ($auth->isAuth()) {
        // Если пользователь авторизован, приветствуем:  
        echo "Здравствуйте, ".$auth->getLogin();
        //Показываем кнопку выхода
        echo "<br /><br />";
        echo "<button class=\"btn\" name=\"submit\" onclick=\"document.location.replace('exit.php');\">Выход</button><br>";
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
