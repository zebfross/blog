<?php // @codingStandardsIgnoreFile
error_reporting(E_ERROR | E_PARSE);
// load dependencies unnecessary change
require_once(dirname(__FILE__) . '/vendor/autoload.php');

// instance Pico
$pico = new Pico(
    dirname(__FILE__),    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);
// run application
echo $pico->run();
