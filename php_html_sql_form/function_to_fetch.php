<?php
require 'db.php';

function fetch_all_data() {
    global $conn; 

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
            display_row($row);
        }
        echo '</table>';
    } else {
        echo "0 results";
    }
}

function display_row($row) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>
                <form style='display:inline;' method='post' action='delete.php'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit'>Delete</button>
                </form>
                <form style='display:inline;' method='get' action='edit_page.php'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit'>Edit</button>
                </form>
            </td>
        </tr>";
}
?>
