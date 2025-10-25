<?php
include '../Controller/publicationp.php';
$publicationp = new Publicationp ();
$list = $publicationp->listPub();



?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Publications </h1>
        <h2>
            <a href="addPub.php">Add Pub</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Pub</th>
            <th>Text</th>
            <th>Type Text</th>
            <th>Id User</th>
            <th>Date </th>
            <th>Update</th>
            <th>Delete</th>
            <th>Show Comments</th>
        </tr>
        <?php
        foreach ($list as $pub) {
        ?>
            <tr>
                <td><?= $pub['id_pub']; ?></td>
                <td><?= $pub['text']; ?></td>
                <td><?= $pub['type_txt']; ?></td>
                <td><?= $publicationp->showusername($pub['id_user']); ?></td>
                <td><?= $pub['date']; ?></td>
                <td align="center">
                    <form method="POST" action="updatePub.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deletepub.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                    </form>
                </td> 
                <td>
                     <form method="POST" action="Listcom.php">
                        <input type="submit" name="Show" value="Show Comments" >
                        <input type="hidden" value=<?PHP echo $pub['id_pub']; ?> name="id_pub">
                        <input type="hidden" value=<?PHP echo $pub['id_user']; ?> name="id_user">
                    </form>
                </td>
            </tr>


        <?php
        }
        ?>
    </table>
</body>

</html>