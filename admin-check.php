<link rel="stylesheet" href="admin.css">
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

// $name=$_POST["name1"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";


$mysql = new mysqli($dbhost, $dbuser, $dbpass, $dbname,);
if ($mysql->connect_error) {
    echo "Connection is Failed" . $mysql->connect_error;
    exit();
}
if( $_SESSION['username']=='ADMIN'){
if (isset($_POST['Change'])) {
    header("Location: add-ranking.php");
    exit();
}
$sql = "DELETE FROM users where Email=?";

$email = $_POST['email1'];
if (isset($_POST['delete'])) {
    $stmt = $mysql->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    //  $result = $stmt->get_result();
    if ($stmt->affected_rows > 0) {
        $message = "Data is deleted Successfully";;
        $loginLink = "admin.php";

        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    } else {
        $message = "Failed to delete data . Email Address Not Found";;
        $loginLink = "admin.php";

        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    }
}
if (isset($_POST['update'])) {

    $name = $_POST['name2'];
    $email = $_POST['email2'];
    $sql = "UPDATE users SET Name = ? WHERE Email = ?";
    $stmt = $mysql->prepare($sql);
    $stmt->bind_param('ss', $name, $email);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        $message = "Data is updated successfully";;
        $loginLink = "admin.php";

        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    } else {
        $message = "Failed to update data .  Email Address Not Found";;
        $loginLink = "admin.php";

        echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
    }
    $stmt->close();
}


$sql = "SELECT * FROM users";
$result = $mysql->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=6 style='color:59ffe0;  '>";
echo "<tr>
<th style=' padding: 10px;  '>Name</th>
<th style=' padding: 10px;  '>Email</th>
<th style=' padding: 10px;  '>Address</th>
<th style=' padding: 10px;  '>Phone</th>
<th style=' padding: 10px;  '>Password</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style=' padding: 10px;  '>" . $row["Name"] . "</td>";
    echo "<td style=' padding: 10px;  '>"  . $row["Email"] . "</td>";
    echo "<td style=' padding: 10px;  '>"  . $row["Address"] . "</td>";
    echo "<td style=' padding: 10px;  '>"  . $row["Phone"] . "</td>";
    echo "<td style=' padding: 10px;  '>"  . $row["password"] . "</td>";
    // Add more columns as needed
    echo "</tr>";
}
echo "</table>";
} else {
    echo "No data found.";
}

}
else 
header("Location: logout.php");
?>