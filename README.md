# System
xampp

create database user
create table login(
UserID int(3) auto_increment primary key,
Name varchar(100),
Password varchar(100)
)

create table data(
UserID int(1) auto_increment primary key,
Name varchar(100),
IC varchar(100),
Education varchar(100),
Document varchar(100)
)
