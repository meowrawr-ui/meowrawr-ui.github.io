CREATE DATABASE IF NOT EXISTS meowrawr_db CHARACTER SET utf8mb4;
USE meowrawr_db;

CREATE TABLE IF NOT EXISTS users (
	user_id int NOT NULL AUTO_INCREMENT,
	user_name varchar(255) NOT NULL,
	user_hashedpass varchar(255) NOT NULL,
	user_email varchar(255),
	user_country varchar(255),
	user_currency varchar(255),
	PRIMARY KEY (user_id)
);

CREATE USER IF NOT EXISTS 'meowrawr_db-users_r'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON meowrawr_db.users TO 'meowrawr_db-users_r'@'localhost' WITH GRANT OPTION;

CREATE USER IF NOT EXISTS 'meowrawr_db-users_w'@'localhost' IDENTIFIED BY 'password';
GRANT INSERT ON meowrawr_db.users TO 'meowrawr_db-users_w'@'localhost' WITH GRANT OPTION;

CREATE TABLE IF NOT EXISTS salts (
	user_id int NOT NULL AUTO_INCREMENT,
	pass_salt varchar(22) NOT NULL,
	PRIMARY KEY (user_id),
    CONSTRAINT fksaltsuser_id FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE USER IF NOT EXISTS 'meowrawr_db-salts_r'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON meowrawr_db.salts TO 'meowrawr_db-salts_r'@'localhost' WITH GRANT OPTION;

CREATE USER IF NOT EXISTS 'meowrawr_db-salts_w'@'localhost' IDENTIFIED BY 'password';
GRANT INSERT ON meowrawr_db.salts TO 'meowrawr_db-salts_w'@'localhost' WITH GRANT OPTION;

INSERT INTO users (user_name, user_hashedpass, user_email) VALUES ('meowrawr', '$2y$09$0bb2b173dd067635c5c94u/JhekHl3ou5ZhqpFtXKQzxV2qcuDxme', 'meowrawr-ui@proton.me');
INSERT INTO salts (pass_salt) VALUES ('0bb2b173dd067635c5c945');

CREATE TABLE IF NOT EXISTS producttypes (
	producttype_id int NOT NULL AUTO_INCREMENT,
	producttype_name varchar(255) NOT NULL,
	PRIMARY KEY (producttype_id)
);

INSERT INTO producttypes (producttype_name) VALUES ('Eyeshadow');
INSERT INTO producttypes (producttype_name) VALUES ('Eyeliner');


CREATE TABLE IF NOT EXISTS products (
	product_id int NOT NULL AUTO_INCREMENT,
	product_name varchar(255) NOT NULL,
	producttype_id int NOT NULL,
	product_price int NOT NULL,
	product_exp datetime,
	product_stock int,
	product_imgname varchar(255) NOT NULL,
	PRIMARY KEY (product_id),
	CONSTRAINT fkproductsproducttype_id FOREIGN KEY (producttype_id) REFERENCES producttypes(producttype_id)
);

INSERT INTO products (product_name, producttype_id, product_price, product_exp, product_stock, product_imgname) VALUES ('Profusion pastel eyeshadow palette', 1, 5000, STR_TO_DATE('2026/01/01','%Y/%m/%d'), 10, 'profusion_pastel_eyeshadow_palette.png');
INSERT INTO products (product_name, producttype_id, product_price, product_exp, product_stock, product_imgname) VALUES ('Love Liner Cinnamoroll liquid eyeliner', 2, 4000, STR_TO_DATE('2027/01/01','%Y/%m/%d'), 20, 'love_liner_cinnamoroll_liquid_eyeliner.jpg');

CREATE TABLE IF NOT EXISTS productunits (
	productunit_serial int NOT NULL AUTO_INCREMENT,
	product_id int NOT NULL,
	PRIMARY KEY (productunit_serial),
	CONSTRAINT fkproductunitsproduct_id FOREIGN KEY (product_id) REFERENCES products(product_id)
);



CREATE USER IF NOT EXISTS 'meowrawr_db-products_r'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON meowrawr_db.producttypes TO 'meowrawr_db-products_r'@'localhost' WITH GRANT OPTION;
GRANT SELECT ON meowrawr_db.products TO 'meowrawr_db-products_r'@'localhost' WITH GRANT OPTION;
GRANT SELECT ON meowrawr_db.productunits TO 'meowrawr_db-products_r'@'localhost' WITH GRANT OPTION;

CREATE USER IF NOT EXISTS 'meowrawr_db-products_w'@'localhost' IDENTIFIED BY 'password';
GRANT INSERT ON meowrawr_db.producttypes TO 'meowrawr_db-products_w'@'localhost' WITH GRANT OPTION;
GRANT INSERT ON meowrawr_db.products TO 'meowrawr_db-products_w'@'localhost' WITH GRANT OPTION;
GRANT INSERT ON meowrawr_db.productunits TO 'meowrawr_db-products_w'@'localhost' WITH GRANT OPTION;

CREATE TABLE IF NOT EXISTS orders (
	order_id int NOT NULL AUTO_INCREMENT,
	productunit_serial int NOT NULL,
	user_id int NOT NULL,
	order_trackingid varchar(255) NOT NULL,
	PRIMARY KEY (order_id),
	CONSTRAINT fkordersproductunit_serial FOREIGN KEY (productunit_serial) REFERENCES productunits(productunit_serial),
	CONSTRAINT fkordersuser_id FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE USER IF NOT EXISTS 'meowrawr_db-orders_r'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON meowrawr_db.orders TO 'meowrawr_db-orders_r'@'localhost' WITH GRANT OPTION;

CREATE USER IF NOT EXISTS 'meowrawr_db-orders_w'@'localhost' IDENTIFIED BY 'password';
GRANT INSERT ON meowrawr_db.orders TO 'meowrawr_db-orders_w'@'localhost' WITH GRANT OPTION;

CREATE TABLE IF NOT EXISTS userflags (
	user_id int NOT NULL AUTO_INCREMENT,
	pass_salt varchar(22) NOT NULL,
	PRIMARY KEY (user_id),
    CONSTRAINT fkuserflagsuser_id FOREIGN KEY (user_id) REFERENCES users(user_id)
);
/*
-- Uninstall
DROP DATABASE IF EXISTS meowrawr_db;
DROP USER IF EXISTS 'meowrawr_db-users_r'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-users_w'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-salts_r'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-salts_w'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-products_r'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-products_w'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-orders_r'@'localhost';
DROP USER IF EXISTS 'meowrawr_db-orders_w'@'localhost';
FLUSH PRIVILEGES;
*/
