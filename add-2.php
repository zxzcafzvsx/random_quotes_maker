<?php
$file = "motivasi.txt";
$key = $_POST['key'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "$key");
fclose($handle);
?>
Terima Kasih