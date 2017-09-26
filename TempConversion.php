<?php
$fTemp = 0;
while ($fTemp <= 100) {
	$cTemp = ($fTemp - 32) * .55;
	echo $fTemp." Fahrenheit is equal to ".$cTemp." Celsius<br />"; 
	$fTemp++;
}
?>