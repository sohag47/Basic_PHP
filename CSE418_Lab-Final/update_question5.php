<?php
    require_once "./model/config.php";
    $name = $username = $age = $password = "";
if(isset($_POST["id"]) && !empty($_POST["id"])){
    #$id = $_POST["id"];
    #$name = $_POST["name"];
    #$username = $_POST["username"];
    #$age= $_POST["age"];
    #$password = $_POST["password"];
   
    /*
    $sql = "SELECT * FROM user_info WHERE id= $id";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $id = $row['id'] ;
                    $name = $row['name'] ;
                    $username  = $row['username'] ;
                    $age =  $row['age'] ;
                    $password =  $row['password'] ;
                }
            
            // Free result set
            mysqli_free_result($result);
        }
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
    */
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="google" content="notranslate" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--add font awesome-->
    <script src="https://use.fontawesome.com/07ba2c9b73.js"></script>


    <!--Custom css design-->
    <link rel="stylesheet" href="../../static/css/login.css">

    <title>Create Account Page</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center baselink">
            <h1><a href="../question1">Question 5</a></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col col-sm-10 col-md-8 col-xl-6">
                <div class="card shadow-lg p-3 mb-5 rounded">
                    <form action="./edit_question5.php" method="post">
                        <div class="card-header text-center bg-dark text-light">
                            <div class="card-title">
                                <h1>Update User Info</h1>
                            </div>
                        </div>
                        <div class="card-body">
                        <section class="form-group">
                                <input
                                    name="id"
                                    type="number"
                                    class="form-control"
                                    value="<?php print($_GET["id"]) ?>"
                                    placeholder="Enter Your ID "
                                    required
                                    autofocus
                                />
                            </section>
                            <section class="form-group">
                                <input
                                    name="name"
                                    type="text"
                                    class="form-control"
                                    value="<?php print($_GET["name"]) ?>"
                                    placeholder="Enter Your Name"
                                    required
                                />
                            </section>
                            <section class="form-group">
                                <input
                                    name="username"
                                    type="text"
                                    class="form-control"
                                    value="<?php print($_GET["username"]) ?>"
                                    placeholder="User Name "
                                    required
                                />
                            </section>
                            <section class="form-group">
                                <input
                                    name="age"
                                    type="text"
                                    class="form-control"
                                    value="<?php print($_GET["age"]) ?>"
                                    placeholder="Enter your Age"
                                    required
                                />
                            </section>

                            <section class="form-group">
                                <input
                                    name="password"
                                    type="password"
                                    class="form-control"
                                    value="<?php print($_GET["password"]) ?>"
                                    placeholder="Password"
                                    required
                                />
                            </section>
                            <button type="submit" name="submit" value="Submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
