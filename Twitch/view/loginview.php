<?php
    session_start();
    require_once "../model/config.php";
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // get data from login form
        $email = $_POST['email'];
        $password1 = $_POST['password1'];

        // check email & password store in database
        $sql = "SELECT * FROM streamer_user_info WHERE email = '$email' and password1 = '$password1' ";

        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                #print("Email: ".$row['email']."<br>");
                #print("Password: ".$row['password1']."<br>");
                $username = $row['username'];
                if($email == $row['email']){
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $username;
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();

                    print($_SESSION['email']."<br>");
                    print($_SESSION['username']."<br>");
                    print("<br>Login Successfully!!!<br>");
                    print("Welcome to php world");

                    #header("location: ../templates/base.php".$email);
                }
                }
            }
            else{
                print("Your Login Name or Password is invalid");
            }
        }
    }    
    // Close connection
    mysqli_close($link);
    
        
    
   
   #session_start();
   /*
    if($_SERVER["REQUEST_METHOD"] == "POST")
        {    
            #$fname = $_POST['fname'];
            #$lname = $_POST['lname'];
            $email = $_POST['email'];
            $password1 = $_POST['password1'];
            #$password2 = $_POST['password2'];
        
            $sql = "SELECT id FROM twitch_user_info WHERE email = '$email' and password1 = '$password1' ";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);

            if($count == 1) {
                session_register("email");
                $_SESSION['login_user'] = $email;
                header("location: ../base.php");
            }
            else{
                $error = "Your Login Name or Password is invalid";
            }
            /*
                if (mysqli_query($link, $sql)) {
                    echo "New record has been added successfully !";
                    print("Login successfully !");
                    echo "$sql";
                } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($link);
                }
           
            mysqli_close($link);
        }
    */
?>
<!--a href="../templates/base.php"></a-->