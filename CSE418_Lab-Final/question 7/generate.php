<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>random number generator</title>
</head>
<body>
  <?php
    $ran=range(1,100);
    shuffle($ran);
      for ($i=0; $i< 20; $i++)
        {
       	 echo $ran[$i].' ';
        }
    	echo "\n"
  ?>
</body>
</html>