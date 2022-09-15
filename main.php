<?php

#PHP exercise 1
$txt = "Twinkle, Twinkle little star \n"; 
echo $txt;

#First Echo
$twinkle = "Twinkle \n";
$star = "star \n";

echo $twinkle, $star;

#Second Echo
$one = "Stuart ";
$two = "Little\n";

echo $one, $two;

#Third Echo
$one = "Many hands make ";
$two = "the light work.\n";

echo $one, $two;


#PHP exercise 2
$x=10;
$y=7;

echo $x, " + " , $y , " = ", $x + $y;
echo "\n";
echo $x, " - ", $y, " = ", $x - $y;
echo "\n";
echo $x, " * ", $y, " = ", $x * $y;
echo "\n";
echo $x, " / ", $y, " = ", $x / $y;
echo "\n";
echo $x, " % ", $y, " = ", $x % $y;
echo "\n";

#PHP exercise 3
$variable = 8;
echo "Value is now ", $variable , ".";
echo "\n";
$variable += 2;
echo "Add 2. Value is now ", $variable, ".";
echo "\n";
$variable -= 4;
echo "Add 2. Value is now ", $variable, ".";
echo "\n";
$variable *= 5;
echo "Add 2. Value is now ", $variable, ".";
echo "\n";
$variable /= 3;
echo "Add 2. Value is now ", $variable, ".";
echo "\n";
++$variable ;
echo "Increment value by one. Value is now ", $variable, ".";
echo "\n";
--$variable ;
echo "Decrement value by one. Value is now ", $variable, ".";


#PHP exercise 4
$azk = "Harry";
$age = 28;

var_dump($azk);
echo "\n";

print_r($azk);
echo "\n";

var_dump($age);

$azk = NULL;
var_dump($azk);

?>
