<?php 

$numA=20;
$numB=13;
$variable=rand(1,5);


if ($numA>$numB ) {
echo "El numero mayor es el A: ".$numA;
} else {
	echo "El numero mayor es el numero B: ".$numB;
}
echo "<br>";
echo "<br>";
if ($variable==3 || $variable==5) {
	echo "El numero que salio fue: ".$variable;
}
echo "<br>";
echo "<br>";
if ($variable!=3) {
	echo "El numero NO es 3";
}else{
 echo $variable;
}
echo "<br>";
echo "<br>";
 ?>

 <?php 
$numAleatorio=rand(1,100);


if ($numAleatorio>50) {
 	echo "El numero es mayor a 50".' '.$numAleatorio;
}else{
	echo "El numero es menor a 50".' '.$numAleatorio;
}
echo "<br>";
echo "<br>";
  ?>

  <?php 

$nombreDeUsuario='';
$ContraseniaDeUsuario='';

if ($nombreDeUsuario==="admin" && $ContraseniaDeUsuario==="1234") {
	echo "Bienvenido!";
}


   ?>

