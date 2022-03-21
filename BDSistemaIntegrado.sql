CREATE DATABASE BDSistemaIntegrado;

USE BDSistemaIntegrado;

CREATE TABLE Productos 
(
idProducto int primary key not null,
codProducto varchar(30),
nomProducto varchar (80),
precioProducto decimal
);

INSERT INTO Productos (idProducto,codProducto,nomProducto,precioProducto)
VALUES (100,"PRO00001","Laptop Lenovo","2000"),
	   (101,"PRO00002","Laptop Acer","2500"),
	   (102,"PRO00003","ASPIRADORA ROBOT","1000"),
	   (103,"PRO00004","COLCHON NEW STYLE","900"),
	   (104,"PRO00005","COLCHON ROSEN SWAG ","950.90");
       
SELECT * FROM Productos;

DROP TABLE Productos;