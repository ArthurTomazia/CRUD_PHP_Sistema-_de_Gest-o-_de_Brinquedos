CREATE DATABASE loja_Brinquedos;
USE loja_Brinquedos;

CREATE TABLE Brinquedos(
    id int auto_increment primary key,
    nome varchar(255) not null,
    categori varchar(255) not null,
    faixa_etaria int not null,
    preco float not null,
    estoque int not null
);
