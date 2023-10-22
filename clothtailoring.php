<?php
echo " welcome to the stage where we are ready to connected to a database ,<br>";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);


if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
echo "connection was successful"
?>


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $passWord = $_POST['passWord'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];
    $pattern = $_POST['pattern'];

    $sql = "INSERT INTO `staff` (`fullName`, `address`, `email`, `phoneNumber`, `password`, `confirmpassword`,`gender`,`pattern`) VALUES ('$fullName', '$address', '$email', '$phoneNumber', '$passWord', '$confirmPassword','$gender','$pattern')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your username ' . $userName . ' and password ' . $passWord . ' has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    </button>
    </div>';
        } 
      else {
            echo "not successfull!" . mysqli_error($conn);

        }