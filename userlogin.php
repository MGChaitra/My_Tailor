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
 $database = "clothtailoring";

 $conn = mysqli_connect($servername, $username, $password, $database);
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
               <style>
                .main{
                        width: 100%;
                        background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../images/user.jfif);
                        background-position: center;
                        background-size: cover;
                        height: 100vh;
                    }
               </style>
   
              
   
           </div> 
          
                   
           <div class="content">
                   <div class="form">
                       <h2>Login Here</h2>
                       <input type="username" name="username" placeholder="Enter username Here">
                       <input type="password" name="password" placeholder="Enter Password Here">
    
                       
                     <button type="submit" class="btn"><a>Login</a></button>
       
                       <p class="link"> Don't have an account<br>
                       <a href="signup.php">Sign up </a> here</p>
                      
   
                   </div>
                   <style>
                    .form{
                            width: 250px;
                            height: 380px;
                            background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
                            position: fixed;
                            top: 200px;
                            left: 670px;
                            transform: translate(0%,-5%);
                            border-radius: 10px;
                            padding: 25px;
                        }
                      
                   </style>
                       </div>
                   </div>
           </div>
       </div>
     
   </body>
   </html>