<!doctype html>
	<html lang="no">
	<html dir="ltf">

 	<head>
		<meta charset="utf-8">
		<title>IM Hjemmeside</title>
		<link rel="icon" type="image/x-icon" href="img/imlogotrans.png">
		<link rel="stylesheet" type="text/css" href="css/global.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="UTF-8">
		<meta name="description" content="informasjonsteknologi og medieproduskjon">
		<meta name="keywords" content="IKT, informasjonsteknologi, informasjonsteknologi og medieproduskjon, videregående, Kristiansund, ksu">

	</head>
	<body>

	<?php
	include_once 'header.php';
	?>


			<div class="breadcrumbdiv">
				<div class="containerbread">
					<ul class="breadcrumbs">
						<li class="breadcrumbs__item"> <a href="index.php" class="breadcrumbs__link">Hjem</a></li>
						<li class="breadcrumbs__item"> <span class="breadcrumbs__link breadcrumbs__link--active">Utdanningstilbud</span></li>
					</ul>
				</div>
			</div>
	<?php
	include_once 'hamburger.php';
	?>



	<div class="wrapper">
		<div class="wrapper__studie">
		<h3 class="article__h3">Vg1 Informasjonsteknologi og medieproduksjon</h3></a>
		<div class="studie__buttondiv"><a href="vg1info.php"><button class="studiebutton">Fag</button></a><a href="vg1utstyr.php"><button class="studiebutton">Utstyr</button></a><a href="vg1larere.php"><button class="studiebutton">Lærere</button></a></div>
		<h3 class="article__h3">Vg2 Informasjonsteknologi</h3></a>
		<div class="studie__buttondiv"><a href="vg2info.php"><button class="studiebutton">Fag</button></a><a href="vg2utstyr.php"><button class="studiebutton">Utstyr</button></a><a href="vg2larere.php"><button class="studiebutton">Lærere</button></a></div>
		</div>
	</div>
	</body>
	
	<?php
	include_once 'footer.php';
	?>
			<button id="topBtn">Tilbake til topp</button>
	  <!-- Scripts -->
	  	 
	  <script src="js/script.js"></script>
	  <script src="js/topButton.js"></script>
	</html>