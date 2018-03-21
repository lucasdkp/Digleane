<?php

function service_erro($type){
    
    $type = strtoupper($type);
   
    if ($type == 'ERRO_TOKEN'){
       
       $erro['COD'] = 404;
       $erro['MESSAGE'] = "Token not found!";
       
    } else if ($type == 'NULL' || $type == 'NOT_FOUND'){
       
       $erro['COD'] = 404;
       $erro['MESSAGE'] = "Service not found!";
       
    }
   
   $erro = json_encode($erro);
   return $erro;
}
?>