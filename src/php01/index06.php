<?php
	// 1-1
	function addNumber($a, $b){
  		$add = $a + $b;	// 5 = 2 + 3
  		return $add;
	}

	$total = addNumber(2, 3);
	print $total .'<br>'; // 5

    // 2-1
	function outputNumber($a) {
    	echo "引数の値は" . $a . "です";
  		return;
	}
	outputNumber(2);	// 2
    print '<br>';

    // 2-2
	function outputHello() {
  	    echo "Hello world";
	}

	outputHello().'<br>'; // Hello world
    print '<br>';

    // 2-3
	function text($number1, $number2) {
    	$value = $number1 + $number2;   // 6 = 2 + 4
  		return $value;
	}

	$total = text(2, 4);
	echo $total;            // 6
	print '<br>';
?>