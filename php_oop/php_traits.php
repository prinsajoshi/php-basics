<?php
/* traits are a mechanism for code reuse in single inheritance just like php
Traits allows you to compose classes by combing methods from multiple sources, providing
a way to share behaviour across different classes without using inheritance

Note: can be used to promote multiple inheritance*/

#Baic trait defination
trait Logger2{
    public function log($message) {
        echo "Log: $message\n";
    }
}

class User1 {
    use Logger2;

    public function create($name) {
        $this->log("Creating user: $name");
    }
}

$user = new User1();
$user->create("John Doe"); // Output: Log: Creating user: John Doe

#Multiple Traits inc a class
trait FileLogger1 {
    public function logToFile($message) {
        echo "Logging to file: $message\n";
    }
}

class Product {
    use Logger2, FileLogger1;

    public function update($productName) {
        $this->log("Updating product: $productName");
        $this->logToFile("Product updated: $productName");
    }
}

$product = new Product();
$product->update("Laptop"); 
// Output:
// Log: Updating product: Laptop
// Logging to file: Product updated: Laptop

#Method conflict resolutions
trait Logger3{
    public function log($message) {
        echo "Logger: $message\n";
    }
}

trait DatabaseLogger {
    public function log($message) {
        echo "DatabaseLogger: $message\n";
    }
}

class Order1 {
    use Logger3, DatabaseLogger {
        Logger3::log insteadof DatabaseLogger;
        DatabaseLogger::log as logDatabaseMessage;
    }
}

$order = new Order1();
$order->log("Order placed"); // Output: Logger: Order placed
$order->logDatabaseMessage("Order stored"); // Output: DatabaseLogger: Order stored


#Using abstract methods in traits
?>