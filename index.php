<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="styleIndex.css">
		<link rel="stylesheet" href="carousel/style.css">
		<link rel="stylesheet" href="carousel/css/bootstrap.css">
		<title>Index</title>
	</head>
	
	<div id="html">
	<body class="container">
		<header>
			<?php include ("include/header.php");?>
		</header>
		
		<section>
		<!--ajout du carousel-->
			<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2500" id="bs-carousel">

	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#bs-carousel" data-slide-to="1"></li>
		<li data-target="#bs-carousel" data-slide-to="2"></li>
	 </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <a href="#"><div class="slide-1"></div></a>
    </div>
    <div class="item slides">
      <a href="#"><div class="slide-2"></div></a>               
    </div>
    <div class="item slides">
      <a href="#"><div class="slide-3"></div></a>       
        
    </div>
  </div> 
</div>

	<script src="carousel/js/jquery.js"></script>
	<script src="carousel/js/bootstrap.min.js"></script>
<!--fin du carousel-->
		
		<article id="mariage">
			<img src="images/coeur.png"/ id="coeur" >
			<a href=""><img src="images/mariage.png" id="couple"/></a>
			<img src="images/photographe.png" id="photographe"/>
			
			<div>
				<p></br>REPORTAGE PHOTOGRAPHIQUE-PLUSIEURS FORFAITS DES PREPARATIFS AU DESSERT-A PARTIR DE 400 €<img src="images/coeurBlanc.png" id="coeurBlanc"/></p>
			</div>
			
		</article>

		<article id="portrait">
			<div id="ligne">
			<img src="images/parapluie.png" id="parapluie">
				<h1>PORTRAIT EN STUDIO</h1>
			</div>
			
			<h1>PORTRAIT EN EXTERIEUR</h1>
			
			<div>
				<p>NOUVEAU-NES-BEBES-ENFANTS-FAMILLE</br>COUPLES-LINGERIE-GROSSESSE</br>PLUSIEURS FORFAITS-A PARTIR DE 42 €</p>
			</div>
		</article>
		
		<article id="articleLaine">
			<div>
				<h1>FORMATION PHOTO</h1><img src="images/formation.png" id="formation"/>
			</div>
			<div id="laineP">
				<p>COURS PHOTO INDIVIDUEL-COACHING PHOTO</BR>ATELIER PHOTO COLLECTIF-SORTIE PHOTO</BR>CHAINE YOUTUBE EDUCATIVE-VIDEOS ET TUTOS</BR>A PARTIR DE 20 €</p>
				<img src="images/focus.png" id="focus"/>
			</div>
			<a href="#"><img src="images/laine.png" id="laine"/></a>
		</article>
		
		<aside>
		<?php include ("include/aside.php");?>
		</aside>
			
		</section>
		
		
		 
		<footer>
			<?php include ("include/footer.php");?>
		</footer>
	</body>
	</div>
</html>