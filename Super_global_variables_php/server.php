<?php
#$_Server holds information about header,path and script locations 

//outputs the file name of currently executing script relative to doc root
echo $_SERVER['PHP_SELF'];
echo "<br>";
//output: /Super_global_variables_php/server.php


//outputs the name of the server under which script is executing
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//output: localhost

//outputs the host header 
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//output: localhost

//outpus the address of the page 
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
//output: http://localhost/Super_global_variables_php/

//outputs the user agent string of the browser that is accessing the page
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
//output: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36

//outputs the path of current scripts,including the path from document root
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
//output: /Super_global_variables_php/server.php
?>