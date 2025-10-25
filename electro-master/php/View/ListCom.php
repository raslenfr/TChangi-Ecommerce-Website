<?php
include '../Controller/commentairep.php';
$comp = new comp();
if (isset($_POST['id_com']))
{


$comp->deletecom($_POST["id_com"]);
header('Location:Listpub.php');

}



$list = $comp->listCom();

if (isset($_POST["id_pub"])){
$s = $_POST["id_pub"];
echo  $_POST["id_pub"];
}
//$u = $_POST["id_user"];
//echo  $_POST["id_user"];
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
<body>
<div class="left-header">
				
		    	<nav class="logo2">
					<img src="./img/slogan.png" width="250px" alt="">
						
				</nav>

		<nav class="navigation">
            <br>  <a href="#" >Accueil</a><br>

			<!-- Sujets -->
			<div class="sujet">
            	<a href="#sujet" id="sujet"> Sujets</a><br>
			
					<div class="sujet-menu">
						<ul>
							<li><a href="#produit">Sur les produits</a></li>
							<li><a href="#vendeur">Sur les vendeurs</a></li>
							<li><a href="#livreur">Sur les livreurs</a></li>
						</ul>
					</div>
			</div>
			<!-- //Sujets -->

            <a href="#contact"> Populaire</a><br>
			<a href="#publier" id="publier"> Publier</a>
			<a href="index.html">Retour</a>
        </nav>
			</div>
			<!--// Publier -->
	<!-- Accueil -->
	<div class="acc">
					<h1><i class="fa fa-home" aria-hidden="true"></i> &nbsp Accueil</h1>
			</div>	
<!-- //Accueil -->
<!-- CARD-->
<a href="Listpub.php">Back to list </a>
    <center>
        <h1>Publication</h1>
        <?php
            $comp->showPub($_POST['id_pub']);
            $comp->showusername($_POST['id_user']);
        ?>
        <h1>Comments</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>

            <th>Commentaire</th>
            <th>Id use</th>
            <th>Id pub</th>
            <th>Date Pub</th>
            <th>Upadate</th>
            <th>Delete</th>
        </tr>
        <form method="POST" action="addcom.php">
                        <input type="submit" name="commentaire" value="commentaire">
                        <input type="hidden" value=<?PHP echo $_POST["id_pub"]; ?> name="id_pub">
                    </form>
        <?php
        foreach ($list as $com) {
        ?>
        
        
           <tr>
                <td><?= $com['text_com']; ?></td>   
                <td><?= $com['id_user']; ?></td>
                <td><?= $_POST["id_pub"];?></td>
                <td><?= $com['date_c']; ?></td>   
                <td align="center">
                    <form method="POST" action="updatecom.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $com['id_com']; ?> name="id_com">
                    </form>
                </td>   
                <td align="center">
                    <form method="POST" >
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $com['id_com']; ?> name="id_com">
                        <input type="hidden" value=<?PHP echo $com['id_pub']; ?> name="id_pub">
                        
                    </form>
                </td>       
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>