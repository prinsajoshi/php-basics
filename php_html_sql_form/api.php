<?php
include 'db.php';

//this specifies the response will be in json format
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT id, username, email  FROM users WHERE id=$id";
        } else {
            $sql = "SELECT id, username, email FROM users";
        }
        $result = $conn->query($sql);
        $tasks = [];
        while($row = $result->fetch_assoc()) {
            //appends new element to the array
            $tasks[] = $row;
        }
        //outputs the task as json json_encode
        echo json_encode($tasks);
        break;

    case 'POST':
        /*
        files_get_contents() is used to read raw Post data from the request body 
        like reads: {
    "name": "John",
    "age": 30,
    "city": "New York"
}
        and json_decoder will convert string into PHP associative array:
        example:[
    "name" => "John",
    "age" => 30,
    "city" => "New York"
]
*/
        $data = json_decode(file_get_contents('php://input'), true);
     
        //extract the 'title' and 'description' from the input data
        $username =  $data['username'] ;
        $email = $data['email'] ;

        if (empty($username) || empty($email)) {
            echo json_encode(["error" => "Title and description are required"]);
            break;
        }

        $username = $conn->real_escape_string($username);
        $email = $conn->real_escape_string($email);

        $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Task created successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);

        //validating the json data
        $id =  $data['id'] ;
        $username =  $data['username'] ;
        $email = $data['email'];

        if (empty($id) || empty($username) || empty($email)) {
            echo json_encode(["error" => "ID, username, and email are required"]);
            break;
        }

        $id = $conn->real_escape_string($id);
        $username = $conn->real_escape_string($username);
        $email = $conn->real_escape_string($email);

        $sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Task updated successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);  

        if (!isset($data['id'])) {
            echo json_encode(["error" => "ID is required"]);
            break;
        }

        $id = $conn->real_escape_string($data['id']);

        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Task deleted successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;
    
    default:
        echo json_encode(["error" => "Invalid Request Method"]);
        break;
}

$conn->close();

?>
