<?php

function plain_sort(){
	$x = array(7,5,9,2,11,8);
	$y = array();
	$temp = 0;

	for($j=0; $j<count($x); $j++)
	{
		$min = $x[$j];
		for($i=$j;$i<count($x); $i++) //counts from leftmost unsorted
		{
			if($x[$i] <= $min) //find min
			{
				$min = $x[$i];
				$min_index = $i;
			}
		}
		$y[] = $min; //push min value to new array y
		$temp = $x[$j]; //switch leftmost unsorted value with minimum
		$x[$j] = $min;
		$x[$min_index] = $temp;
	}
	var_dump($y);
}

function no_new_array_sort(){
	$z = array();
	for($k=0;$k<=100;$k++)
	{
		$z[]=rand(0,10000);
	}

	$temp = 0;

	for($j=0; $j<count($z); $j++)
	{
		$min = $z[$j];
		for($i=$j;$i<count($z); $i++) //counts from leftmost unsorted
		{
			if($z[$i] <= $min) //find min
			{
				$min = $z[$i];
				$min_index = $i;
			}
		}
		$temp = $z[$j]; //switch leftmost unsorted value with minimum
		$z[$j] = $min;
		$z[$min_index] = $temp;
	}
	var_dump($z);
}

function min_and_max(){
	$a = array();
	for($b=0;$b<=10000;$b++)
	{
		$a[]=rand(0,10000);
	}


	for($j=0; $j<count($a)/2; $j++)
	{
		$right_count = count($a)-1-$j;
		$min = $a[$j];
		$max = $a[$right_count];
		for($i=$j;$i<=$right_count; $i++) //counts from leftmost unsorted
		{
			if($a[$i] <= $min) //find min
			{
				$min = $a[$i];
				$min_index = $i;
			}
			if($a[$i] >= $max) //find max
			{
				$max = $a[$i];
				$max_index = $i;
			}
		}
		$temp = $a[$j]; //switch leftmost unsorted value with minimum
		$temp2 = $a[$right_count];
		$a[$j] = $min;
		$a[$min_index] = $temp;

		
		 //switch rightmost unsorted value with maximum
		$a[$right_count] = $max;
		$a[$max_index] = $temp2;
	}
	// var_dump($a);
}



plain_sort();
no_new_array_sort();
$var = microtime(true);
min_and_max();
echo microtime(true)-$var;




?>