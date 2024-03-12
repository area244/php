<?php
    // 1-1
    $a = 5;

	if ($a === 5) {
		echo "\$aは5です";  // $aは5です
	}
	print '<br>';

	// 1-2
	$a = 5;

	if ($a === 5) {
		echo "\$aは5です";  // $aは5です
	}
	print '<br>';

	// 1-3
	$a = 7;

	if ($a === 5) {
		echo "\$aは5です";     // $aは5です
		} else{
		echo "\$aは5以外です"; // $aは5以外です
	}
	print '<br>';

	// 1-4
	$a = 7;

	if ($a === 5) {
		echo "\$aは5です";        // $aは5です
		} elseif ($a === 7){
		echo "\$aは7です";        // $aは7です
		} else{
        echo "\$aは5と7以外です"; // $aは5と7以外です
    }
	print '<br>';

	// 2-1
	$people = "Saburo";

	switch ($people) {
		case "Taro":
		echo "太郎です";  // 太郎です
		break;
		
		case "Jiro":
		echo "次郎です";  // 次郎です
		break;
		
		case "Saburo":
		echo "三郎です";  // 三郎です
		break;
	}
	print '<br>';

	// 3-1
	$a = 7;
	$b = ($a > 5) ? "TRUE" : "FALSE";
	echo $b;
	print '<br>';
?>