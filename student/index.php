<?php
  include "connection.php";
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>SVIT, Nashik</title>
  </head>
  <body>

    <!--Nav-Bar-Start-->
    <nav class="navbar sticky-top navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://www.svitnashik.in/">Sir Visvesvaraya Institute Of Technology</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto" style="margin-left: auto;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="department.php"> Department</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="committee.php"> Committee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php"> Feedback</a>
              </li>
              <?php
              if(isset($_SESSION['login_user']))
              { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Selector Of Departments
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="firstyear.php">First Year</a></li>
                    <li><a class="dropdown-item" href="Mechanical.php">Mechanical Department</a></li>
                    <li><a class="dropdown-item" href="Chemical.php">Chemical Department</a></li>
                    <li><a class="dropdown-item" href="IT.php">IT Department</a></li>
                    <li><a class="dropdown-item" href="Computer.php">Computer Department</a></li>
                    <li><a class="dropdown-item" href="Electrical.php">Electrical Department</a></li>
                    <li><a class="dropdown-item" href="E&TC.php">E & TC Department</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
                <li>
                  <a class="nav-link active" href="profile.php" style="color:#ffb100;margin-top: -1px;font-size: 16px;">
                    <?php
                      echo " <i class='fa fa-user-circle' aria-hidden='true'></i> " .$_SESSION['login_user'];
                    ?>
                  </a>
                </li>
              <?php
              }
              else
              { ?>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <!--Nav-Bar-End-->
      
    <div class="main">  
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/5.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
       
      <div class="containers">
          <div class="col-lg-3">
                <img src="img/2-BV.jpg" alt="" class="img-fluid">
                <div class="text-wrapper" style="text-align: center;">
                    <h2>Balasaheb Vikhe Patil</h2>
                    <p>Member Of The 14th Lok Sabha Of India.</p>
                </div>
          </div>
          <div class="col-lg-3">
              <img src="img/3-RV.jpg" alt="" class="img-fluid">
                <div class="text-wrapper" style="text-align: center;">
                    <h2>Namdar Radhakrishna Vikhe Patil</h2>
                    <p>Former Minister Of Housing, Govt. Of Maharashtra.</p>
                </div>
          </div>
          <div class="col-lg-3">
              <img src="img/4-SV.jpg" alt="" class="img-fluid">
                <div class="text-wrapper" style="text-align: center;">
                    <h2>Sujay Vikhe Patil</h2>
                    <p>Member Of The 17th Lok Sabha Of India.</p>
                </div>
          </div>
      </div><br><br>

      <div class="card-box">
        <div class="card mb-3">
          <img src="img/Principal_Dr_Shinde.jpg" class="card-img-top" alt="...">
          <div class="card-body" style="text-align: center;">
            <h5 class="card-title">Prof. (Dr.) G. B. Shinde  (Principal)</h5>
            <p class="card-text">Ph.D.(Chem. Engg.), M.E.(Chemical Engg.), MBA(HRM). Member of ISTE, IE, IACSIT, IAENG</p>
          </div>
        </div>
      </div>

      <hr class="hr-line">
      <footer class="container">
        <a href="#"> <i class="up-arrow"></i> &nbsp; Back To Top</a>
        
        <p class="decl">&copy; 2021 Company, Inc. &middot; Akshay Bodhare</p>
      </footer>


      

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>