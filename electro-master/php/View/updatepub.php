<?php

include '../Controller/publicationp.php';

$error = "";

// create client
$publication = null;

// create an instance of the controller
$publicationp = new publicationp();
if (
    isset($_POST["id_pub"]) &&
    isset($_POST["text"]) &&
    isset($_POST["type_txt"]) &&
    isset($_POST["id_user"]) &&
    isset($_POST["date"])
) {
    if (
        !empty($_POST["id_pub"]) &&
        !empty($_POST['text']) &&
        !empty($_POST['type_txt']) &&
        !empty($_POST['id_user']) &&
        !empty($_POST["date"])
    ) {
        $publication = new publication(
            $_POST['id_pub'],
            $_POST['text'],
            $_POST['type_txt'],
            $_POST['id_user'],
            new DateTime($_POST['date']),
            null,
            null
        );
                $publicationp->updatepub($publication);
       header('Location:Forum.php');
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
	<div class="acc">
					<h1><i class="fa fa-home" aria-hidden="true"></i> &nbsp Accueil</h1>
	</div>	
	
<!-- //Accueil -->
    

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php

    $publication = $publicationp->showPub($_POST["id_pub"]);
    
    ?>

        <form action="" method="POST">
        <input type="hidden" name="id_pub" id="id_pub" value="<?php echo $publication['id_pub']; ?>" maxlength="20">
            <table border="1" align="center" class="table-add">
 
                <tr>
                    <td>
                        <label for="text">Text:
                        </label>
                    </td>
                    <td><input type="text" name="text" id="text" value="<?php echo $publication['text']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="type_txt">Type:
                        </label>
                    </td>
                    <td><input type="text" name="type_txt" id="type_txt" value="<?php echo $publication['type_txt']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_user">Iduser:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_user" value="<?php echo $publication['id_user']; ?>" id="address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date" value="<?php echo $publication['date']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update" class="delete-btn">
                    </td>
                    
                </tr>
            </table>
        </form>
    <?php
    
    ?>
</body>

</html>