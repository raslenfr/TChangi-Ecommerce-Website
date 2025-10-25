<?php
include '../Controller/publicationp.php';
$publicationp = new Publicationp ();
$list = $publicationp->listPub();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- forum -->
	<link type="text/css" rel="stylesheet" href="css/forum.css"/>
		<!-- /forum -->
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Forum</title>
</head>
<div class="left-header">
				
		    	<nav class="logo2">
					<img src="./img/slogan.png" width="250px" alt="">
						
				</nav>

		<nav class="navigation">
            <br>  <a href="#" >Dashboard</a><br>

			<!-- Sujets -->
			<!--<div class="sujet">
            	<a href="#sujet" id="sujet"> Sujets</a><br>
			
					<div class="sujet-menu">
						<ul>
							<li><a href="#produit">Sur les produits</a></li>
							<li><a href="#vendeur">Sur les vendeurs</a></li>
							<li><a href="#livreur">Sur les livreurs</a></li>
						</ul>
					</div>
			</div> -->
			<!-- //Sujets -->

           <!--  <a href="#contact"> Populaire</a><br>-->
			<a href="#" id="publier" <?php // echo $totalep=$publicationp->totalep();  ?>> Nombre de publications totales</a>
            

			<a href="index.html">Nombre de commentaires totales </a>

	
        </nav>
			</div>

            </body>
</html>
