<?php


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function is_in($el, $vett) {
	sort($vett);
    $l = count($vett);
    while ($l > 1) {
      $pivind = round($l/2);
      $pivot = $vett[$pivind];
      if ($el < $pivot) {
          $vett = array_slice($vett, 0, $pivind);
      } else {
          $vett = array_slice($vett, $pivind, $l-$pivind+1);
      }
      $l = count($vett);
    }
    return ($el==$vett[0]);
}

function depure($get){
	$depdata = $get;
	foreach ($get as $key => $val){
		if(!empty($get[$key])){
			if($key=="telefono" ){
				if(!preg_match("/^[0-9]{10}$/u", $val)){
					$depdata[$key] = "Valore " . $key . " deve contenere solo 10 cifre numeriche.";
				}
			} else if($key=="numeropizze"){
				if(!preg_match("/^[0-9]+$/u", $val)){
					$depdata[$key] = "Valore " . $key . " deve contenere solo cifre numeriche.";
				} else if ("1">$val){
					$depdata[$key] = "Valore " . $key . " deve essere maggiore di 0.";
				}
			} else if($key=="nominativo") {
				if(!preg_match("/^[A-Z][a-z]+( [A-Z][a-z]*'?)*$/u", $val)){
					$depdata[$key] = "Valore " . $key . " deve solo contenere caratteri alfabetici, spazi e apostrofi";
				}
			} else if($key=="email") {
				if(!preg_match("/^[a-zA-Z0-9\._]+@[a-zA-Z]+\.[a-zA-Z]+$/u", $val)){
					$depdata[$key] = "Valore " . $key . " scritto in modo scorretto";
				}
			} else if($key=="indirizzo") {
				if(!preg_match("/^[A-Z][a-z]+ [A-Z][a-z]+( [A-Z][a-z]*'?)* [0-9]+$/u", $val)){
					$depdata[$key] = "Valore " . $key . " scritto in modo scorretto";
				}
			} else {
				$depdata[$key] = test_input($val);
			}
		} else {
			$depdata[$key] = "Valore " . $key . " non definito.";
		}
	}
	return $depdata;
}


?>