<?php
session_start();

// Initialize data array in session
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [
        ['id' => 1, 'value' => 'First Item'],
        ['id' => 2, 'value' => 'Second Item'],
        ['id' => 3, 'value' => 'Third Item']
    ];
}

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<h2>Current Data</h2>";
    echo "<pre>" . print_r($_SESSION['data'], true) . "</pre>";   //returns as string
}

// Handle POST request (for adding new data)
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $method = $_POST['_method'] ?? 'POST';
    
    // Handle POST data
    if ($method === 'POST') {
        $newData = $_POST['new_data'];
        $newId = count($_SESSION['data']) + 1;
        $_SESSION['data'][] = ['id' => $newId, 'value' => $newData];
        echo "Data added successfully!";
    }

    // Handle PUT request (for updating data)
    elseif ($method === 'PUT') {
        $id = $_POST['id'];
        $updatedData = $_POST['updated_data'];
        foreach ($_SESSION['data'] as &$item) {
            if ($item['id'] == $id) {
                $item['value'] = $updatedData;
                echo "Data updated successfully!";
                break;
            }
        }
    }

    // Handle PATCH request (for partially updating data)
    elseif ($method === 'PATCH') {
        $id = $_POST['id'];
        $updatedData = $_POST['updated_data'];
        foreach ($_SESSION['data'] as &$item) {
            if ($item['id'] == $id) {
                $item['value'] = $updatedData;
                echo "Data partially updated successfully!";
                break;
            }
        }
    }

    // Handle DELETE request (for deleting data)
    elseif ($method === 'DELETE') {
        $id = $_POST['id'];
        foreach ($_SESSION['data'] as $key => $item) {
            if ($item['id'] == $id) {
                //unset removes the item from the $_SESSION['data'] array at the index specified by $key
                unset($_SESSION['data'][$key]);  
                $_SESSION['data'] = array_values($_SESSION['data']); // Reindex array
                /*
                like when: $_SESSION['data'] = [
    0 => ['id' => 1, 'value' => 'First'],
    1 => ['id' => 2, 'value' => 'Second'],
    2 => ['id' => 3, 'value' => 'Third']
];and id 2 is deleted then it becomes:
$_SESSION['data'] = [
    0 => ['id' => 1, 'value' => 'First'],
    2 => ['id' => 3, 'value' => 'Third']
];
so the indices are not sequential to maintain sequential indexing we have  to use array_values

                */
                echo "Data deleted successfully!";
                break;
            }
        }
    }
}

?>


<!-- 
By default, $_SERVER['REQUEST_METHOD'] can only capture GET and POST requests not PUT,PATCH,DELETE.
-->