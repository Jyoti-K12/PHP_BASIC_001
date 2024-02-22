<?php

/**
 * =================================================================================================================
 * 1. What is superglobals variables?
 * =================================================================================================================
 */
/*
 => Superglobals in PHP are predefined variables that are accessible from any part of a PHP script without needing to be explicitly declared. They are called "super" because they are available globally
 They include:
 - $_GET (Query strings in the URL)
 - $_POST (HTML Forms and js http request)
 - $_REQUEST (array containing data from $_GET, $_POST, and $_COOKIE)
 - $_SESSION (used to store session data on the server)
 - $_COOKIE (a small piece of data stored on the client's computer)
 - $_SERVER (holds information about headers, paths, and script locations)
 - $_FILES (used to collect and handle file uploads submitted via an HTML form with the attribute enctype="multipart/form-data")
 - $_ENV (access to environment variables, these variables are set by the web server or the system)
 */




/**
 * =================================================================================================================
 * 2. What is Session?
 * =================================================================================================================
 */
/*
 => Definition:
   a session is like a temporary storage space that helps remember information about a user as they use a web application. It's like a short-term memory for the server.

=> Common uses:
 - User authentication: Storing information about whether a user is logged in or not.
 - Shopping carts: Maintaining the contents of a user's shopping cart across pages.
 - User preferences: Saving user-specific settings or preferences.
 - CSRF (Cross-Site Request Forgery) prevention: Generating and validating tokens to prevent CSRF attacks.
 */

/*
=> Example:
*/

// Start the session
session_start();

// Set session variables
$_SESSION['username'] = 'john_doe';
$_SESSION['user_id'] = 12345;

// use session variables
echo 'Welcome, ' . $_SESSION['username'];




/**
 * =================================================================================================================
 * 3. Difference between session_unset() and session_distroy().
 * =================================================================================================================
 */
/*
=> session_unset(): 
 - The session_unset function does not delete the data; it simply empty session data.
 - After using session_unset, there's no need to start a new session (session_start()) to set new data.

=> session_destroy():
 - The session_destroy function terminates the current session, removing all session data and destroying the session ID.
 - session_destroy not only empties the session data but also completely ends the session.
 - After using session_distroy, there's required to start a new session (session_start()) to set new data or access data.
*/




/**
 * =================================================================================================================
 * 4. How to Unset a single key from the session.
 * =================================================================================================================
 */
/*
=> Using unset() method.
 - unset(): unset single key.
 - session_unset(): unset all keys.
*/

// Unset a single key from the session
unset($_SESSION['username']);




/**
 * =================================================================================================================
 * 5. Difference between session_unset() and unset()
 * =================================================================================================================
 */
/*
session_unset():
 - clearing all session variables.
 - managing session data, which is typically stored on the server.
 - removes all variables from the $_SESSION superglobal, effectively emptying the session data.

unset():
 - used to unset a variable or multiple variables in any scope (global, local, or object).
 - It is not specific to session management and can be used to unset any variable, including session variables ($_SESSION) if used within a session context.
 - unset() removes the specified variable(s) from the current scope, making them no longer accessible or usable.
 */




/**
 * =================================================================================================================
 * 6. what is cookies?
 * =================================================================================================================
 */
/*
=> Cookies are small pieces of data stored on the client's browser. They are commonly used to remember information about the user.
*/

/*
 - Set Cookie:
*/
// Set a cookie named "username" with the value "John" that expires in 30 days
setcookie("username", "John", time() + (30 * 24 * 60 * 60), "/");


/*
 - Modify Cookie:
*/
// Modify the "username" cookie to change its value to "Max"
setcookie("username", "Max", time() + (30 * 24 * 60 * 60), "/");


/*
 - Delete Cookie:
*/
// Delete the "username" cookie by setting its expiration time to a past value
setcookie("username", "", time() - 3600, "/");






/**
 * =================================================================================================================
 * 7. Difference between session and cookie?
 * =================================================================================================================
 */
/*
Storage Location:
- Cookies: Stored on the client-side, typically in the user's browser.
- Sessions: Stored on the server-side, usually in files or a database.

Data Storage:
- Cookies: Limited to storing small amounts of data (usually up to 4KB).
- Sessions: Can store larger amounts of data because they are stored on the server.

Expiration:
- Cookies: Can have both persistent (with an expiry date) and session-only (expires when the browser is closed) lifetimes.
- Sessions: Typically expire after a specified period of inactivity (session timeout), which is configurable on the server.

Security:
- Cookies: Less secure because they are stored on the client-side and can be tampered with.
- Sessions: More secure as session data is stored on the server and not accessible or modifiable by the client.

Data Sharing:
- Cookies: Can be accessed and modified by both client-side and server-side scripts, making them suitable for data sharing between the client and server.
- Sessions: Can only be accessed and manipulated on the server-side, making them more secure for storing sensitive data.

Usage:
- Cookies: Often used for storing user preferences, tracking user behavior, and implementing features like remembering login status.
- Sessions: Commonly used for maintaining user authentication, managing shopping carts, and storing temporary data during a user's visit to a website.
*/