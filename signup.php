<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>

  
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $passWord = $_POST['passWord'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "clothtailoring";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("sorry we failed to connect" . mysqli_connect_error());
    } else {

        $sql = "INSERT INTO `user` (`fullName`, `userName`, `email`, `phoneNumber`, `password`, `confirmpassword`,`gender`) VALUES ('$fullName', '$userName', '$email', '$phoneNumber', '$passWord', '$confirmPassword','$gender')";
        $result = mysqli_query($conn, $sql);

    }

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your username ' . $userName . ' and password ' . $passWord . ' has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    </button>
    </div>';
        } else {
            echo "not successfull!" . mysqli_error($conn);

        }

    }


        ?>
    <div class="container">
      <h1 class="form-title">Sign Up</h1>
      <form action="/clothtailoring/signup.php" method="post">
        <div class="main-user-info">

        <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter Fullname"/>
          </div>


          <div class="user-input-box">
            <label for="userName">Username</label>
            <input type="text"
                    id="userName"
                    name="userName"
                    placeholder="Enter Username"/>
          </div>

          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>

          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number"/>
          </div>

          <div class="user-input-box">
            <label for="passWord">Password</label>
            <input type="password"
                    id="passWord"
                    name="passWord"
                    placeholder="Enter Password"/>
          </div>

          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password"/>
          </div>

          <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="gender">
            <label for="gender">Male</label>
            <input type="radio" name="gender" id="gender">
            <label for="gender">Female</label>
            <input type="radio" name="gender" id="gender">
            <label for="gender">Other</label>
          </div>
        </div>
        </div>

        
        <div >
          <button type="submit" class="form-submit-btn">Sign Up</button>
        </div>
      </form>
    </div>
  </body>
</html>