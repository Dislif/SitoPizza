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

function is_in_range($el, $min=null, $max=null){
	if ($max==null && $min>$el){
		return "0";
	} else if ($min==null && $max<$el){
		return "1";
	} else {
		if ($min>$el || $el>$max){
			return "2";
		} else {
        	return "3";
        }
	}
}

function match_patt($str, $patt, $inv=false){
	$m = preg_match($patt, $str);
    $m = ($inv) ? !$m : $m;
	return $m;
}


?>