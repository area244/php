<?php
    // 1-1
	$a = 15;
	$b = 3;
	$c = 10;

	$answer1 = $a + $b;  // 18 = 15 + 3
	$answer2 = $a - $b;  // 12 = 15 - 3
	$answer3 = $a * $b;  // 45 = 15 * 3
	$answer4 = $a / $b;  //  5 = 15 / 3
	$answer5 = $a % $c;  //  5 = 15 % 10

	echo $answer1;  // 18
	echo "<br />";
	echo $answer2;  // 12
	echo "<br />";
	echo $answer3;  // 45
	echo "<br />";
	echo $answer4;  //  5
	echo "<br />";
	echo $answer5;  //  5
	print '<br>';

    // 2-1
	$a = 15;
	$b = 3;
	$c = 10;
	$d = 5;
	
    $a = $b;  // 3
    $c += $d; // 10+5

	echo $a;  // 3
	echo "<br />";
	echo $c;  // 15
	echo "<br />";
	print '<br>';

    // 3-1
	$a = 20;
	$b = 5;

	echo ($a > $b);  // 20 > 5
	echo "<br />";
	print '<br>';

    // 4-1
	$a = 20;
	$b = 5;

	echo ($a > 10 && $a < 30);
	echo "<br />";
	print '<br>';

    // 5-1
	$a = $b = 10;
	$c = $d = 5;

	echo ++$a;      // +1+10=11
	echo "<br />";  
	echo $b++;      // 10
	echo "<br />";  
	echo --$c;      // 5-1=4
	echo "<br />";  
	echo $d--;      // 5
	print '<br>';
?>