<?php 
for ($i=1; $i <= rand(0,100); $i++) { 	
	echo $i." ";	
									}
	echo "<br>";
?>

 <?php 
	echo "<br>";
	echo "-Tabla del 2-" ;
	echo "<br>";
for ($i=1; $i <=20 ; $i++) { 
	echo "<br>";
	echo $i= $i+1;
							}
  ?>

<?php 
	echo "<br>";
	$numero=100;
	echo "<br>";
	echo "-Cuenta atras del 100 al 85-";
	echo "<br>";
while ($numero>=85) {
	echo "<br>";
	echo $numero;
	$numero--; 
					}
	echo"<br>";
   ?>

<?php 
	echo "<br>";
	echo "-Dobles-";
	echo "<br>";
	$contador=0;
while ($contador<5) {
	$contador++;
	echo "<br>";
	echo $contador*2;
}
	echo "<br>";
 ?>

 <?php 
	echo "<br>";
	echo "-Moneda-";
	echo "<br>";
	$caras=0;
	$tiradas=0;

while($caras<=5){
	$moneda=rand(0,1);
	$tiradas++;

	if ($moneda===1) {
		$caras=$caras+1;
	} 
}
	echo "<br>";
	echo "La cantidad de tiradas fueron: "." ".$tiradas;
	echo "<br>";
  ?>

  <?php 
	echo "<br>";
    $caras=0;
	$tiradas=0;

	do{
		$moneda=rand(0,1);
		$tiradas++;

		if ($moneda===1) {
			$caras=$caras+1;
		} 
	}while($caras<=5);
	echo "La cantidad de tiradas fueron: "." ".$tiradas;
	echo "<br>";

  ?>