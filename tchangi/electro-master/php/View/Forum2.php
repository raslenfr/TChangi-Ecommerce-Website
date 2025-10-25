<?php
include '../Controller/publicationp.php';
session_start();
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
	<link type="text/css" rel="stylesheet" href="depannage.js"/>
		<!-- /forum -->
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<title>Forum</title>
</head>
<body>
<div class="left-header">
				
		    	<nav class="logo2">
					<img src="./img/slogan.png" width="250px" alt="">
						
				</nav>

		<nav class="navigation">
            <br>  <a href="\proj3\tchangi\template\index.php" >Accueil</a><br>
			

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

			<a href="addpub.php" id="publier"> Publier</a>
			
			<a href="#" valeur=<?php $list = $publicationp->Tripub(); ?>>Les plus recents</a>
			<a href="#" valeur=<?php $list = $publicationp->Triersuj(); ?>>Trier par sujet</a>	
			<a href="#"> Les plus populaires</a>
			<a href="index.html">Retour</a>
        </nav>
			</div>
			<!--// Publier -->
	<!-- Accueil -->
	<div class="acc">
					<h1><i class="fa fa-home" aria-hidden="true"></i> &nbsp Accueil</h1>
	</div>	
	
<!-- //Accueil -->


<?php

        foreach ($list as $pub) {
        ?><i class="fa-solid fa-thumbs-up"> </i>
				<div id="publication"class="publication">
				<div class="pub-1">
					
				<div class="image">
					
				<img src="img/user.jpg.webp" width="60px" alt="">
				</div><br>
				
				<div class="user-name">
					<h2><?= $publicationp->showusername($pub['id_user']); ?></h2>
					</div>
					<div class="sujet-1">
						<h5>Sujet: <?= $pub['type_txt']; ?></h5><hr>
					</div>
				<div class="content">
					<h6>"<?= $pub['text']; ?>"</h6>
				</div>
				
				<div>
				
				<form method="POST" action="updatePub.php" class="update-btn">
                        <input type="submit" name="update" value="Update" class="update-btn">
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                 </form>
					</div>
				<div>	
                    <form method="POST" action="deletepub.php" class="delete-btn">
                        <input type="submit" name="delete" value="Delete" class="delete-btn">
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                    </form>
					</div>
					<div>
					<form method="POST" action="commenter.php" class="commenter-btn">
                        <input type="submit" name="Show"class="commenter-btn" value="Voir plus" >
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                        <input type="hidden" value=<?PHP echo $pub['id_user']; ?> name="id_user">
						<input type="hidden" value=<?PHP echo $pub['text']; ?> name="text">
                    </form>
					
					</div>

					
					</div>
					
					
				</div>
				</div>

	<?php
        }        ?>
<!-- //CARD-->		
</body>
</html>