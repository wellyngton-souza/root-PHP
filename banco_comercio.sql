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

create table tb_cliente (
	id_cliente int auto_increment primary key,
    nm_cliente varchar(100),
    cpf varchar(100),
    rg varchar(100),
    rua varchar(100),
    bairro varchar(100),
    cep varchar(100),
    cidade varchar(100),
    estado varchar(100),
    telefone varchar(100),
    gmail varchar(100)
);

create table tb_fornecedor (
	id_cliente int auto_increment primary key,
    nm_cliente varchar(100),
    cpf varchar(100),
    rg varchar(100),
    rua varchar(100),
    bairro varchar(100),
    telefone varchar(100),
    gmail varchar(100)
);

create table tb_funcionario (
	id_funcionario int auto_increment primary key,
    nm_funcionario varchar(100),
    cpf varchar(100),
    rg varchar(100),
    rua varchar(100),
    bairro varchar(100),
    cep varchar(100),
    cidade varchar(100),
    estado varchar(100),
    telefone varchar(100),
    gmail varchar(100)
);

create table tb_usuario(
	cd_usuario int auto_increment primary key,
    nm_gmail varchar(100),
    nm_senha varchar(100)
);