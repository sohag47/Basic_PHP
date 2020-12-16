<?php

    require_once "../model/config.php";
    if(isset($_POST['submit']))
    {    
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
    
        $sql = "INSERT INTO streamer_user_info (fname, lname, username, email, password1, password2)
        VALUES ('$fname', '$lname', '$username', '$email', '$password1', '$password2')";
    
        if (mysqli_query($link, $sql)) {
            echo "New record has been added successfully !";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
        mysqli_close($link);
    }

?>