drop database if exists personalwebsite;
create database personalwebsite;
use personalwebsite;
create table contactpengunjung(
nama varchar(100) not null,
email varchar (100) not null,
phone varchar (100) not null,
messages varchar(100) not null
); 
select * from contactpengunjung;