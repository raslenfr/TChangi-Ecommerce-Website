


    
    
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
        <?php
if(isset($message))
{
echo '<label class="text-danger">'.$message.'</label>';

}
?>
            <div class="forms" id="forms">
                <div class="form login">
                    <span class="title">Login</span>
    
                    <form method="POST" action="entrer.php" >
    
                    
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
                            </div>
                            
                            <a href="../motdepasse_oublier/login.php" class="text">Forgot password?</a>
                        </div>
    
                        <div class="input-field button">
                            <input type="submit" value="Login" name="log">
                        </div>
                        
                    </form>
                    
                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup Now</a>
                        </span>
                    </div>
                </div>
    
                   <!-- Registration Form -->
                   <div class="form signup">
                    <span class="title">Registrations</span>
    
                    <form method="POST"  action="insertion.php" >
               

                        <div class="input-field">
                
                            <input type="text" placeholder="Enter your nameee" id="name1" name="NameLivreur"  >
                            <i class="uil uil-user"></i>

                       
                        </div>

                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" id="email1" name="EmailLivreur" > 
                            <i class="uil uil-envelope icon"></i>
                
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Create a password" id="password1" name="PassLivreur" >
                            <i class="uil uil-lock icon"></i>
                        </div>
                     

                      
    
    
                        <div class="input-field button">
                            <input type="submit" id="submit" value="Signup" name="inscript" >
                        </div>

                        
                    </form>
    
                    <div class="login-signup">
                        <span class="text">Already a member?
                            <a href="#" class="text login-link">Login Now</a>
                        </span>
                    </div>
                    
    
                </div>
                </div>
                </div>
    
    
    
        <script src="script.js"></script>
    </body>
    </html>
    


