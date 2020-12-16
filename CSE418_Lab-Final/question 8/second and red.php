<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>print second and red</title>
</head>
<body>
    <?php
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ), 
    "holes" => array ( "First", 5 => "Second", "Third"));
    
      echo $color["holes"][5]."\n";
      echo $color["color"]["a"]."\n";
  ?>
</body>
</html>