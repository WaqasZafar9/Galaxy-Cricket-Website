<?php


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";

$mysql= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($mysql->connect_error){
    echo "Connection Un-Successfull";
    exit();
}
$name=$_POST['Name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];

try {
$sql="insert into users (Name,Email,Address,Phone,password) value ('$name','$email','$address','$phone','$password')";
    if($mysql->query ($sql)){
        $message =  "Regitered SuccessFully";
        $loginLink = "register.php";
    
        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    }else{
        $message =  "Registration UnsuccessFull";;
        $loginLink = "register.php";
    
        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    }
}
    catch (Exception $e) {
        
        $message =  "Registration UnsuccessFull ... Email Address Already Taken";;
        $loginLink = "register.php";
    
        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    }
?>