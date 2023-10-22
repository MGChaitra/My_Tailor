<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="css/style1.css">

</head>
<body>

<?php
  $servername = "localhost";
 $username = "root";
 $password = "";

 $conn = mysqli_connect($servername, $username, $password);
    ?>


<!-- partial:index.partial.html -->
<div id="bg"></div>

<form method="POST" action="api/login.php">

  <div class="form-field">
    <input type="text" placeholder="Admin ID" required name="id"/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" required name="pass"/>                    
       </div>
  
  <div class="form-field">
    <button class="btn" type="">Log in</button>
  </div>
</form>
<!-- partial -->


  
</body>
</html>
