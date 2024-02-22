<?php

/**
 * ================================================================================================
 * 1. What is an array in PHP? Can you explain the different types of arrays in PHP?
 * ================================================================================================
 */
/*
 - An array in PHP is a special variable that can hold multiple values under a single name.
 - It's like a list or a collection of items, where each item has a unique identifier called a key.

Types of Arrays in PHP:

Numeric Array:
 - Uses numerical keys to access elements.
 - Example: $colors = array("Red", "Green", "Blue");

Associative Array:
 - Uses named keys to access elements.
 - Example: $person = array("name" => "John", "age" => 30, "city" => "New York");

Multidimensional Array:
 - An array containing one or more arrays.
 - Example: $products = array( array("name" => "Laptop", "price" => 1000), array("name" => "Phone", "price" => 500) );
*/





/**
 * =================================================================================================================
 * 2. How do you access the first and last elements of an array in PHP?
 * =================================================================================================================
 */
/*
=> Accessing the First Element:
Use index 0 to access the first element of the array.
*/
//Example:
$firstElement = $array[0];

/*
=> Accessing the Last Element:
Use the index corresponding to the last element of the array.
You can calculate the index by subtracting 1 from the length of the array.
*/
//Example-1
$lastIndex = count($array) - 1; // Calculate the index of the last element
$lastElement = $array[$lastIndex]; // Access the last element using the calculated index

//Example-2
$lastElement = end($array); // Access the last element of the array

/**
 * =================================================================================================================
 * 3. Explain these array functions like array_shift(), array_pop(), reset(), and end().
 * =================================================================================================================
 */
/*
 - array_shift($array): Removes and returns the first element from the array.
*/
$array = [1, 2, 3, 4, 5];
$firstElement = array_shift($array); // $firstElement will be 1, $array will be [2, 3, 4, 5]



/*
 - array_pop($array): Removes and returns the last element from the array.
*/
$array = [1, 2, 3, 4, 5];
$lastElement = array_pop($array); // $lastElement will be 5, $array will be [1, 2, 3, 4]


/*
 - reset($array): Access the first element of the array.
*/
$array = [1, 2, 3, 4, 5];
$firstElement = reset($array); // $firstElement will be 1



/*
 - end($array): Access the last element of the array.
*/
$array = [1, 2, 3, 4, 5];
$lastElement = end($array); // $lastElement will be 5





/**
 * =================================================================================================================
 * 4. What is the purpose of the array_map() function in PHP? Can you provide an example?
 * =================================================================================================================
 */
/*
  - The array_map() function in PHP helps you to change every item in a list (array) by using a small function
  - The purpose of the array_map() function in PHP is to apply a callback function to each element of one or more arrays and return a new array containing the results.
*/

/*EXAMPLE:*/
// Define a callback function to convert each element to uppercase
function convertToUppercase($str)
{
    return strtoupper($str);
}

// Array of strings
$array = ["apple", "banana", "cherry"];

// Apply the callback function to each element of the array
$result = array_map("convertToUppercase", $array);

// Output the result
print_r($result);

/*
OUTPUT: 
Array
(
    [0] => APPLE
    [1] => BANANA
    [2] => CHERRY
)
*/




/**
 * =================================================================================================================
 * 5. How do you check if a value exists in an array in PHP? Can you explain the usage of in_array(), array_filter() and array_search() functions?
 * =================================================================================================================
 */
/*
in_array():
 - in_array() function checks if a specified value exists in an array. It returns true if the value is found, and false otherwise.
 - Syntax: in_array($value, $array)
*/
/*EXAMPLE: */
$array = ["apple", "banana", "cherry"];
if (in_array('banana', $array)) {
    echo 'Found!';
} else {
    echo 'Not found!';
}





/**
 * =================================================================================================================
 * 6. Array sorting functions
 * =================================================================================================================
 */
/*
 - sort($array): Sorts an array in ascending order.
 - rsort($array): Sorts an array in descending order.
 - asort($array): Sorts an associative array in ascending order, maintaining key-value pairs.
 - arsort($array): Sorts an associative array in descending order, maintaining key-value pairs.
 - ksort($array): Sorts an associative array by key in ascending order.
 - krsort($array): Sorts an associative array by key in descending order.
*/




/**
 * =================================================================================================================
 * 7. array_slice() and array_splice()
 * =================================================================================================================
 */
/*
 - array_splice: Remove elements from an array and replace it with new elements.
 - array_slice: returns selected parts of an array.
*/



/**
 * =================================================================================================================
 * 8. array_merge() and array_combine()? How to merge multi dimensional array?
 * =================================================================================================================
 */
/*
 - array_merge(): Merges one or more arrays into a single array.

 - array_combine(): Create an array by using the elements from one "keys" array and one "values" array.
 Note: In array_combine both arrays must have equal number of elements!
*/




/**
 * =================================================================================================================
 * 9. How do you remove duplicate values from an array in PHP? Can you explain the usage of array_unique() function?
 * =================================================================================================================
 */

/*
array_unique(): Removes duplicate values from an array.
*/

/*
another alternative way:
*/
$array = [1, 2, 3, 2, 4, 1];
$uniqueArray = [];
foreach ($array as $value) {
    if (!in_array($value, $uniqueArray)) {
        $uniqueArray[] = $value;
    }
}
print_r($uniqueArray);

/*
Without using pre built methods:
*/
$array = [1, 2, 3, 2, 4, 1];
$uniqueArray = [];

foreach ($array as $value) {
    // Check if the value already exists in $uniqueArray
    $found = false;
    foreach ($uniqueArray as $uniqueValue) {
        if ($value === $uniqueValue) {
            $found = true;
            break;
        }
    }
    // If the value is not found, add it to $uniqueArray
    if (!$found) {
        $uniqueArray[] = $value;
    }
}

print_r($uniqueArray);





/**
 * =================================================================================================================
 * 10. array_chunks()?
 * =================================================================================================================
 */

 /*
  - split/devide an array into smaller arrays of a specified size
 */
