<?php
#PHP exercise 5
$around = "around";
echo 'What goes ', $around , ', comes ', $around, '.';
echo "\n";

#PHP exercise 6
for ($x = 1; $x <= 12; $x++){
    $result = $x * $x;
    
echo "$x * $x = $result \n";
}

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
