create database Sistema;
use Sistema;

create table Usuarios
(
	Usuario varchar(40) primary key,
    Nombre varchar(80) not null,
    Correo varchar(60) not null,
    Password varchar(80) not null
);
insert into Usuarios(Usuario,Nombre,Correo,Password) Values ('Ana','Ana Lopez Calderon','calderon.ana@gmail.com','123');
