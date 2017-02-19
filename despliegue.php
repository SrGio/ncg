<?php

//Obtenemos los datos que envía GitHub
$payload = json_decode(file_get_contents('php://input'));
$payload->ref;

//Realizamos comprobaciones

if($payload->ref == 'refs/head/master') {

	//Ejecutamos script de puesta en producción
	shell_exec('./produccion.sh');

	exec('./produccion.sh 2>&1',$output);
	print_r($output);

}

?>
