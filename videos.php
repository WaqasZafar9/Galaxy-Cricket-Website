<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">

    <title>Document</title>
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
    <style>
        body {
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: "jost", sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }

        .container {
            margin-top: 100px;
        }

        iframe {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        p {
            background-color: #0f0c29;
            padding: 10px;
            border-radius: 10px;
            color: wheat;
            text-align: center;
            justify-content: center;
            margin-top: 20%;
        }

        h2 {
            background-color: #0f0c29;
            padding: 10px;
            border-radius: 10px;
            color: wheat;
            text-align: center;
            justify-content: center;
            margin-left: auto;

        }
    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg  fixed-top navbar-scroll" style="background-color: #e3f2fd;">

        <div class="container-fluid">
            <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="d-flex justify-content-start align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <a class="navbar-brand" href="#">GALAXY</a>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="News.php" rel="nofollow">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ranking-insert.php">Ranking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="videos.php">Videos</a>
                    </li>
                    <li class="nav-item " style="margin-right: 21px;">
                        <a class="nav-link" href="shop.php">Shop</a>

                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark position-relative">
                            Match Schedules
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                Under Development
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                    </li>


                    <li class="nav-item" style="margin-left: 80px;">
                        <button type="button" class="btn btn-dark position-relative">
                            Awards
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                Under Development
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                    </li>
                </ul>

                <?php
                if (isset($_SESSION['username'])) {
                    echo "<button class='btn btn-outline-success' type='button'>";
                    echo $_SESSION['username'];
                    echo "</button>";
                    echo "<button class='btn btn-outline-success' type='button'>";
                    echo "<a  href='Logout.php'>Logout</a>";
                    echo "</button>";
                } else {
                    echo "<button class='btn btn-outline-success' type='button'>";
                    echo " <a href='login3.php'>";
                    echo "LOG IN </a>";
                    echo "</button>";
                }
                ?>

            </div>
        </div>
    </nav>
    <div class="container">
        <h2>HIGHLIGHTS</h2>
        <hr>
        <table class="table">

            <tr scope="row">
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/MjhHZ9Yumgk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                <td scope="col">
                    <p>ICC World Test Championship 2023 Final: The Ultimate Test Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a></p>
                </td>
            </tr>
            <tr scope="row">
                <td scope="col">
                    <p>An all-female Tutor Training cohort assembles in Brazil to assist aspiring coaches from a number of Members in the Americas region including Peru, Argentina and Chile attain their ICC Tutor status <br>Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a></p>
                </td>
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/kpSn40l3F34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
            </tr>
            <tr scope="row">
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/2ZuPrcI1jXs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                <td scope="col">
                    <p>On #TheICCReview – Hindi, former India pacer Ashish Nehra lists the bowlers who will surprise everyone at the ICC Men’s<br> #T20WorldCup 2022 👀 Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a></p>
                </td>
            </tr>
            <tr scope="row">
                <td scope="col">
                    <p>In 2007, India & Pakistan played out a nail-biter in the final of the ICC Men's T20 World Cup. Relive this truly iconic moment recreated by fans!

                        <br> Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a>
                    </p>
                </td>
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/3f2MjknN_3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
            </tr>
            <tr scope="row">
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/2m8HGEoLZ6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                <td scope="col">
                    <p>In 2007, Yuvraj Singh created a memory to last a lifetime as he hit Stuart Broad for six sixes in one over at Kingsmead, Durban. Relive this truly iconic ICC Men's T20 World Cup moment recreated by fans!
                        <br>Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a>
                    </p>
                </td>
            </tr>
            <tr scope="row">
                <td scope="col">
                    <p>From Indonesia to Vanuatu 🌏🏆<br> Book your #T20WorldCup tickets 👉<a href="https://bit.ly/2H5Mh8H">https://bit.ly/2H5Mh8H</a></p>
                </td>
                <td scope="col" colspan="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/CO9YlzeEX5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
            </tr>
        </table>
    </div>

    <footer class="text-center text-white" style="background-color: rgb(70, 70, 70)">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #252525">
            © 2023 Copyright:
            <a class="text-white" href="#">GALAXY</a>
        </div>
        <!-- Copyright -->
    </footer>


</body>

</html>