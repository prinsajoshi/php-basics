<!-- index.php -->
<?php
include_once 'hello.php'; // Includes the file only once

?>

<div>
    <p>This is the main content of the page.</p>
</div>

<!-- 
If the another page needs the same function it does not include it.
Therefore,in include_once it prevents the function from being redefined  -->