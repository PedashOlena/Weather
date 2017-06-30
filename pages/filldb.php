<?
include_once('functions.php');
$pdo=connect();			
			$file = file_get_contents('../json/city.list.json');
			$filem = json_decode($file, true);
			if (! is_array($filem)) die ('Json convert error');
			//var_dump($filem[0]);		
			foreach($filem as $number => $massiv)				
				{						
				$sql="insert into `weathers` (d_id, name, country, lon, lat) values (:id, :name, :country, :lon, :lat)";
 				$sth=$pdo->prepare($sql);
 				$sth->bindValue(':id', $massiv['id']);
 				$sth->bindValue(':name', $massiv['name']);		
				$sth->bindValue(':country', $massiv['country']);
				$sth->bindValue(':lon', $massiv['coord']['lon']);      
                $sth->bindValue(':lat', $massiv['coord']['lat']);
                $sth->execute();
                }		
											
?>