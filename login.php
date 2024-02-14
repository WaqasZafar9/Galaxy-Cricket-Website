<?php
session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";

$mysql= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($mysql->connect_error){
    echo "Connection Un-Successfull";
    exit();
}




$email = $_POST['email'];
$password = $_POST['pswd'];
$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";

$stmt = $mysql->prepare($sql);
$stmt->execute();
// Get the result
$result = $stmt->get_result();

if($email=='admin@gmail.com' && $password=='123'){
    $_SESSION['start']=time();
    $_SESSION['username'] = "ADMIN";
    $_SESSION['mail'] = "fuzailraza161@gmail.com";
    $_SESSION['phone'] = "03014384681";
    $_SESSION['address'] = "ADMIN hOME";
    $_SESSION['product'] = 0;
    $_SESSION['expire'] = $_SESSION['start'] + 300;

    header("Location: admin.php");
    exit();
}
// Check if a matching row was found
if ($result->num_rows === 1) {
// Fetch the row
echo "valid username.";

$row = $result->fetch_assoc();
if ($password == $row['password']) {
    // Successful login
    echo "Valid username and password.";
    $_SESSION['start']=time();
    $_SESSION['username'] = $row['Name'];
    $_SESSION['mail'] = $row['Email'];
    $_SESSION['phone'] = $row['Phone'];
    $_SESSION['address'] = $row['Address'];
    $_SESSION['product'] = 0;
    $_SESSION['expire'] = $_SESSION['start'] + 300;
    header("Location: home.php");

} else {
    // Invalid password
    
    
    $message =  "Invalid password or Password";;
    $loginLink = "login3.php";

    echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
}

} else {
// Invalid username
$message =  "Invalid password or Password";;
$loginLink = "login3.php";

echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
}
?>