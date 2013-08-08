create database spdb1;

create table emp(
emp_id int unsigned primary key auto_increment,
emp_name varchar(64) unique not null,
emp_pwd char(32) not null
)

create table message(
message_id int unsigned primary key auto_increment,
sender varchar(64) not null,
getter varchar(64) not null,
sendtime datetime not null,
content varchar(200) not null
)

insert into message (sender,getter,sendtime,content) values("周星驰","张三丰",now(),"吃了吗");
insert into message (sender,getter,sendtime,content) values("林青霞","张三丰",now(),"吃撑了么");
insert into message (sender,getter,sendtime,content) values("林青霞","张三丰",now(),"hello3");
 