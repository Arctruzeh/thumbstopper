<?php
/**
 * Write an executable php script that does the following:  
 * Cycle through the numbers 3 through 103.  
 * When the current number can be evenly divided by 3, display the word “three”.  
 * When the current number can be evenly divided by 5, display the word “five”.  
 * When the current number can be divided evenly by both 3 and 5, display the words “both three and five”.  
 * If the current number isn’t divisible by either, output the number itself.  
 * Each output should be on its own line. 
 */

for ($x = 3; $x<=103; $x++) {
    $y = '';
    if ($x % 3 == 0) { 
        $y = 'three';
    }
    if ($x % 5 == 0) {
        $y = 'five';
    }
    if ($x % 3 == 0 and $x % 5 == 0) {
        $y = 'both three and five';
    }
    if ($y == '') {
        $y = $x;
    }
    print $y . "\xA";
}

/**
 * PS: I have fizzbuzz on github too!
 */