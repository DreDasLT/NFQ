<?php
/**
 * Created by PhpStorm.
 * User: dre2k
 * Date: 2018-03-16
 * Time: 21:39
 */

spl_autoload_register(function ($class) {

    $base_dir = __DIR__ . "/";
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
