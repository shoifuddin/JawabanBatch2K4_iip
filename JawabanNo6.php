<?php

function mrBrulee($a,$b,$c)
{ 
	if($a=="SUM")
	{
		return opration_sum($b,$c);
	}
	elseif($a=="MUL")
	{
		return opration_mul($b,$c);
	}
	elseif($a=="SUB")
	{
		return opration_sub($b,$c);
	}
	elseif($a=="DIV")
	{
		return opration_sub($b,$c);
	}

}
function opration_sum($limit,$c)
{
	$a=0;
	$b=0;
	$c=count($c);
	for($i=0; $i<$c; $i++)
	{
		if($b<$limit)
		{
			$b=$b+$a;
			$a++;
		}

	}
	return $b;
}

function opration_mul($limit,$c)
{
	$a=1;
	$b=1;
	$c=count($c);
	for($i=0; $i<$c; $i++)
	{
		if($b<$limit)
		{
			$b=$b*$a;
			$a++;
		}

	}
	return $b;
}

function opration_sub($limit,$c)
{
	$a=0;
	$c=count($c);
	$b=$c;
	for($i=0; $i<$c; $i++)
	{
		if($b<$limit && $b>0)
		{
			$b=$b-$a;
			$a++;
		}

	}
	return $b;
}

function opration_div($limit,$c)
{
	$a=1;
	$c=count($c);
	$b=$c;
	for($i=0; $i<$c; $i++)
	{
		if($b<$limit && $b>0)
		{
			$b=$b/$a;
			$a++;
		}

	}
	return $b;
}


echo mrBrulee("MUL",20,[11,13,15]);

?>
