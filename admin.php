<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="animated-login.css"> -->
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
    <?php
session_start();
$nowtime = time();
if($_SESSION['username']!='ADMIN'){
    header("Location: logout.php");
}
if ($nowtime > $_SESSION['expire']) {
  session_unset();
  session_destroy();
  $message = "Please log in again. Your session has expired.";


  $loginLink = "login3.php";

    echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
}
?>
</head>
<body>
    <form action="admin-check.php" method="post">

    <input type="email" name="email1" id="email1" placeholder="Email to Delete Record">
    <button type="submit" name="delete">Delete</button>

    <input type="text" name="name2" id="name2" placeholder="Name to Update">
    <input type="email" name="email2" id="email2" placeholder="Email ">
    <button type="submit" name="update">update</button>

    <button type="submit" name="Display" class="display">DISPLAY ALL RECORDS</button>
    <button type="submit" name="Change" class="Change">Change Ranking</button>
    <button ><a href="home.php">HOME </a> </button>
   
    </form>
</body>
</html>