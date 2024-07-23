<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP Methods Example</title>
</head>
<body>
    <h1>Manage Data with HTTP Methods</h1>

    <!-- Display Data -->
    <!-- Get to see all the data -->
    <h2>Current Data</h2>
    <form action="process.php" method="get">
        <button type="submit">GET Data</button>
    </form>
    
    <!-- Post the data/ submit the data  -->
    <h2>Post/Add Data</h2>
    <form action="process.php" method="post">
        <input type="text" name="new_data" placeholder="New Data" required>
        <button type="submit">POST Data</button>
    </form>

    <h2>Update Data (PUT/PATCH)</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="number" name="id" placeholder="ID you want to Update" required>
        <input type="text" name="updated_data" placeholder="Updated Data" required>
        <button type="submit">PUT Data</button>
    </form>
    
    <form action="process.php" method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="number" name="id" placeholder="ID you want to update" required>
        <input type="text" name="updated_data" placeholder="Updated Data" required>
        <button type="submit">PATCH Data</button>
    </form>

    <h2>Delete Data</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="number" name="id" placeholder="ID to Delete" required>
        <button type="submit">DELETE Data</button>
    </form>
</body>
</html>
