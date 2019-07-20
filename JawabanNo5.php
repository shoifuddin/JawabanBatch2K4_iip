<?php

function oddSum($a)
{
	$data=bilangan_fibonaci($a);
	$b=0;
	//	echo ;
	foreach ($data as $val)
	{ 
	    if($val>1 && $val%2==0)
	    {
	    	$b=$b+$val;
	    }
	} 
	return $b;
}

function eventSum($a)
{
	$data=bilangan_fibonaci($a);
	$b=0;
	//	echo ;
	foreach ($data as $val)
	{ 
	    if($val>1 && $val%2==1)
	    {
	    	$b=$b+$val;
	    }
	} 
	return $b;
}

function bilangan_fibonaci($max)
{
	$angka_sebelumnya=0;
	$angka_sekarang=1;
	  

	//echo "$angka_sebelumnya $angka_sekarang";

	$fibo[0]=$angka_sebelumnya;
	$fibo[1]=$angka_sekarang;
	$i_fibo=2;
	for ($i=0; $i<$max; $i++)
	{
		  $output = $angka_sekarang + $angka_sebelumnya;
		  //echo " $output";
		  $fibo[$i_fibo]=$output;
		  $i_fibo++;


		  $angka_sebelumnya = $angka_sekarang;
		  $angka_sekarang = $output;
	}

	return $fibo;

}


echo "<br />". oddSum(10);
echo "<br />". eventSum(10);

?>