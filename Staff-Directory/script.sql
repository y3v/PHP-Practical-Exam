create database staff_master;

use staff_master;

create table staff(
id int AUTO_INCREMENT not null,
firstname varchar(70) not null,
lastname varchar(70) not null,
address varchar(150) not null,
salary int not null,
branch varchar(70) not null,
property varchar(70) null,
description varchar(200) null,
phone varchar(12) not null,
PRIMARY KEY (id)
);

insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Yev","Kantorovich","Rue Saint Jacques Montreal QC",70000,"ISI", "Toronto", "Best Developer ever :) Watch out Zuckerberg", "4168441291");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Olivier","Lepage","Repetigny QC",69000,"ISI", "Montreal", "Amazing Developer", "5146432345");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Blanca","Leyva","West Island Montreal QC",40000,"ISI", "Mexico", "Web Designer", "5143456344");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Fake","Faker","Rue Saint Marc Montreal QC",50000,"Laval", "Montreal", "The fakest profile ever made in this company", "5438441291");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("John","Doe","Rue Saint Laurent Montreal QC",100000,"Laval", "Toronto", "The Boss", "4161234567");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Jane","Doe","Rue Saint Laurent Montreal QC",80000,"Laval", "Toronto", "The Boss's Wife", "4161234569");
insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
 values("Auston","Matthews","Toronto ON",950000,"Maple Leafs", "Toronto", "Best Player on the Maple Leafs", "4168765432");

select * from staff;
