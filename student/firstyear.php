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
  <style>
      .main .card
      {
        width: 80%;
        height: auto;
        margin-top: 50px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
      }
  </style>
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
      
    <div class="main"><br><br><br>
          <h1 class="dep-name">First Year Engineering Department</h1><br>
          <h3 class="dep-hod-name">Mr. Kailas P. Tambe</h3>
          <p class="dep-para">Head Of Department Of First Year Engineering</p>

          <d<div class="profile-area">
            <div class="py-5">
              <div class="row">
                    <div class="profile col-sm-4">
                        <main>
                            <section>
                                <div class="content">
                                    <img src="" alt="president">
                                    <aside>
                                        <h1>President Name</h1>
                                        <p>Class Name</p>
                                    </aside>
                                </div>
                            </section>
                        </main>
                    </div>
                    <div class="profile col-sm-4">
                        <main>
                            <section>
                                <div class="content">
                                    <img src="" alt="Vice-president">
                                    <aside>
                                        <h1>Vice President Name</h1>
                                        <p>Class Name</p>
                                    </aside>
                                </div>
                            </section>
                        </main>
                    </div>
                    <div class="profile col-sm-4">
                        <main>
                            <section>
                                <div class="content">
                                    <img src="" alt="Girls-Representive">
                                    <aside>
                                        <h1>Girls Representive Name</h1>
                                        <p>Class Name</p>
                                    </aside>
                                </div>
                            </section>
                        </main>
                    </div>
                </div>
            </div>
            
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="profile col-sm-4">
                            <main>
                                <section>
                                    <div class="content">
                                        <img src="" alt="Culturer-Secretary">
                                        <aside>
                                            <h1>Culturer Secretary Name</h1>
                                            <p>Class Name</p>
                                        </aside>
                                    </div>
                                </section>
                            </main>
                        </div>
                        <div class="profile col-sm-4">
                            <main>
                                <section>
                                    <div class="content">
                                        <img src="" alt="Sport-Co-ordinator">
                                        <aside>
                                            <h1>Sport Co-ordinator Name</h1>
                                            <p>Class Name</p>
                                        </aside>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <section id="wrap">
            <div class="content">
                <div class="tab">
                    <button class="tablinks active" data-country="a">
                        <p data-title="a">Div. A</p>
                    </button>
                    <button class="tablinks" data-country="b">
                        <p data-title="b">Div. B</p>
                    </button>
                    <button class="tablinks" data-country="c">
                        <p data-title="c">Div. C</p>
                    </button>
                    <button class="tablinks" data-country="d">
                        <p data-title="d">Div. D</p>
                    </button>
                </div>
                <div class="wrapper">
                    <div id="a" class="wrapper_content active">
                        <h3>Div. A</h3>
                        <p>Class Teacher is :-</p>
                        <p>Class Representive is (CR) :-</p>
                    </div>
                    <div id="b" class="wrapper_content">
                        <h3>Div. B</h3>
                        <p>Class Teacher is :-</p>
                        <p>Class Representive is (CR) :-</p>
                    </div>
                    <div id="c" class="wrapper_content">
                        <h3>Div. C</h3>
                        <p>Class Teacher is :-</p>
                        <p>Class Representive is (CR) :-</p>
                    </div>
                    <div id="d" class="wrapper_content">
                        <h3>Div. D</h3>
                        <p>Class Teacher is :-</p>
                        <p>Class Representive is (CR) :-</p>
                    </div>
                </div>
            </div>
        </section>

        <!--CR => Class Representive-->
        <!--GR => Girls Representive-->
        <!--T => Treasurer-->
        <!--CS => Culturer Secretary-->

        <hr class="hr-line">
        <footer class="container">
            <a href="#"> <i class="up-arrow"></i> &nbsp; Back To Top</a>
            <p class="decl">&copy; 2021 Company, Inc. &middot; Akshay Bodhare</p>
        </footer>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>