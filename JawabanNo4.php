

<?php

function arkaFood($a,$b,$c,$d)
{
	$bayar=$a;
	if($a>=50000 && $b=="ARKAFOOD5")
	{
		$diskon=ARKAFOOD5($a);
		$bayar=$bayar-$diskon;
		if($d!="False")
		{
			$pajak=$a*(5/100);
			$bayar=$bayar+$pajak;
			$bayar=$bayar+ongkos($c);

			return $bayar;
		}
		else
		{
			$bayar=$bayar+ongkos($c);
			return $bayar;
		}


	}
	elseif($a>=25000 && $b=="DITRAKTIRDEMY")
	{
		$diskon=DITRAKTIRDEMY($a);
		$bayar=$bayar-$diskon;
		if($d!="False")
		{
			$pajak=$a*(5/100);
			$bayar=$bayar+$pajak;
			$bayar=$bayar+ongkos($c);

			return $bayar;
		}
		else
		{
			$bayar=$bayar+ongkos($c);
			return $bayar;
		}



	}

}

function ARKAFOOD5($a)
{
	$a=$a*(50/100);
	if($a>50000)
	{
		$a=50000;
		return $a;

	}
	else
	{
		return $a;
	}
}

function DITRAKTIRDEMY($a)
{
	$a=$a*(60/100);
	if($a>30000)
	{
		$a=30000;
		return $a;

	}
	else
	{
		return $a;
	}
}


function ongkos($c)
{
	if($c > 0 && $c<=1.5)
	{
		return $c=5000;
	}
	elseif ($c>1.5 && $c<1000) 
	{
		$pertama=5000;
		$c=round($c-1.5);
		$real=$pertama+($c*1000);
		return $real; 

		
	}
	else
	{
		return 0;
	}

}

echo arkaFood(100000,"ARKAFOOD5",5,"False"); // 50%
echo "<br />".arkaFood(100000,"DITRAKTIRDEMY",5,"False"); //60%

?>