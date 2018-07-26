<?php 


var_dump($_POST);
echo "<br>";

echo "Su nombre de usuario es: "." ".$_POST ["nombre"];
echo "<br>";
echo "Su email es: "." ".$_POST["email"];
echo "<br>";

foreach ($_POST as $value) {
	echo("<br>");
	echo $value." ";
}


 ?>

