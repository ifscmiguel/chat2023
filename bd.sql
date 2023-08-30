create database if not exists chat2023;
use chat2023;

create table if not exists msg(
    id int not null auto_increment primary key,
    nome varchar(50) not null,
    msg varchar(255)
);

insert into msg(nome, msg) values ("Miguel", "Olá mundo"),("Miguel", "hello world"), ("Antonio", "Quer teclar?")