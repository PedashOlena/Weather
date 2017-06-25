<?php 
include_once('functions.php');
connect();
$countries='create table if not exists Countries(
	id int not null auto_increment primary key, 
	country varchar(64) unique
	)default charset="utf8"';

mysql_query($countries);

$err=mysql_errno();
if ($err)
{
	echo 'Error:'.$err.'<br/>';
}

$cities='create table if not exists Cities(
	id int not null auto_increment primary key, 
	city varchar(64), 
	countryid int, 
	foreign key(countryid) references countries(id) 
	on delete cascade,
	ucity varchar(128),
	unique index ucity(city, countryid))default charset="utf8"';

mysql_query($cities);

$err=mysql_errno();
if ($err)
{
	echo 'Error:'.$err.'<br/>';
}

?>