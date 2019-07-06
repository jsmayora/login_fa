create database pruebas
use pruebas;
create table tbl_usuarios (
	id_usuario int auto_increment,
	nombre varchar(50),
	apellido varchar(50),
	usaurio varchar(50),
	password text(50),
	primary key(id_usuario)

);