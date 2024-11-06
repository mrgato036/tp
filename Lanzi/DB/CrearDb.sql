/*ELIMINAR BASE DE DATOS*/
drop database IF EXISTS usuario;

/*CREAR BASE DE DATOS*/ 
create database IF NOT EXISTS usuario;

/*SELECCIONAR LA BASE DE DATOS*/
use usuario;

/*ELIMINAR TODAS LAS TABLAS*/
drop table IF EXISTS Materia,Alumno;

/*CREAR TABLA Alumno*/
create table Alumno (
			NroDoc smallint,
            TipoDoc varchar(50)not null, 
			Nombre varchar(50) not null,
			Apellido varchar(50) not null,
            Año_Div int not null,
			primary key(NroDoc)
);

/*CREAR TABLA Materia*/
create table materias (
			NumeroM smallint,
			NombreM varchar(50) not null,
			primary key(Numero)
);





