<?php

function countConsecutivePairs(array $array): int
{
    $totalPairs = 0;
    $currentCount = 1;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] === $array[$i - 1]) {
            $currentCount++;
            if ($currentCount > 1) {
                $totalPairs++;
            }
        } else {
            $currentCount = 1;
        }
    }

    return $totalPairs;
}

$array = [1, 1, 2, 3, 4, 51, 12, 12, 12, -51];
echo "Количество последовательных пар: " . countConsecutivePairs($array);
