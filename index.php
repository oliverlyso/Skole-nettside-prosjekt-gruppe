<!doctype html>
	<html lang="no">
	<html dir="ltf">

 	<head>
		<meta charset="utf-8">
		<title>IM Hjemmeside</title>
		<!-- Link to the icon used in the website tab -->
		<link rel="icon" type="image/x-icon" href="img/imlogotrans.png">
		<!-- Link to font library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Link to the global CSS stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/global.css">
		<!-- Link to metadata -->
		<meta name ="author" content ="Even Breik, Oliver Lysø og Fredrik Strømsholm">
		<meta name="description" content="Informasjonsteknologi og medieproduskjon">
		<meta name="keywords" content="IKT, informasjonsteknologi, informasjonsteknologi og medieproduskjon, videregående, Kristiansund, ksu">
	</head>
	<body>
		
	<!-- PHP include statement to add the header -->
	<?php
	include_once 'header.php';
	?>
		<!-- Breadcrumb navigation -->
		<div class="breadcrumbdiv">
			<div class="containerbread">
				<ul class="breadcrumbs">
					<li class="breadcrumbs__item"><span class="breadcrumbs__link breadcrumbs__link--active">Hjem</span></li>
				</ul>
			</div>
		</div>
	<?php
	include_once 'hamburger.php';
	?>

  		<!-- Contact Button -->
		<div class="headingcontent">
		<img alt="IM logo med tekst: Informasjonsteknologi og medieproduskjon" src="img/imtekstlogo.png" class="logotekst">
		<a class="headingcontent__button" href="utdanningstilbud.php"><button>Lær om informasjonsteknologi her</button></a>
		</div>


		<div class="wrapper">

			<!-- Column layout for links and icons -->
			<div class="column">
				<div class="col"><a class="column__button" href="omlinja.php"><i alt="Ikon med link som fører til om linjen" class="fa fa-search column__icons"></i><span class="column__text">Informasjon</span></a></div>
				<div class="col"><a class="column__button" href="utdanningstilbud.php"><i alt="Ikon med link som fører til om fagene" class="fa fa-book column__icons"></i><span class="column__text">Utdanningstilbud</span></a></div>
				<div class="col"><a class="column__button" href="videre.php"><i alt="Ikon med link som fører til om studieprogram" class="fa fa-suitcase column__icons"></i><span class="column__text">Videre utdanning</span></a></div>
				<div class="col"><a class="column__button" href="nyheter.php"><i alt="Ikon med link som fører til videre utdanning" class="fa fa-newspaper-o column__icons"></i><span class="column__text">Nyheter</span></a></div>
			</div>
			
			<!-- Article section -->
			<div class="article">
			<hr class="line">
			<h2>Utforsk IT og medieproduksjon hos KVGS</h2>
				<video class="videohorisontalt" controls loop autoplay muted>
               		<source src="video/Imvideo.mp4" type="video/mp4" alt="Video som viser forskjellige deler av linjen. 3D printere, elever som jobber med programmering og mer.">
                	Your browser does not support the video tag.
            	</video>
				<p class = "plink">Video: Olav Pedersen</p>
				<br> <br> <br>
			<p class ="ptext">Er du interessert i teknologi og kreativitet? Da bør du sjekke ut IT og medieproduskjon linjen hos Kristiansund videregående skole! Gjennom studiet vil du lære å skape engasjerende medieinnhold og utvikle IT-systemer og -løsninger. Emner som programmering, nettverksteknologi, medieproduksjon, design og webutvikling inngår i studiet, så du kan fordype deg i de områdene som interesserer deg mest. Etter utdanningen vil du være godt rustet til å starte en spennende karriere innen IT og mediebransjen! Ta tak i muligheten og start din eventyrlige reise hos oss i dag!</p>
			</div>

		</div>



		<!-- Back to top button -->
		<button id="topBtn">Tilbake til topp</button>

		<!-- Javascript-->
		<script src="js/topButton.js"></script>
		<script src="js/script.js"></script>

	</body>

	<!-- PHP include statement to add the footer -->
	<?php
	include_once 'footer.php';
	?>

	</html>