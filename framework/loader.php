<?php

spl_autoload_register(function ($class_name) {
    try {
        require_once ($class_name);
        echo $class_name;
    } catch (Exception $ex) {
        //echo $ex->getMessage();
        echo 'spl_autoload_register';
    }
});
