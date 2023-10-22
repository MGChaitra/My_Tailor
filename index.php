<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="utf-8">
       <title>Webpage Design</title>
       <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
   <?php




    $servername = "localhost";
    $username = "root";
    $password = "";
   
    $conn = mysqli_connect($servername, $username, $password);


    if (!$conn) {
        die("sorry we failed to connect" . mysqli_connect_error());
    } 
    
        ?>
        
       <div class="main">
        
           <div class="navbar">
               <div class="icon">
                   <h2 class="logo">MyTailor</h2>
               </div>
   
               <div class="menu">
                   <ul>
                       <li><a href="index.php">HOME</a></li>
                       <li><a href="design.php">DESIGN</a></li>
                       <li><a href="userlogin.php">USER LOGIN</a></li>
                       <li><a href="workerslogin.php">WORKERS LOGIN</a></li>
                       <li><a href="admin.php">ADMIN LOGIN</a></li>
                   </ul>
               </div>
   
              
   
           </div> 
           <div class="content">
               <h1>Order Your Type & <br><span>Get The Perfect</span> <br>Outfit</h1>
               <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                    expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                   <br> a quae totam ipsa illum minus laudantium?</p>
   
                   <button class="cn"><a href="userlogin.html">JOIN US</a></button>
   
                   <div class="form">
                       <h2>Login Here</h2>
                       <input type="email" name="email" placeholder="Enter Email Here">
                       <input type="password" name="" placeholder="Enter Password Here">
                       <button class="btnn"><a href="#">Login</a></button>
   
                       <p class="link">Don't have an account<br>
                       <a href="signup.php">Sign up </a> here</a></p>
                      
   
                   </div>
                       </div>
                   </div>
           </div>
       </div>
     
   </body>
   </html>