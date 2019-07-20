<?php

function Biodata()
{
	$name='iip shoifuddin';
	$age=25;
	$address='Kp. Wates Kec. Cigeulis Pandeglang - Banten';
	$hobbies = array("Fotografi","Robotik");
	$is_married = false;
	$list_school_sd = array('key'   => 'SDN Waringinjaya 02',
						 'year_in'   => '2000',
						 'year_out'   => '2006');
    $list_school_smp = array('key'   => 'SMPN 1 Cigeulis',
                         'year_in'   => '2006',
                         'year_out'   => '2009');
    $list_school_sma = array('key'   => 'SMKN 1 Pandeglang',
                         'year_in'   => '2009',
                         'year_out'   => '2012');
    $list_school_major = array('key'   => 'Universitas AMIKOM Yogyakarta',
                         'year_in'   => '2014',
                         'year_out'   => '2018');
	$skills = array('01' => 
					    [
							'name' => 'php',
							 'level' => 'beginer'
						],
					'02' => 
						[
							'name' => 'game',
							 'level' => 'advenced'
						]);
	$interest_in_coding = true;



	$data [] = array(
    'name'     => $name,
    'age'   => $age,
    'address' => $address,
    'hobbies' => $hobbies,
    'list_school' =>
    				[
    				'school'  => 
    							[
    								'SD'     => 
                                                [
                                                    'key_name'   => $list_school_sd['key'],
                                                    'year_in'   =>  $list_school_sd['year_in'],
                                                    'year_out'   => $list_school_sd['year_out']
                                                ],
    								'SLTP'   => 
                                                [
                                                    'key_name'   => $list_school_smp['key'],
                                                    'year_in'   =>  $list_school_smp['year_in'],
                                                    'year_out'   => $list_school_smp['year_out']
                                                ],
    								'SLTA'   => 
                                                [
                                                    'key_name'   => $list_school_sma['key'],
                                                    'year_in'   =>  $list_school_sma['year_in'],
                                                    'year_out'   => $list_school_sma['year_out']
                                                ]
    							],
    				'major' => 
                                [
                                    'key_name'   => $list_school_major['key'],
                                    'year_in'   =>  $list_school_major['year_in'],
                                    'year_out'   => $list_school_major['year_out']
                                ]			
    				],
    'skills' => 
    			[
    				'01' => [
    							'skill_name' => $skills['01']['name'],
    							'level' => $skills['01']['level']
    						],
    				'02' => [
    							'skill_name' => $skills['02']['name'],
    							'level' => $skills['02']['level']
    						]

    			],
    'interest_in_coding' => $interest_in_coding
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

return $jsonfile;

}

//echo Biodata(); --> untuk mengecek function Biodata();


file_put_contents('datajson.json', Biodata()); //--> membuat file JSON


?>
