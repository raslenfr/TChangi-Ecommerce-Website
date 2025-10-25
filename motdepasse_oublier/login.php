
    
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
                    <span class="title">Recup your password</span>
    
                    <form method="POST" action="recup.php"  >
    
                    
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" name="recup_mail" >
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        
    
                       
    
                        <div class="input-field button">
                            <input type="submit" value="Submit" name="Submit">
                        </div>
                      
                        
                    </form>
                    <?php
                    if (isset($error)) {echo'<span style="color:red">'.$error.'</span>';} else {echo "<br />";}
                        
                      ?>
                    
                    
                   
                </div>
    
                   <!-- Registration Form -->
                   <div class="form signup">
                    <span class="title">Registrations</span>
    
                    <form method="POST"  action="insertion.php" >
                        <div class="input-field">
                            <input type="text" placeholder="Enter your name" id="name1" name="NameLivreur" >
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
                      
    
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon" name="Conditions" >
                                <label for="termCon" class="text">I accepted all terms and conditions </label>
                            </div>
                        </div>
    
                        <div class="input-field button">
                            <input type="submit" value="Signup" name="inscript" >
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
    


