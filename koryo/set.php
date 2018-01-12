<?php
	$set = '0';
	$set = '<span id="headset"><p>' . $_POST['data'] . "</p></span>";
	$setwriter = fopen("head.html", "w");
        @fwrite($setwriter, $set);
        fclose($setwriter);
	echo "書き込みました。: " . $set;
?>
<meta http-equiv="refresh" content="3; url=./headedit.html" />

