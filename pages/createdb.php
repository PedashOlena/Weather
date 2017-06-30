<?
include_once('functions.php');
$pdo=connect();

$Weathers='create table Weathers(
id int not null auto_increment primary key,
d_id int not null unique,
name varchar(32),
country varchar(32),
lon decimel(10,6),
lat decimel(10,6),)default charset="utf8"';

$pdo->exec($role);