<?php
	$company1 = htmlspecialchars($_POST['company1'], ENT_QUOTES);
	print "会社名は" . $company1 . "ですね <br />";

    $company2 = htmlspecialchars($_GET['company2'], ENT_QUOTES);
	print "会社名は" . $company2 . "ですね";
?>