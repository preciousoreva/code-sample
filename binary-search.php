<?php 
function binary_search($arr, $x) { 
    $left = 0; 
    $right = count($arr) - 1; 
    while ($left <= $right) { 
        $mid = floor(($left + $right) / 2); 
        if ($arr[$mid] == $x) { 
            return $mid; 
        } 
        if ($arr[$mid] < $x) { 
            $left = $mid + 1; 
        } else { 
            $right = $mid - 1; 
        } 
    } 
    return -1; 
} 