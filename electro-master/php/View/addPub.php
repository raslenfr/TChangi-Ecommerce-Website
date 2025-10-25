<?php

include '../Controller/publicationp.php';
session_start();
$error = "";
var_dump($_SESSION['id']);
// create client
$publication = null;

// create an instance of the controller
$publicationp = new Publicationp();
if (
    isset($_POST["txt"]) &&
    isset($_POST["tp"]) 
) {
    if (
        !empty($_POST['txt']) &&
        !empty($_POST['tp'])       

    ) {
        $publication = new Publication(
            null,
            $_POST['txt'],
            $_POST['tp'],
            $_SESSION['id'],
           null,
            null,
            null
            
        );
        $publicationp->addPub($publication);
     
     // header('Location:Forum.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="forum.css"/>
    <title>User Display</title>
</head>

<body>
<div class="left-header">
				
		    	<nav class="logo2">
					<img src="./img/slogan.png" width="250px" alt="">
						
				</nav>

		<nav class="navigation">
            <br>  <a href="Forum.php" >Accueil</a><br>

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
			
			<a href="Forum.php">Retour</a>
        </nav>
			</div>
			<!--// Publier -->
	<!-- Accueil -->
	
<!-- //Accueil -->

    <div id="error">
            <?php echo $error; ?> 
    </div>

    <form action="" method="POST">
        <table border="1" align="center" class="table-add">

            <tr>
                <td>
                    <label for="txt">Text:
                    </label>
                </td>
                <td><input type="text" name="txt" id="txt" class="text"></td>
            </tr>
            <tr>
                <td>
                    <label for="tp">Type:
                    </label>
                </td>
                <td><input type="text" name="tp" id="tp" maxlength="20"></td>
            </tr>
          
            <tr align="center">
                <td>
                    
                </td>   
                <td><input type="submit" value="Save" class="update-btn"></td>
            </tr>
        </table>
    </form>
</body>

</html>