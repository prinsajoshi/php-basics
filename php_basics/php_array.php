<?
#array declear with printing
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);

/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
)
*/


#Associative array
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
);
print_r($person);

/*
Output:
Array
(
    [first_name] => John
    [last_name] => Doe
    [age] => 30
    [email] => john.doe@example.com
)
*/

#Multidimesnional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
print_r($matrix);
/*
Output:
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

    [1] => Array
        (
            [0] => 4
            [1] => 5
            [2] => 6
        )

    [2] => Array
        (
            [0] => 7
            [1] => 8
            [2] => 9
        )
)

*/




#Multidimesnsional associative Array
$students = array(
    array(
        "name" => "Alice",
        "age" => 22,
        "courses" => array("Math", "Science", "English")
    ),
    array(
        "name" => "Bob",
        "age" => 24,
        "courses" => array("History", "Art", "Music")
    ),
    array(
        "name" => "Charlie",
        "age" => 23,
        "courses" => array("Biology", "Chemistry", "Physics")
    )
);

print_r($students);

/*
Output
Array
(
    [0] => Array
        (
            [name] => Alice
            [age] => 22
            [courses] => Array
                (
                    [0] => Math
                    [1] => Science
                    [2] => English
                )
        )

    [1] => Array
        (
            [name] => Bob
            [age] => 24
            [courses] => Array
                (
                    [0] => History
                    [1] => Art
                    [2] => Music
                )
        )

    [2] => Array
        (
            [name] => Charlie
            [age] => 23
            [courses] => Array
                (
                    [0] => Biology
                    [1] => Chemistry
                    [2] => Physics
                )
        )
)
*/

?>