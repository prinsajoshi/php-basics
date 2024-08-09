<?php
class User {
    private $conn;

    public function __construct($db){
        /*
            $this is current instance of class that allows 
            to access properties method of current object 
        */
        $this->conn=$db;
    }

    public function create($name,$email){
        #prepares an SQL statement to inser name,email into 'users' table
        $stmt=$this->conn->prepare("INSERT INTO users (name,email) VALUES(?,?)");
        #binds the parameters to SQL statement "ss" denotes that both parameters are string
/* The line `->bind_param("ss",,,);` is binding the parameters to the SQL
statement in a prepared statement. */
        $stmt->bind_param("ss",$name,$email);
        #executes the prepared statement returns true if sucessful and 'false if not
        return $stmt->execute();
        /*This method is more secure and efficient and here sql statement is
        sanitized by database driver,reducing risk of error
            we could have also done like:
    public function create($name, $email) {
    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    return $this->conn->query($query);
}.....but this is more prone to sql injection
        */
    }

    public function getALL(){
        /*
        Since there are no user inputs involved in query we could directly use query instead of prepare
        */
        $result=$this->conn->query("SELECT * FROM users");
        #fetches all result as an associative array and returns them
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id){
        $stmt=$this->conn->prepare("SELECT * FROM users WHERE user_id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        // Get the result set from the executed statement
        $result = $stmt->get_result();
        
        // Fetch the single row from the result set as an associative array
        return $result->fetch_assoc();
    }

    public function update($id,$name,$email){
        $stmt=$this->conn->prepare("UPDATE users SET name= ? , email= ? WHERE user_id= ?");
        $stmt->bind_param("ssi",$name,$email,$id);
        return $stmt->execute();
    }

    public function delete($id){
        $stmt=$this->conn->prepare("DELETE FROM users WHERE user_id=?");
        $stmt->bind_param("i",$id);
        return $stmt->execute();
    }
}

?>