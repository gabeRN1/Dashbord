<?php


function autoload($className) {
 
    $baseDir = __DIR__ . '/../';

 
    $directories = [
        'controllers' => $baseDir . '../core',
        'models' => $baseDir . 'app/models/',
        'views' => $baseDir . 'app/views/',  
    ];

    foreach ($directories as $dir) {
        $file = $dir . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    throw new Exception("Classe $className não encontrada.");

    
}
spl_autoload_register('autoload');

