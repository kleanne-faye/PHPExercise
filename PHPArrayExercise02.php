<?php
$arr = array(10, 11, 21, 31, 51, 20, 2, 3, 4);
$oddArray = array();
$evenArray = array();
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
}
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
?>

<?php
echo "The even elements are : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
?>

<br>

<?php
echo "\nArray of odd numbers : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>

</body>
</html>