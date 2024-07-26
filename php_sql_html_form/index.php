<?php
require 'script.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP SQL HTML Form</title>
    </head>
    <body>
        <h1>Add the data to store in database</h1>
        <form method="post" action="script.php">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">ADD DATA</button>
        </form>

        <h2>All Data</h2>
        <?php
        // Fetch data from the table
        $sqli = "SELECT id, username, email FROM users";
        $result = $conn->query($sqli);
        if ($result->num_rows > 0) {
            echo '<table>
                        <tr><th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <form style='display:inline;' method='post' action='script.php'>
                                <input type='hidden' name='_method' value='DELETE'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit'>Delete</button>
                            </form>
                            <form style='display:inline;' method='get' action='edit.php'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit'>Edit</button>
                            </form>
                        </td>
                    </tr>";
            }
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
    </body>
</html>
