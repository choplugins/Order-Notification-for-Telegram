<?php

\spl_autoload_register(function ($class) {

    if (stripos($class, 'NineKolor\TelegramWC') !== 0) {
        return;
    }

    $classFile = str_replace('\\', '/', substr($class, strlen('NineKolor\TelegramWC') + 1) . '.php');
    include_once __DIR__ . '/' . $classFile;
});
