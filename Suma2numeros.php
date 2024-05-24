<?php
$a = $_POST["a"];
$b = $_POST["b"];

$c = [($a * $a)+($b*$b)]/ 2($a);

if ($c > 80) {echo "bien";} else {echo "mal";}
?>   