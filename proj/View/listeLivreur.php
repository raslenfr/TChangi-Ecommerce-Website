<?php
include '../Controller/LivreurC.php';


$livreurC = new LivreurC();
$list = $livreurC->listClients();


?>


 




<html>

<head>
<link rel="stylesheet" href="../Style/style.css">

</head>

<body>

    <center>
        <h1> <font color="white">
        List of Livreur </h1>
        <h2>
        <a href="../View/addLivreur.php" style="
    color: white;
">Add Livreur</a>
        </h2>

        
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Livreur</th>
            <th>Name Livreur</th>
            <th>Email_Livreur</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

  
        <?php
        foreach ($list as $livreur) {
            ?>
            <tr>
                <td><?= $livreur['id']; ?></td>
                <td><?= $livreur['fn']; ?></td>
                <td><?= $livreur['em']; ?></td>
                <td><?= $livreur['ps']; ?></td>
                
                <td align="center">
                    <form method="POST" action="update_Livreur.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $livreur['id']; ?> name="idLivreur">
                    </form>
                </td>
                <td>
                    <a href="../View/deleteLivreur.php?idLivreur=<?php echo $livreur['id']; ?>">Delete</a>
                </td>
            </tr>

            <tr>

        </tr>




        <?php
        }
        ?>
    </table>
</body>

</html>