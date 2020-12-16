<?php
    require_once "./model/config.php";
    if(isset($_POST['submit']))
    {    
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $age = $_POST['age'];
        $password = $_POST['password'];
    
        $sql = "UPDATE user_info SET name='$name', username='$username', age='$age' WHERE id='$id'";
    
        if (mysqli_query($link, $sql)) {
            #echo "Record has been Updated successfully !<br>";
            #print("ID=".$id."<br>Name=".$name."<br>Username=".$username."<br>Age=".$age."<br>Password=".$password);
            header("Location: home_question3.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
        mysqli_close($link);
    }

?>