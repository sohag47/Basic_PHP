<?php
 require_once "./login_question2.php";
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
      <!--custom css>
      <link rel="stylesheet" href="./css/base.css"-->
    </head>

    <body>
      <style>
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
        <div class="container main-content">
          <div class="row">
            <div class="col col-sm col-md col-xl">
              <div class="card shadow">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h1 class="card-title">FACULTY</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <div class="card">
                        <div class="card-body">
                          <h6>Prof. Dr. S.M. Mahbub Ul Haque Majumder</h6> 
                            <p>Dean</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card">
                        <div class="card-body">
                          <h6>Professor Dr. Md. Fokhray Hossain </h6> 
                            <p> Associate Dean & Professor</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card">
                        <div class="card-body">
                          <h6>Md. Mahfujur Rahman</h6> 
                            <p>Lecturer</p>
                            <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-sm col-md col-xl">
              <div class="card shadow">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h1 class="card-title">LATEST NOTICE</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card-text">
                        <h4>Final Exam Routine Fall 2020 (Revised on 12-12-2020)</h4>
                        <p>
                          Civil Engineering
                        </p>
                        <h4> The Updated Routine for Final Examination</h4>
                        <p>
                          Software Engineering
                        </p>
                        <h4>The Updated Routine for Final Examination</h4>
                        <p>
                          Software Engineering
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-sm col-md col-xl">
              <div class="card shadow">
                <div class="card-body">
                  <h1 class="card-title">ABOUT</h1>
                  <div class="card-text">
                  <p>
                    Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Daffodil Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Daffodil International University came into being on 24th January 2002, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement.

                    To be among the very best in Bangladesh which is the most challenging goal, has been set for the university. This has done so because it is only through working we can achieve the very highest level of standards in curriculum, teaching, faculties and other activities that can realize the full potential of the academic community that is Daffodil International University. The vision reflects the service to the society. The mission is to pursue research, learning and teaching of international distinction for the benefit of the nation. 

                    Features of the setup vision and mission are striving for excellence, integrity and innovation in every aspect of activity; a strong collaborative approach; open and effective communications and an inclusive culture based on dignity, courtesy and respect.

                    Daffodil International University's mission is defined by its IT-based traditions of service and access. The University is serving the citizens of the country through its instructions, research, and outreach programs and preparing Bangladesh to respond successfully to the challenges of global economy. The University has proved that it provides students broad access to the institution's educational resources. (Possible suggestion: For educational programs in campus and beyond, the university is giving high priority on the use of new and outreach technologies available in the emerging information era.) The University has paid the highest priority to resource allocation to graduate and post graduate education and for future development of those areas that represent the traditional strengths, quality, reputation, and uniqueness of the institution which continue to effectively respond to the needs of students and other constituents. Consistent with this commitment, the university is emphasizing on high quality education including a comprehensive general education that imparts the broad knowledge, skills, and values which are essential to educate and make citizens responsible as well as to ensure specialized career preparation for students. In establishing the primacy of education which is the institutional mission, the University is assuring the escalating strength of its faculty with the realization that the quality of instruction is directly related to the quality of the University's faculty and the commitment of the faculty to ensure excellence in education.

                    The University provides Masters Programs in the areas of need and importance to the State and beyond. Graduate programs offer students opportunities for specialized advanced education in their chosen field and are important components of the services of the university. As research is essential to the mission of an IT- based university, Daffodil International University is preparing to develop its research programs. The primary focus of this research is to be directed to the solution of problems and the development of knowledge and technology important to the nation and to the quality of life of Bangladeshi citizens. The university's research programs are designed to make important contributions to instructional programs through the involvement of graduate and postgraduate students and the renewal of the faculty. Research will also provide the knowledge based for outreach programs.

                    Extension and outreach programs are fundamental to the IT-based mission because these programs somehow directly affect the lives of the entire world. The University is maintaining the strengths of its traditional outreach programs and increasingly involves the broader university in outreach programs that respond to the changing needs of the society in which we live. The university is continuing to seek new and innovative ways to reach out to the people it serves.

                    Daffodil International University is committed to ensure excellence in teaching at both the undergraduate and the master’s level. This commitment has been reflected in the diversity of courses offered and in the variety of instructional approaches that are offered. Increasingly, electronic technology is providing instructors with innovative and creative teaching strategies. The high academic aptitude of the university's incoming students also makes accelerated learning possible.

                    DIU offers bachelor degrees in the different spectrum of disciplines and provides the country's highly supported programs in many fields, including in IT, Telecommunications, Engineering and Business. Particularly strong programs can be found in the faculty of Business, Information Technology and Engineering and English Language.

                    Research is the means through which new knowledge is created and new information is developed. As such, research at Daffodil International University is an essential link in its three-prong mission of instruction, research and outreach. Successes among the varied research activities within each of its students and faculties continue to bolster Daffodil among the nation's top universities. Additionally, major efforts to increase the protection and commercialization of intellectual properties are central to Daffodil's continual drive for improvements in its committed mission.

                    These efforts mesh to create a teaching environment that enhances the country's economic, cultural, social and intellectual development and, at the same time, undergrads the university's undergraduate, masters and outreach programs. DIU emphasizes and encourages females to enroll for higher education. Our faculties present cutting-edge instruction in a personable setting, taking into account the many career challenges that women face in today's society. Female graduates of Daffodil International University are to be prepared for leadership roles in an ever-changing world.

                    This is a noticeable encouragement for the university observing the rapid growth of the university. The university has been started with 67 students registering in the first batch and more than 15,000 students have been enrolled till date. DIU is committed to provide standard education with all sorts of facilities to the students. Since the inception, the university is maintaining the commitment and it creates inspiration to the students and this is the key of the continuous increasing of the number of students.
                  </p>
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