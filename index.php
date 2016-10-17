<?php
	$pageTitle = 'Aquacell - Homepage test';
	$pageDescription = 'Lightening homepage test.';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $pageDescription; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="css/style.min.css?v=1.0" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	
	<! -- Geo Location - http://www.geo-tag.de/generator/en.html-->
	<meta name="geo.region" content="GB" />
	<meta name="geo.placename" content="Cheltenham" />
	<meta name="geo.position" content="51.899386;-2.078253" />
	<meta name="ICBM" content="51.899386, -2.078253" />

	<!-- Facebook -->
	<meta property=”og:title” content=<?php echo $pageTitle; ?>>
	<meta property=”og:type” content=”website”>
	<meta property=”og:image” content=<?php echo "http://$_SERVER[HTTP_HOST]/social.png"; ?>>
	<meta property=”og:url” content=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>>
	<meta property=”og:description” content=<?php echo $pageDescription; ?>>
	
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content=<?php echo $pageTitle; ?>>
	<meta name="twitter:description" content=<?php echo $pageDescription; ?>>
	<meta name="twitter:image:src" content=<?php echo "http://$_SERVER[HTTP_HOST]/social.png"; ?>>	
	<meta name="twitter:url" content=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>>
</head>
<body>
	<img src="images/core-still.jpg" alt="core-still" id="core-still" class="background-images">
	<img src="images/core-still-lightening.jpg" alt="core-still-lightening" id="core-still-lightening" class="background-images">

	<header id="header">
		<div class="content-wrapper">
			<img src="images/aquacell-logo.svg" alt="Aquacell logo" id="main-logo" />
			<img src="images/menu.png" alt="menu" width="32" height="32" id="mobile-menu">
			<nav id="main-nav">
				<ul>
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="AquaCell Range">AquaCell Range</a></li>
					<li><a href="#" title="AquaCell Eco">AquaCell Eco</a></li>
					<li><a href="#" title="AquaCell Prime">AquaCell Prime</a></li>
					<li><a href="#" title="AquaCell Core">AquaCell Core</a></li>
					<li><a href="#" title="AquaCell Plus">AquaCell Plus</a></li>
					<li><a href="#" title="Guidance Notes">Guidance Notes</a></li>
					<li><a href="#" title="Contact">Contact</a></li>
					<li><a href="#" title="SUDS CPDs">SUDS CPDs</a></li>
				</ul>
			</nav>				
		</div>
	</header>
	<section id="main-content">
		<div class="content-wrapper">
			<img src="images/aquacell.png" alt="aquacell" id="aquacell-logo" >
			<h2>RAINS SUPREME</h2>
			<ul>
				<li><img src="images/icon-1.png" alt="icon-1" width="88" height="88"></li>
				<li><img src="images/icon-2.png" alt="icon-2" width="88" height="88"></li>
				<li><img src="images/icon-3.png" alt="icon-3" width="88" height="88"></li>
				<li><img src="images/icon-4.png" alt="icon-4" width="88" height="88"></li>
				<li><img src="images/icon-5.png" alt="icon-5" width="88" height="88"></li>
				<li><img src="images/icon-6.png" alt="icon-6" width="87" height="88"></li>
				<li><img src="images/icon-7.png" alt="icon-7" width="88" height="88"></li>
				<li><img src="images/icon-8.png" alt="icon-8" width="88" height="88"></li>
				<li><img src="images/icon-9.png" alt="icon-9" width="88" height="88"></li>
			</ul>
		</div>
	</section>
	<footer id="footer">
		
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script defer async type="text/javascript" src="js/scripts.min.js?v=1.0"></script>
</body>

</html>