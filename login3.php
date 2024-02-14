<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800&display=swap" rel="stylesheet">
    <title>Login</title>

</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top">
                <a href="home.html">
                    <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
                </a>
                <span>
                    <font size="+3">WELCOME BACK</font>
                </span>
                <span>Have an account?</span>
                <header>Login</header>
            </div>
            <form action="login.php" id="container" method="POSt">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Email Address" name="email" id="email" required>
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="pswd" id="pswd" required>
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Login" id="">
                </div>
                
            </form>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" name="" id="check">
                        <label for="check"> Remember Me</label>
                    </div>
                    <div class="two">
                       <label><a href="register.php">Register?</a></label>
                    </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>