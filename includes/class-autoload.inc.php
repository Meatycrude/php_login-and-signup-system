<?php

declare(strict_types=1);

// Define base path once (best placed in a bootstrap/config file)
define('CLASS_PATH', __DIR__ . '/classes/');   // Adjust if needed

spl_autoload_register('myAutoloader');

function myAutoloader(string $className): void
{
    // Optional: Handle namespaces (replace \ with /)
    $className = str_replace('\\', '/', $className);

    $file = CLASS_PATH . $className . '.php';   // Modern: .php instead of .class.php

    if (file_exists($file)) {
        require_once $file;
    }
    // Do NOT throw error here — let PHP handle "Class not found" naturally
}