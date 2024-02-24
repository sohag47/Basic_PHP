<?php 

$DB_NAME = "learning_db";
$DB_HOST = "127.0.0.1";
$DB_PORT = "3306";
$DB_USERNAME = "root";
$DB_PASSWORD = "";

// Create connection
$DB_CONNECTION = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);
if ($DB_CONNECTION->connect_error) {
    die("Connection failed: ". $DB_CONNECTION->connect_error);
}else{
    echo "Connected successfully \n";
}

// try {
    
// } catch (Exception $error) {
//     //throw $th;
//     echo "Something went wrong!".$error->getMessage();
// }
$sql = "SELECT * FROM users";
$query_result = $DB_CONNECTION->query($sql);
printf("Select returned %d rows.\n", $query_result->num_rows);
$DB_CONNECTION->close();
?>