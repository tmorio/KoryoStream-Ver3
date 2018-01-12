<?php
	$headerfile = 'head.html';
	readfile($headerfile);
        $set = '<img src="https://g.twimg.com/about/feature-corporate/image/twitterbird_RGB.png" width="60"> <span id="headnote"> <font color="red">#koryosai2017</font> OR <font color="red">#koryosai</font></span>';
        $setwriter = fopen("head.html", "w");
        @fwrite($setwriter, $set);
        fclose($setwriter);
?>
