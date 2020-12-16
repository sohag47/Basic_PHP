<?php
 require_once "./login_question2.php";
    
    session_unset();
    #print_r($_SESSION);
    print("Logout Successfully!!!");

    session_destroy();
    header("Location: home_question3.php");
?>