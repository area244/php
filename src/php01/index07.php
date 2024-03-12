<?php
	// 1-1
	$people = array('Taro', 'Jiro', 'Saburo');
	var_dump($people);
	print '<br>';  

	// 2-1
	$people = array(
		'person1' => 'taro',
		'person2' => 'jiro',
		'person3' => 'Saburo',
  	); 
  
  	var_dump($people);
	print '<br>'; 

	// 2-2
	$people = [
		'person1' => 'taro',
		'person2' => 'jiro',
  	];  
  
  	echo $people["person1"];	// taro
	print '<br>';

	// 3-1
	$people = [
		[
		  "last_name" => "山田",
		  "first_name" => "太郎",
		  "age" => 29,
		  "gender" => "男性"
		],
		[
		  "last_name" => "鈴木",
		  "first_name" => "次郎",
		  "age" => 25,
		  "gender" => "男性"
		],
	   [
		  "last_name" => "佐藤",
		  "first_name" => "花子",
		  "age" => 20,
		  "gender" => "女性"
		]
  	];  
	echo $people[0]["last_name"];	// 山田
	print '<br>';
	
	// 4-1
	$people = array('Taro', 'Jiro', 'Saburo');

	foreach ($people as $person) {
  		echo $person;
  		echo '<br />';
		;
	}	
	print '<br>';

	// 4-2
	$people = array(
  		'person1' => 'Taro',
 		'person2'  => 'Jiro',
  		'person3'  => 'Saburo'
	);

	foreach ($people as $person => $name) {
  		print $person . "は" . $name . "です" . '<br />';
	}
	print '<br>';
?>