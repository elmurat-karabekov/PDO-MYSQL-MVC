<?php 

spl_autoload_register('myAutoload');

function myAutoload($className)
{
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path . $className . $extension;

    if (!file_exists($fileName)){
        return false;
    }

    include_once $path . $className . $extension;
}