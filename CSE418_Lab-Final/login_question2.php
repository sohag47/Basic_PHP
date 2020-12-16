<?php
    session_start();
    require_once "./model/config.php";
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // get data from login form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check email & password store in database
        $sql = "SELECT * FROM user_info WHERE username = '$username' and password = '$password' ";

        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                #print("Email: ".$row['email']."<br>");
                #print("Password: ".$row['password1']."<br>");
                if($username == $row['username']){
                    print("<br>Session Start<br>");
                    $_SESSION['username'] = $username;
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();

                    print("User Name:".$_SESSION['username']."<br>");
                    print("<br>Login Successfully!!!<br>");
                    print("Welcome to php world");
                    header("Location: home_question3.php");
                    

                    
                }else{
                    print("<h1>Your Login Name or Password is invalid</h1>");
                    header("Location: login_form_question11.php");
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
    //header("location: base.php");
    
    //session_unset();
    //print("<br>Session End!!!");
    //session_destroy();
    
?>