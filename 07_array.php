<?php

/**
 * =============================
 * ARRAY
 * =============================
 */
/*
An array is a special variable that can hold multiple values. These values can be of any data type, such as integers, strings, other arrays, or even objects. Arrays provide a convenient way to organize and manipulate collections of data.
*/


/**
 * =============================
 * TYPES OF ARRAY
 * =============================
 */
/*
Numeric Array: A numeric array uses numerical indexes to access its elements. The first element starts with an index of 0, the second with 1, and so on.
*/
$numbers = array(10, 20, 30);
echo $numbers[0]; // Outputs: 10



/*
Associative Array: An associative array uses named keys to access its elements instead of numerical indexes. Each key is associated with a value.
*/
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo $person["name"]; // Outputs: John




/*
Multidimensional Array: A multidimensional array is an array of arrays. It can hold other arrays as its elements, creating a hierarchical structure.
*/
$students = array(
    array("name" => "Alice", "grade" => "A"),
    array("name" => "Bob", "grade" => "B"),
    array("name" => "Charlie", "grade" => "C")
);
echo $students[0]["name"]; // Outputs: Alice
