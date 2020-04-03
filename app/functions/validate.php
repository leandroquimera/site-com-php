<?php

function validate(array $fields){

    $validate = [];
    
    foreach ($fields as $fields => $type) {
        
        switch ($type) {
            case 's':
                $validate[$fields] = filter_var($_POST[$fields], FILTER_SANITIZE_STRING);
                break;

            case 'i':
                $validate[$fields] = filter_var($_POST[$fields], FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'e':
                $validate[$fields] = filter_var($_POST[$fields], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
    


}

