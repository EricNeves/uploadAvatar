create database if not exists upload;

use upload;

create table if not exists avatar (
  id int unsigned not null auto_increment,
  avatar longblob not null,
  img_type varchar(12),
  primary key (id)
);
