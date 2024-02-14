<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>RANKING ADD</title>
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
?>
</head>
<body>
    <form action="update-rank.php" method="post">
    <label for="is_true_update" id='12' style="background-color: white; padding: 10px; border-radius: 10px; display: flex;justify-content: center; margin-left: 100px;cursor:pointer" >Update Ranking</label>
        <input type="checkbox" value="1" name="is_true_update" id="is_true_update" onclick="toggleTextBox1()" style="display: none;">
        <input type="text" name="team" id="team" required placeholder="Team Name">
        <input type="blob" id='logo' name="LOGO" id="LOGO" required placeholder="LOGO">
        <input type="number" name="Points" id="Points" required min=0 placeholder="POINTS">
        <select name="format" style="width: 120px;height: 40px;margin-left: 45%;border-radius: 10px;" required>
            <option value="ODI">ODI</option>
            <option value="T20">T20</option>
            <option value="Test">Test</option>
        </select>
        <br>
        <br>
        <label for="is_true" id='11' style="background-color: white; padding: 10px; border-radius: 10px; display: flex;justify-content: center; margin-left: 100px;cursor:pointer" >Insert PLayer Ranking</label>
        <input type="checkbox" value="1" name="is_true" id="is_true" onclick="toggleTextBox()" style="display: none;">
        <input type="text" name="player" id="player"  placeholder="Player Name" style="display: none;">
        <button type="submit" id='submit1'>INSERT RANK</button>
    </form>
    <script>
        function toggleTextBox() {
    var textboxContainer = document.getElementById("player");
    var textboxContainer1 = document.getElementById("team");
    var textboxContainer2 = document.getElementById("11");
    if (document.getElementById("is_true").checked) {
      textboxContainer.style.display = "block";
      textboxContainer.setAttribute("required", "required");
      
      if(document.getElementById("is_true_update").checked){
          textboxContainer1.style.display = "none";
          textboxContainer1.removeAttribute("required");
          textboxContainer2.innerHTML="UPDATE TEAM RANK";
        }
        else{
        textboxContainer2.innerHTML="INSERT TEAM RANK";
        }
        
    } else {
        textboxContainer.style.display = "none";
        textboxContainer.removeAttribute("required");
        if((document.getElementById("is_true_update").checked)){
            textboxContainer1.setAttribute("required", "required");
            textboxContainer1.style.display = "block";
            textboxContainer2.innerHTML="UPDATE PLAYER RANK";
        }
        else
        textboxContainer2.innerHTML="INSERT PLAYER RANK";

        
    }
}
function toggleTextBox1() {
    var textboxContainer1 = document.getElementById("12");
    var textboxContainer2 = document.getElementById("11");
    var textboxContainer3 = document.getElementById("logo");
    var textboxContainer4 = document.getElementById("team");
    
    var textboxContainer = document.getElementById("submit1");
    if (document.getElementById("is_true_update").checked) {
        textboxContainer3.removeAttribute("required");
        textboxContainer3.style.display = "none";
        textboxContainer.innerHTML = "UPDATE RANK";
        textboxContainer2.innerHTML = "UPDATE PLAYER RANK";
        textboxContainer1.innerHTML = "INSERT RANK";
        
    } else {
        
        textboxContainer4.style.display = "block";
        textboxContainer3.style.display = "block";
        textboxContainer3.setAttribute("required", "required");
        textboxContainer2.innerHTML = "INSERT PLAYER RANK";
        textboxContainer.innerHTML = "INSERT RANK";
        textboxContainer1.innerHTML = "UPDATE RANK";
    }
  }
    </script>
</body>

</html>