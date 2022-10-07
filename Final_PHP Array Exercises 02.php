<?php
#No. 1_Array Duplication
$mm = 1;
$counter = 0;


$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("Input $num elements in the array: \n");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
}
for($i=0;$i<$num; $i++)
        {
		$arrNum2[$i]=$arrNum[$i];
		$arrNum3[$i]=0;
        }
        
for($i=0;$i<$num; $i++)
        {
		for($j=0;$j<$num;$j++)
			{
				if($arrNum[$i]==$arrNum2[$j])
				{
				$arrNum3[$j]=$mm;
				$mm++;
				}
			}
		$mm= 1;
        }	
 for($i=0; $i<$num; $i++)
    {
      if($arrNum3[$i]==2){
          $counter++;
      }  
    }        

echo ("Total number of duplicate elements found in the array is : ");
echo $counter;
echo "\n";

#No.2_Array Frequency
echo("Input the number of elements you want to store in an array: ");
$number = readline();


$element[]= $number;
for ($i = 0; $i < $number; $i++) {
$element[$i] = readline("Enter element " . $i .": ");
}

$hello = explode(' ', readline());
    
 
echo "\n" ;
echo "The frequency of all elements in the "; 
print_r(array_count_values($element));

#No. 3_Array Odd and Even
$j = 0;
$k = 0;

$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("Input $num elements in the array: \n");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
}

  for($i=0;$i<$num;$i++)
    {
    if ($arrNum[$i]%2 == 0)
    {
       $arrNum2[$j] = $arrNum[$i];
       $j++;
    }
    else
    {
       $arrNum3[$k] = $arrNum[$i];
       $k++;
    }
    }

echo("The Even elements are: ");
echo "\n";
    for($i=0;$i<$j;$i++)
    {
    echo $arrNum2[$i]." ";
    }
echo "\n";
echo ("The Odd elements are: ");
echo "\n";
    for($i=0;$i<$k;$i++)
    {
    echo" ". $arrNum3[$i]." ";
    }

?>