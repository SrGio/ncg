<?php

//Obtenemos los datos que envía GitHub
$payload = json_decode(file_get_contents('php://input'));
$payload->ref;
var_dump($payload->ref);

print_r("$payload->ref");
//Realizamos comprobaciones
if($payload->ref=="refs/heads/master"){
        $com=$payload->commits;
        $time=$com->timestamp;
        echo $time;
//Ejecutamos script de puesta en producción
        shell_exec('./produccion.sh');
}
pritn_r($output);

?>
