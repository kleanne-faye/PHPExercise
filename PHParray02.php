<?php

#Write a PHP script to count a total number of duplicate elements in an array.
$input= array(1,1,2,3,3);

$count_values = array();
foreach ($input as $a) {

     @$count_values[$a]++;

}
echo 'Total number of different elements found in the array is/are: '.count ($count_values);
print_r($count_values);
echo "\n";

#2_Write a PHP script to count the frequency of each element of an array.
function count_array_values($my_array, $match) 
{ 
    $count = 0; 
    
    foreach ($my_array as $key => $value) 
    { 
        if ($value == $match) 
        { 
            $count++; 
        } 
    } 
    
    return $count; 
} 

$element = array("c1"=>"25", "c2"=>"12", "c3"=>"43", "c4"=>"25");

echo "The frequency of all elements of an array:";"\n";

echo "\n"."25 occurs ".count_array_values($element, "25"). " time(s)."."\n"; 
echo "12 occurs ".count_array_values($element, "12"). " time(s)."."\n"; 
echo "43 occurs ".count_array_values($element, "43"). " time(s)."."\n";
echo "\n";

#3_Write a PHP script to separate odd and even integers in separate arrays.
#<?php
$arr = array(25,47,42,56,32);
$oddArray = array();
$evenArray = array();

echo "Given Array: \n";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
echo "\n";
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "\nThe Even elements are :: \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "\nThe Odd elements are : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>