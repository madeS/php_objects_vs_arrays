<?php
$resultDir = './temp';
$resultsFiles = scandir($resultDir);
foreach($resultsFiles as $resultFile) {
    if ($resultFile === '.' || $resultFile === '..') {
        continue;
    }
    $resultsTotalString = file_get_contents($resultDir . '/' . $resultFile);
    $resultsStrings = explode("\n", $resultsTotalString);
    
    echo "$resultFile:\n";
    $resultsTimes = [];
    foreach($resultsStrings as $resultsString) {
        $resultArr = explode('=', $resultsString);
        if (count($resultArr) < 2) {
            continue;
        }
	if (!isset($resultsTimes[$resultArr[0]])) {
            $resultsTimes[$resultArr[0]] = [];
        }
        $resultsTimes[$resultArr[0]][] = $resultArr[1];
    }
    foreach($resultsTimes as $resultsTimeKey => $resultsTimeResults) {
    	echo "$resultsTimeKey = " . number_format(array_sum($resultsTimeResults) / count($resultsTimeResults),3,'.','') . ";\n";
    }
}