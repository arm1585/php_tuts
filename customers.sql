create database customers;

use customers;

create table customer (
	cust_id int auto_increment,
	cust_name varchar(30) not null,
	cust_family varchar(35) not null,
	city varchar(15) not null,
	primary key (cust_id)
);

create table product (
	prd_id int auto_increment,
	prd_name varchar(100) not null,
	prd_price int not null,
	primary key (prd_id)
);

create table orders (
	order_id int auto_increment,
	cust_id int not null,
	prd_id int not null,
	order_count int,
	primary key (order_id),
	foreign key (cust_id) references customer(cust_id),
	foreign key (prd_id) references product(prd_id)
);

insert into customer (cust_name, cust_family, city) values ('Majid', 'Babei', 'Tehran');
insert into customer (cust_name, cust_family, city) values ('Davood', 'Rjaei', 'Kish');
insert into customer (cust_name, cust_family, city) values ('Ali', 'Ahmadi', 'Tehran');
insert into customer (cust_name, cust_family, city) values ('Babak', 'Rezaee', 'Shiraz');
insert into customer (cust_name, cust_family, city) values ('Masood', 'Avaei', 'Tabirz');
insert into customer (cust_name, cust_family, city) values ('Saeed', 'Nezami', 'Tehran');

insert into product (prd_name, prd_price) values ('CPU Intel Core i9', 11000);
insert into product (prd_name, prd_price) values ('SSD Samsung', 1000);
insert into product (prd_name, prd_price) values ('VGA GTX 1050', 15000);
insert into product (prd_name, prd_price) values ('Keyboatd Keychron', 1700);
insert into product (prd_name, prd_price) values ('CPU AMD 5700x', 15000);





