#Creates the database
create database mydatabase;

#Specify which database to use
use mydatabase;

#CRUD OPERATIONS ON DATABASE TABLE
#This how we create the table(CREATE)
create table user(
	id int auto_increment primary key,
    username varchar(50) not null,
    email varchar(100) not null
);

#Adding the data to the table 'user'
insert into user (username,email) 
values("ram hari","ram@gmail.com"),
("gita hari","gita@gmail.com");

#Shows all data in the table(READ)
select * from user;

#Disable safe update mode so that we can update in table
SET SQL_SAFE_UPDATES = 0;

#Update the data in user table(UPDATE)
Update user
set email="gitahari@gmail.com"
where username="gita hari";

#enable safe update mode 
SET SQL_SAFE_UPDATES = 1;

#Delete data(DELETE)
Delete from user
where username="ram hari";

#Shows all data in the table
select * from user;

#SQL DATATYPES
#Numeric Types
create table numeric_datatypes(
	id int auto_increment primary key,
    smaller_num smallint,
    large_num bigint,
    exact_num decimal(10,2),
    approximate_num float,
    double_num double
);

#String Types
create table string_types(
	id int auto_increment primary key,
    fixed_length char(10),
    variable_length varchar(50),
    large_text text,
    binary_data blob
);

#Data and Time Types
create table datatime_types(
	id int auto_increment primary key,
    date_column date,
    time_column time,
    datetime_column datetime,
    timestamp_column timestamp default current_timestamp
);

#ENUM and SET
create table other_types(
	id int auto_increment primary key,
    user_role enum('admin','user','guest'),
    skills set('python','javascript','sql')
);
