<?php

// Initialisation des dossiers nécessaires dans le système de fichiers accessible en écriture (/tmp)
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Transmission de la requête au noyau Laravel
require __DIR__ . '/../public/index.php';
