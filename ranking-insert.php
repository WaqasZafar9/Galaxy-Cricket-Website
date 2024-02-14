<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranking</title>
    <link rel="stylesheet" href="rankings.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
    <style>
        .main {

            background-color: #0f0c29;
        }

        td {
            color: aliceblue;
        }

        h1 {
            color: #0f0c29;
        }

        .odi,
        .t20I,
        .test,.t20I-p,.odi-p,.test-p {
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
    </style>
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

<nav class="navbar navbar-expand-lg fixed-top navbar-scroll"  style="background-color: darkgray; color: aliceblue;">
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
            <a class="nav-link" href="News.php" rel="nofollow" >News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Ranking-insert.php" >Ranking</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="videos.php" >Videos</a>
          </li>
          <li class="nav-item " style="margin-right: 21px;" >
            <a class="nav-link" href="shop.php">Shop</a>
           

          </li>
          <li class="nav-item" >
          <button type="button" class="btn btn-dark position-relative" >
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

        <div class="container-fluid">
            <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="d-flex justify-content-start align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <a class="navbar-brand " href="#">GALAXY</a>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Ranking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">MATCH SHEDULES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">HALL OF FAME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">AWARDS</a>
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


    <div class="main">

        <?php

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "login";

        $mysql = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($mysql->connect_error) {
            echo "Connection Unsuccessful";
            exit();
        }
        echo "Connection Successful";

        $sql = "SELECT * FROM ranking where Format='T20' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Start generating the HTML table
            echo "<div class='TEAMS'>";
            echo "<div class='t20I'>";
            echo "<h2>T20 Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'></th>";
            echo "<th scope='col'>Team</th>";
            echo "<th></th>";
            echo "<th scope='col'>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";

            // Iterate over the rows of the result set
            $rank = 1;
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["TEAM"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["TEAM"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }
        }
        // Close the HTML table
        echo "</tbody>";
        echo "</table>";
        echo "</div>";


        $sql = "SELECT * FROM ranking where Format='ODI' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {

            echo "<div class='odi'>";
            echo "<h2>ODI Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Team</th>";
            echo "<th></th>";
            echo "<th>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";

            // Iterate over the rows of the result set
            $rank = 1;
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" .  $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" .  $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["TEAM"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["TEAM"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }
        }
        // Close the HTML table
        echo "</tbody>";
        echo "</table>";
        echo "</div>";


        $sql = "SELECT * FROM ranking where Format='TEST' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {

            echo "<div class='test'>";
            echo "<h2>TEST Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'></th>";
            echo "<th scope='col'>Team</th>";
            echo "<th scope='col'></th>";
            echo "<th scope='col'>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";

            // Iterate over the rows of the result set
            $rank = 1;
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["TEAM"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["TEAM"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }


            // Close the HTML table
            echo "</tbody>";
            echo "</table>";
            echo "</div>";


            echo "</div>";
        } else {
            echo "No data found.";
        }


        $sql = "SELECT * FROM player_ranking where Format='T20' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Start generating the HTML table
            echo "<div class='Players'>";
            echo "<div class='t20I-p'>";
            echo "<h2>T20 Player Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Player</th>";
            echo "<th></th>";
            echo "<th>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";
            $rank = 1;
            // Iterate over the rows of the result set
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["PLAYER"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["PLAYER"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }


            // Close the HTML table
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }

        $sql = "SELECT * FROM player_ranking where Format='ODI' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {
            echo "<div class='odi-p'>";
            echo "<h2>ODI Player Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Player</th>";
            echo "<th></th>";
            echo "<th>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";
            $rank = 1;
            // Iterate over the rows of the result set
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["PLAYER"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["PLAYER"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }


            // Close the HTML table
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }


        $sql = "SELECT * FROM player_ranking where Format='TEST' order by POINTS DESC LIMIT 10";
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {
            echo "<div class='test-p'>";
            echo "<h2>TEST Player Ranking</h2>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Player</th>";
            echo "<th></th>";
            echo "<th>POINTS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class='table-group-divider'>";
            $rank = 1;
            // Iterate over the rows of the result set
            while ($row = $result->fetch_assoc()) {
                // Start a new table row
                echo "<tr>";
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $rank . ".</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $rank . ".</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["PLAYER"] . "</h1>";
                    echo "</td>";
                } else {

                    echo "<td>" . $row["PLAYER"] . "</td>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                } else {
                    echo "<td><img src='" . $row['LOGO'] . "' alt='Logo'>";
                    echo "</td>";
                }
                if ($rank == 1) {
                    echo "<td class='bg-success' scope='col'>";
                    echo "<h1>" . $row["POINTS"] . "</h1>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row["POINTS"] . "</td>";
                }
                echo "</tr>";
                $rank++;
            }


            // Close the HTML table
            echo "</tbody>";
            echo "</table>";
            echo "</div>";


            echo "</div>";
        } else {
            echo "No data found.";
        }


        // Close the database connection
        $mysql->close();

        ?>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>