
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="./css/all.css">
	
</head>
<body>
    <div class="container">
            <div class="wrapper">
                <div class="left-side">
                    <div  class = "pagess">
                        <a href="welcome.php"> Home</a> 
                    </div>
                    <div class ="pagess">
                        <a href="contact-us.php"> Contact Us </a>
					
                    </div>
					<div class ="pagess">
                       <a href="gallery.php"> Photo Gallery</a> 
                    </div>
                    
                    <div class ="pagess">
                        <a href="resets.php"> Resets Password </a>
                    </div>
                    <div class ="pagess">
                       <a href="logout.php"> Logout </a> 
                    </div>
                    
                </div>
                <div class="social ">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            </div>
            
            <div class="heads">
                <div class="head-wra">
                    <h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Lihle Croc Designs.</h3>
                </div>
            </div>
			
            <div class="form-group">
                <form action="myShop.php">
					<input type="submit" value="Show Items" />
				</form>
            </div>
            
            <br>
            
       
                
                  
                
                <div class="footer">
                    <p>
					<?php echo "Lihle Croc Designs "?>
                    </p>
                </div>
        </div>
</body>
</html>