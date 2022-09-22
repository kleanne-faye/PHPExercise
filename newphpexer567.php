<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercise #2</title>
</head>
<body>
	<h1>PHP Exercise</h1>
    <p><b> Exercise 5 </b></p>

<?php
#PHP exercise 5
$around = "around";
echo 'What goes ', $around , ', comes ', $around, '.';
echo "\n";

?>
<p><b> Exercise 6 </b></p>

<?php
#PHP exercise 6
for ($count = 1; $count < 13; $count++){
  $squared = $count * $count;
  print("$count * $count = $squared \n");
  echo "<br>";
}
?>

<p><b> Exercise 7 </b></p>
<?php
#PHP exercise 7
echo "<table border=\"1\">";

    for ($row=1; $row<=7; $row++){
        echo "<tr>\n";
        
        for ($col=1; $col<=7; $col++){
        $x=$col * $row; 
        echo "<td>$x</td>\n";
        }
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>