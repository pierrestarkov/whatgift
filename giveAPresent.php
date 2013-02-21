<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Test Psychologique</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />


<script>
$(function() {
$( ".slider" )
.css('width','100')

.slider({
range: "max",
min: 0,
max: 100,
value: 50,
slide: function( event, ui ) 
{
	$( "#amount" ).val("$" + ui.value );
}

});

<!--$( "#amount" ).val( " " + $( "#slider" ).slider( "value" ) ); ne pas effacer --> 
});
</script>



</head>
<body>

<!-- 	explication de l'tude -->
	<h1 id="titrePrincipal">Etude psychologique <br />sur les personnalités</h1>
<!-- 	<br /> -->
	<h2 id="titreExplicatif">But de l'étude</h2>
	<p id="explicationDeLEtude">Cette étude est basée sur bla bla bla</p>

	<h2 id="testEnSoi">Comment vous percevez-vous ?</h2>
	<h5 id="explication">Répondez à ces questions le plus sincèrement possible</h5>
	
	<form method="post" action="traitement.php">
	<p id="questions1">
		<fieldset>
		<legend>Age et sexe</legend>
			<label for="age">Quel est votre âge?</label> 
			<input 
				id="age" 
				type="text" 
				name="age" 
				size="2" 
				maxlength="3"
			/> ans
			
			<br />
			<br />
			Quel est votre sexe?
			<br />
			<label for="male">Homme :</label> <input type=radio name="sexe" value="M" id="male"> 
			<br>
			<label for="female">Femme :</label> <input type=radio name="sexe" value="F" id="female"> 
			<br />
			<br />
		</fieldset>
	</p>
		
	<h3 id="titreq2">Placez le curseur au plus près de l'image qui vous correspond le mieux : </h2>
	<p id="questions2">
	<fieldset>
	<legend>Votre personnalité</legend>
		
<br />

	
		<img src="donnees_stat/deathHead.png" />
		<div id="amount" name="slider1" class="slider"></div>
		
		<!--<input type="text" id="amount" name="amount" size="1" />-->
		<img src="donnees_stat/coeur.gif" />
		
<br />
		
		<img src="donnees_stat/Hippie1.png" />
		<div id="slider2" class="slider"></div>
		<img src="donnees_stat/cravate.png" />

<br />

		<img src="donnees_stat/square1.png" />
		<div id="slider3" class="slider"></div>
		<img src="donnees_stat/square.png" />
		
<br />

		<img src="donnees_stat/images.jpg" />
		<div id="slider4" class="slider"></div>
		<img src="donnees_stat/spherelight.png" />
		
		<br />
		
		
	</fieldset>
	</p>
	
	
		
	<h3 id="titreDesThemes">Choisissez N thèmes de cadeaux qui vous plaisent : </h2>
	<p id="themesCadeaux">
	<fieldset>
	<legend>Themes de cadeaux</legend>
		Voyage - Aventure<br />
		Bijoux<br />
		Repas - Nourriture<br />
		Massage<br />
		littérature<br />
		Création<br />
		Technologie<br />
		Sport<br />
		Bricolage<br />
		Habits<br />
		Musique<br />
		Drinking<br />
		Habits<br />
		Habits<br />
	</fieldset>
	<br />
	<input type="submit" value="Valider le formulaire" />
	</p>
	</form>
	
	
	
</body>
</html>