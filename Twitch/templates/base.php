<?php
 require_once "../view/loginview.php";
?>
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
        Base Page
      </title>
      <!--custom css-->
      <link rel="stylesheet" href="../static/css/base.css">
    </head>
    <body>
        <!--Navbar start-->
        <nav class="navbar navbar-expand-lg shadow fixed-top" id="mainNav">
            <a class="navbar-brand" href="./base.php">
                &nbsp; Streamer 
            </a>
            <div>
                <ul class="navbar-nav navstyle">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Esports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div> 
            <!--side bar start-->
            <div class="container-fluid">
                <div id="mySidenav" class="sidenav">
                    <button class="sidebar-btn">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                        &nbsp;  Home 
                    </button>
                    <button class="sidebar-btn">
                        <i class="fa fa-tint fa-lg" aria-hidden="true"></i>
                        &nbsp;  Trending
                    </button>
                    <button class="sidebar-btn">
                        <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                        &nbsp; Subscriptions
                    </button>
                    <button class="sidebar-btn">
                        <i class="fa fa-history fa-lg" aria-hidden="true"></i>
                        &nbsp;  History 
                    </button>
                    <hr>
                    <h5 style="padding-left: 10px;">SUBSCRIPTIONS</h5>
                    <ul class="subscriptionsstyle">
                        <li>Epic Music World</li>
                        <li>TheBlackRoseClan</li>
                        <li>Samuel Kim Studios</li>
                    </ul>
                    <div style="margin-top: 450px; position: fixed; bottom: 0;"></div>
                </div>
            </div>
            <!--side bar end-->
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
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "<ul class='nav navbar-nav navbar-right navstyle'> ";
                            echo'<li class="nav-item dropdown right">';
                                echo '<a class="nav-link dropdown-toggle" href="#"id="userMenu"data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">';
                                    print($_SESSION['username']);                  
                                    echo '<i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>';
                                echo '</a>';
                                echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">';
                                    echo '<a class="dropdown-item" href="../view/logout.php">Sign Out</a>';
                                    
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
                                echo '<a class="dropdown-item" href="./account/login.php">Sign In</a>';
                                echo '<a class="dropdown-item" href="./account/signup.php">Register</a>';
                            echo '</div>';
                        echo '</li>';
                    echo '</ul>';
                    }
                    ?>
                </div>
            <!--Navbar end-->  
        </nav>
        <!--Navbar end-->

        <!--main content start-->
        <div class="maincontent">
            <div class="container-fluid">
                <!--first section start-->
                <!--div class="row carstyle">
                    <div class="row">
                        <div class="col">
                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="./img/img2.jpg" alt="alberto">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h2>The Original Neapolitan   
                                                <span class="badge badge-danger">
                                                  Hot
                                                </span>
                                                <span class="badge badge-pill badge-secondary">$4.99</span>
                                              </h2>
                                              <p class="d-none d-sm-block">
                                                The Neapolitan pizza is the original pizza that left Italy and arrived with Italian immigrants in the United States. 
                                                This is the pizza that launched American pizza fanaticism. In fact, Italy has sought UNESCO heritage protection for 
                                                the Neapolitan pizza. 
                                                The dough is made from Tipo 00 wheat flour (Italian milled) and the crust is thin, crunchy, and baked in a wood-fired oven. 
                                                The pizza should have minimal toppings—perhaps San Marzano tomato sauce, buffalo mozzarella cheese, and basil—because too 
                                                much sauce or cheese will weigh down the crust and make it soggy.
                                              </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="./img/img3.jpg" alt="alberto">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h2>Weekend Grand Buffet
                                                <span class="badge badge-danger">
                                                New
                                                </span>
                                                
                                            </h2>
                                           
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="./img/img1.jpg" alt="alberto">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h2 class="mt-0">Alberto Somayya
                                            </h2>
                                            <h4>Executive Chef</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1"></li>
                                    <li data-target="#mycarousel" data-slide-to="2"></li>
                                </ol>
                                <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                            <div class="btn-group" id="carouselButton">
                                <button class="btn btn-danger btn-sm" id="carousel-pause">
                                    <span class="fa fa-pause"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div-->
            
                <!--first section end-->
                <!--second section start-->
                <!--Live channels start-->
                <div class="row livechannels">
                    <h5 class="lctitle">Live channels we think you’ll like</h5>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/'GREATEST SUCCESS STORY' (ft.Jack Ma) - Motivational video Jack Ma speech Inspirational video.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <a class="livestyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                   LIVE NOW
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="livestyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    NEW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/'GREATEST SUCCESS STORY' (ft.Jack Ma) - Motivational video Jack Ma speech Inspirational video.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row livestyle">
                                            <div class="col-xl-6">
                                                <a class="livestyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    LIVE NOW
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="livestyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                   NEW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/'GREATEST SUCCESS STORY' (ft.Jack Ma) - Motivational video Jack Ma speech Inspirational video.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row livestyle">
                                            <div class="col-xl-6">
                                                <a class="livestyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    LIVE NOW
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="livestyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    NEW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/'GREATEST SUCCESS STORY' (ft.Jack Ma) - Motivational video Jack Ma speech Inspirational video.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title text-light">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row livestyle">
                                            <div class="col-xl-6">
                                                <a class="livestyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    LIVE NOW
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="livestyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    NEW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Live channels end-->
                <!--Recommended channels-->
                <div class="row livechannels">
                    <h5 class="lctitle">Recommended channels</h5>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/Ondhokar (তুমি ছেড়েও আমায় কেনো ছেড়ে গেলে না) l Avraal Sahir Feat Azad Rahi & Sheniz l Ondhokar Song.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    8.1M views
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    5 years ago
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/K-391 & Alan Walker - Ignite (feat. Julie Bergan &.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    8.1M views
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    5 years ago
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/Hard work করলেই Success আসবে আপনার জীবনে । Sanjay Bhattacharya Josh Talks Bangla.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                    <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                        Epic Music World
                                    </a>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <a class="recommendedstyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                8.1M views
                                            </a>
                                        </div>
                                        <div class="col-xl-6">
                                            <a class="recommendedstyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                5 years ago
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="cardspace">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <video class="videostyle" controls>
                                            <source src="./video/9 year old Magician Aidan wins over the judges! Ir.mp4" type="video/mp4">
                                        </video>
                                        <h5 class="card-title">Some quick example.</h5>
                                        <a class="channelname" href="http://" target="_blank" rel="noopener noreferrer">
                                            Epic Music World
                                        </a>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle1" href="http://" target="_blank" rel="noopener noreferrer">
                                                    8.1M views
                                                </a>
                                            </div>
                                            <div class="col-xl-6">
                                                <a class="recommendedstyle2" href="http://" target="_blank" rel="noopener noreferrer">
                                                    5 years ago
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Recommended channels end-->
                <!--section section end-->


                <!--last section Start-->
                <div class="row lastsection">
                    <div class="row">
                        <div class=" lsectionitem">
                            <h4 class="fhstyle">Movie Categories</h4>
                            <ul class="flstyle">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Animation</a></li>
                                <li><a href="#">Comedy</a></li>
                                <li><a href="#">Crime</a></li>
                            </ul>
                        </div>
                        <div class=" lsectionitem">
                            <h4 class="fhstyle">TV Series</h4>
                            <ul class="flstyle">
                                <li><a href="#">Valentine Day</a></li>
                                <li><a href="#">Underrated Comedies</a></li>
                                <li><a href="#">Scary TV Series</a></li>
                                <li><a href="#">Best 2018 Documentaries</a></li>
                                <li><a href="#">Classic Shows</a></li>
                            </ul>
                        </div>
                        <div class=" lsectionitem">
                            <h4 class="fhstyle">Support</h4>
                            <ul class="flstyle">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Watch on TV</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--last section end-->
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