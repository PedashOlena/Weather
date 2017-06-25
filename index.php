<!-- Site tamplate Wether -->

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru" class="no-js"> <!--<![endif]-->

<!-- HEAD -->

<head>

<!-- DESCRIPTION -->

	<meta charset="utf-8" />
	<title>Weather</title>
	<meta name="description" content="On this site you can find out the weather in your city">

<!-- FAVICON -->

	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="theme-color" content="#ffffff">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- ADD STYLE CSS -->

	<link rel="stylesheet" href="libs/reset/reset.css" />
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />
</head>

<!-- BODY -->

<body>

<!-- NAVIGANION -->

	<nav class="container l-grid clearfix">
		<div class="row l-grid__item clearfix">
			<div class="col-xs-12 col-sm-4 col-md-4 l-grid__item">
			  		<h1 class="h1__logo">
			  			<a href="#">Weather</a><span class="h1__logo--navColor">Info</span>
			  		</h1>
		  	</div>
			<div class="col-xs-12 col-sm-8 col-md-8 l-grid__item nopadding">
				<ul class="topnav" id="myTopnav">
					<li><a href="#" class="topnav__item is--active">Weather</a></li>
					<li><a href="#" class="topnav__item">News</a></li>
					<li><a href="#" class="topnav__item">About</a></li>
					<li><a href="#" class="topnav__item">Contact us</a></li>
					<li class="topnav__js-drop-down-menu-toggle"><a href="javascript:void(0);" style="font-size: 15px;" onclick="myFunction()">&#9776;</a></li>
				</ul>
			</div>	
		</div>
	</nav>
	<?php
			$key = '6f3cc1ed955f45bcdf4aa295f7a8d928';
			//$file = file_get_contents('http://api.openweathermap.org/data/2.5/find?q=London&units=metric&appid='.$key);
			$file = file_get_contents('json/city.list.json');
			$filem = json_decode($file, true);
			if (! is_array($filem)) die ('Json convert error');			
			foreach($filem as $number => $massiv){
			foreach($massiv  as  $inner_key => $value)
			{
				if ($inner_key =='name'){
			     	echo $value;
			     	echo '</br>';
			     	}
			     else if ($inner_key =='country') {
			     	echo $value;
			     	echo '</br>';
			} 

			}
			}
?>

<!-- SEARCH -->

	<div class="container-fluid l-grid__search--max clearfix">
		<div class="container l-grid__search clerfix">	
			<div class="row l-grid_search clearfix">
				<div class="col-xs-12 col-sm-12 col-md-6 l-grid__item nopadding">
					<form id="search" action="search.php" method="CET" accept-charset="utf-8" class="c-formsearch">
						<input type="text" value="search city" name="s" class="c-formsearch__input--min">
					</form>			
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 l-grid__item@media">
					<div class="c-location">
						<a href="#" class="c-location__item--circle --hidden">+</a>
						<div class="c-location__item">
							<h2 class="c-location__title"><a href="#">ADD <wbr>location</a></h2>
							<p class="c-location__text">Did you know<wbr> you can add<wbr> your<wbr> favorit<wbr> location?</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- VIDEO -->

<div class="container l-grid__video">
	<div class="row l-grid__video">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 l-grid__video">
			<div class="video__item--discription">
				<h4><a href="#">10 Things about this city</a></h4>
				<p><a href="#">The one constant thing in our life is change. We cannot avoid it and the more we resist change the tougher our life becomes. I know this because I was very skilled at deflecting change in life.</a></p>
			</div>			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 l-grid__video">
			<div class="c-video">
				<a href="#" class="c-video__item--link"></a>					
			</div>	
		</div>			
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 l-grid__video">
			<div class="c-video">
				<a href="#" class="c-video__item--link"></a>					
			</div>			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 l-grid__video">
			<div class="c-video">
				<a href="#" class="c-video__item--link"></a>					
			</div>						
		</div>
	</div>
</div>		
	

<!-- ADD SCRIPTS-->

<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	

	<script src="libs/jquery/jquery-1.11.2.min.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/style.js"></script>
</body>

</html>
