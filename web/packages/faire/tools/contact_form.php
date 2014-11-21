<?php

    $message = '';
    foreach($_REQUEST as $k => $v){
        $message .= '('. $k . '): ' . $v . '  |  ';
    }

    Log::addEntry($message);

    echo Loader::helper('json')->encode((object)array(
        'ok' => true
    ));