create database if not exists PHP_PROJECT;
USE PHP_PROJECT;
create table PRODUCT (
	id_product int primary key auto_increment,
    name_product varchar (50),
    type_product varchar (50),
    image varchar (200),
    sale float,
    like_product int
    );

insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (1, 'STRIPED BUFFALO SHIRT','Stupffed animal','image/gauTrauAoKe1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (2, 'BUFFALO NECK PILLOWS','Stupffed animal','image/gauCoTrau.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (3, 'Dinosaur teddy bear','Stupffed animal','image/khungLong1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (4, 'TEDDY BEAR CREAM CAKE','Teddy','image/gauTrauAoKe1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (5, 'STRIPED BUFFALO SHIRT','Stupffed animal','image/gauTrauAoKe1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (6, 'STRIPED BUFFALO SHIRT','Stupffed animal','image/gauTrauAoKe1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (7, 'STRIPED BUFFALO SHIRT','Stupffed animal','image/gauTrauAoKe1.jpg',10,1);
insert into PRODUCT (id_product,name_product,type_product,image,sale,like_product ) value (8, 'STRIPED BUFFALO SHIRT','Stupffed animal','image/gauTrauAoKe1.jpg',10,1);
    
create table SIZE (
	id_size int primary key auto_increment,
	name_size varchar(15)
);
create table PRODUCT_SIZE (
	id_product_size int primary key auto_increment,
	id_product int ,
    id_size int,
    price double,
    description varchar(30),
    so_luong int,
    foreign key (id_product) references PRODUCT,
    foreign key (id_size) references SIZE
    );
create table USERS (
	id_user int primary key auto_increment,
    user_name varchar (20),
    full_name varchar (40),
    passwords varchar(20),
    email varchar (30),
    phone int ,
    adress varchar (50),
    balence double
    );
create table ADMINS (
	login_name varchar(30),
    passwords varchar(30),
    email varchar (100)
    );
    
create table CARTS (
	id_cart int primary key auto_increment,
	id_user int,
    id_product_size int ,
    quantity int ,
    total double,
    foreign key (id_user) references USERS,
    foreign key(id_product_size) references PRODUCT_SIZE
    )
    