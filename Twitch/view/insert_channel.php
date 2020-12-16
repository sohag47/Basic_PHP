<?php

    require_once "../model/config.php";
    if(isset($_POST['submit']))
    {    
        $name = $_POST['name'];
        $description = $_POST['description'];
        $profile_pic = $_POST['profile_pic'];
        $cover_pic = $_POST['cover_pic'];
        $user_id = $_POST['user_id'];

    
        $sql = "INSERT INTO twitch_user_info (name, description, profile_pic, cover_pic, user_id)
        VALUES ('$name', '$description', $profile_pic, $cover_pic, $user_id)";
    
        if (mysqli_query($link, $sql)) {
            echo "New record has been added successfully !";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
        mysqli_close($link);
    }

?>