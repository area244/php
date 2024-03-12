<?php
	// 1
	function addNumber($a, $b) {
		$add = $a + $b;		// 5 = 2 + 3
		return $add;
  	}

  	$total = addNumber(2, 3);
  	print $total;	// 5
  	print '<br>';

	// 2
	function exam($score1, $score2, $score3) {
		$total = $score1 + $score2 + $score3;	// 230 = 80 + 60 + 90
		if ($total > 210) {
		  echo $total . "点なので合格です";	// 〇点なので合格です
		} else {
			  echo $total . "点なので不合格です";	// □点なので不合格です
		}
  	}

  	echo (exam(80, 60, 90));	// 230点なので合格です
  	print '<br>';

	// 3
	// 四角形の面積
	function getSquareArea($base, $height) {
		return $base * $height;		// 25 = 5 * 5
  	}
  	// 三角形の面積
  	function getTriangleArea($base, $height) {
	  	return $base * $height / 2;	// 	28 = 7 * 8 / 2
  	}
  	// 台形の面積
  	function getTrapezoidArea($upperBase, $lowerBase, $height){
		return ($upperBase + $lowerBase) * $height / 2;	// 18 = (4 + 5) * 4 / 2
  	}

 	 echo getSquareArea(5, 5) . "\n";	// 25
  	echo getTriangleArea(7, 8) . "\n";	// 28
  	echo getTrapezoidArea(4, 5, 4);		// 18
  	print '<br>';
?>