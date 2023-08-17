create database BD_comerce;

use BD_comerce;

create table tb_produto (
	id_produto int auto_increment primary key,
    nm_produto varchar(100),
    nm_tipo varchar(100),
    nm_tamanho varchar(100),
    nm_valor varchar(100),
    validade varchar(100)
);

select * from tb_produto;