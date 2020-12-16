<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>display colors</title>
</head>
<body>
    <?php
    $color = array('white', 'green', 'red');
    echo "A.  ";
    foreach ($color as $c1)
      {
      echo "$c1, ";
      }
    sort($color);
      echo "<ul>";
      echo "B.";
    foreach ($color as $c2)
      {
      echo "<li>$c2</li>";
      }
    echo "</ul>";
    ?>
</body>
</html>