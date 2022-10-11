<!DOCTYPE html>
<html>
<body>

<p>Il tuo ordine: <br>
<?php
require "dataval.php";


$depdata = $_GET;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$depdata = depure($_GET);
}

$str = "";

foreach ($depdata as $key => $val){
	$str = $str . $key. ": " . $val . "<br>";
}

echo $str;  


?>

</p>

</body>
</html>
