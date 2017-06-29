<?
include_once('functions.php');
$pdo=connect();

$weather='create table Weathers
	(
		id int not null auto_increment primary key,
		d_id int not null unique,
		name varchar(128)not null,
		country varchar(128)not null,
		lon float,
		lat float
	)default charset="utf8"';

$pdo->exec($weather);