create database school;

use school;

create table students (
	id int not null auto_increment,
	fname varchar(30) not null,
	lname varchar(30) not null,
	bdate varchar(4) not null,
	bplace varchar(20) not null,
	major varchar(20) not null default 'Computer',
	grade int not null,
	primary key (id)
);

insert into students (fname, lname, bdate, bplace, major, grade) values ('Ali', 'Ahmadi', '1393', 'Tehran', 'Computer', 20);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Saeed', 'Hamidi', '1392', 'Tehran', 'Computer', 17);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Reza', 'Raminfar', '1393', 'Karaj', 'Mechanic', 15);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Davood', 'Bahri', '1392', 'Tehran', 'Content', 18);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Amin', 'Abdi', '1391', 'Karaj', 'Mechanic', 20);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Ali', 'Salmani', '1393', 'Qom', 'Content', 18);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Kamran', 'Nazari', '1392', 'Tehran', 'Computer', 19);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Farbod', 'Alishah', '1393', 'Qom', 'Account', 14);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Habib', 'Amani', '1393', 'Tehran', 'Content', 20);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Mahbod', 'Karimi', '1391', 'Karaj', 'Content', 20);
insert into students (fname, lname, bdate, bplace, major, grade) values ('Ali', 'Sharifi', '1391', 'Semnan', 'Computer', 20);

select * from students;
