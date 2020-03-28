/* Если БД не создана, то создаем ее*/
CREATE DATABASE IF NOT EXISTS mirnew
CHARACTER SET = utf8;

/* Создаем таблицу users*/
CREATE TABLE IF NOT EXISTS users (
	id INT AUTO_INCREMENT NOT NULL,
 	login VARCHAR(20), /* логин, совпадает с логином Windows */
 	pass VARCHAR(255), /* Пароль */
 	salt VARCHAR(255), /* Соль для пароля */
 	name VARCHAR(20), /* Отображаемое имя */
 	email VARCHAR(255) UNIQUE, /* Почта */
 	reg_date DATE,
 	users_rights TINYINT(10) DEFAULT '0', /* Права пользователя, 0 - просмотр */
 	PRIMARY KEY (id),
 	FOREIGN KEY (users_rights) REFERENCES users_rights(id)
) ENGINE=InnoDB CHARACTER SET=UTF8;

/* Права пользователей*/
CREATE TABLE IF NOT EXISTS users_rights (
	id TINYINT(10),
 	rights VARCHAR(10),
 	note VARCHAR(255),
 	PRIMARY KEY(id)
) ENGINE=InnoDB CHARACTER SET=UTF8;

/*  Вводим пользователей */
INSERT INTO `users`(`login`, `pass`, `salt`, `name`, `email`, `users_rights`) VALUES 
('root', 'root', null, 'Root', 'admin@mirnew.net', 9), ('Admin', 'admin', null, 'Admin', 'angel@mirnew.net', 1),
('Korotin-YeM', '12345678', null, 'Коротин', 'angel@mirnew.net', 1);

/* Права пользователей */
INSERT INTO `users_rights`(`id`, `rights`, `note`) VALUES (0, 'view', 'Только просмотр'),
(1, 'user', 'Права на работу с программой'), (9, 'admin', 'Super user');
