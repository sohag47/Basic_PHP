<?php
 require_once "./login_question2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--add font awesome-->
       <script src="https://use.fontawesome.com/07ba2c9b73.js"></script>
    
    <!--style type="text/css">
        
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>

<body>
<style>
    .wrapper{
        width: 70%;
        margin: 0 auto;
    }
        .shadow {
          box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.1);
        }
        .footer {
          margin-top: 20px;
          padding-bottom: 5px;
          padding-top: 10px;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color:#2C3E50;
          color: white;
          text-align: center;
        }
        .main-content{
          padding-left: 100px;
          padding-right: 100px;
        }
        .card{
          margin-top: 20px;
          padding-right: 20px;
          padding-left: 20px;
          border-radius: 20px;

        }
        .card-title{
          background-color:#2C3E50;
          color: white;
          text-align: center;
          border-radius: 20px;
        }
        </style>
    <!--Navbar start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home_question3.php">DIU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./userlist_question1.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Faculty</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">NoticeBoard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                    </ul>
                
                </div>
            </div>
            
            
            <!--Navbar start-->
            <button class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "<ul class='nav navbar-nav navbar-right navstyle'> ";
                            echo'<li class="nav-item dropdown right">';
                                echo '<a class="nav-link dropdown-toggle" href="#"id="userMenu"data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">';
                                    print($_SESSION['username']);                 
                                    echo '&nbsp; <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>';
                                echo '</a>';
                                echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">';
                                    echo '<a class="dropdown-item" href="./logout_question6.php">Sign Out</a>';
                                    
                                echo '</div>';
                            echo '</li>';
                        echo '</ul>';
                    }
                    else{
                        echo "<ul class='nav navbar-nav navbar-right navstyle'> ";
                        echo'<li class="nav-item dropdown right">';
                            echo '<a class="nav-link dropdown-toggle" href="#"id="userMenu"data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">';                 
                                echo '<i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>';
                            echo '</a>';
                            echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">';
                                echo '<a class="dropdown-item" href="./login_form_question11.php">Sign In</a>';
                                echo '<a class="dropdown-item" href="./Registration_form_question11.php">Register</a>';
                            echo '</div>';
                        echo '</li>';
                    echo '</ul>';
                    }
                    ?>
            </div>
            <!--Navbar end-->  
        
        </nav>
        <!--Navbar end-->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-header clearfix">
                                        <h2 class="card-title">User Details</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                    // Include config file
                                    require "./model/config.php";
                                    
                                    // Attempt select query execution
                                    $sql = "SELECT * FROM user_info";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table class='table table-bordered table-striped'>";
                                                echo "<thead>";
                                                    echo "<tr>";
                                                        echo "<th>ID</th>";
                                                        echo "<th>Name</th>";
                                                        echo "<th>User Name</th>";
                                                        echo "<th>Age</th>";
                                                        echo "<th>Password</th>";
                                                        echo "<th>Action</th>";
                                                    echo "</tr>";
                                                echo "</thead>";
                                                echo "<tbody>";
                                                while($row = mysqli_fetch_array($result)){
                                                    echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td>" . $row['name'] . "</td>";
                                                        echo "<td>" . $row['username'] . "</td>";
                                                        echo "<td>" . $row['age'] . "</td>";
                                                        echo "<td>" . $row['password'] . "</td>";
                                                        echo "<td>";
                                                            echo "<a href='./update_question5.php?id=". $row['id'].'&name='.$row['name'].'&username='.$row['username'].'&age='.$row['age'].'&password='.$row['password'] ."'  class='btn btn-warning' style='margin-left: 20px;'>Update</a>";
                                                            echo "<a href='./delete_question4.php?id=". $row['id'] ."'  class='btn btn-danger' style='margin-left: 20px;'>Delete</a>";
                                                        echo "</td>";
                                                    echo "</tr>";
                                                }
                                                echo "</tbody>";                            
                                            echo "</table>";
                                            // Free result set
                                            mysqli_free_result($result);
                                        } else{
                                            echo "<p class='lead'><em>No records were found.</em></p>";
                                        }
                                    } else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                 
                                    // Close connection
                                    mysqli_close($link);
                                }
                                
                                else{
                                    echo "<h1>Please Login First</b>";
                                    echo ' <a href="./login_form_question11.php" class="btn btn-success">LogIn</a>';
                                }
                                
                                    ?>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <!--footer start-->
    <footer class="footer">
            <p>
              Copyright &copy; 2020 Sohag All Right Reserved
            </p>
        </footer>
        <!--footer end-->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>