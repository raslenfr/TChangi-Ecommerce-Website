<?php
include '../Controller/commentairep.php';
session_start();
$error = "";

// create client
$com = null;
$s = $_POST["id_pub"];
//echo  $_POST["id_pub"];
// create an instance of the controller
$comp = new comp();
if (
    isset($_POST["txt"]) 
 //   isset($_POST["tp"])) 
) {
    if (
        !empty($_POST['txt']) 
     //   !empty($_POST['tp']) 
    ) {
        $com = new com(
            null,
            $_POST['txt'],
            $_POST['id_pub'],
            $_SESSION['id'],
            new DateTime($_POST['d'])    
        );
        $comp->addcom($com,$s);
           header('Location:Forum.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/forum.css"/>
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

    <form action="" method="POST">
        <table border="1" align="center" class="table-add">

            <tr>
                <td>
                    <label for="txt">Text:
                    </label>
                </td>
                <td><input type="text" name="txt" id="txt" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="tp">Id pub:
                    </label>
                </td>
                <td><input type="text" name="id_pub" id="tp" value="<?PHP echo $_POST['id_pub']; ?>" maxlength="20"></td>
            </tr>
            
            <tr align="center">
                <td>
                    <input type="submit" value="Save" class="commenter-btn">
                </td>
                <td>
                    <input type="reset" value="Reset" class="delete-btn">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>