<h2>Display</h2><br>
<?php
$file = fopen($_GET['file'], "r");
echo fread($file, filesize($_GET['file'])) . "<br>";
echo "Number of Line: " . count(file($_GET['file']));
fclose($file);

