<?php

function service_getTime($data){
    
    date_default_timezone_set('America/Sao_Paulo');
    
    $token = $data['token'];
    
    if ($token != 123){
        
        return service_erro('erro_token');
        exit();
    }
    
    $time = date('H:m');
    
    $return['COD'] = 200;
    $return['MESSAGE'] = "Now is $time!";
    $return['TIME'] = $time;
    
    $return = json_encode($return);
    
    return $return;
    
}

