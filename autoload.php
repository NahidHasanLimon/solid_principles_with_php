<?php

// Define an autoloader function
function my_autoloader($class) {
    // Convert namespace separator to directory separator
    $classPath = 'src/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    // Check if the file exists before including
    if (file_exists($classPath)) {
        include $classPath;
    } else {
        // Handle autoload failure gracefully (you might want to log or throw an exception)
        echo "Class file not found: $classPath";
    }
}

// Register the autoloader function
spl_autoload_register('my_autoloader');
