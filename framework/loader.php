<?php

spl_autoload_register(function ($class_name) {
    try {
        echo $class_name;
        return spl_autoload(strtolower($class_name));
    } catch (Exception $ex) {
        //echo $ex->getMessage();
        echo 'spl_autoload_register';
    }
});
