<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Test</title>
</head>
<body>
    
<h1>This is my first PHP Page!</h1>

<?php
    echo "My first PHP Script";

    $txt = "PHP";
    $br = "<br><br>";
    echo "$br";
    echo "I love $txt!";

    eChO "$br";

    ECHo "This is spelled ECHo...";

    echo "$br";

    $color = "Red";
    echo "My car is " . $color;

    // Hello! I am a single line comment!

    /* 
    Hello! I am a multiple-lines comment.
    */

    echo "$br";

    $x = 10 + 1902;
    echo $x;

    echo "$br";

    $txt2 = "http://liam.ntig.tech/";
    echo "I love " . $txt2 . "!";

    echo "$br";

    $x = 5;
    $y = 10;

    function myTest() {
        global $x, $y;
        $y = $x + $y;
    }

    myTest();
    echo $y;

    echo "$br";

    function myTest2() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest2();
    echo $y;
    
    echo "$br";

    function MyTest3() {
        static $a = 0;
        echo $a;
        $a++;
    }
    
    //for = forloop
    for ($i=1; $i < 100; $i++) { 
        echo " ";
        myTest3();
    }

    echo "$br";

    $cities = array("Stockholm", "Gothenburg", "Malmö");

    $countries = ["France", "Stockholm", "Denmark"];

    echo ($cities[1]);
/*

    $k = 5985;
    var_dump($k);

    echo "$br";

    $cars = array("Volvo","Audi","BMW");
    var_dump($cars);

    

*/
?>
</body>
</html>