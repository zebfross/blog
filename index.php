<?php // @codingStandardsIgnoreFile

// load dependencies
require_once(__DIR__ . '/vendor/autoload.php');

// instance Pico
$pico = new Pico(
    __DIR__,    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);

// run application
echo $pico->run();
