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
        <br><br>
        <div class="row-1">
            <h1 class="main-heading">Sir Visvesvaraya Institute Of Technology</h1>
            <h3 class="main-sub-heading">Departments</h3><br>
            <div class="card mb-3 card-1">
                <div class="row g-0">
                    <div class="col-md-4 firstyear">
                        <img src="img/K_P_TAMBE.jpg" class="imgs">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Mr. Kailas P. Tambe</h5>
                        <p class="card-text">FE Head & Assistant Professor M.Sc (Chemistry)
                            Academic work of First year Engineering is to be planned and monitored by Dean Academic. As per the syllabus prescribed by Savitribai Phule Pune University, First year Engineering students have common curriculum irrespective of specific branches chosen by them.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-2">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Prof. (Dr.) Santosh Shelke (Professor)</h5>
                        <p class="card-text">HOD Of Mechanical Department PhD (NITW), ME (Design), BE (Mechanical) Member of ISTE, SM-HKSME, FISME, FISRD, FSIESRP.
                            To Impart quality education, complex problem solving skills, take up global challenges and role of mechanical engineer towards society which ensure students to become Professionals.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-4 Mechanical">
                        <img src="img/MECH2_HOD1.jpg" class="imgs">
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-1">
                <div class="row g-0">
                    <div class="col-md-4 Chemical">
                        <img src="img/CHEM_HOD.jpg" class="imgs">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Dr. B. L. Pangarkar</h5>
                        <p class="card-text">HOD Of Chemical Department M.E. (Chemical) Ph.D (Chem. Tech.). To impart quality technical education in the field of Chemical Engineering.To produce quality Chemical Engineer and Scientist as per the need of industry and society.
                            To develop entrepreneurship and leadership skill of the students.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-2">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Prof. R. S. Bhalerao (Asst. Professor)</h5>
                        <p class="card-text">HOD Of IT Department M. E (Computer Engineering). To uplift students of PRES through high quality educations in IT, by catering the needs of students by imparting world class education and prepare the students and faculty to solve
                            challenging real worlds problems through strong research and developments.</p>
                        </div>
                    </div>
                    <div class="col-md-4 IT">
                        <img src="img/IT_HOD.jpg" class="imgs">
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-1">
                <div class="row g-0">
                    <div class="col-md-4 Computer">
                        <img src="img/HOD_COMP1.jpg" class="imgs">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Prof. Shedge K. N. (Asst. Professor)</h5>
                        <p class="card-text">HOD Of Computer Department M. Tech (CSE). Develop Department of Computer Engineering into center of excellence through imparting technical education of international standards and research in the field of Computer Engineering.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-2">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Prof. Shaikh Nadeem Bhaimiya (Asst. Professor)</h5>
                        <p class="card-text">HOD Of Electrical Department BE Electrical, ME Electrical. To provide knowledge based technology and Service to meet the needs of society globally. 
                            To built national capabilities for excellent energy management and audit, and explore non-conventional energy sources.</p>
                        </div>
                    </div>
                    <div class="col-md-4 Electrical">
                        <img src="img/Electrical_HOD.jpg" class="imgs">
                    </div>
                </div>
            </div>
            <div class="card mb-3 card-1">
                <div class="row g-0">
                    <div class="col-md-4 E&TC">
                        <img src="img/HODETC.jpg" class="imgs">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Prof. Ulhas V. Patil (Asst. Professor)</h5>
                        <p class="card-text">HOD Of E & TC Department M.E, Ph.D (Pursuing). The student should be able to understand basic knowledge in the field of Electronics and Telecommunication Engineering. 
                            The students should be works effectively as a member of a team in multi-disciplinary streams. To motivate students to adopt the innovation in long life learning.</p>
                        </div>
                    </div>
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