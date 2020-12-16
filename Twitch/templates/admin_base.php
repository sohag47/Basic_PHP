<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="google" content="notranslate" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <!--add font awesome-->
     <script src="https://use.fontawesome.com/07ba2c9b73.js"></script>
     
     
      <title>
        Admin Home Page
      </title>
      <!--custom css-->
      <link rel="stylesheet" href="../static/css/base.css">
    </head>
    <body>
        <!--Navbar start-->
        <nav class="navbar navbar-expand-lg shadow fixed-top" id="mainNav">
            <a class="navbar-brand" href="./base.php">
                &nbsp; Twitch 
            </a>
            <div>
                <ul class="navbar-nav navstyle">
                    <li class="nav-item">
                        <a class="nav-link" href="./admin_base.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin/userlist.php">User List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin/create_channel.php">Create Channel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin/create_video.php">Create Video</a>
                    </li>
                    
                </ul>
            </div> 
            <div class="search-box">
                <form action="" class="search-form">
                    <input type="text" value="" class="form-control" placeholder=" ex: music, games...">
                    <button class="btn btn-link search-btn">
                        <i class="fa fa-search fa-lg"></i>
                    </button>
                </form>
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
                    <ul class="nav navbar-nav navbar-right navstyle">
                        <li class="nav-item dropdown right">
                            <a class="nav-link dropdown-toggle" 
                                href="#"
                                id="userMenu"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >
                                <?php
                                #$_SESSION['login_user'] = $email;
                                #print($_SESSION['login_user']);
                                print("sohag");
                                ?>
                                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                                <a class="dropdown-item" href="./account/login.php">Sign In</a>
                                <a class="dropdown-item" href="./account/signup.php">Register</a>
                            </div>
                        </li>
                    </ul>
                </div>
            <!--Navbar end-->  
        </nav>
        <!--Navbar end-->

        <!--main content start-->
        <div class="maincontent">
            <div class="container-fluid">
                
            </div>
        </div>
        <!--main conetent end-->

        <!--footer start-->
        <footer>
            <p>
              Copyright &copy; 2020 Sohag All Right Reserved
            </p>
          </footer>
        <!--footer end-->
        <script>
            $(document).ready(function(){
                $("#mycarousel").carousel( { interval: 2000 } );
                $("#carouselButton").click(function(){
                  if ($("#carouselButton").children("span").hasClass('fa-pause')) {
                      $("#mycarousel").carousel('pause');
                      $("#carouselButton").children("span").removeClass('fa-pause');
                      $("#carouselButton").children("span").addClass('fa-play');
                  }
                  else if ($("#carouselButton").children("span").hasClass('fa-play')){
                    $("#mycarousel").carousel('cycle');
                    $("#carouselButton").children("span").removeClass('fa-play');
                    $("#carouselButton").children("span").addClass('fa-pause');                    
                  }
                });
              });
        </script>
    
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>