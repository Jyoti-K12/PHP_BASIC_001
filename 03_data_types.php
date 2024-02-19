<?php

/**
 * ======================
 *  Data Types
 * ======================
 */

/*
  PHP supports the following data types:
    - String
    - Integer
    - Float (floating point numbers - also called double)
    - Boolean
    - Array
    - Object
    - NULL
    - Resource
  */

/**
 * ============================
 *  Double or Single Quotes
 * ============================
 */

/*
 1. Double quotes process or print with special characters, single quotes does not.

 Single Quotes (''):

 - Use them when you want to treat everything inside as plain text, even variables.
 - They're faster for PHP to process because it doesn't have to check for variables or special characters.

Double Quotes (""):

 - Use them when you want PHP to evaluate variables and special characters inside the string.
 - They're slower than single quotes but offer more flexibility in string manipulation.
*/

/** 
 * =========================
 *  Type Casting
 * =========================
 */

/*
Casting in PHP is done with these statements:
  - (string) - Converts to data type String
  - (int) - Converts to data type Integer
  - (float) - Converts to data type Float
  - (bool) - Converts to data type Boolean
  - (array) - Converts to data type Array
  - (object) - Converts to data type Object
  - (unset) - Converts to data type NULL
  */

/**
 * =================================
 * difference between == and === .
 * =================================
 */
/*
 - Use == when you want to check if the values of two operands are equal, regardless of their data types.
 - Use === when you want to check if the values of two operands are equal and they are of the same data type.
 */


/**
 * ========================================
 * difference between (int) and intVal() .
 * ========================================
 */
/*
  - intval() is a function, while (int) is a type casting operator.
  - intval() takes a variable as an argument and returns its integer value.
  - (int) is used directly in front of a variable to forcefully convert it to an integer.
  - Both intval() and (int) will attempt to convert a string to an integer, but intval() offers more control with   additional parameters for handling different bases and special cases.
  - If a string contains non-numeric characters, intval() will return 0, while (int) will attempt to extract as many numeric characters as possible and convert them to an integer.
  - In simple terms, both intval() and (int) can convert variables to integers, but intval() gives you more options and control, while (int) is more straightforward for basic conversions.
*/