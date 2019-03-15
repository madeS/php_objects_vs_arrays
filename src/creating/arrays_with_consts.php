<?php

$start = microtime(true);
$count = $argv[1];
echo "Running {$argv[0]} for $count\n";

define('ID','id');
define('NAME','name');
define('DESC','desc');

$result = [];
for($i = 0; $i < $count; $i++) {
    $obj = [
        ID => $i,
        NAME => 'Name' . $i,
        DESC => 'Desc' . $i . ' desc ' . $i,
    ];
    $result[] = $obj;
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/creating_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);