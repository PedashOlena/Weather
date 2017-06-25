<?php
function connect(
	       $host='localhost',
	       $user='root',
	       $pass='123456',
	       $dbname='weather')
{
         $link=mysql_connect($host,$user,$pass) or die('Connection Error');
         mysql_select_db($dbname) or die('DB not Selected');
         mysql_query('Set names "utf8"');
}
?>