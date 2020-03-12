create database if not exists db_agendaio default character set utf8 default collate utf8_general_ci;

use db_agendaio;

create table usuario(
	id int primary key auto_increment,
    nome varchar(255) not null,
    sobrenome varchar(255) not null,
    email nvarchar(255) not null unique,
    senha varchar(255) not null,
    nascimento varchar(10) not null,
    sexo varchar(10) not null,
    foto varchar(255) default 'avatar.png',
    perfil enum('admin', 'user') default 'user'
);


