<?php

$marks = [85, 2, 78, 96, 88, 45, 63, 31, 72, 55];

$total  = 0;
$passed = 0;
$failed = 0;

echo "+------------+-------+--------+" . PHP_EOL;
echo "| Student    | Mark  | Result |" . PHP_EOL;
echo "+------------+-------+--------+" . PHP_EOL;

foreach ($marks as $index => $mark) {
    $studentNum = $index + 1;
    $result     = ($mark >= 50) ? "PASS" : "FAIL";

    $total += $mark;
    if ($mark >= 50) {
        $passed++;
    } else {
        $failed++;
    }

    echo sprintf("| Student %-2d | %-5d | %-6s |", $studentNum, $mark, $result) . PHP_EOL;
    echo "+------------+-------+--------+" . PHP_EOL;
}

$average = $total / count($marks);

echo PHP_EOL;
echo "+----------------------+---------+" . PHP_EOL;
echo "| Summary              | Value   |" . PHP_EOL;
echo "+----------------------+---------+" . PHP_EOL;
echo sprintf("| %-20s | %-7d |", "Total Marks",     $total)   . PHP_EOL;
echo sprintf("| %-20s | %-7.2f |", "Average Mark",  $average) . PHP_EOL;
echo sprintf("| %-20s | %-7d |", "Students Passed", $passed)  . PHP_EOL;
echo sprintf("| %-20s | %-7d |", "Students Failed", $failed)  . PHP_EOL;
echo sprintf("| %-20s | %-7d |", "Total Students",  count($marks)) . PHP_EOL;
echo "+----------------------+---------+" . PHP_EOL;