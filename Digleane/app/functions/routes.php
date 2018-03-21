<?php

    switch ($service){
        case '':
            $return = service_erro('null');
            break;
        case 'getTime':
            $return = service_getTime($_GET);
            break;
        default:
            $return = service_erro('not_found');
            break;
    }