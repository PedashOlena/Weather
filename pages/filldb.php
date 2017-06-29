<?
include_once('functions.php');
$pdo=connect();
			
			$file = file_get_contents('../json/city.list.json');
			$filem = json_decode($file, true);
			if (! is_array($filem)) die ('Json convert error');			
			foreach($filem as $number => $massiv)
				//var_dump($massiv);
				{						
				$sql="insert into `weathers` (d_id, name, country, lon, lat) values (:id, :name, :country, :lon, :lat)";
 				$sth=$pdo->prepare($sql);
 				$sth->bindValue(':id', $massiv['id']);
 				$sth->bindValue(':name', $massiv['name']);		
				$sth->bindValue(':country', $massiv['country']);
				$coord = $massiv['coord'];
				//var_dump($coord);
				//$coord_1 = $massiv['coord']['lat'];
				
				foreach($massiv as $k => $v)
										
					
				{
					if($k = 'coord'){
					foreach($massiv as $k)
					$sth->bindValue(':lon', $v['lon']);
					} elseif (condition) {
						# code...
					} $sth->bindValue(':lat', $v['lon']);	
				}

				//for($i = 0, $size = count($coord); $i < $)
				//var_dump($coord); 
				//foreach($massiv as $k)
				//{
					//$sth->bindValue(':lon', $coord);
					//$sth->bindValue(':lat', $coord_1);	
				//}
				/*foreach ($coord as $key)
					var_dump ($coord['on']);
					{
					$sth->bindValue(':lon', $value['lon']);
					$sth->bindValue(':lat', $value['lat']);	
					}*/				
				
				}
				//$sth->execute();							
?>