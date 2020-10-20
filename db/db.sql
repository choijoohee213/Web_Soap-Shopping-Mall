CREATE DATABASE treesoap;
USE treesoap;
CREATE TABLE member(
custom_id INT  NOT NULL AUTO_INCREMENT ,
username VARCHAR(20) NOT NULL,
userid VARCHAR(20) NOT NULL,
userpw VARCHAR(30) NOT NULL,
userbirth DATE NOT NULL,
tel VARCHAR(13) NOT NULL,
email VARCHAR(30) NOT NULL,
userpoint INT  DEFAULT '0' NOT NULL ,
useraddr VARCHAR(100) NOT NULL,
useraddr_detail VARCHAR(30) NOT NULL,
useraddr_num VARCHAR(10) NOT NULL,
PRIMARY KEY(custom_id)
);

CREATE TABLE product(
prd_id int(8) NOT NULL AUTO_INCREMENT ,
prd_name VARCHAR(20) NOT NULL,
prd_price INT NOT NULL,
prd_point INT NOT NULL,
prd_photo VARCHAR(100),
PRIMARY KEY(prd_id)   
);

CREATE TABLE board_ask(
num INT(11) NOT NULL AUTO_INCREMENT,
ask_date DATETIME NOT NULL,
ask_title VARCHAR(30) NOT NULL,
ask_content TEXT NOT NULL,
ask_yorn VARCHAR(1) DEFAULT '0' NOT NULL,
answer_title VARCHAR(30),
answer_content TEXT,
ask_type VARCHAR(50),
custom_id INT,
prd_id INT(8),
ask_photo VARCHAR(100),
PRIMARY KEY(num),
FOREIGN KEY(custom_id) REFERENCES member(custom_id), 
FOREIGN KEY(prd_id) REFERENCES product(prd_id)
);


CREATE table board_review(
id int(11) NOT NULL auto_increment,
name varchar(20) NOT NULL,
star VARCHAR(5) NOT NULL ,
review_title varchar(30) NOT NULL,
review_content TEXT NOT NULL ,
wdate DATETIME NOT NULL ,
prd_id INT(8),
custom_id INT,
review_photo VARCHAR(100),
FOREIGN KEY(custom_id) REFERENCES member(custom_id),
FOREIGN KEY(prd_id) REFERENCES product(prd_id),
PRIMARY KEY(id)
);

select *from board_review order by id desc limit 10,10;


CREATE TABLE cart(
id int(11) NOT NULL AUTO_INCREMENT,
prd_num INT NOT NULL,
wdate DATETIME NOT NULL ,
prd_id INT(8),
custom_id INT,
total_price VARCHAR(10000) NOT NULL,
FOREIGN KEY(custom_id) REFERENCES member(custom_id),
FOREIGN KEY(prd_id) REFERENCES product(prd_id),
PRIMARY KEY(id)
);


INSERT INTO product(prd_name,prd_price,prd_point,prd_photo) VALUES ('유칼립투스 비누',9000,90,'/treesoap/img/blueclean.png');
INSERT INTO product(prd_name,prd_price,prd_point,prd_photo) VALUES ('올리브 비누',12000,120,'/treesoap/img/greenclean.png');
INSERT INTO product(prd_name,prd_price,prd_point,prd_photo) VALUES ('라벤더 비누',7000,70,'/treesoap/img/pinkclean.png');
INSERT INTO product(prd_name,prd_price,prd_point,prd_photo) VALUES ('해당 사항 없음',0,0,'/treesoap/img/logo.png');

	
