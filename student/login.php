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
      
    <div class="main"><br><br><br>
        <div class="login_container">
            <div class="d-flex justify-content-center h-100">
                <div class="card" style="height:auto;">
                    <div class="card-header">
                        <h3>Log-In</h3>
                        <div class="d-flex justify-content-center social-icon">
                            <span><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                          <form action="" name="login" method="POST">
                            <div class="input-group form-group">
                                <div class="input-groups">
                                    <span class="input-group-text"><i class="fa fa-user" style="margin-left: 7px;"></i></span>
                                </div>
                                <input type="phone" class="form-control" name="uniqueid" placeholder="Unique Id" required>
                            </div><br>
                            <div class="input-group form-group">
                                <div class="input-groups">
                                    <span class="input-group-text"><i class="fa fa-user" style="margin-left: 7px;"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div><br>
                            <div class="input-group form-group">
                                <div class="input-groups">
                                    <span class="input-group-text"><i class="fa fa-key" style="margin-left: 7px;"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="login_row remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group form_btn">
                                <input type="submit" value="Login" name="submit" class="btn login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex sign_links login_footer">
                            Don't have an account?<a href="signup.php">Sign-Up</a>
                        </div>
                        <div class="d-flex password_links login_footer">
                            <a href="forgetpassword.php">Forgot Password</a>
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

<?php
  if(isset($_POST['submit']))
  {
    $count=0;
    $res=mysqli_query($db, "SELECT * FROM `students` WHERE username='$_POST[username]' && password='$_POST[password]' && unique_id=$_POST[uniqueid] ;");
    $count=mysqli_num_rows($res);
    if($count==0)
    {
      ?>
      <script type="text/javascript">
        alert("Please check unique id, username & passsword which is correct or not!");
      </script>
      <?php
    }
    else
    {
      $_SESSION['login_user'] = $_POST['username'];
      ?>
      <script type="text/javascript">
        window.location="index.php";
      </script>
      <?php
    }
  }
?>
  </body>
</html>