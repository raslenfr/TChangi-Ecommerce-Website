<?php
$objetPdo=new PDO('mysql:host=localhost;dbname=crud','root','');

if (!empty($_POST['NameLivreur']) && !empty($_POST['EmailLivreur']) && !empty($_POST['PassLivreur']) ) {
$pdoStat=$objetPdo->prepare('INSERT INTO client VALUES(NULL, :fn, :ln, :ad)');


$pdoStat->bindValue(':fn',$_POST['NameLivreur'], PDO::PARAM_STR);
$pdoStat->bindValue(':ln',$_POST['EmailLivreur'], PDO::PARAM_STR);
$pdoStat->bindValue(':ad',$_POST['PassLivreur'], PDO::PARAM_STR);

$insertIsOk=$pdoStat->execute();

if($insertIsOk) {
    $message='le client a ete enrregistrer' ;
    ?>
   
 
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- ===== Iconscout CSS ===== -->
    
        <!-- ===== CSS ===== -->
             
        <!--<title>Login & Registration Form</title>-->
    </head>
    <body>
    
<h1>Inseetion des client </h1>
<p><?php echo $message; ?></p>



  </body>
</html>
<?php
  
}




}

?>


 