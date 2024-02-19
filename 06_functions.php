<?php

/**
 * ===============================
 * PHP Built-in Functions:
 * ===============================
 */
/*
 - PHP has over 1000 built-in functions ready for use.
 - These functions perform specific tasks and can be directly called within a script.
 - Examples include strlen() to get the length of a string, date() to get the current date and time, and strtolower() to convert a string to lowercase.
 */

$string = "Hello, World!";
echo strlen($string); // Outputs: 13




/**
 * ===============================
 * PHP User Defined Functions:
 * ===============================
 */
/*
You can create your own functions in PHP to perform custom tasks.
Functions are blocks of statements that can be used repeatedly in a program.
They won't execute automatically when a page loads but require a call to the function to execute.
*/

// Define a custom function
function greet()
{
    echo "Hello, World!";
}

// Call the function to execute
greet(); // Outputs: Hello, World!
