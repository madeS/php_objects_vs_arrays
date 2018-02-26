<?php

$start = microtime(true);
$count = $argv[1];
echo "Running {$argv[0]} for $count\n";



$result = [];
for($i = 0; $i < $count; $i++) {
    $obj = new \StdClass();
    $obj->id = $i;
    $obj->name = 'Name' . $i;
    $obj->desc = 'Desc' . $i . ' desc ' . $i;
    $result[] = $obj;
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";