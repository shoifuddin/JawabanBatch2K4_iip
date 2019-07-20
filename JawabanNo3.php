<?php

function potong_kata($kalimat)
{
	$data=array('pro', 'gram', 'merit', 'program', 'it', 'programmer');
	foreach ($data as $key ) {

		$kalimat=$kalimat;
		$posisi=strpos($kalimat,$key);
		if ($posisi !== FALSE){
		  //echo "Ketemu";
		  echo $key.",&nbsp";
		}
		else {
		  //echo "Tidak ketemu";
		}	

	}
}

echo potong_kata("programit");
?>