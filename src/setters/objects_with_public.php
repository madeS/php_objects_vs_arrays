<?php

$count = $argv[1];
echo "Running {$argv[0]} for $count\n";
$countItems = 1000;

class MyObj {
    public $a;
    public $b;
    public $c;
}

$result = [];
for($i = 0; $i < $countItems; $i++) {
    $obj = new MyObj();
    $obj->a = mt_rand(1,1000);
    $obj->b = mt_rand(1,1000);
    $obj->c = mt_rand(1,1000);
    $result[] = $obj;
}

$start = microtime(true);



for($i = 0; $i < $count; $i++) {
    $itemIndex = $i % $countItems;
    $result[$itemIndex]->a = $i * 3;
    $result[$itemIndex]->b = $i * 5;
    $result[$itemIndex]->c = $i * 10;
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/setters_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);
