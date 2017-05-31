<?php
$filename = "ftp://gilberz4:G1l1cr4ck3.#*@server.zonapambolera.com/public_html/test.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;
?>
