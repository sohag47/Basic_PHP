<?php
    require_once "./model/config.php";
    if(isset($_POST['submit']))
    {    
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        #$password2 = $_POST['password2'];
    
        $sql = "INSERT INTO user_info (id, name, username, age, password)
        VALUES ('$id', '$name', '$username', '$age', '$password')";
    
        if (mysqli_query($link, $sql)) {
            echo "New record has been added successfully !";
            #header("Location: home_question3.php");
            print("ID=".$id."<br>Name=".$name."<br>Username=".$username."<br>Age=".$age."<br>Password=".$password);
            
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
        mysqli_close($link);
    }

?>

