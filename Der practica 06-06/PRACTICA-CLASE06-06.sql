CREATE TABLE usuarios(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL,
dni INTEGER UNIQUE KEY
);
INSERT INTO usuarios VALUES(NULL, "Fernanda", 27027871);
INSERT INTO usuarios VALUES(NULL, "Pablo", 26965630);
INSERT INTO usuarios VALUES(NULL, "Lucia", 05471354);
INSERT INTO usuarios VALUES(NULL, "Simona", 52643261);
INSERT INTO usuarios VALUES(NULL, "Julia", 56580232);
CREATE TABLE productos(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL,
precio_unidad INT NOT NULL,
cantidad INT 
);
ALTER TABLE productos
ADD marcaid int not null;
ALTER TABLE productos
ADD categoriaid int not null;

CREATE TABLE compras(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
unidades INT
);

CREATE TABLE categorias(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL
);
CREATE TABLE marcas(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL
);
Drop table usuarios;
ALTER TABLE compras
ADD usuarioid int not null;
ALTER TABLE compras
ADD FOREIGN KEY (usuarioId) REFERENCES usuarios(id);
ALTER TABLE compras
ADD productoid int not null;
ALTER TABLE compras
ADD marcaid int not null;
ALTER TABLE compras
ADD categoriaid int not null;

ALTER TABLE compras
ADD FOREIGN KEY (productoid) REFERENCES productos(id);
ALTER TABLE compras
ADD FOREIGN KEY (marcaid) REFERENCES marcas(id);
ALTER TABLE compras
ADD FOREIGN KEY (categoriaid) REFERENCES categorias(id);




INSERT INTO productos VALUES(NULL,"lapiz",20,15,1,1);
INSERT INTO productos VALUES(NULL,"arroz",32,100,4,2);
INSERT INTO productos VALUES(NULL,"cuaderno",150,20, 2,1);
INSERT INTO productos VALUES(NULL,"gaseosa",150,24,3,3);
INSERT INTO productos VALUES(NULL,"asado",250,20,5,4);


INSERT INTO marcas VALUES(NULL, "Faber-Castell");
INSERT INTO marcas VALUES(NULL, "Rivadavia");
INSERT INTO marcas VALUES(NULL, "Cunnington");
INSERT INTO marcas VALUES(NULL, "Molino Ala");
INSERT INTO marcas VALUES(NULL, "Carnes Argentinas");
INSERT INTO categorias VALUES(NULL, "Librería");
INSERT INTO categorias VALUES(NULL, "Almacén");
INSERT INTO categorias VALUES(NULL, "Bebidas");
INSERT INTO categorias VALUES(NULL, "Carnicería");
INSERT INTO categorias VALUES(NULL, "Golosinas");

INSERT INTO compras VALUES(NULL,10,2,1,1,1);
INSERT INTO compras VALUES(NULL,2,5,2,4,2);
INSERT INTO compras VALUES(NULL,5,2,3, 2,1);
INSERT INTO compras VALUES(NULL,2,1,4,3,3);
INSERT INTO compras VALUES(NULL,3,3,5,5,4);

DELETE FROM marcas 
WHERE id>5;

CREATE TABLE ciudad(
IDCiudad INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
NombreCiudad VARCHAR(100)
);
CREATE TABLE provincia(
IDProvincia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
NombreProvincia VARCHAR(100)
);
CREATE TABLE pais(
IDPais INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
NombrePais VARCHAR(100)
);
ALTER TABLE ciudad ADD FOREIGN KEY (IDProvincia) REFERENCES provincia(IDProvincia);

ALTER TABLE provincia ADD FOREIGN KEY (IDPais) REFERENCES pais(IDPais);


