<?php


$count = $argv[1];
echo "Running {$argv[0]} for $count\n";
$countItems = 1000;

define('FIELD_A','id');
define('FIELD_B','name');
define('FIELD_C','desc');

$result = [];
for($i = 0; $i < $countItems; $i++) {
    $obj = [
        FIELD_A => mt_rand(1,1000),
        FIELD_B => mt_rand(1,1000),
        FIELD_C => mt_rand(1,1000),
    ];
    $result[] = $obj;
}

$start = microtime(true);



$totalResult = 0;
for($i = 0; $i < $count; $i++) {
    $itemIndex = $i % $countItems;
    $totalResult += $result[$itemIndex][FIELD_A] + $result[$itemIndex][FIELD_B] - $result[$itemIndex][FIELD_C];
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/class_init_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);