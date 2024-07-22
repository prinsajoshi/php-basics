<?php
/*Ternary operator
Syntax:
(condition) ? expression_if_true : expression_if_false;
*/

//basic ternary
$age=20;
$canvote=($age>18)? "yes,you can vote ":"no,you cannot vote";
echo $canvote;

//nested ternary operator
$score=85;
$grade=($score>=90)? "A": (($score>=80)? "B": (($score>=70)? "C":"F"));
echo "Grade:".$grade;
