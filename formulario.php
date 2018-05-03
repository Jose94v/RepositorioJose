<!DOCTYPE HTML>

<html> 

<body>
<form action="imprimir.php" method="post">
		<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">

<br>

		<label for="email">E-mail:</label>
			<input type="text" name="email">

<br>
<label >Hobbies:</label>
	<input type="checkbox" id="peliculas" name="hobbies" ><label for="peliculas">Ver Peliculas.</label>
	<input type="checkbox" id="series" name="hobbies" ><label for="series"> Ver Series.</laberl>
	<input type="checkbox" id="deporte" name="hobbies" ><label for="deporte"> Deportes.</laberl>
	<input type="checkbox" id="viajar" name="hobbies" ><label for="viajar"> Viajar.</laberl>
	<input type="checkbox" id="tv" name="hobbies" ><label for="tv"> Ver Tv.</label>
<br>

	<input type="radio" id="hombre" name="hombre"><label> hombre </label>
	<input type="radio" id="mujer" name="mujer"><label> mujer </label> 
	<input type="radio" id="indefinido" name="indefinido"><label> indefinido </label>

<br>	
<label>¿Como dormiste anoche?</label>
	<select>

	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
	<option>10</option>

</select>

<br>
			
<input type="submit">


</form>
</body>
</html>

