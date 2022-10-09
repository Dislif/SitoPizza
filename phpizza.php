<!DOCTYPE html>
<html>
<body>

<p>Il tuo ordine:
<?php
require "datival.php";


$depdata = $_GET;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	foreach ($_GET as $key => $val){
		if(isset($_GET[$key])){
			if($key=="telefono" || $key=="numeropizze"){
				if(match_patt($val, "/[^0-9]+/u")){
					$depdata[$key] = new Error("Valore " . $key . " deve contenere solo cifre numeriche.");
				}
			} else if($key=="numeropizze"){
				if (is_in_range($val, "1")!="3"){
					$depdata[$key] = new Error("Valore " . $key . " deve essere maggiore di 0.");
				}
			} else if($key=="nominativo") {
				if(match_patt($val, "/[^a-zA-Z ']+/u")){
					$depdata[$key] = new Error("Valore " . $key . " deve solo contenere caratteri alfabetici, spazi e apostrofi");
				}
			} else {
				$depdata[$key] = test_input($val);
			}
		} else {
			$depdata[$key] = new Error("Valore " . $key . " non definito.");
		}
	}
}

$str = "";

foreach ($depdata as $key => $val){
	$str = $key. ": " . $val . "<br>";
}

echo $str;  


?>

</p>

</body>
</html>
