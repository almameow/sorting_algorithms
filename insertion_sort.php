<?php

$x = array();
for($k=0;$k<10000;$k++)
{
	$x[]=rand(0,10000);
}

$var = microtime(true);

for($i=1;$i<count($x);$i++)
{
	for($j=$i;$j>0;$j--)
	{
		if($x[$j] < $x[$j-1])
		{
			$temp = $x[$j]; //temp is x[j]
			$x[$j] = $x[$j-1]; // x[j] is x[j-1]
			$x[$j-1] = $temp; //x[j-1] is temp (old x[j] val)
		}
	}
}
var_dump($x);
echo microtime(true)-$var;
?>