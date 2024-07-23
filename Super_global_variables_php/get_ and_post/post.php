

<!DOCTYPE html>
<html>
    <head>
        <title> Using Request on post </title>
    </head>
    <body>
        <!-- Here below form action denotes the url to which form data will be submitted here which is currently executing script
         htmlspecialchars() is used to prevent XSS by converting special characters to HTML entities -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label>Name:</label>
            <input type="text" name="fname">
            <input type="submit">
        </form>

        <div>
            <?php
            #Checks if the form is submitted using POST
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                #Retrives the value from input field from $_POST array and santizies it using htmlspecialchars()
                $name=htmlspecialchars($_POST['fname']);
                if ($name==''){
                    echo "Name is empty"; 
                } 
                else{
                    echo "Gotya name, $name";
                }
            } 

            ?>
        </div>
    </body>

<!-- 
1. First Visit:
Output: The form is displayed with no message in the div.

2.Submitting the Form with an Empty Name:
Output: Name is empty

3.Submitting the Form with a Name (e.g., "John Doe"):
Output: Gotya name, John Doe
-->