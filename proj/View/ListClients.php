<?php
include '../Controller/ClientC.php';



$clientC = new ClientC();
$list = $clientC->listClients();


?>


 




<html>

<head>
<link rel="stylesheet" href="../Style/style.css">

</head>

<body>

    <center>
        <h1> <font color="white">
        List of clients </h1>
        <h2>
        <a href="addClient.php" style="
    color: white;
">Add Client</a>
        </h2>

        <h3>
        <a href="./looggg.php" style="
    color: white;
">Logout</a>        </h3>

        
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Client</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $client) {
            ?>
            <tr>
                <td><?= $client['id']; ?></td>
                <td><?= $client['fn']; ?></td>
                <td><?= $client['ln']; ?></td>
                <td><?= $client['ad']; ?></td>
                
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['id']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $client['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>