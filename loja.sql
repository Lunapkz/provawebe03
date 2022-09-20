create database loja;

use loja;


create table CLIENTE(
	NR_CLIENTE INTEGER  NOT NULL auto_increment primary key,
    NOME VARCHAR(50) NOT NULL,
    CNPJ CHAR(15) NOT NULL);
    

create table PEDIDO( 
	NR_CLIENTE integer NULL auto_increment,
    NR_PEDIDO INTEGER not null,
    DATA_PEDIDO DATE NOT NULL,
    primary key (NR_CLIENTE, NR_PEDIDO),
    foreign key (NR_CLIENTE)
    references CLIENTE(NR_CLIENTE) on delete restrict );

create table ITEM_PEDIDO (
    NR_PEDIDO  INTEGER not null auto_increment,
    NR_PRODUTO INTEGER not null,
    primary key (NR_PEDIDO,NR_PRODUTO),
    PRECO_UNITARIO integer,
    QUANTIDADE integer ) ;

create table PRODUTO(
    NR_PRODUTO INTEGER auto_increment primary key,
    NOME varchar(50) not null,
    PRECO_UNITARIO integer ,
    QUANT_ESTOQUE integer );
    
    drop database loja;
    
    select * from CLIENTE;
    select * from PRODUTO;
    select * from PEDIDO;