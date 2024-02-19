<?php

/**
 * ======================
 * Notice Error: 
 * ======================
 */

/* These are like gentle reminders from PHP that something might be wrong in your code, but they won't stop the script. For instance, if you try to use a variable without defining it first, PHP will issue a notice. */


$name = "John";
echo $nam; // Notice: Undefined variable: nam





/**
 * ======================
 * Warning Error: 
 * ======================
 */

/*
  Warnings are more serious than notices. They indicate potential issues in your code that could lead to unexpected behavior. An example would be trying to include a file that doesn't exist.
 */
include 'nonexistent_file.php'; // Warning: include(nonexistent_file.php): failed to open stream: No such file or directory






/**
 * ======================
 * Fatal Error:
 * ======================
 */

/*
 These are critical errors that immediately stop the script execution. They occur when something very wrong happens, like calling a function that doesn't exist.
 */
myFunction(); // Fatal error: Call to undefined function myFunction()



/**
 * ==========================
 * Parse Error:
 * ==========================
 */

/*
  Parse errors happen when PHP can't understand your code due to syntax mistakes. They prevent the script from running at all. For instance, forgetting to close a parenthesi
 */

echo "Hello"; // Parse error: syntax error, unexpected end of file
