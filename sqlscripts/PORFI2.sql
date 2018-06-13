
DROP DATABASE db;
CREATE DATABASE db;
USE db;
CREATE TABLE `USER` (
	`id_user` INT(5) NOT NULL AUTO_INCREMENT,
	`email` varchar(70) NOT NULL UNIQUE,
	`password` varchar(20) NOT NULL,
	`name` varchar(30) NOT NULL,
	`first_last_name` varchar(30) NOT NULL,
	`second_last_name` varchar(30) NOT NULL,
	`role` INT(1) NOT NULL,
	`grade` INT(1) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `SIGNED_IN` (
	`id_user` INT(5) NOT NULL,
	`id_class` INT(5) NOT NULL,
	`id_group` INT(5) NOT NULL
);

CREATE TABLE `GROUPS` (
	`id_group` INT(5) NOT NULL AUTO_INCREMENT,
	`name` varchar(30) NOT NULL,
	`id_class` INT (5) NOT NULL,
	PRIMARY KEY (`id_group`)
);

CREATE TABLE `CLASS` (
	`id_class` INT(5) NOT NULL AUTO_INCREMENT,
	`name` varchar(25) NOT NULL UNIQUE,
	`id_teacher` INT(5) NOT NULL,
	PRIMARY KEY (`id_class`)
);

CREATE TABLE `CALIFICATION_BETWEEN_STUDENTS` (
	`id_group` INT(5) NOT NULL,
	`id_calificator` INT(5) NOT NULL,
	`id_calified` INT(5) NOT NULL,
	`grade` INT(2),
	PRIMARY KEY (`id_group`,`id_calificator`,`id_calified`)
);

CREATE TABLE `CALIFICATION` (
	`id_group` INT(5) NOT NULL AUTO_INCREMENT,
	`expiration_date` DATE,
	`teacher_calification` INT(2),
	PRIMARY KEY (`id_group`)
);

ALTER TABLE GROUPS AUTO_INCREMENT=22222;

ALTER TABLE CLASS AUTO_INCREMENT=11111;


ALTER TABLE `SIGNED_IN` ADD CONSTRAINT `INSCRITO_EN_fk0` FOREIGN KEY (`id_user`) REFERENCES `USER`(`id_user`);

ALTER TABLE `SIGNED_IN` ADD CONSTRAINT `INSCRITO_EN_fk1` FOREIGN KEY (`id_class`) REFERENCES `CLASS`(`id_class`);

ALTER TABLE `SIGNED_IN` ADD CONSTRAINT `INSCRITO_EN_fk2` FOREIGN KEY (`id_group`) REFERENCES `GROUP`(`id_group`);

ALTER TABLE `GROUP` ADD CONSTRAINT `GRUPO_fk0` FOREIGN KEY (`id_class`) REFERENCES `CLASS`(`id_class`);

ALTER TABLE `CLASS` ADD CONSTRAINT `CLASE_fk0` FOREIGN KEY (`id_teacher`) REFERENCES `USER`(`id_user`);

ALTER TABLE `CALIFICATION_BETWEEN_STUDENTS` ADD CONSTRAINT `CALIFICACION_ENTRE_ALUMNOS_fk0` FOREIGN KEY (`id_group`) REFERENCES `GROUP`(`id_group`);

ALTER TABLE `CALIFICATION_BETWEEN_STUDENTS` ADD CONSTRAINT `CALIFICACION_ENTRE_ALUMNOS_fk1` FOREIGN KEY (`id_calificator`) REFERENCES `USER`(`id_user`);

ALTER TABLE `CALIFICATION_BETWEEN_STUDENTS` ADD CONSTRAINT `CALIFICACION_ENTRE_ALUMNOS_fk2` FOREIGN KEY (`id_calified`) REFERENCES `USER`(`id_user`);

ALTER TABLE `CALIFICATION` ADD CONSTRAINT `CALIFICACION_fk0` FOREIGN KEY (`id_group`) REFERENCES `GROUP`(`id_group`);

insert into USER values 
(null, 'paco@gmail.com', 1234, 'paco', 'paco', 'paco', 2, 0),
(null, 'lucia@gmail.com', 1234, 'lucia', 'lucia', 'lucia', 1, 2),
(null, 'pedro@gmail.com', 1234, 'pedro', 'pedro', 'pedro', 1, 3),
(null, 'dani@gmail.com', 1234, 'dani', 'dani', 'dani', 2, 0),
(null, 'paula@gmail.com', 1234, 'paula', 'paula', 'paula', 1, 2),
(null, 'julio@gmail.com', 1234, 'julio', 'julio', 'julio', 1, 2),
(null, 'claudia@gmail.com',1234,'claudia', 'claudia', 'claudia', 1, 2),
(null, 'juan@gmail.com',1234, 'juan', 'juan', 'juan', 1, 2),
(null, 'aurelio@gmail.com',1234, 'marco', 'claudio', 'aurelio', 1, 3),
(null, 'utad@gmail.com',1234, 'universita', 'utad', 'flipada', 1, 3);

insert into CLASS values
(null, 'Ciencias', 00001),
(null, 'Letras', 00004),
(null, 'Artes', 00004);

insert into GROUPS values
(null, 'grupo1', 11111),
(null, 'grupo2', 11111),
(null, 'grupo3', 11112),
(null, 'grupo4', 11112),
(null, 'grupo5', 11113),
(null, 'grupo6', 11113);

insert into SIGNED_IN values
(00002, 11111, 22222),
(00003, 11111, 22222),
(00005, 11111, 22222),
(00006, 11112, 22224),
(00007, 11112, 22224),
(00001, 11112, 22224),
(00008, 11113, 22226),
(00009, 11113, 22226),
(00010, 11113, 22226),
(00002, 11111, 22223),
(00003, 11111, 22223),
(00009, 11111, 22223);

insert into CALIFICATION values
(22222,'2018-12-05',8),
(22223,'2018-12-31',5),
(22224,'2018-10-05',7),
(22225,'2019-01-05',-1),
(22226,'2019-07-14',10),
(22227,'2018-10-19',6);