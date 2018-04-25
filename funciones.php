<?php 
$numeroMagico=5;
echo "-Funcion Mayor-";
echo"<br>";
function mayor($num1,$num2,$num3 = null){
	if ($num3==null || !is_numeric($num3)) {
		global $numeroMagico;
		$num3=$numeroMagico;
	}
	
	if ($num1>$num2 && $num1>$num3) {
		return "El mayor es el num A: ".$num1;
	}else if ($num2>$num1 && $num2>$num3) {
		return "El mayor es el num B: ".$num2;
	}else if($num3>$num1 && $num3>$num2) {
		return "El mayor es el num C: ".$num3;
	}


}
echo"<br>";
echo mayor(30,11);
echo"<br>";


 ?>

 <?php 

function tabla($base,$limite){
	$array=[];
	for ($i=$base; $i <= $limite; $i++){ 
		$array[]=$i;	
	}
	
	return $array;
}
$resultado = tabla(1,10);
echo"<br>";
echo "-Tabla-";
echo"<br>";
echo"<br>";
foreach ($resultado as $value) {
	echo " ".$value;
}
  ?>
