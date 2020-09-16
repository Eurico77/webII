create database test;
use test;

create table book (
  id  int(11) auto_increment primary key,
  titulo varchar(30) not null,
  autor varchar(30) not null,
  descricao varchar(30) not null
);