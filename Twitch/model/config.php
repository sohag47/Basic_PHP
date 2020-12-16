<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'streamer');


    // Create connection
    //$conn = new mysqli($servername, $username, $password, $database);
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
     //Check connection
    /*
     if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    print("Connected successfully");
    print($database)
    */
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    /*
        else{
            
                print("Connected successfully <br>");
                print(DB_NAME);
        }
    */
    
    
?>