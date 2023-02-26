 <!doctype html>
	<html lang="no">
	<html dir="ltf">

 	<head>
		<meta charset="utf-8">
		<title>IM Hjemmeside</title>
		<link rel="icon" type="image/x-icon" href="img/imlogotrans.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/global.css">
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
					<li class="breadcrumbs__item"> <span class="breadcrumbs__link breadcrumbs__link--active">Nyheter</span></li>
				</ul>
			</div>
		</div>
		<?php
	include_once 'hamburger.php';
	?>


    <section class = "Nyhetsside">
		<h2>Nyheter</h2>
		<div class="column__news">
			<div class="content__news"> <img class="nyhetbilde" src="img/elevklasserom.jpg" alt="Nyhetsbilde som viser #." >
        <p class = "ptext nyhetsoverskrift" id="nyhet1"></p>
		<p id = "undertekst1">.</p>
		<a href = "https://kristiansund.vgs.no/content/download/25645/264242?version=1"><p class ="ptext black"><br> Vedlegg for elevundersøkelse pdf</p></a> </div>
		
			<div class="content__news"><img class="nyhetbilde" src="img/elevnyhet2.jpg" alt="Nyhetsbilde som viser #."></a>
        <p class = "ptext nyhetsoverskrift" id="nyhet2">.</i></p>
		<p id = "undertekst2">.</p>
		
		</div>
			<div class="content__news"><img class="nyhetbilde" src="img/elevnyhet2.jpg" alt="Nyhetsbilde som viser #."></a>
        <p class = "ptext nyhetsoverskrift" id="nyhet3">.</p>
		<p id = "undertekst3">.</p>
		
		</div>
			<div class="content__news"><img class="nyhetbilde" src="img/elevnyhet2.jpg" alt="Nyhetsbilde som viser #."></a>
        <p class = "ptext nyhetsoverskrift" id="nyhet4">.</p>
		<p id ="undertekst4">.</p>
		
		</div>
		<script> 
		let nyhet1 = "Elevundersøkelsen2022";
		let nyhet2 = "Skal du søke vidaregående opplæring neste år?"
		let nyhet3 = "Nyhet3"
		let nyhet4 = "Nyhet4"
		document.getElementById("nyhet1").innerHTML = nyhet1
		document.getElementById("nyhet2").innerHTML = nyhet2
		document.getElementById("nyhet3").innerHTML = nyhet3
		document.getElementById("nyhet4").innerHTML = nyhet4
		let undertekst1 = "Elevundersøkelsen gir elevene mulighet til å si hva de mener om læring og trivsel på skolen. Resultatene fra undersøkelsen blir lagret og brukes av skolen, skoleeier og de statlige utdanningsmyndighetene for å analysere og utvikle elevenes skole- og læringsmiljø. Trykk linken under for å laste ned";
		let undertekst2 = "Da kan du finne alt du trenger å vite i et helt nytt hefte.";
		let undertekst3 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, rerum consequatur? Aspernatur aut rerum necessitatibus placeat libero ipsam alias?";
		let undertekst4 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, rerum consequatur? Aspernatur aut rerum necessitatibus placeat libero ipsam alias?";
		document.getElementById("undertekst1").innerHTML = undertekst1
		document.getElementById("undertekst2").innerHTML = undertekst2
		document.getElementById("undertekst3").innerHTML = undertekst3
		document.getElementById("undertekst4").innerHTML = undertekst4
		</script>
		</div>
	</section>
</body>
<?php
	include_once 'footer.php';
	?>
</html>