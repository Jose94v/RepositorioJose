<?php  
$titulo_de_pagina= 'Prueba';
$numero = 45;
$numero_decimal =3.14;
$cadena = 'hola que tal?';
$cadena2 = "todo bien?";
$numero = 'cadena de caracteres';

$numero ="4";

$uno = "tres";
$dos = "tristes";
$tres = "tigres";
$cuatro = "tragan";
$cinco ="trigo";
$seis ="en";
$siete ="un";
$ocho ="trigal";



?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo_de_pagina; ?></title>
</head>
<body>

<?php 
echo $numero;
var_dump($numero_decimal);
var_dump($cadena);
var_dump($cadena2);
 ?>

 <?php 	echo $uno;
        echo '<br>';
  		echo $dos;
  		echo '<br>';
  		echo $tres;
  		echo '<br>';
  		echo $cuatro;
  		echo '<br>';
  		echo $cinco;
  		echo '<br>';
  		echo $seis;
  		echo '<br>';
  		echo $siete;
  		echo '<br>';
  		echo $ocho;
  		echo '<br>'; 	
  		echo '<br>';
  		?>


<?php echo $cadena;
echo '<br>';
echo $cadena2;
 ?>


</body>
</html>