create database school;

use school;

create table major (
	id int auto_increment,
	title varchar(100) not null,
	primary key (id)
);

create table student (
	id int auto_increment,
	name varchar(30) not null,
	family varchar(50) not null,
	father varchar(30) not null,
	major int,
	city varchar(30),
	birth_year varchar(4),
	primary key (id)
);

create table course (
	id int auto_increment,
	title varchar(100) not null,
	term varchar(5) not null,
	primary key (id)
);

create table grade (
	id int auto_increment,
	s_id int not null,
	c_id int not null,
	grade int not null,
	primary key (id),
	foreign key (s_id) references student(id),
	foreign key (c_id) references course(id)
);

insert into major (title) values ('computer');
insert into major (title) values ('content');
insert into major (title) values ('account');
insert into major (title) values ('mechanic');

insert into course (title, term) values ('php & mysql', '99-00');
insert into course (title, term) values ('math', '99-00');
insert into course (title, term) values ('history', '99-00');
insert into course (title, term) values ('wordpress', '99-00');

insert into student (name, family, father, major, city, birth_year) values ('Ali', 'Ahmadi', 'Abbas', 1, 'Tehran', '1394');
insert into student (name, family, father, major, city, birth_year) values ('Davood', 'Babaei', 'Habib', 1, 'Karaj', '1393');
insert into student (name, family, father, major, city, birth_year) values ('Sina', 'Movadat', 'Rahim', 2, 'Qom', '1392');
insert into student (name, family, father, major, city, birth_year) values ('Arshan', 'Saeedi', 'Dana', 3, 'Tehran', '1394');

insert into grade (s_id, c_id, grade) values (1, 1, 20);
insert into grade (s_id, c_id, grade) values (1, 4, 17);
insert into grade (s_id, c_id, grade) values (3, 3, 10);