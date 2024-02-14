<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcom</title>
  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js"></script>

  <?php
  session_start();
  $nowtime = time();
  if ($nowtime > $_SESSION['expire']) {
    session_unset();
    session_destroy();
    $message = "Please log in again. Your session has expired.";


    echo "<script>alert('$message')</script>";
  }

  ?>

</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-scroll" style="background-color: #252525">
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
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                Beta
               
              </span>

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
  <!---->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="SLIDER IMG 1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-dark" style="border-radius: 30px;">
          <h2 style="color: #00665a">
            ICC CRICKET
            <mark style="
              background-color: #069e2c;
              border-radius: 30px;
              margin-left: auto;
              margin-right: auto;
            ">
              WORLD CUP
            </mark>
            2019
          </h2>
          <h5>A memorable Picture OF Team Captains</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg 2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-success">
          <h2 style="color: #ffd2a8">
            International Cricket
            <mark style="background-color: #069e2c; border-radius: 30px">
              Stadium </mark>Match
          </h2>
          <h5>International Match playing between Two Teams</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="stadium.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-success">
          <h2 style="color: #fffcfc">
            International
            <mark style="background-color: #069e2c; border-radius: 30px">
              Test </mark>Match
          </h2>
          <h5 style="color: rgb(243, 243, 243)">A picture OF Test Match</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!---->



  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 sidebar-page-container">
        <div class="sidebar">
          <div class="sidebar-widget sidebar-post">
            <div class="widget-title">
              <h3>News Feed</h3>
            </div>
            <div class="post-inner">
              <div class="carousel-inner-data">
                <ul>
                  <li>
                    <div class="post">
                      <div class="post-date">
                        <p>02</p>
                        <span>Feb</span>
                      </div>
                      <div class="file-box">
                        <i class="far fa-folder-open"></i>
                        <p>World Cup :</p>
                      </div>
                      <h5>
                        <a href="#">Pakistan Wins T20 World Cup</a>
                      </h5>
                    </div>
                  </li>
                  <li>
                    <div class="post">
                      <div class="post-date">
                        <p>10</p>
                        <span>May</span>
                      </div>
                      <div class="file-box">
                        <i class="far fa-folder-open"></i>
                        <p>Injury :</p>
                      </div>
                      <h5>
                        <a href="#">England's Star Player Injured</a>
                      </h5>
                    </div>
                  </li>
                  <li>
                    <div class="post">
                      <div class="post-date">
                        <p>13</p>
                        <span>May</span>
                      </div>
                      <div class="file-box">
                        <i class="far fa-folder-open"></i>
                        <p>New zealand Test squad : </p>
                      </div>
                      <h5>
                        <a href="#">New Zealand Cricket Board has announced the squad for the upcoming Test series against South Africa...</a>
                      </h5>
                    </div>
                  </li>
                  <li>
                    <div class="post">
                      <div class="post-date">
                        <p>20</p>
                        <span>May</span>
                      </div>
                      <div class="file-box">
                        <i class="far fa-folder-open"></i>
                        <p>Asia Cup :</p>
                      </div>
                      <h5>
                        <a href="#">Pakistan is hosting Asia Cup 2023 ....</a>
                      </h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- packeges start -->
  <section class="packeges" id="packeges">
    <div class="container bg-success" style="margin-top: 4px; border-radius: 5px; margin-bottom: 4px">
      <main class="text">
        <h1>Trending News</h1>
      </main>
      <div class="min-text">
        <div class="row" style="margin-top: 20px">
          <div class="col-md-4">
            <div class="card text-bg-info mb-3" style="max-width: 100%; border: none">
              <img src="News1.webp" class="card-img-top" alt="..." style="height: 190px" />
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                  Legend takes white-ball role in one of two West Indies
                  coaching ...
                </p>
                <a href="https://icc-cricket.com/news/3341627" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-bg-info mb-3" style="max-width: 190%; border: none">
              <img src="https://resources.pulse.icc-cricket.com/photo-resources/2023/05/11/55f64e3f-f87b-463c-ac76-88074c544c90/ODI-rankings-update.jpg?width=440&height=248" class="card-img-top" alt="..." style="height: 190px" />
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                  Tight at the top in ODI Rankings after annual update is set
                  ....
                </p>
                <a href="https://www.icc-cricket.com/news/3334683" class="btn btn-primary">Read me</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-bg-info mb-3" style="max-width: 190%; border: none">
              <img src="https://resources.pulse.icc-cricket.com/photo-resources/2023/05/11/164f57b1-b090-4a92-bcc5-7eec1ceca879/Temba.jpg?width=440&height=248" class="card-img-top" alt="..." style="height: 190px" />
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                  Hard work starts now for Proteas as Bavuma looks ahead to
                  World...
                </p>
                <a href="https://www.icc-cricket.com/news/3335549" class="btn btn-primary">Read me</a>
              </div>
            </div>
          </div>

          <div class="row" style="margin-top: 20px">
            <div class="col-md-4">
              <div class="card text-bg-info mb-3" style="max-width: 190%; border: none">
                <img src="https://resources.pulse.icc-cricket.com/photo-resources/2023/05/11/5747e4d5-5f63-44d7-aa95-70e4c7301ac9/Pooran-Hope.jpg?width=440&height=248" style="height: 190px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    West Indies announce historic first as World Cup
                    preparation...
                  </p>
                  <a href="https://www.icc-cricket.com/news/3335542" class="btn btn-primary">Read Me</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card text-bg-info mb-3" style="max-width: 190%; border: none">
                <img src="https://resources.pulse.icc-cricket.com/photo-resources/2023/05/10/88fb293d-dfab-47c2-8b93-a435b4d7a45b/GettyImages-1435261569.jpg?width=440&height=248" style="height: 190px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    Scotland announce professional contracts list for 2023-24
                    ...
                  </p>
                  <a href="https://www.icc-cricket.com/news/3334636" class="btn btn-primary">Read me</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card text-bg-info mb-3" style="max-width: 100% height 100px; border: none">
                <img src="https://resources.pulse.icc-cricket.com/photo-resources/2023/05/10/4d895874-6769-4f33-bf1e-1e0345afd940/Imam-rankings.jpg?width=440&height=248" style="height: 190px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    Signs good for World Cup as Pakistan trio dominate
                    batter...
                  </p>
                  <a href="https://www.icc-cricket.com/news/3333829" class="btn btn-primary">Click me</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3" id="videos">VIDEOS</h3>
        </div>
        <div class="col-6 text-right">
          <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <video class="video-fluid" alt="100%x280" src="j86qDV0cTi26NXoNGlhAltAi89tyxPNmY7sx6k701xVGdIFQT4gt96bbxLbFbScXHiy4wknaRWDhzq0nYfCpKW8Dkd/nSavj6NsIqrfiXOBIrjWHFB3FbO/HFyX8tFxe1YcjEfKK838Z2iuqYlYzVX+0f8AbW203FUSCwA+NZjxvxG3ee26AbIyn5GR/M10RTasw8mUI1CKIPgnR+brbSQTBzAEb4ereem1eneI7zC/ZCqpJKblCxC+auRDDZOh37V5FwLVG1qLdxeauDHccj9ia3/GuPu92yyMVQFcwIhwXGxnc8ulKSuNfqOZK2XfjfVYogAQs2aoGQvJxGy9jE7+1YLiVoo5U/kcr8gdvtV94r4+z4YMVwLM0Y7jYQZ6c+W9VHG9Yl+49xORwJ9iFAP/AE/enx/k5f0TPpEUncj/AHuP9Ks+DXCLiHvkD/hP+lVMnIHvI+Mb/wDmrHherRPW35DE9suQjts0c/50VeiYNKSb6NdcydChRWQ8w4DA/EHau+DeHNMpyOmtZDcEqDB7gHYVWJ40srtH2qQPGlqto4n2dGbyYSXFJI2WdN3nMGKxzeN7cgdT7VLXxOpE03rTME0znXcOdmJ/pTSaPaD/AOKb1vjBUEYn6Vn9T4rBaQCZ2+FcsvEx3yqzqx5k3UnRrRqgqlI335UI7Aehd+5rN2OLMxyj2qxPiVbY9QnatIxbdGks2KPWzQcLL5S/ernKsEPHSA8vtVrY8UownlWmo6Zzyk8zuKNOHpfMrNt4mQVx+86dxRzj7J+GXoyGDnaq+9wpmJP9aKK81eRk9nOxNPwlkMg1L/ZX70UVm8s2+zaOWSWjgaJ5ma6/Y3mZ+9FFHNj/ANnJ7HPIfvSNpHnmPrRRS+SXsSzz9inSvPOnlsP7UUUvkkDzz9nLaRyen1qJqwUS+xEn+4QDvu7sJ+S/aiit8Mm3sTySl2Ul5FgkIPXsQcjiB1DHmT/WtIdKWuXSkAea/wBzP9aKK2y/xjoFNp6JH7I9cPobhNFFcjyMpZZexTw65XY0dwdKKKFNjeefsR+F3H9MEnsAZrZeG/DlnTKr3kHmsObDIrPQTsNqKK6MGSTi7Ik3KWyos+EdHe1T3bavgjFmQHFCwM47+rn0G1Zbi+luB8ghCKBcb07omUjnuKKK3+0U9dFUl99SxW2jMYaRAPp2lqtjwZ0UYEM9xwgQAkyRIPaIB+lFFTOTVV+mcuhzjHA30wVyGwJg7gqp6eoExInn2qPp9P5gZByJBHWN9t/pS0VMJtw5P9M47Wzr9225/wBK7Hh1z0P0NFFc68nJ7LcEcL4bYGY3+FTF4VcG1JRUPyJ+woavcGd9jNNL4cOxooqvnn7DiiUvCnXaftXF3g7vsaKKXzz9hRGPh3/cVLThrgRRRSeab7ZUZOPQPw1ztJ+9cjhT+/3ooqebH80/Z//Z"></video>
                      <div class="card-body">
                        <h4 class="card-title">PAK vs New zealand Highlights 1st T20I</h4>
                        <p class="card-text">
                          In the first T20I match between Pakistan and New Zealand, both teams showcased an exhilarating display of cricketing skills...
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="data:image/jpeg;base64,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" />
                      <div class="card-body">
                        <h4 class="card-title">ICC Auction 2023 South Africa CAP-TOWN </h4>
                        <p class="card-text">
                          The ICC Auction 2023 is set to be a significant event in the world of cricket. It will bring together franchises, players, and cricketing boards from around the globe......
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAKAAzAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAQIDBAUABwj/xABJEAABAwMCAwQGBQcLAwUBAAABAgMEAAUREiEGMUETIlFhFBVScYGRMkKUodIHVWKSscHRFyMkM1NygpOy4fBzhPE0Q2N0whb/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAmEQACAgEFAAEEAwEAAAAAAAAAAQIRAwQSEyExUQUUQUIiMqEV/9oADAMBAAIRAxEAPwDBiSZ3bgLmzDjOf59Z/fTJUm4B5WmZLAPIh9Y/fRTAtepasoG3WoJdtAd3GfCupYk5NHPyUrMB+ZNDLYTOmauv9IX/ABqv6VcM/wDrZh/7hf8AGiE20FWCBmkFtTgnSKvgRPKD/pVx6zpmP/sL/jViVKnKU22zLllSsAAPryT861zbUlI2Fd6sOoePQ0PB8DWUy3497gdmuc9ObS5kALkqBBGxBGdvjTbk7NgzOyNwfWAArW3KWpKgRnY5ojmR23IkZUuU22tTulC3uQUlIHe8iEp3Ph57U3LM7epaprOGwl3C3XkqKHd86kkAAjJxjly3rzZ51B1PpnVGO7wVy6OW9+Ch6a6pKUBalIkKI36HzFWOL7xNlqi2+2uvqfkhJQll/vHPQ4Ox8qivFhdkv+nvN9gwCpTjW6zpBJGgAY3HTYCqzKA7d3rqZMZpK2VIabUQS0FJwc7YASCrA6nSPE1ktRF1TLlBr0GX5N5YWW5Eu4tODmhyQ4D+2ovTrn1nTftS/wCNatzecuU12UtxRCydAUc6UZ2HwFVfRz411qVoyZTM25q53Gd9pc/FTVTrkkZNxnfanPxVfRFUtaUJI1KUEj3mip38lPEbgHftox4vq/BVJgAXrG4/nGd9qc/FXesrj+cZ32pz8VHP8knEf9pbf89f4KT+STiT27b/AJ6vwUWgoB/WVx/OM77U5+Ku9ZXH84zvtTn4qOP5JOI/7S2/56vwUv8AJHxH/aW37Qv8FFoAG9ZXD84zvtTn4q71lcfzjO+1Ofio4/kk4k6rtv8Anq/BTk/kk4hBypVuPukK/BRuQUAvrK4fnGd9qc/FSG43AHe4zvtTn8a9DR+Si9JHeRAP/dK/BVS58GtWVxpu6oZQt1JUkNLKxgHxIH7KVoTQEC43D84zvtTn8a71lcPzjO+1OfioxRaLN9ZQqT1NZPbTTtCAr1lcPzjO+1OfipPWVw/OM77U5+Kjf1LY/arvUll9pNFgFdtQO8qqkjvrUrwNaENtTbK1KG2KoEalBClp7yuYrsg/5tnNJPaiMpGx6muCNykeFaJjR1rAS4Bp5b08wEkjCwc1fLEXHIygkEcuVKQM5rRNv0qIKtjSRrauS44hGDoPQ0uaAccjOEaPIWlMhLRQnv8A87nTt7qZOkpkyUpRIaSwlrS2hKykpQNkkcgB08fI0TwOG3FO65B7NtI+slKsn3EEVm3C1RkuOn00N5OCFsRk6hnfm34+NeH9ReOU9x6GlTS7M+BIUg92W2plRCAvtTg7cvfq25eflWDxrDjxYkZUYNJUXsOBtR2OM4Iz/wA2onZtsYfRmBzTy0sxyR7sIqHivhWTcLU0/CeTIMdZWtAZCF6SOmOfuxmuHTbOU6Mt7ewCb+gPdTvjSBOBjwrq9k4yaJj0uPt/7qP9Qr6L5Hyr5yin+mR/+sj/AFCvoxX0TigEYvFd5Npt2YzYfnvZRFZ1AAqxupR6ISN1HwFACeO743AjwuH4L15daT/SLq+NDDquvZk4BGds56VflzGosWXJ4kjSLjMfuCmBEZCVBlAwUo32Kcd/B55HPArVu/DlrcdBUwHF6M5fUtZA8+9kD3Z91NzhjW6fgXL9VY/hXiy6znkxr7aWozijhLkeU24n4pzkfDNGRV3a8iuPDtvZWnU09b3CctvsrLrRPiOSh880XG/P2PgaXc7o406uGyrs3m192QcYR7iTgEU3LFNXjlZhjzzlNxkqGwOO2pnHM3htqIOyisqWZXa/SUnTkacfpc89KyrB+VH1xfYUQ2V9i33BbiIUxTme0KM5JGNvDntXn/CMiVYeIUTLva3e1TaZUp1O2uYFK1FWPDG2D4VJw5xA1a37w3wzJkrsvqd6WuM/uIj5BASFe/TuOfnjNauCNLZ6LG/KOhzgydxI9bkttsylR4zQfz2+CADnT3cknoeVYnFFwTxHarFdlsdiqTEU52YVq0ZI2zgZoOdXINj4csVvgKmN2+Aq5TWgcDU4FFJP93Orz2rUTIWODeFNBCh6G4M+5eKzyRSjZUX2Y8lgpUd8VSUVJ61rrWXPpIqm80gnIArAso9srxNd2y/H76nLNKI6cf707A9VmrherXwHDqwcDPlWDwczBfi65jitRUScq86udm2pvSoEkjfaoo0JmOlQQ2rJ8Kr72PwYcLNUxLb2jgQ6QnpvVttmC2hCEP7fW3rC7FXNLSjTg09/Yq8qn7xfA1ikEKmoS9Q7f3b0Lx5K4QlobkPtuuyMBbZIOAfHwq2iPITv2Z286HhGmTZF0bRIdSllzCk9orAHkM46Gs8ur3QaSNceF+szrnfLsm7uMpvV0CRg6fSlY6fpedZ6rrdC2yVXa5qKmid5Ss51f3vf86zrwrTcmHkjIU0kny3FRTXUqUkH6q9JOefXFcce0jdS7N1y7T0ORsXKaEvMtrGHeighQJ33OD95qy5xFem5KG414nN5c0kAg+PjQ268TKiqL/aq7FrJTyGc7HwIGB8KnlqKngpJHe1Kx1xjH76HFJ9Ccr9N26OyJqGn33A464pRU6W0pUoZ2yQBn41nCM4fa+VXn0zLdw8Jsa4OMtt4T2IH0t8Z3oqbjR1NoUQkkpBJNbY822NMymqAuIwsTI//AFkf6hX0ccV5MhiKHm+6nOtPIedHHHPEP/8AN2JctttTsl11DMdtIyVLUccuuBk48q6cc+TwlMAeOojN+/KZb7LCWttTzQ9PW08pHdTlW4SRkhI6+0nwokv8z0biBUWMogxoLbqd88lkf6SaEeC7aiw/lDbF4lNrlrgl5x1eylynT/V79Qnp5+6rFvmuXbii9znEEZhvABWxSBpCRj4fOjWuobTs0GHe5Sf4C9SmHWElaO1hSU6i2fqnkceBBof4ukTbBY2LPC7Jx263FtmC68gLCAvGTpIIBB8jzzW1YY70q1uo0kpQ8OzPv2I/fVH8pdrvXrPhu6WW3m4Jtbq1LjBWMrIGhXwwa836Xjmsjb/r+CNZjgpdeoHZ83iu0WtqJdHE+t3rs1Cg3Eso1utK+kBt9HP7agu17lRGOMDbFstR03BiFFbbjNAaye8cae8duuedXbvZONBauHbtOYVdbjCnrlOxVKGW847NOfBOPmaqHgW+P2a1QJkV1DlzvDk65raI/oyVAJA9+MnrvXvWvTjCP8mMm5OXm/Wi/KiTHoYbQqUywlOrIPcJCRkeRHjUP5UmURplrYiNoaaDLmENpCUjvDoKMeEuFbfwpCcYt/aLU8vW886crcV0yf8AnM1k8etocmQypIV/Nr3PvFc2aaVsqPSPMxHUtO7gBqu9GcSfphXuosMVr2B8qT0VrH0E/KuXnQbgPDS+tIWB7J+VF5hNewmk9Cb9hNWssQ3GuZo6ITn3Uw3BY+p91VxuK7G9cg+Qn9ZLH1DTFXN7ok1HXYpMN7ENxfO+CKwrJOUu4XVoZ7QPq7Q+13jit/T5ChexnRxVd2DtrUpQz490/vpVZcJPsybu1pS6w59VzHLkN/41hqQl/S4QdRIV8aLeKovZSi4dkPo8OShQ8EpSe8tI94IpRk0NOzrXESEuaxgKOPhV2QwkuIIGw0pHnULL6QUgKRv+l/tWxbGRLmMtbFOdSj5Cok3dgLxaytnhYJ6qW2MeecmiZqOezQNR2ArE4wcS36vjlOvtn8BP7DRCk91PurX9TOT6GssoS6gqOwUCfnRVcWTeOLrU45Hd9X24OPpeUUdmt4jCSO9nYFXTnQsTTSpWMBRFaYsyxkWHHEnDdj4jYSm4ssl5H9VJbUEutHxSsbisWwcOuMu3MXB9LjqkiMmbkJXIRz1KTnGcYTq6kcuVD+V+1S6nPaNaPUpqmio5HHxh3e4jB4ZmQYtwTbmywpPpKVY7IdVbEHx3zXmkGVIWrifiLh+QiFbEWpxmFGQ4NUhxCf68N57uDnBxk1bkMpksqZkIS60oYUhYyD7xVaHaYMF0uw4EZhwpKSptsAkHmPdRHUxiqoblfpl8JzXYd84DXBmPKeuUZ71hl0nte8vvLydyN/1RWxZmRM4vszdouzZbsxKLrcu20G5PKOdGMkr95yBqIHIUyNa4MVwuxoMdlwpKdSGgDg8wPAVEzY7Ww6h1m2REONqCkLSykEEdeVV91H4FuJuLVtQbzw9PiytNueuxJukZ4uSXVFe7ax3e4NxzVgDGOhM+MnG3J0dKFpUUtHVg5xvQZ6sgl5LxhsdohRWlXZjKVHmR4Hzq1v41nk1CkqSE5WWcCkIqv3vGu38a57JLHypMiq+/jS5NFgJvTwqq5keVIXiae4ZbC67XvVPtFVwcJqbEXS8Mb0Hl/wBF/KAXCe68jHxKf9qJc0GcWr9EvUWWMjuhQI/RJ/jVw7NcXoXXhhNxiKZCe8DlBPjQY5Bcdc7IaULzuXFYFGzLodbQ4k91QC0n3ioHYiVyBIbKW3wMa+zSr7lAioCMqdMCnbVOiEKWwoo5haBkb+fxowsEUxo/aOIw64Nh7I8KvF+S6kCU/wBtjl3AkD4Db7qQnfJ5k880N36E5p+AtxRK7fiqzxgchKwoj3n/AGou7TA25UGsNIuHFSJoc1lDykhI+qlIIH7M0aRIa32nXdSUNMga1kE8+mBuaeWcYRVinF9IZ2hpdeKV2O4092ezh0hQLe4IIzmpkW95cJcoEEIXoLYB1Z2/jWEs2OKtsna2QdpSdpXBpZWpIQolPMBJ2qWDCdnPpaa21Z7yknTsM86qWSEVbYtrIu0rg4aVyO8lakpaWrCygFKTgkeHyp64LyLeJqikIK9Gg5Cs5xUvPj679HtZHrNd2hpjiHG8dohSM+0MVzQ1rCVLCAdskE7/AAq96rcL80P7Teu11YuEByA6ll55DjqhkIQlWcZI8PKqhbdDmgtrC8Z06TmpjmhNJpjaaHdpiu7WkDLylFIaWSBkjSaQtPJBKmnEgcyUnFPkh8i7HdoK7tKYptaU6lIUkHqRimVSaYhlOAA5moyDSAGgCbI8aTIqMCl3HSgCTVQxx42FxYroGyVlCj7xn91EZNZ3EEX0uzyG0pytKdafeKqD/ki4SqVkHCE4SrQhsry5H7is+HStweRoC4TU9EAfQP60ZKTyKen76O4mubj0RC3SoZASkkj3gV6Gp+m5cWNZq6ZDmnNpEm1VLxMTBtkiQThSE4T/AHjsP25+Bqw+28wrS8042rP0VoIP31fuVmgzLT6lnqxLkI7dWObJ+rv4jPxyR41w48e5lwXZ55wE0pc2XJWThKdOfMnP7q9EtM70RLqkSOydVjAcQVNqHXOATmhnh60PWaG5GlpAf7Q6sciBsCPLFb1tgqnyeyQtKSElW/PboB1NYa1QcXvfRVvea7tztxFwQxhlTzQCHezUApXXYDIHwqWLeIjLCwqWor9IQpSlIVkp7uTsOWx86wZkVUR5TeSsIONWMDOASPeM1Z9TKLcF1t5KkyyEjKT3D5/I15stNp9iuXTLU534aqb1DSqYUOhK1vJW24pDmlQAT4DPQ0+LfLekNapIa0vOKUOxUNQOrBGAfEUOCG8W1uttLWwkkdoEHGB1pxtswIKzEd06dRUWzjHjSej0zVbv9FyT+DfiXe3oaYS5J0Fp9xe7SzkHVg7D9IUxN5t6WmwtztCmWpwp0K+iSrB3HmNqw022WQnEVw6k6hhGxHjTBEfLBeSw4WRnC9O3zp/Zae/7f6Pln8G5IkRbrKbi+kp0l1ZQtKF5SCM7lXIZ+G1YWQl3Y5SlfPxAPP5VEBjyJG9LXZhwcacb6MpTvsJJF1gKv8eUlZcZSzoKgg906leIz1FJ6xgurIkPghLa0oKUOaVZIwFZGTyob512426Vh/z8dJW/KK5mFb95g9rIdRKHfihCMNrHe7x9nzpLheYL7E1tuUSXGkpQNC+e+eYx1HOhbfpTd6n/AJuO7tlc8qCC73GFLhuBLmp8qSQW0qSFAe0CMeOwzWHqFR7mlwa7MGFYY7YmUpbn2MwpXM4pMY6/fS7005rcgUbdTT9XnUe/SuANAx5VTSsYOaRVN1AcxkUAYcRlEW3yfWTjSC0paY2CQ4cKwNsYUk533yNqIeAL/bIzt1YkPJCloQ0Na+zBTuTg8+ZAoc4rU76NGQwFEqdUSlI5nRzPjt/zlVDh60JuSXnHJITnBUptOSgjYBQzgAjfVyynHOve1GuctGoX6VhxXOz1+5Xm1xrU0WzFfMVSSyyp/Ws48ycnkeZNCtzdNyW1eIktQQSFH6OCRnBwR9LJI32GScZxQjdUNWdCkCY3LccQdKUo0lrffVufCtr8mryu1Lk5REVxWG0nkF8snyPKvIwPb6dM9qQSXp1D4jPtKSrKNCljkop6jyznB60tmuLEJD4d1IdXgodQnVjHTHgfKrHEkIRg2ppJ0asDHL4nmT+4VgnflWWvwwyNx/DOZSadmtfbjGmOtKiKKUgErQUae8Tz887fKpoN6aZsy4ywovoKiwdOw1Dn95rBIweVOSCa4no8bxxxvxD5JXYQMXxhFujtAKQ6y2Wyns9WsY6EnAz51Z9fxCnQC9j0bs8aNtVDITTgkVD+m4WUs00Eke+wUtMay8Foj9kQEbZ2658qr+u2vV7TSNaFtsFpaOzCtWR0Odt6xMCnculEfp2JO0HNIZv151wB9mn58hXZru2GYgB9mnAUgJpc09ojsUoAxTa7ejaA/SK7HlTMmu+JooCqlVO1CocEGkNICyFp8K4uIquAadpoAVSgaYedKUGmnIzmgCKWx6QzoCyhQIUhaeaSORrQsdjtDSESe3lQLo+g/wBU5kbEZUgEfRJHXlyrW4VhWdzVIvM1lopWEttOrCAr3k8/dRfJjwnJZlx1RwtLehDjc1SCE7HGE7YzW1t46s2xpxPHeIeGrjJu78pLClxcJ1ydOkKGACoj37VpxuzisIYaThKBhIFeoNFlKUJffaJO385LLmc9MHntQlxFBtmHpNqeQVtrw+02oKCdRwD5b9KyUm12Vki32M9NVM4ccDqApyO4kBR56eh/dWSN+Y3rd4cjFdknKWO64802CfNQH/6rDxpJSeYODWs4tpNmLHJCfClynwpmoUmsA1CQiTUnqKXIPKo9QNdqpiH5riaZmuoAdmuzTc12aAHg12abmuoAdXaqbSZoAkyKXUjxqLNdqoAqk0lTWu3u3GUWG1BvYqUs7jato8ISEjPprP6pqIxb7KUG/Af36VwJ863HOGJKPoy2T/hIqJzh2Qg4Mho/A0bJFccjKOa4Z64rQXYpCQSXm9vfUCrY8kbrSemEjejaw45FK9JUmBCBB0OugYxuTg1ctUNRKvVlyQ+zkOLZbR3wQd+75Y6ZrZ4gtkWNAtjb7ZU8VHu5+uUgJyPAZyazLOy49c0PQJCk9m9usd3U2Nio4x/48+Q5Qj6dUccnG0LNddcVFQy62mQJYDan8DC0oOQQd9h+2utsV1tU9LrjTpfaUStv6PaN6FEfNZqvHjqdJlSZrqVvPrlFXoneOsHkSRlJHj0A5EUXcOWOMbOzKbW872rypJ7QAFKyChXInbn1NayhCKJbZylJtfCsNlzuuvPNukdfpBZ+4AfGsPiGL6LeJATshxXaI9x5/fkVPdkyLvdXMuNoShRaSknZGPH38/lW1Ntfre2Rwp5gXBpIGy9ldOfngH311TxyaqjmfYG86TSDtRCnhOUMmTMitADOASo/LFLN4VLUbtYs5t8ZyQpOnbxBzWPBOrJoHdIHWux51e9SSvaY3/TpfUsofWY/XqNjHtZQ+NcTtV/1LKP12P16kTYJR+iuP+uf4UtjHsZl5rs1qnh6b7TB9y6RXD07/wCL9ejYxbGZeT4iu1YqzItsyMCpxlRQOak7gVUG9JxaE1QpcpO0FcUjrSbDpSEODldqFMwKSl2Bv2JIiQ1OH+sfweXJIzj78n5VqGWVDfP7KyQvfCdkgAAeQp6V1slXh2xVGgqRnbf9Y0hcyQf31TSqpAqkyyR5eW1e6rnDtu9LkIkKWjDZJ0dcj/zWa6SUKGelMS1Jetk0Q9LzqW1LSwtOdWEndJBBSrz3z4VDFLwL7nYPSlhxKkrIaLZQ4NiCQSc/4RWCi2G1xvR0RFITyUpKScjrvXm0PiriOA2htcu4pCW0gpJ1Ee8KFXE8ecTFej0xShgKBQhGeQ6fH4VOTBGfUeiYTlENYtltzRjtn0h9CGy3/OOKUSkjG+NtgcDbaiWGX22+yajqSyg4b0pwAnoMV5PD494jcUVOS1KSGyQOxSnfJGc1O1fuJ7jbQ52swalZ1IwgKG/Lr8hWUsMv2kVusNrqzEtdyXdlNqWt4IbcYUcAY6gZ8x8quP3u1xrct/vMaQCUkE6vcRQe3GedbJnOAOKXkshRURsNyo7/AAwKttRf5lTTkglK07pUPoj316mnk5xV/gwmkmcvjZyQw4mHHWsheMK22xz61n2e+y323EygtKs885yOg9+MVZZTGhhSWG0upPMr2FMeeCkpS20hpA6JzXTKcaaIUHdl0TVY+mofE00zVf2i/nWfqPjXavOuM3NATXPbV86kTcF9XFmssEU7VnrQBsNXBQ5rXUqblg7rV8qws0uvFABAm5ZOdTny/wB6hfMKTntoyVE9QjSr5isYOUvaZpNCpMndtTChmM+tA9l1BOP8Q/hVR63ymUaiypaBzU33gPfjl8amDmOpqRuQts6m3FpPkoipeNMh40ZmxHMZ8M03A8a1nXkPj+kNNun2lDCvmKgMWErcOutfonCvv2rPjZPGf//Z" />
                      <div class="card-body">
                        <h4 class="card-title">Pakistan Preparations Hosting 2023 Asia Cup</h4>
                        <p class="card-text">
                          Pakistan is gearing up for the exciting task of hosting the 2023 Asia Cup, a prestigious cricket tournament featuring teams from across the Asian continent....
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6" />
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
