<?php

/**
 * ======================================================
 * Assignment Statements: Assign a value to a variable.
 * ======================================================
 */
$variable = 10;



/**
 * ======================================================
 * Echo Statement: Output data to the browser.
 * ======================================================
 */
echo "Hello, world!";




/**
 * ======================================================
 * Return Statement: Return a value from a function.
 * ======================================================
 */
function add($a, $b)
{
    return $a + $b;
}



/**
 * =========================================================================
 * Include and Require Statements: Include or require external PHP files.
 * =========================================================================
 */
include 'file.php';
require 'file.php';



/**
 * ======================================================
 * If Statements: Conditionally execute code.
 * ======================================================
 */
if ($condition) {
    // Code block to execute if condition is true
} elseif ($anotherCondition) {
    // Code block to execute if another condition is true
} else {
    // Code block to execute if no condition is true
}




/**
 * ======================================================
 * If Statements: Conditionally execute code.
 * ======================================================
 */
switch ($variable) {
    case 'value1':
        // Code block for case 1
        break;
    case 'value2':
        // Code block for case 2
        break;
    default:
        // Code block if no case matches
        break;
}
