<?php
     require "class/db.php";

?>


<!-- Форма регистрации -->

<form action="/signup.php" method="POST">
    <p>
        <p><strong>Введите логин</strong>:</p>
        <input type="text" name="login">
    </p>

    <p>
        <p><strong>Введите Email</strong>:</p>
        <input type="email" name="email">
    </p>

    <p>
        <p><strong>Ваш пароль</strong>:</p>
        <input type="password" name="password">
    </p>

    <p>
        <p><strong>Повторите пароль</strong>:</p>
        <input type="password" name="password_1">
    </p>

    <p>
        <button type="submit">Зарегистрироваться</button>
    </p>

</form>
