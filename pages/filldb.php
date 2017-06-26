<?php
		include_once('functions.php');
			connect();
			$key = '6f3cc1ed955f45bcdf4aa295f7a8d928';
			//$file = file_get_contents('http://api.openweathermap.org/data/2.5/find?q=London&units=metric&appid='.$key);
			$file = file_get_contents('../json/city.list.json');
			$filem = json_decode($file, true);
			if (! is_array($filem)) die ('Json convert error');			
			/*foreach($filem as $number => $massiv){
			foreach($massiv  as  $inner_key => $value)
			{
				if ($inner_key =='name'){
			     	$name = $value;
			     	$ins='insert into Cities (city) values ("'.$name.'")';
       				mysql_query($ins);
        			$err=mysql_errno();
        			if ($err)
			           {
			             echo 'Error code:'.$err.'<br>';
			             exit();
			           }
			     	}
			}					
			}*/
			foreach($filem as $number => $massiv){
			foreach($massiv  as  $inner_key => $value)
			{
				if ($inner_key =='country'){
			     	$country = $value;
			     	$ins='insert into Cities (country) values ("'.$country.'")';
       				mysql_query($ins);
        			$err=mysql_errno();
        			if ($err)
			           {
			             echo 'Error code:'.$err.'<br>';
			             exit();
			           }
			     	}
			}
					
			}
						
?>