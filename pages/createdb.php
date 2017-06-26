<?php 
include_once('functions.php');
connect();
$cities='create table if not exists Cities(
	id int not null auto_increment primary key, 
	city varchar(128), 
	country varchar(128), 
	lon double not null,
	lat double not null,
	)default charset="utf8"';

mysql_query($cities);

$err=mysql_errno();
if ($err)
{
	echo 'Error:'.$err.'<br/>';
}

?>

