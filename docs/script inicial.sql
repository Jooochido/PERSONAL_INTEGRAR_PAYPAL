CREATE TABLE tm_categoria (
  cat_id INT PRIMARY KEY,
  cat_nom VARCHAR(50),
  est int
);

INSERT INTO tm_categoria (cat_id, cat_nom, est)
VALUES
  (1, 'Electrónicos', 1),
  (2, 'Ropa', 1),
  (3, 'Hogar', 1),
  (4, 'Alimentos', 1),
  (5, 'Belleza', 1);

CREATE TABLE tm_producto (
  prod_id INT PRIMARY KEY,
  cat_id INT,
  prod_nom VARCHAR(50),
  prod_precio DECIMAL(10,2),
  prod_moneda VARCHAR(50),
  prod_img VARCHAR(200),
  est int
);

INSERT INTO tm_producto (prod_id, cat_id, prod_nom, prod_precio, prod_img, est)
VALUES
  (1, 1, 'Televisor LED 50', 500, 'USD', 'https://www.example.com/img/tv-50-led.jpg', 1),
  (2, 1, 'Tablet Android 10', 100, 'USD', 'https://www.example.com/img/tablet-10-android.jpg', 1),
  (3, 2, 'Polo Manga Corta', 20, 'USD', 'https://www.example.com/img/polo-mc.jpg', 1),
  (4, 2, 'Jeans Talla 34x32', 40, 'USD', 'https://www.example.com/img/jeans-34x32.jpg', 1),
  (5, 3, 'Juego de Cubiertos 16 Pzas.', 20, 'USD', 'https://www.example.com/img/cubiertos-16p.jpg',1),
  (6, 3, 'Juego de Sábanas King Size', 70, 'USD', 'https://www.example.com/img/sabanas-ks.jpg', 1),
  (7, 4, 'Arroz Blanco 2 Kg', 9, 'USD', 'https://www.example.com/img/arroz-2kg.jpg', 1),
  (8, 4, 'Leche Descremada 1 Lt', 10, 'USD', 'https://www.example.com/img/leche-descremada-1lt.jpg', 1),
  (9, 5, 'Lápiz Labial Rojo', 90, 'USD', 'https://www.example.com/img/lapiz-labial-rojo.jpg', 1),
  (10, 5, 'Crema Facial Antiarrugas', 20, 'USD', 'https://www.example.com/img/crema-facial-antiarrugas.jpg', 1),
  (11, 1, 'Equipo de Sonido 5.1', 200, 'USD', 'https://www.example.com/img/eq-sonido-5.1.jpg', 1),
  (12, 1, 'Smartwatch con GPS', 100, 'USD', 'https://www.example.com/img/smartwatch-gps.jpg', 1),
  (13, 2, 'Vestido Negro Talla M', 50, 'USD', 'https://www.example.com/img/vestido-negro-m.jpg', 1),
  (14, 2, 'Zapatillas Deportivas Talla 9', 60, 'USD', 'https://www.example.com/img/zapatillas-dep-9.jpg', 1),
  (15, 3, 'Juego de Toallas 6 Pzas.', 20, 'USD', 'https://www.example.com/img/toallas-6p.jpg', 1);


CREATE TABLE tm_venta (
  vent_id INT AUTO_INCREMENT PRIMARY KEY,
  vent_nom VARCHAR(50),
  vent_ape VARCHAR(50),
  vent_telf VARCHAR(50),
  vent_email VARCHAR(50),
  vent_pais VARCHAR(50),
  vent_dire VARCHAR(50),
  vent_depa VARCHAR(50),
  vent_codpostal VARCHAR(50),
  paymentId VARCHAR(150),
  token VARCHAR(150),
  PayerID VARCHAR(150),
  json_data LONGTEXT,
  vent_total NUMERIC(8,2)
);

CREATE TABLE tm_detalle (
  det_id INT AUTO_INCREMENT PRIMARY KEY,
  vent_id INT,
  det_cant INT,
  prod_id INT,
  cat_id INT,
  prod_nom VARCHAR(150),
  prod_precio NUMERIC(8,2),
  det_total NUMERIC(8,2)
);