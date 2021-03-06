<?php

$count = $argv[1];
echo "Running {$argv[0]} for $count\n";

$composerAutoloader = require __DIR__.'/../app/Test/Performance/Classes/SimpleClasses.php';

$start = microtime(true);


$results = [];
$resultNames = [];
for ($i = 0; $i < $count; $i++) {
    $dir = "Dir" . ($i % 100);
    $className = "\\App\\Test\\Performance\\Classes\\$dir\\SimpleClass$i";
    $object = new $className();
    $object->firstName = "FirstName$i";
    $object->lastName = "LastName$i";
    $results[] = $object;
    $resultNames[] = "{$object->firstName} {$object->lastName}";
}

$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/class_init_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);

