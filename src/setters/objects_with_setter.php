<?php

$count = $argv[1];
echo "Running {$argv[0]} for $count\n";
$countItems = 1000;

class MyObj {
    protected $a;
    protected $b;
    protected $c;
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA() {
	return $this->a;
    }
    public function getB() {
	return $this->b;
    }
    public function getC() {
	return $this->c;
    }
    public function setA($a) {
	$this->a = $a;
    }
    public function setB($b) {
	$this->b = $b;
    }
    public function setC($c) {
	$this->c = $c;
    }
}

$result = [];
for($i = 0; $i < $countItems; $i++) {
    $obj = new MyObj(mt_rand(1,1000), mt_rand(1,1000), mt_rand(1,1000));
    $result[] = $obj;
}

$start = microtime(true);



for($i = 0; $i < $count; $i++) {
    $itemIndex = $i % $countItems;
    $result[$itemIndex]->setA($i * 3);
    $result[$itemIndex]->setB($i * 5);
    $result[$itemIndex]->setC($i * 10);
}



$memory = memory_get_peak_usage();
$time = (microtime(true) - $start);
echo 'Time: ' . number_format($time,3,'.',' ') . '; Memory: ' . number_format($memory / (1024*1024) ,2,'.','') . ' MB;' . "\n";
file_put_contents('../temp/setters_'.$count.'.txt', "{$argv[0]}=$time\n", FILE_APPEND);
