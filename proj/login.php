<?php
include 'C:/xampp/htdocs/proj3/Controller/ClientC.php';
session_start();
$host ="localhost";
$username ="root";
$password ="";
$database ="reg";
$database1 ="crud";

$message ="";
$client=Null;

try{
$connect =new PDO( "mysql:host=$host; dbname=$database1",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["log"])) 
{

    if(empty($_POST["email"]) || empty($_POST["pass"])   )
{
    $message='<script>alert("Veuillez remplir tout les champs");</script>';

}
else{
    $query="SELECT * FROM livreur WHERE em=:email AND ps=:pass";
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
        header("location:../jasser/view/affichage.php")  ;
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



try{
    $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["log"])) 
    {
    
        if(empty($_POST["email"]) || empty($_POST["pass"])   )
    {
        $message='<script>alert("Veuillez remplir tout les champs");</script>';
    
    }
    else if (isset($_POST["Crud_Commande"])&& empty($_POST["Crud_Livreur"])) {{
        $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
            header("location:../tchangi/commandes.php")  ;
      }
       else 
       
    {
    $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
    /* <label>email et/ou mot de passe incorrect(s)</label> */
    }
        
    }       
}
    }
    }
    catch(PDOException $error)
    {
    
        $message=$error->getMessage();
    }
    




    try{
        $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST["log"])) 
        {
        
            if(empty($_POST["email"]) || empty($_POST["pass"])   )
        {
            $message='<script>alert("Veuillez remplir tout les champs");</script>';
        
        }
        else if (isset($_POST["Crud_Categ"])&& empty($_POST["Crud_Livreur"])) {{
            $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
                header("location:../tchangi/ajouter_categorie.php")  ;
          }
           else 
           
        {
        $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
        /* <label>email et/ou mot de passe incorrect(s)</label> */
        }
            
        }       
    }
        }
        }
        catch(PDOException $error)
        {
        
            $message=$error->getMessage();
        }






        try{
            $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($_POST["log"])) 
            {
            
                if(empty($_POST["email"]) || empty($_POST["pass"])   )
            {
                $message='<script>alert("Veuillez remplir tout les champs");</script>';
            
            }
            else if (isset($_POST["Crud_livraison"])&& empty($_POST["Crud_Livreur"])) {{
                $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
                    header("location:../jasser/View/test.php")  ;
              }
               else 
               
            {
            $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
            /* <label>email et/ou mot de passe incorrect(s)</label> */
            }
                
            }       
        }
            }
            }
            catch(PDOException $error)
            {
            
                $message=$error->getMessage();
            }



            
try{
    $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["log"])) 
    {
    
        if(empty($_POST["email"]) || empty($_POST["pass"])   )
    {
        $message='<script>alert("Veuillez remplir tout les champs");</script>';
    
    }
    else if (isset($_POST["Crud_publi"])&& empty($_POST["Crud_Livreur"])) {{
        $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
            header("location:../tchangi/electro-master/php/View/Forum2.php")  ;
      }
       else 
       
    {
    $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
    /* <label>email et/ou mot de passe incorrect(s)</label> */
    }
        
    }       
}
    }
    }
    catch(PDOException $error)
    {
    
        $message=$error->getMessage();
    }
    



                
try{
    $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["log"])) 
    {
    
        if(empty($_POST["email"]) || empty($_POST["pass"])   )
    {
        $message='<script>alert("Veuillez remplir tout les champs");</script>';
    
    }
    else if (isset($_POST["Crud_Client"])&& empty($_POST["Crud_Livreur"])) {{
        $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
            header("location:View/ListClients.php") ;      }
       else 
       
    {
    $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
    /* <label>email et/ou mot de passe incorrect(s)</label> */
    }
        
    }       
}
    }
    }
    catch(PDOException $error)
    {
    
        $message=$error->getMessage();
    }
    



                    
try{
    $connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["log"])) 
    {
    
        if(empty($_POST["email"]) || empty($_POST["pass"])   )
    {
        $message='<script>alert("Veuillez remplir tout les champs");</script>';
    
    }
    else if (isset($_POST["Crud_Livreur"])&& empty($_POST["Crud_Client"])) {{
        $query="SELECT * FROM login WHERE email=:email AND pass=:pass";
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
            header("location:View/listeLivreur.php")  ; }
                   else 
       
    {
    $message='<script>alert("email et/ou mot de passe incorrect(s)");</script>';
    /* <label>email et/ou mot de passe incorrect(s)</label> */
    }
        
    }       
}
    }
    }
    catch(PDOException $error)
    {
    
        $message=$error->getMessage();
    }
    










?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
      <!-- Registration Form -->
    <div class="container">
        <div class="forms" id="forms">
            <div class="form login">
                <span class="title">Login Admin</span>

                <form method="POST" >

                
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" >
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="pass" >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="Crud_Client" name="Crud_Client">
                            <label for="logCheck" class="text">Crud Client</label>

                            <input type="checkbox" id="Crud_Livreur" name="Crud_Livreur">
                            <label for="logCheck" class="text">Crud Livreur</label>
               
                            <input type="checkbox" id="Crud_Livreur" name="Crud_Commande">
                            <label for="logCheck" class="text">Crud Comm</label>
               
                            <input type="checkbox" id="Crud_Livreur" name="Crud_Categ">
                            <label for="logCheck" class="text">Crud Categ</label>

                            <input type="checkbox" id="Crud_Livreur" name="Crud_livraison">
                            <label for="logCheck" class="text">Crud livraison</label>

                            <input type="checkbox" id="Crud_Livreur" name="Crud_publi">
                            <label for="logCheck" class="text">Crud publ</label>
                        </div>



                    

                        
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="log">
                    </div>
                </form>

            </div>
            </div>
            </div>



    <script src="script.js"></script>
</body>
</html>






