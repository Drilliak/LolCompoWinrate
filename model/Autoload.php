<?php

function autoload($classname)
{
    if (file_exists($file = __DIR__ . "\\" . $classname . ".php"))
    {
        require $file;
    } elseif (file_exists($file = __DIR__ . "\\Api\\client\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\client\\query\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\client\\query\\impl\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\client\\query\\provider\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\gameConstants\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\schema\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\urlBuilder\\"  . $classname . ".php")) {
        require $file;
    }
    elseif (file_exists($file = __DIR__ . "\\Api\\schema\\enum\\"  . $classname . ".php")) {
        require $file;
    }
}

spl_autoload_register('autoload');