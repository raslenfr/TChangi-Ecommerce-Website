<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) 
 
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) 
      
    ) {
        $client = new Client(
            null,
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address']
        );
        $clientC->addClient($client);
        header('Location:ListClients.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="stylesheet" href="../Style/style.css">

</head>

<body>
    <a href="ListClients.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>




    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="firstName">Name:
                    </label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Email:
                    </label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="50"></td>
            </tr>
            <tr>
                <td>
                    <label for="address">Password:
                    </label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
           
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>