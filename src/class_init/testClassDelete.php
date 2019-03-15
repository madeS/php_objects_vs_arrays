<?php

function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}

$startTime = microtime(true);

$count = $argv[1];
echo "Running {$argv[0]} for $count\n";

$minClassesDir = __DIR__ . '/../app/Test/Performance/Classes';
deleteDirectory($minClassesDir);

$endTime = microtime(true);

$elapsedTime = number_format($endTime - $startTime, 3);

echo "Elapsed: $elapsedTime\n";

