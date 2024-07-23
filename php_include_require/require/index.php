<?php
/*
Require ensures that critical files are included and helps manage errors if those files are missing
*/
require 'welcome_message.php'; // This brings in the welcome message

// Other content of your page
echo "<p>This is the main content of the page.</p>";

/* Output
Welcome to my website!
This is the main content of the page.

if welcome_message.php is not present:
Output:
Warning: require(welcome_message.php): failed to open stream: No such file or directory in /path/to/index.php on line 1
Fatal error: Uncaught Error: Failed opening required 'welcome_message.php' (include_path='.:/usr/local/lib/php') in /path/to/index.php:1
*/
?>


