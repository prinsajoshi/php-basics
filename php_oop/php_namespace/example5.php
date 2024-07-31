<?php
/**Global namespace
 * By default, if you don't specify a namespace, code resides in the global namespace. 
 * To access a global namespace element from within a namespaced code block, use a leading backslash \.
 */
namespace MyApp;

function strlen($string) {
    return "MyApp strlen function";
}

echo strlen("Hello"); // Output: MyApp strlen function
echo \strlen("Hello"); // Output: 5, calls PHP's global strlen function
