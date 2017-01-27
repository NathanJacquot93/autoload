<?php


class Autoloader
{

    static function register() {
        spl_autoload_register(array('Autoloader', 'autoload'));
    }

    static function autoload($class_name){
        $class_name = str_replace('Tutoriel\\', '', $class_name);
        $class_name = str_replace('\\', '/', $class_name); //assurance, si un anti-slash apparait, il est remplacer par un slash
        var_dump($class_name);
        require 'class/' .$class_name . '.php';
    }
}