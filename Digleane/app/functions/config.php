<?php

    // Config Data
        define("DEBUG", false);
        error_reporting(1);
        $dirbase = dirname(__FILE__)."/";
    
    // Access Control    
        
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");

    
    // config include files
        
        require_once($dirbase.'functions.php');
        require_once($dirbase.'../../lib/digleane.php');
    
    // Service files
        
        // service_erro
        require_once($dirbase.'../services/common/erro.php');
        
        // service_getTime
        require_once($dirbase.'../services/time/getTime.php');
        
    // Parameters config
    
        $service = str_replace('/', '', $_REQUEST['service']);
        $data1 =  str_replace('/', '', $_REQUEST['data1']);
        $data2 = str_replace('/', '', $_REQUEST['data2']);
        
?>