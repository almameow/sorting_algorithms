<?php

$x=array();
for($k=0;$k<10000;$k++)
{
	$x[]=rand(0,10000);
}


$var = microtime(true);
for($i=count($x)-1;$i>0;$i--)
{

	for($j=0;$j<$i;$j++)
	{
		if($x[$j] > $x[$j+1])
		{
			$temp = $x[$j];
			$x[$j] = $x[$j+1];
			$x[$j+1] = $temp;
		}
	}
}
echo microtime(true)-$var;
var_dump($x);

?>