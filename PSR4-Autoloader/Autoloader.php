<?php
/**
 * Created by PhpStorm.
 * User: dre2k
 * Date: 2018-03-16
 * Time: 21:39
 */

spl_autoload_register(function ($class) {

    $prefix = '';
    $base_dir = __DIR__ . "Autoloader.php/";

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
