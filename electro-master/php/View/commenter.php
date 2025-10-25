<?php
include '../Controller/commentairep.php';
$comp = new comp();
if (isset($_POST['id_com']))
{


$comp->deletecom($_POST["id_com"]);
header('Location:Forum.php');

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
	<link type="text/css" rel="stylesheet" href="css/forum2.css"/>
		<!-- /forum -->
	<title>Forum</title>
</head>
<div class="left-header">
				
<nav class="logo2">
					<img src="./img/slogan.png" width="250px" alt="">
						
				</nav>

		<nav class="navigation">
            <br>  <a href="Forum.php" >Accueil</a><br>

			<!-- Sujets -->

			<!-- //Sujets -->
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

		<section class="publication">
		<hr><h1 align="center" >Publication </h1>
        <div id="publication">
        <div class="pub-1">
        <div class="user_pub">
		<div class="image">
				<img src="img/user.jpg.webp" width="60px" alt="">
				</div>
       <h1> <?php
	   		$comp->showusername($_POST['id_user']);
            $comp->showPub($_POST['id_pub']);	    
        ?></h1>
        </div>
		</div>
		
		<form method="POST" action="addcom.php" class="delete-btn">
                        <input type="submit" name="Show"class="delete-btn" value="Commenter" >
                        <input type="hidden" value=<?PHP echo $_POST['id_pub']; ?> name="id_pub">
                        <input type="hidden" value=<?PHP echo $_POST['id_user']; ?> name="id_user">
                    </form><br><br><br>
		</div><hr>
		</div><h1 align="center" >Commenters </h1>
		<?php
        foreach ($list as $com) {
        ?><br><br><hr>
		<br><br><div class="image">
				<img src="img/user.jpg.webp" width="60px" alt="">
				</div><br>
				<div id="comment"class="publication-1">
				<div class="pub-1">	
				
				<div class="user-name">
					
					<h2><?= $comp->showusername1($_POST['id_user']); ?> a commenté:</h2>
					</div>
					
				<div class="content">
					<h6>"<?= $com['text_com']; ?>"</h6>	
				</div>
				<form method="POST" action="updatecom.php" class="update-btn">
                        <input type="submit" name="update" value="Update" class="commenter-btn">
                        <input type="hidden" value=<?PHP echo $com['id_com']; ?> name="id_com">
                    </form>
					<form method="POST" action="deletecom.php" class="delete-btn">
                        <input type="submit" name="delete" value="Delete" class="delete-btn">
                        <input type="hidden" value=<?PHP echo $com['id_com']; ?> name="id_com">
                    </form>
				
				</div>

				</div>
				</div>
				
<?php
        }        ?>
		</section>
<!-- //CARD-->		


</body>
</html>