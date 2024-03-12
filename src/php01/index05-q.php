<?php
	// 1
	$Fizz = "Fizz";
	$Buzz = "Buzz";
	$FizzBuzz = "FizzBuzz";

	for ($i = 1; $i <= 50; $i++) {
  		if ($i % 15 == 0) {			// 3でも5でも割り切れる数
    		echo $FizzBuzz .'<br>';	// FizzBuzz
  		} else if ($i % 3 == 0) {	// 3で割り切れる数
    		echo $Fizz .'<br>';		// Fizz
  		} else if ($i % 5 == 0) {	// 5で割り切れる数
   			echo $Buzz .'<br>';		// Buzz
  		} else {					// それ以外
   			echo $i .'<br>';		// 数字
 	 	}
	}
	print '<br>';

	// 2
	for ($i = 1; $i < 6; $i++) {
		for ($j = 1; $j < 6; $j++) {
		   echo "●";
		 }
		 echo "<br />";
   	}
   	print '<br>';
?>