<?php
session_start();
$objetPdo=new PDO('mysql:host=localhost;dbname=crud','root','');

if (!empty($_POST['NameLivreur']) && !empty($_POST['EmailLivreur']) && !empty($_POST['PassLivreur']) ) {
  $email=$_POST['EmailLivreur'];
  $pass=$_POST['PassLivreur'];


echo  " <br><br><br> <br><br><br>Email :".$email."<br>";
echo  " <br><br>Password :".$pass."<br>";





$pdoStat=$objetPdo->prepare('INSERT INTO client VALUES(NULL, :fn, :ln, :ad)');

$pdoStat->bindValue(':fn',$_POST['NameLivreur'], PDO::PARAM_STR);
$pdoStat->bindValue(':ln',$_POST['EmailLivreur'], PDO::PARAM_STR);
$pdoStat->bindValue(':ad',$_POST['PassLivreur'], PDO::PARAM_STR);

$insertIsOk=$pdoStat->execute();

if($insertIsOk) {
    $message='' ;
    ?>
   
 
 <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="./style.css">
        <!-- ===== Iconscout CSS ===== -->
    
        <!-- ===== CSS ===== -->
             
        <!--<title>Login & Registration Form</title>-->
    </head>
    <body>
    
 <h1 style="color:white;
   text-align: center ;
   margin-top:-150px;

"> Insertion Avec Succés  </h1>


<p><?php echo $message; ?></p>

<h2>
            <a href="../insci_conx/logi.php" style="color: brown;
    margin-left: 830">Click here to connect</a>
        </h2>

  </body>
</html>
<?php
  
}




}

?>


 