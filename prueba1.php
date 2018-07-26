<pre>

<?php

require_once('usuario.php');

$usuario = new Usuario('Yuri', 'y@dh.com', '123');
$usuario->nuevoMail('yuri@dh.com');

$usuario2 = new Usuario('Juan', 'juan@dh.com', 123456);
$usuario2->nuevoMail('loquesea');
$usuario2->nuevoPass('123');


var_dump($usuario,$usuario2);

echo $usuario2->sumar(10,2);

?>