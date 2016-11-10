<?php

function EmailinvestAutoload($classname)
{

    //Load Classes

    $fileClass = dirname(__FILE__).DIRECTORY_SEPARATOR."LatestApi".DIRECTORY_SEPARATOR."Class.".$classname.'.php';
    $fileTraits = dirname(__FILE__).DIRECTORY_SEPARATOR."LatestApi".DIRECTORY_SEPARATOR."Traits.".$classname.'.php';

    if (is_readable($fileClass)) {        require $fileClass;    }
    elseif (is_readable($fileTraits)) {        require $fileTraits;    }
    else {
        print_r($fileClass ."<br>".$fileTraits);
    }
}


if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('EmailinvestAutoload', true, true);
    } else {
        spl_autoload_register('EmailinvestAutoload');
    }
} else {
    /**
     * Fall back to traditional autoload for old PHP versions
     * @param string $classname The name of the class to load
     */
    function __autoload($classname)
    {
        EmailinvestAutoload($classname);
    }
}