<?php

$start = microtime(true);
$count = $argv[1];
echo "Running {$argv[0]} for $count\n";



class MyObj {
    public function __construct($id, $name, $desc) {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
    }
    public $id;
    public $name;
    public $desc;
}

$result = [];
for($i = 0; $i < $count; $i++) {
    $obj = new MyObj($i, 'Name' . $i, 'Desc' . $i . ' desc ' . $i);
    $result[] = $obj;
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/creating_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);
