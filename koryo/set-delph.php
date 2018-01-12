<?php
        $nob = "phid" . $_POST['ph'] . ".html";
        $set = '<img src=""><br><div id="photousera"><p><img src="" align="top"></div></p>';
        $setwriter = fopen($nob, "w");
        @fwrite($setwriter, $set);
        fclose($setwriter);
        print "PH-ID" . $_POST['ph'] ."の内容を消去しました。";
?>

<meta http-equiv="refresh" content="1; url=./headedit.html" />

