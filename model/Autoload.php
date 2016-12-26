<?php

function autoload($classname)
{
    if (file_exists($file = __DIR__ . "\\" . $classname . ".php"))
    {
        require $file;
    } elseif (file_exists($file = __DIR__ . "\\Api\\"  . $classname . ".php")) {
        require $file;
    } elseif(file_exists($file = __DIR__ . "\\Database\\" . $classname . ".php")){
        require $file;
    }
    elseif(file_exists($file = __DIR__ . "\\Api\\urlBuilder\\" . $classname . ".php")){
        require $file;
    }
    elseif(file_exists($file = __DIR__ . "\\Api\\gameConstants\\" . $classname . ".php")){
        require $file;
    }
}

spl_autoload_register('autoload');