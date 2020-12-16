
<?php
 require_once "../view/loginview.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php session test</title>
</head>
<body>
    <?php 
        #print_r($_SESSION);
        print("<h1>User Name:&nbsp;".$_SESSION['username']."</h1>");
        print("<h1>User Mail:&nbsp;".$_SESSION['email']."</h1>");
    ?>
</body>
</html>