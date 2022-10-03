<!DOCTYPE html>
<html>
<body>

<p>Il tuo ordine:
<?php
require "phpinclude.php";


$nominativo = $indirizzo = $numeropizze = $pizze = $formato="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $nominativo = test_input($_GET["nominativo"]);
  $indirizzo = test_input($_GET["indirizzo"]);
  $numeropizze = test_input($_GET["numeropizze"]);
  $pizze = test_input($_GET["pizze"]);
  $formato = test_input($_GET["formato"]);
}
 echo $nominativo. " presso " .$indirizzo . " ha ordinato " . $numeropizze. " " . $pizze. " formato " . $formato 
?>

</p>

</body>
</html>
