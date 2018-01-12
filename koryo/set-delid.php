<?php
        $nob = "id" . $_POST['nr'] . ".html";
        $set = '<p><img src="" align="top"><span class="norm"></span></p>';
        $setwriter = fopen($nob, "w");
        @fwrite($setwriter, $set);
        fclose($setwriter);
        print "ID" . $_POST['nr'] . "の内容を消去しました。";
?>

<meta http-equiv="refresh" content="1; url=./headedit.html" />

