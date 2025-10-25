<?php

include '../Controller/commentairep.php';

$error = "";

// create client
$com = null;

// create an instance of the controller
$comp = new comp();
if (
    isset($_POST["id_com"]) &&
    isset($_POST["text_com"]) &&
    isset($_POST["id_pub"]) &&
    isset($_POST["id_user"]) &&
    isset($_POST["date_c"])
) {
    if (
        !empty($_POST["id_com"]) &&
        !empty($_POST['text_com']) &&
        !empty($_POST['id_pub']) &&
        !empty($_POST['id_user']) &&
        !empty($_POST["date_c"])
    ) {
        $com = new com(
            $_POST['id_com'],
            $_POST['text_com'],
            $_POST['id_pub'],
            $_POST['id_user'],
            new DateTime($_POST['date_c'])
        );

                $comp->updatecom($com);
       //  header('Location:Commenter.php');
    } else
        $error = "Missing information";
}
    $com=$comp->get_com($_POST["id_com"]);
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

    //$com = $comp->showCom($_POST["id_com"]);
    
    ?>

        <form action="" method="POST">
        <input type="hidden" name="id_com" id="id_com" value="<?php echo $com['id_com']; ?>" maxlength="20">
            <table border="1" align="center" class="table-add">
 
                <tr>
                    <td>
                        <label for="text">Text:
                        </label>
                    </td>
                    <td><input type="text" name="text_com" id="text_com" value="<?php echo $com['text_com']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_pub">Type:
                        </label>
                    </td>
                    <td><input type="text" name="id_pub" id="id_pub" value="<?php echo $com['id_pub']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_user">Id user:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_user" value="<?php echo $com['id_user']; ?>" id="address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_c" id="date_c" value="<?php echo $com['date_c']; ?>">
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