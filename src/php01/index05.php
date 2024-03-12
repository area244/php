<?php
	// 1-1
	for ($i = 0; $i < 4; $i++) { // 開始：0、4より小さくなるまで1ずつ増やす
		echo $i;
	}
	print '<br>';

    // 1-2
	for ($i = 1; $i <= 5; $i++) { // i：開始が1、5になるまで1ずつ増やす
        echo $i * 2 . '<br />';	
    }
    print '<br>';

    // 2-1
	$i = 0;

	while ($i < 3) {    // i：3より小さくなるまで処理
  		echo 'i = ' . $i . '<br />';
  		$i += 1;
  	}
  	print '<br>';

    // 2-2
	$count = 0;

	while ($count < 20) {
  		$count += 1;
  		echo $count . '<br />';
    }
    print '<br>';

    // 2-3
	$i = 0;
	while ($i < 10) {
  	if ($i == 5) {
    	break;
    	// $iが5の時、ループから抜ける。
  		}
  		echo $i;
 	 	$i++;
	}
    print '<br>';   // 01234

    // 2-4
    $i = 0;
    while ($i < 10) {
        if ($i == 5) {
            $i++;
            continue;
        // $iが5の時、$iに1を足す処理をし、スキップをする。
        }
        echo $i;
        $i++;
    }
	print '<br>';   // 012346789

    // 2-5
	$count = 0;

	while ($count <= 100) {
 		if ($count === 20) {
    		break;
  		}
  		if ($count % 3 === 0) {
    		$count++;
    		continue;
  		}
  		echo $count . '<br />';
  		$count++;
	}
	print '<br>';

    // 3-1
	$i = 0;
	
	do {
  		echo $i . '<br />';
  		$i++;
	} while ($i < 5);
	print '<br>';

    // 3-2
	$num = 0;

	do {
  		echo 'num = ' . $num . '<br />';
  		$num += 1;
	} while ($num < 3);
	print '<br>';

?>