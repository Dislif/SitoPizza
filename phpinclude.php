<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function isin($vett, $el) {
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
    if ($el==$vett[0]) {
      return 1;
    } else {
      return 0;
    }
}

?>