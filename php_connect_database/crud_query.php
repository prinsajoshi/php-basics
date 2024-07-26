<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="database2";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
echo "Connected Sucessfully<br>";

//create the databaase
$sql ="CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql)==True){
    echo "Database created successfully<br>";
}else{
    echo "Error creating the database:".$conn->error;
}

//select the database
$conn->select_db($dbname);

//create table
$sql="CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL)";

if ($conn->query($sql)==True){
    echo "Table created successfull";
} else{
    echo "Error creating table".$conn->error;
}

//insert table
$sql="INSERT INTO users (username,email) 
        VALUES ('rm','rm@gmail.com'),('jin','jin@gmail.com'),('jimin','jimin@gmail.com')";
if ($conn->query($sql)===True){
   echo "Value inserted sucessfull";
}else{
    echo "Error while inserting value";
}

//update table
$sql="UPDATE users
     SET username='taehung',email='rm@gmail.com' WHERE id=1";

if ($conn->query($sql)==True){
    echo "Value updated sucessfully";
}else{
    echo "Error while updating value";
}

//delete table data
$sql="DELETE FROM users
        where id=1";
if ($conn->query($sql)==True){
    echo "Value deleted sucessfully";
}else{
    echo "Error while deleting value";
}

//fetch data from the table
$sqli="SELECT id,username,email FROM users";
$result=$conn->query($sqli);
if ($result->num_rows>0){
    //output data of each row
    while ($row=$result->fetch_assoc()){
        echo  "ID: ".$row["id"]." -Username " .$row["username"]."-email".$row["email"]."<br>";}
}else{
    echo "0 results";
}

//close the connection
$conn->close();

?>