-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: serpisweb_bd
-- ------------------------------------------------------
-- Server version	8.0.29





CREATE SCHEMA serpisweb_db;
USE serpisweb_db;

/*
CREATE TABLE Productos(
idProducto INT NOT NULL AUTO_INCREMENT,
nombreProducto VARCHAR(50),
precioProducto DOUBLE,
tipoProducto VARCHAR(30),
especProducto VARCHAR(2000),
sobreProducto VARCHAR (2000),
imagenProducto VARCHAR(200),
PRIMARY KEY(idProducto)
);*/

CREATE TABLE `productos` (
                             `idproducto` int NOT NULL AUTO_INCREMENT,
                             `nombreProducto` varchar(65) NOT NULL,
                             `precioProducto` float NOT NULL,
                             `tipoProducto` varchar(45) NOT NULL,
                             `especProducto` text NOT NULL,
                             `sobreProducto` text NOT NULL,
                             `imagenProducto` varchar(60) NOT NULL,
                             PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;


CREATE TABLE Metodos_de_pago(
                                Tipo VARCHAR(30),
                                idMetodoPago INT NOT NULL AUTO_INCREMENT,
                                numero VARCHAR(16),
                                cvv VARCHAR(3),
                                mes VARCHAR(2),
                                anyo VARCHAR(4),
                                id_usuario INT,
                                PRIMARY KEY (idMetodoPago)
/*CONSTRAINT fk_usuario_metodopago FOREIGN KEY(id_usuario) REFERENCES usuario(idUsuario)*/
);



CREATE TABLE Usuario(
                        IdUsuario INT NOT null AUTO_INCREMENT,
                        contrasena VARCHAR(20) NOT NULL,
                        username VARCHAR(20) NOT NULL,
                        nombre VARCHAR(60),
                        correo VARCHAR(50),
                        direccion VARCHAR (50),
                        Rol VARCHAR (20) DEFAULT ('User'),
                        id_metodopago INT,
                        PRIMARY KEY(idUsuario),
                        CONSTRAINT fk_metodopago_Usuario FOREIGN KEY(id_metodopago) REFERENCES Metodos_de_pago(idMetodoPago)
);

CREATE TABLE carrito(
                        id_usuario INT,
                        idCarrito INT AUTO_INCREMENT ,
                        PRIMARY KEY (idCarrito),
                        CONSTRAINT fk_usuario_carrito FOREIGN KEY (id_usuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE factura(
                        numero_factura INT NOT NULL AUTO_INCREMENT,
                        fecha_generado DATE,
                        total DOUBLE,
                        id_producto_factura INT,
                        id_usuario INT,
                        id_metodoPago INT,
                        CONSTRAINT fk_usuario_factura FOREIGN KEY (id_usuario) REFERENCES usuario(idUsuario),
                        CONSTRAINT fk_metodo_pago FOREIGN KEY (id_metodopago) REFERENCES Metodos_de_Pago(idMetodoPago),
                        PRIMARY KEY (numero_factura)
);


CREATE TABLE Producto_Factura(
                                 id_producto INT,
                                 numero_Factura INT,
                                 PRIMARY KEY (id_producto,numero_Factura),
                                 CONSTRAINT fk_producto_ProducFact FOREIGN KEY (id_producto) REFERENCES Productos(idProducto),
                                 CONSTRAINT fk_factura_producFact FOREIGN KEY (numero_Factura) REFERENCES factura (numero_factura)
);




CREATE TABLE Carrito_Producto(
                                 id_Producto INT,
                                 id_Carrito INT,
                                 PRIMARY KEY (id_producto,id_carrito),
                                 CONSTRAINT fk_producto_carpr  FOREIGN KEY (id_Producto) REFERENCES Productos(idProducto),
                                 CONSTRAINT fk_carrito_carpr FOREIGN KEY (id_Carrito) REFERENCES Carrito(idCarrito)
);


INSERT INTO `productos` VALUES (1,'Intel Core i3-10105 3.7 GHz',118,'procesadores','Perseo gay<br>Jotados gay','Este producto te va a encantar compralo ya mismo','i3-10105.png'),(2,'MSI AMD Radeon RX 6600 XT MECH 2X OC 8GB GDDR6',600,'graficas','Super guay<br>YA YA','Mejor calidad precio','rx-6600.png');


