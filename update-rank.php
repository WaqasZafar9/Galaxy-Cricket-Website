<?php
session_start();
$nowtime = time();
if ($nowtime > $_SESSION['expire']) {
  session_unset();
  session_destroy();
  $message = "Please log in again. Your session has expired.";


  $loginLink = "login3.php";

  echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
}

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";

$mysql= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($mysql->connect_error){
    echo "Connection Un-Successfull";
    exit();
}
echo "Connection Successfull";
$team=$_POST['team'];
$format=$_POST['format'];
$POINTS=$_POST['Points'];


$is_player=$_POST['is_true'];
$is_true_update=$_POST['is_true_update'];
if($is_true_update=='1'){
    if(!$is_player=='1'){
    $sql = "UPDATE ranking SET points = '$POINTS' WHERE TEAM = '$team' AND Format = '$format'";
    if($mysql->query ($sql)){
        $message = "Team Data is Updated Successfully";
        $link = "add-ranking.php";
    
        echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }else{
    $message = "Team Data not Updated";
    $link = "add-ranking.php";

    echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }
}
else {
    $player_name=$_POST['player'];
    $sql = "UPDATE player_ranking SET points = '$POINTS' WHERE PLAYER = '$player_name' AND Format = '$format'";
    if($mysql->query ($sql)){
        $message = "PLayer Data is Updated Successfully";
        $link = "add-ranking.php";
    
        echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }else{
    $message = "PLayer Data not Inserted";;
    $link = "add-ranking.php";

    echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }
}
exit();
}


$LOGO=$_POST['LOGO'];
$is_player=$_POST['is_true'];
if($is_player=='1'){
    $player_name=$_POST['player'];
    $sql="insert into player_ranking (PLAYER,LOGO,POINTS,Format,TEAM) value ('$player_name','$LOGO','$POINTS','$format','$team')";
    if($mysql->query ($sql)){
        $message = "PLayer Data is inserted Successfully";
        $link = "add-ranking.php";
    
        echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }else{
    $message = "PLayer Data not Inserted";
    $link = "add-ranking.php";

    echo "<script>alert('$message'); window.location.href = '$link';</script>";
    }
}
else{
$sql="insert into ranking (TEAM,LOGO,POINTS,Format) value ('$team','$LOGO','$POINTS','$format')";

if($mysql->query ($sql)){
    $message = "Team Data is inserted Successfully";
    $link = "add-ranking.php";

    echo "<script>alert('$message'); window.location.href = '$link';</script>";
}else{
$message = "Team Data not Inserted";
$link = "add-ranking.php";

echo "<script>alert('$message'); window.location.href = '$link';</script>";
}
}
?>