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

  <?php 
echo "<br>";
echo "-For-";
echo "<br>";
  	$nombres=[];
  	$nombres[]="Miguel";
  	$nombres[]="Ana";
  	$nombres[]="Julian";
  	$nombres[]="Nico";
  	$nombres[]='Laura';

for ($i=0; $i < 5 ; $i++) {
echo "<br>";
echo $nombres[$i];

}
   ?>

<?php 
echo "<br>";
echo "<br>";
echo "-While-";
echo "<br>";
$i=0;
$nombres=[];
  	$nombres[]="Miguel";
  	$nombres[]="Ana";
  	$nombres[]="Julian";
  	$nombres[]="Nico";
  	$nombres[]='Laura';
while ( $i<5) {
	echo "<br>";
	echo $nombres[$i];
	$i++;
}
 ?>

 <?php 
echo "<br>";
echo "<br>";
echo "-Do While-";
echo "<br>";
$i=0;
$nombres=[];
  	$nombres[]="Miguel";
  	$nombres[]="Ana";
  	$nombres[]="Julian";
  	$nombres[]="Nico";
  	$nombres[]='Laura';
do {
	echo "<br>";
	echo $nombres[$i];
	$i++;
	}while ($i<5) 
	?>

	<?php 
echo "<br>";
echo "<br>";
echo "-Foreach-";
echo "<br>";
echo "<br>";
$nombres=[];
  	$nombres[]="Miguel";
  	$nombres[]="Ana";
  	$nombres[]="Julian";
  	$nombres[]="Nico";
  	$nombres[]='Laura';
foreach ($nombres as $nombre) {
	echo $nombre ."<br>";
}

	 ?>