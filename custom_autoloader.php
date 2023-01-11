<?php

$toMap = require __DIR__ . '/loader_map.php';

foreach ($toMap as $prefix => $baseDir) {
    spl_autoload_register(function ($class) use ($prefix, $baseDir) {
        $baseDir = __DIR__ . "/{$baseDir}";

        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }

        $relativeClass = substr($class, $len);

        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

        if (file_exists($file)) {
            require $file;
        }
    });
}
