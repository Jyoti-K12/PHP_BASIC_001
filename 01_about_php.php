
<?php
/*

==============================
    What is PHP 
==============================
1. PHP is a programming language for websites and web applications.
2. It helps developers build dynamic and interactive web pages.
3. With PHP, you can:
4. Collect form data
    - Create login systems
    - Interact with databases
    - Generate dynamic content
5. Often used with HTML to design web pages.
6. Enables websites to perform various functionalities and tasks seamlessly.




==============================
    PHP TAG 
==============================

The <?php ?> syntax in PHP is the standard delimiter for enclosing PHP code blocks within HTML, allowing for the execution of PHP code within a webpage.

The <?= ?> syntax in PHP is known as a short echo tag or short open tag, used for quickly outputting PHP code directly to the webpage
*/

/*==============================
    PHP Latest Version PHP 8
==============================*/

//1. JIT Compiler ------------->


/*The JIT compiler in PHP aims to improve the performance of CPU-bound workloads, such as mathematical computations and algorithms, by optimizing critical code paths. */

//2. constructor method in Traits -------------->
trait MyTrait
{
    public function __construct(
        public string $name,
        public int $age
    ) {
    }
}

class MyClass
{
    use MyTrait;
}

$obj = new MyClass("John", 30);
echo $obj->name; // Outputs: John
echo $obj->age;  // Outputs: 30



//3. ENUM ------------>
enum Direction
{
    case NORTH;
    case SOUTH;
    case EAST;
    case WEST;
}
$direction = Direction::NORTH;
echo $direction;

//4. Nullsafe Operator ------------->

/* 
- Without the nullsafe operator, we need to explicitly check for null values at each step of the property/method access chain.
- With the nullsafe operator (?->), we can chain property/method calls and the evaluation stops if any intermediate result is null, returning null as the final result.
*/


/*
===========================
 PHP 7
===========================
PHP 7.4 brought several enhancements and new features, including:

Typed properties improvements
Arrow functions
Preloading
Null coalescing assignment operator (??=)
Spread operator in arrays
Weak references
Numeric literal separator
Improvements in error handling and type system */


?>