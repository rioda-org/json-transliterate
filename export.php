<!DOCTYPE html>
<?php include("lat2cir.php"); ?>
<html>
<title>JSON lat2cir</title>
<body>
<pre>
<?php
$myFile="RS_Exports.cs";
$fh=fopen($myFile, 'r');
$text=fread($fh, filesize($myFile));
fclose($fh);

$niz=explode("\n",$text);
$first=array_shift($niz);
$last=array_pop($niz);

$trl=new transliterate;

echo $first;

foreach($niz as $key=>$linija) {
list($pre,$posle)=explode('"', $linija, 2);
$posle=$trl->transliterate_return($posle);
echo $pre.'"'.$posle;
}
echo $last;

?>
</pre>
</body>
</html>