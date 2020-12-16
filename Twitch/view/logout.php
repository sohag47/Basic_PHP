<?php
 require_once "../view/loginview.php";
    
    session_unset();
    #print_r($_SESSION);
    print("Logout Successfully!!!");

    session_destroy();
?>