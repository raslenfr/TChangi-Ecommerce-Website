<?php
include 'C:/xampp/htdocs/proj3/Controller/ClientC.php';
session_start();
$host ="localhost";
$username ="root";
$password ="";
$database ="crud";
$message ="";
$client=Null;

try{
$connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["log"])) 
{
    if(empty($_POST["email"]) || empty($_POST["pass"])   )
{
    $message='<script>alert("Veuillez remplir tout les champs");</script>';

}
else{
    $query="SELECT * FROM client WHERE fn=:email AND ad=:pass ";
    $statement =$connect->prepare($query);
    $statement->execute(
array(
'email'=> $_POST["email"],
'pass' => $_POST["pass"],


)

    );
    $userFetched=$statement->fetchAll();
    $utab=$userFetched[0];
  
    
    $count=$statement->rowCount();
    if($count >0)
    { 
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["pass"]=$utab["pass"];
        $_SESSION["id"]=$utab["id"];
      
        var_dump( $_SESSION["id"]);
      header("location:../tchangi/template/index.php");
  }
   else 
   
{
$message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
/* <label>email et/ou mot de passe incorrect(s)</label> */
}
    
}       
}
}
catch(PDOException $error)
{

    $message=$error->getMessage();
}
