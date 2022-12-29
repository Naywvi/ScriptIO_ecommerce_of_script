CREATE TABLE users(
id_user INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
first_name varchar(20) NOT NULL,
last_name varchar(20) NOT NULL,
username varchar(20) NOT NULL,
email varchar(40) NOT NULL,
phone_number INTEGER NOT NULL,
birthday date NOT NULL,
user_password varchar(40) NOT NULL,
user_role varchar(20) NOT NULL,
last_connexion date,
trust INTEGER, 
sale interger,
view interger,
lucky_phrase varchar(50),
picture text,
description text,
compagny text
);

-- CREATE TABLE address(
-- id_address INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
-- id_user INTEGER NOT NULL,
-- country varchar(20) NOT NULL,
-- address varchar(50) NOT NULL,
-- city varchar(20) NOT NULL,
-- postal_code INTEGER NOT NULL,
-- FOREIGN KEY (id_user) REFERENCES Users(id_user)
-- );

CREATE TABLE genre(
id_genre INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
name varchar(20) NOT NULL
);

CREATE TABLE product(
id_product INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_user INTEGER NOT NULL,
product_name varchar(50) NOT NULL,
id_genre INTEGER,
product_description TEXT,
installation_steps TEXT,
price Float,
product_image BLOB,
script BLOB NOT NULL,
stock INTEGER,
FOREIGN KEY (id_genre) REFERENCES Genre(id_genre)
);

CREATE TABLE command(
id_command INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_user INTEGER NOT NULL,
total float NOT NULL,
FOREIGN KEY (id_user) REFERENCES Users(id_user)
);

CREATE TABLE command_line(
id_command_line INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_command INTEGER NOT NULL,
id_product INTEGER NOT NULL,
FOREIGN KEY (id_command) REFERENCES Command(id_command),
FOREIGN KEY (id_product) REFERENCES Product(id_product)
);

CREATE TABLE cart(
id_cart INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_user INTEGER NOT NULL,
cart_date date NOT NULL,
total float NOT NULL,
FOREIGN KEY (id_user) REFERENCES Users(id_user)
);

CREATE TABLE cart_temp(
id_cart_temp INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_cart INTEGER NOT NULL,
id_product float NOT NULL,
FOREIGN KEY (id_cart) REFERENCES Cart(id_cart),
FOREIGN KEY (id_product) REFERENCES Product(id_product)
);

CREATE TABLE wishlist(
id_wishlist INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_user INTEGER NOT NULL,
id_product INTEGER NOT NULL,
FOREIGN KEY (id_user) REFERENCES Users(id_user),
FOREIGN KEY (id_product) REFERENCES Product(id_product)
);

CREATE TABLE payment(
id_payment INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
id_command INTEGER NOT NULL,
payment_date date NOT NULL,
payment_method varchar(20) NOT NULL,
FOREIGN KEY (id_command) REFERENCES Command(id_command)
);