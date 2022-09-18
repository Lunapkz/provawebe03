create database loja;

use loja;


create table cliente(
	NR_CLIENTE INTEGER NOT NULL auto_increment primary key,
    NOME VARCHAR(50) NOT NULL,
    CNPJ CHAR(15) NOT NULL);
    


