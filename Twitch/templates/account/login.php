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

    <title>LogIn Page</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center baselink">
            <h1><a href="../../base.php">Streamer</a></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col col-sm-10 col-md-8 col-xl-6">
                <div class="card shadow-lg p-3 mb-5 rounded">
                    <form action="../../view/loginview.php" method="post">
                        <div class="card-header text-center bg-dark text-light">
                            <div class="card-title">
                                <h1>Sign in</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <section class="form-group">
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    placeholder="Email "
                                    autocomplete="email"
                                    required
                                    autofocus
                                />
                            </section>

                            <section class="form-group">
                                <input
                                    name="password1"
                                    type="password"
                                    class="form-control"
                                    placeholder="Password"
                                    autocomplete="password1"
                                    aria-describedby="password-constraints"
                                    required
                                />
                                <!--button
                                    id="toggle-password"
                                    type="button"
                                    aria-label="Show password as plain text. Warning: this will display your password on the screen."
                                >
                                    Show password
                                </button-->
                                <div id="password-constraints">
                                    Eight or more characters, with at least one&nbsp;lowercase
                                    and one uppercase letter.
                                </div>
                            </section>
                            <button type="submit" name="signin" class="btn btn-dark" value="Submit">
                            Sign in
                            </button>
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