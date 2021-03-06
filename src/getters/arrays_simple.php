<?php


$count = $argv[1];
echo "Running {$argv[0]} for $count\n";
$countItems = 1000;

$result = [];
for($i = 0; $i < $countItems; $i++) {
    $obj = [
        'a' => mt_rand(1,1000),
        'b' => mt_rand(1,1000),
        'c' => mt_rand(1,1000),
    ];
    $result[] = $obj;
}

$start = microtime(true);



$totalResult = 0;
for($i = 0; $i < $count; $i++) {
    $itemIndex = $i % $countItems;
    $totalResult += $result[$itemIndex]['a'] + $result[$itemIndex]['b'] - $result[$itemIndex]['c'];
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/getters_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);