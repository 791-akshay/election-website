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
    .card.feedback-card
    {
      width:50%;
      margin-left:auto;
      margin-right:auto;
      background-color: #28a745!important;
    }
    .form-control
    {
      width:90%;
      margin-left:auto;
      margin-right:auto;
      background-color: #000;
      color:#fff;
      border:none;
    }
    h5.card-title
    {
      text-align: center;
      color:#fff;
      margin-bottom:20px
    }
    .btn
    {
      border:none;
      margin-top:8px;
      margin-left:3em;
    }
    .scroll
    {
      width: 100%;
      height: 150px;
      overflow: auto;
      padding-left: 12px
    }
    @media screen and (max-width: 500px)
    {
      .card.feedback-card
      {
        width: 92%;
        margin-top: -70px;
      }
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
      
    <div class="main" style="height: 690px;"><br><br><br><br><br>
      <div class="card feedback-card">
        <div class="card-body">
          <h5 class="card-title">If you have any suggestions or questions then please comment below...</h5>
          <form action="" method="POST">
            <textarea class="form-control" name="comment" placeholder="Write something..." rows="4"></textarea>
            <input type="submit" class="btn btn-sm btn-primary" name="submit" value="Comment">
          </form><br>
        </div>
        <div class="scroll">
          <?php
            if(isset($_POST['submit']))
            {
              $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
              if(mysqli_query($db,$sql))
              {
                $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                $res=mysqli_query($db,$q);
                echo "<table class='table table-hover'>";
                while($row=mysqli_fetch_assoc($res))
                {
                  echo "<tr>";
                    echo "<td>"; echo $row['comment']; echo "</td>";
                  echo "</tr>";
                }
              }
            }
            else
            {
              $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                $res=mysqli_query($db,$q);
                echo "<table class='table table-hover'>";
                while($row=mysqli_fetch_assoc($res))
                {
                  echo "<tr>";
                    echo "<td>"; echo $row['comment']; echo "</td>";
                  echo "</tr>";
                }
            }
          ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>

