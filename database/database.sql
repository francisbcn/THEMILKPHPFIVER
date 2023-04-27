-- Active: 1675263813408@@127.0.0.1@3306@bolt
DROP DATABASE IF EXISTS tienda_master;
CREATE DATABASE tienda_master DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
USE tienda_master;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'password', 'admin', null);

CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(1, 'sport');
INSERT INTO categorias VALUES(2, 'casual');
INSERT INTO categorias VALUES(3, 'denim');
INSERT INTO categorias VALUES(4, 'joyeria');
INSERT INTO categorias VALUES(5, 'queer');

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
descripcion_corta     text,
precio          float(100,2) not null,
stock           int(255) not null,
bordado         BOOLEAN,
oferta          varchar(2),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_productos PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;
USE tienda_master;
INSERT INTO productos (id, categoria_id, nombre, descripcion, descripcion_corta, precio, stock, oferta, fecha) VALUES (1, 1, 'Producto 1', 'Descripción del producto 1', 'Descripción corta del producto 1', 10.99, 100, null, CURDATE());
ALTER TABLE productos ADD COLUMN bordado BOOLEAN;
UPDATE productos SET bordado = true WHERE id = 1;
UPDATE productos SET bordado = false WHERE id = 2;

CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
fecha           date not null,
estado          varchar(20),
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;
USE tienda_master;
CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
precio          float(100,2) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;
USE tienda_master;
CREATE TABLE colores (
id int(255) auto_increment not null,
nombre varchar(50) not null,
codigo varchar(10),
CONSTRAINT pk_colores PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO colores (nombre) VALUES ('Blanco'), ('Beige'), ('Gris'), ('Azul Navy'),('Azul'),('Azul Claro'), ('Azul Oscuro'), ('Amarillo'), ('Azul cielo'), ('Verde Lima'), ('Rosa'), ('Negro'), ('Blanco Crudo'), ('Azul Navy');
USE tienda_master;
ALTER TABLE colores ADD COLUMN codigo varchar(10);

UPDATE colores SET codigo = 'BL' WHERE nombre = 'Blanco';
UPDATE colores SET codigo = 'BG' WHERE nombre = 'Beige';
UPDATE colores SET codigo = 'GR' WHERE nombre = 'Gris';
UPDATE colores SET codigo = 'AN' WHERE nombre = 'Azul Navy';
UPDATE colores SET codigo = 'AZ' WHERE nombre = 'Azul';
UPDATE colores SET codigo = 'AC' WHERE nombre = 'Azul Claro';
UPDATE colores SET codigo = 'AO' WHERE nombre = 'Azul Oscuro';
UPDATE colores SET codigo = 'AM' WHERE nombre = 'Amarillo';
UPDATE colores SET codigo = 'AS' WHERE nombre = 'Azul cielo';
UPDATE colores SET codigo = 'VL' WHERE nombre = 'Verde Lima';
UPDATE colores SET codigo = 'RS' WHERE nombre = 'Rosa';
UPDATE colores SET codigo = 'NG' WHERE nombre = 'Negro';
UPDATE colores SET codigo = 'BC' WHERE nombre = 'Blanco Crudo';
USE tienda_master;
CREATE TABLE tallas (
id int(255) auto_increment not null,
nombre varchar(50) not null,
CONSTRAINT pk_tallas PRIMARY KEY (id)
) ENGINE=InnoDB;
USE tienda_master;
INSERT INTO tallas (nombre) VALUES ('XS'), ('S'), ('M'), ('L'), ('XL'), ('XXL'), ('36'), ('38'), ('40'), ('42'), ('44'), ('46');

ALTER TABLE productos ADD COLUMN talla_id int(255) not null;
ALTER TABLE productos ADD COLUMN color_id int(255) not null;
USE tienda_master;
ALTER TABLE productos ADD CONSTRAINT fk_producto_talla FOREIGN KEY (talla_id) REFERENCES tallas (id);
ALTER TABLE productos ADD CONSTRAINT fk_producto_color FOREIGN KEY (color_id) REFERENCES colores (id);



INSERT INTO productos (categoria_id, nombre , descripcion, descripcion_corta, precio, stock, oferta, fecha, imagen, talla_id, color_id)
VALUES
(1, 'Short Gym Bordado', 'Nuestro Short Gym Bordado es la elección perfecta para los hombres que buscan un short cómodo y con estilo para el gimnasio o para cualquier ocasión casual. Hecho de algodón de alta calidad con rayas laterales de colores y bordado lateral, este short cuenta con tecnología Push-Up delantera y trasera que te brinda una mayor comodidad y soporte. Fresco, cómodo y fácil de usar, es perfecto para el gym, festivales, estar en casa, ir a la playa o a la piscina.', 'Short de algodón con rayas laterales de colores y bordado lateral, con tecnología Pucs-Up en la parte delantera y trasera. Fresco, cómodo y fácil de usar.', 30.00, 10, '15€', '2023-01-15', '', 1, 1, TRUE),
(4, 'Collar Natural Hematita', 'Hematita negra ; Esta piedra natural ofrece grandes propiedades, empezando por la disipación de la negatividad. La piedra hematita disipa las malas energías y protege la envoltura del cuerpo rearmonizando la paz interior. El trabajo de la hematita se hace esencialmente en los chakras sagrados y de la raíz. Esta collar tiene una gancho para unirse. El tamaño y el ajuste pueden variar ligeramente debido al tamaño de las cuentas individuales. Cada cuenta es piedra real y natural.','Collar de hematita negra con gancho para unirse. Piedra natural que protege y disipa negatividad, ideal para trabajar chakras sagrados y de raíz. Cuentas son piedra real y natural.', 40.00, 12, '20€', '2023-02-15', '', 1, 1);

INSERT INTO productos (categoria_id, nombre , descripcion, descripcion_corta, precio, stock, oferta, fecha, imagen, talla_id, color_id)
(1, 'Short Gym Bordado', 'Nuestro Short Gym Bordado es la elección perfecta para los hombres que buscan un short cómodo y con estilo para el gimnasio o para cualquier ocasión casual. Hecho de algodón de alta calidad con rayas laterales de colores y bordado lateral, este short cuenta con tecnología Push-Up delantera y trasera que te brinda una mayor comodidad y soporte. Fresco, cómodo y fácil de usar, es perfecto para el gym, festivales, estar en casa, ir a la playa o a la piscina.', 'Short de algodón con rayas laterales de colores y bordado lateral, con tecnología Pucs-Up en la parte delantera y trasera. Fresco, cómodo y fácil de usar.', 30.00, 10, '15€', '2023-01-15', '', 1, 1),
(4, 'Collar Natural Hematita', 'Hematita negra ; Esta piedra natural ofrece grandes propiedades, empezando por la disipación de la negatividad. La piedra hematita disipa las malas energías y protege la envoltura del cuerpo rearmonizando la paz interior. El trabajo de la hematita se hace esencialmente en los chakras sagrados y de la raíz. Esta collar tiene una gancho para unirse. El tamaño y el ajuste pueden variar ligeramente debido al tamaño de las cuentas individuales. Cada cuenta es piedra real y natural.','Collar de hematita negra con gancho para unirse. Piedra natural que protege y disipa negatividad, ideal para trabajar chakras sagrados y de raíz. Cuentas son piedra real y natural.', 40.00, 12, '20€', '2023-02-15', '', 1, 1,NULL);

INSERT INTO productos (categoria_id, nombre , descripcion, descripcion_corta, precio, stock, oferta, fecha, imagen, talla_id, color_id)
VALUES
(1, 'Camiseta Tirantes Gym', 'Esta camiseta de tirantes adecuada para el GYM lleva rotos en la parte lateral del frente para brindar mejor transpiración a la hora de ejercitarse, lleva en la parte trasera una línea vertical agregando estilo a todos tus deportes favoritos. Con Tejido de punto 95% Algodón y 5% elastano brinda una “Secado rápido y Transpirable” en todo momento. ', 'Camiseta tirantes con rotos laterales y línea vertical en la parte trasera. Hecha de 95% algodón y 5% elastano, secado rápido y transpirable.', 25.00, 10, '15€', '2023-01-15', '', 1, 1),
(10010, 3,'Pantalón Vaquero Slim', 'Este pantalón corto de mezclilla 100% algodón de alta calidad está hecho a la perfección para hombres que buscan comodidad y estilo. slim fit y tecnología Push-Up.', 'Pantalón corto de mezclilla 100% algodón de alta calidad para hombres. Diseño slim fit y tecnología Push-Up para mayor comodidad y estilo.', 40.00, 10, '20€', '2023-01-15', '', 1, 1),
(10011, 1, 'Camiseta Tirantes Bordado', 'Enciende la noche con nuestra camiseta de tirantes con bordado que alumbra en la oscuridad. Disponible en una gama de colores vivos y múltiples diseños divertidos como "Flamingo", "Piña", "Tucán" y "Cactus", esta cómoda y versátil camiseta garantiza llamar la atención donde quiera que vayas. Además, su tecnología reflectiva en el sol se recarga con los rayos UV para generar un brillo luminoso que hará que te destaques en cualquier lugar.', 'Camiseta de tirantes con bordado que alumbra en la oscuridad y tecnología reflectiva en el sol. Disponible en múltiples diseños divertidos.', 25.00, 10, '15€', '2023-01-15', '', 1, 1);

/* 

-- Crear tabla de colores
CREATE TABLE colores (
id int(255) auto_increment not null,
nombre varchar(50) not null,
CONSTRAINT pk_colores PRIMARY KEY (id)
) ENGINE=InnoDB;

-- Agregar algunos colores a la tabla
INSERT INTO colores (nombre) VALUES ('Rojo'), ('Azul'), ('Verde'), ('Negro');

CREATE TABLE tallas (
id int(255) auto_increment not null,
nombre varchar(50) not null,
CONSTRAINT pk_tallas PRIMARY KEY (id)
) ENGINE=InnoDB;

-- Agregar columnas para tallas y colores a la tabla de productos
ALTER TABLE productos ADD COLUMN talla_id int(255) not null;
ALTER TABLE productos ADD COLUMN color_id int(255) not null;

-- Agregar claves foráneas para vincular las tablas de tallas y colores a la tabla de productos
ALTER TABLE productos ADD CONSTRAINT fk_producto_talla FOREIGN KEY (talla_id) REFERENCES tallas (id);
ALTER TABLE productos ADD CONSTRAINT fk_producto_color FOREIGN KEY (color_id) REFERENCES colores (id); */