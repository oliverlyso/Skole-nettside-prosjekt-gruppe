<!doctype html>
	<html lang="no">
	<html dir="ltf">

 	<head>
		<meta charset="utf-8">
		<title>IM Kontakt</title>
		<link rel="icon" type="image/x-icon" href="img/imlogotrans.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/global.css">

	</head>
	<body>

	<?php
       session_start();
          ?>

	<?php
	include_once 'header.php';
	?>
		
		<div class="breadcrumbdiv">
			<div class="containerbread">
				<ul class="breadcrumbs">
					<li class="breadcrumbs__item"> <a href="index.php" class="breadcrumbs__link">Hjem</a></li>
					<li class="breadcrumbs__item"> <span class="breadcrumbs__link breadcrumbs__link--active">Kontakt</span></li>
				</ul>
			</div>
		</div>
		<?php
	include_once 'hamburger.php';
	?>
	
    
        <div class="column3">

        <div class="form-div">

        <h3>Kontakt oss her!</h3>
     
        <div class="kontakt-form">
        <form action="includes/kontakt.inc.php" method="post">

			<label>Navnet ditt:</label>
			<input type="text" name="name" placeholder="navn navnesen">

			<label>Din epost:</label>
			<input type="email" name="email" placeholder="navn@mail.com">

			<label>Skriv inn emne:</label>
			<input type="text" name="subject" placeholder="Emne...">

			<label>Skriv inn melding:</label>
			<textarea type="text" name="message" placeholder="Din melding..."></textarea>

			
			<button id="buttonid" type="submit" name="submit">Send melding</button>
		
         <?php
            if (isset($_SESSION['message'])) {
            echo "<p id='success'>Din melding ble sendt!</p>";
            unset($_SESSION['message']);
            }
          ?>

        </form>
		</div>

       
    </div> 

    <div class="maps">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kristiansund%20videreg%C3%A5ende%20skole,%20St.%20Hanshaugen%202,%206510%20Kristiansund&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>

	</div>


	</body>

    		<!-- Back to top button -->
		<button id="topBtn">Tilbake til topp</button>

        <!-- Javascript-->
        <script src="js/topButton.js"></script>
	
	<?php
	include_once 'footer.php';
	?>
	
	</html>