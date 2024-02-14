<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";


$mysql=new mysqli ($dbhost,$dbuser,$dbpass,$dbname,);
if($mysql -> connect_error){
    echo "Connection is Failed" . $mysql->connect_error;
    exit();
}
echo "Connection is Successfull" ;

    
$name = $_POST['TEAM'];
$Points = $_POST['Points'];
$sql = "UPDATE ranking SET POINTS = ? WHERE TEAM = ?";
$stmt = $mysql->prepare($sql);
$stmt->bind_param('ss', $Points, $name);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    echo "Data is updated successfully";
} else {
    echo "Failed to update data";
}
$stmt->close();

?>