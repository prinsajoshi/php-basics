<?php
/*
magic constants are predefined constants that change depening on their context
They are used for debugging,logging,providing contextual information about the code being executed
--start and end with __ and provide valuable finromation like file name,line number
,class,functions and more
*/

/* 
__LINE__
Description: Represents the current line number in the file where it is used.
Use Case: Useful for debugging, logging, or error messages to specify the exact location in the code.*/
echo "This is line " . __LINE__;
// Output: This is line 13


?>