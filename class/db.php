<?php

require "libs/rb-mysql.php";

R::setup( 'mysql:host=localhost;dbname=polls',
        'root', '' ); //for both mysql or mariaDB
