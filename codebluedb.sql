SET default_storage_engine=innodb;


create database if not exists code_blue CHARACTER SET utf8 COLLATE utf8_general_ci;

use code_blue;

CREATE table users
(
	id int PRIMARY key AUTO_INCREMENT ,
    user_name varchar(50) not null unique,
	password varchar(255) not null,
    role enum('user','admin','pendding') DEFAULT 'pendding'
);


create table announcment
(
    id int PRIMARY key AUTO_INCREMENT,
	content varchar(255) NOT NULL,
	announ_date datetime default CURRENT_TIMESTAMP
);

create table announcment_users
(
    id int primary key AUTO_INCREMENT,
	announ_id int not null,
	user_id int not null,
	is_opened bit not null default false,
	CONSTRAINT FOREIGN KEY(announ_id) REFERENCES announcment(id),
	CONSTRAINT FOREIGN KEY(user_id) REFERENCES users(id)

);

----------------------------------------------------------

DELIMITER $$
CREATE FUNCTION check_login (un varchar(52),pw varchar(52))
RETURNS INTEGER
BEGIN
    RETURN EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'admin');
END$$

CREATE FUNCTION check_user (un varchar(52),pw varchar(52))
RETURNS INTEGER
BEGIN
    RETURN EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'user');
END$$

CREATE view  pendding_items 
as
select p.product_id, p.product_name, p.price, concat(c.cat_name,'--',s.brand_name)
from products p join  brands s on (p.brand_id=s.brand_id)
join categories c on(p.cat_id=c.cat_id)
where p.product_status='pendding'$$
 
 CREATE PROCEDURE `user_info`(in username varchar(50))
BEGIN
select full_name ,role,img from users 
where user_name =username;
END$$

DELIMITER $$
CREATE FUNCTION `check_login`(un varchar(52),pw varchar(52)) RETURNS int(11)
BEGIN
    if EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'admin')
		then  return 1 ;
	elseif EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'user')
		then return 2;
	elseif EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'pendding')
		then return 3;
	else return 0;
    end if;
END