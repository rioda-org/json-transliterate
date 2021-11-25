<!DOCTYPE html>
<?php include("lat2cir.php"); ?>
<html>
<title>JSON lat2cir</title>
<body>
<pre><?php
$myFile="RS.json";
$fh=fopen($myFile, 'r');
$text=fread($fh, filesize($myFile));
fclose($fh);
$dokument=json_decode($text);
$trl=new lat2cir;
foreach($dokument as $key=>$value) {
	$vrednost=$trl->transliterate_return($value);
	$vrednost=str_replace("цуррентВалуе","currentValue",$vrednost);
	$vrednost=str_replace("маxВалуе","maxValue",$vrednost);
	$vrednost=str_replace("селецтион","selection",$vrednost);
	$vrednost=str_replace("итемс","items",$vrednost);
	$vrednost=str_replace("тотал","total",$vrednost);
	$vrednost=str_replace("валуе","value",$vrednost);
	$vrednost=str_replace("нумбер","number",$vrednost);
	$vrednost=str_replace("стартСyмболс","startSymbols",$vrednost);
	echo "  \"".$key."\": \"".$vrednost."\",<br>";
}
?></pre>
</body>
</html>