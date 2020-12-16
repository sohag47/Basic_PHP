<!DOCTYPE html>
<html>
    <head>
        <title>PHP practices</title>
    </head>
    <body>
    <?php
        # single line comment
        // single line comment
        /*
            This is a multiple-lines comment block
            that spans over multiple
            lines
        
        $x = 5;
        $y = 10;
        $colors = array("red", "green", "blue", "yellow");
        $age = array("peter"=>"35", "Ben"=>"37", "key"=>"value");

        echo("<h2>PHP is Fun!</h2>");
        echo("Hello world!<br>");
        echo ("I'm about to learn PHP!<br>");
        print("This "."string "."was "."made "."with multiple parameters."."<br>");
        print("It is looks like a python syntex ".$x);
    
        foreach ($colors as $value) {
        print("<Br>".$value);
        }
        print("<br>");
        foreach ($age as $kye => $value) {
            print($kye."=".$value."<br>");
        }
        
        function myTest() {
        global $x, $y;
        $y = $x + $y;
       
        }

        myTest();
        print("<br>".$y) // outputs 15
        */
        echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
            ?> 
    </body>
</html>