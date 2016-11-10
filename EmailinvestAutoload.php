<?php
if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoload was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('EmailinvestAutoload', true, true);
    } else {
        spl_autoload_register('EmailinvestAutoload');
    }
} else {
    /**
     * Fall back to traditional autoload for old PHP versions
     * @param string $className The name of the class to load
     */
    function __autoload($className)
    {
        EmailinvestAutoload($className);
    }
}

function EmailinvestAutoload($className)
{
    $fileClass = dirname(__FILE__) . DIRECTORY_SEPARATOR . "LatestApi" . DIRECTORY_SEPARATOR . $className . '.php';

    if (is_readable($fileClass)) {
        /** @noinspection PhpIncludeInspection */
        require $fileClass;
    }
}
