<?php
/*interface is a blueprint for class it provides set of methods that implementing class must provide
interfaces cannot contain any implementing bodies they only specify the method signatures 

*/
#Example1
interface Logger {
    public function logInfo($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        // Implementation code to log info message to a file
        echo "Info: $message\n";
    }

    public function logError($message) {
        // Implementation code to log error message to a file
        echo "Error: $message\n";
    }
}

$fileLogger1=new FileLogger();
$fileLogger1->logInfo(" This is all about information");
$fileLogger1->logError(" This is all about errors");

#Example2
interface PaymentProcessor {
    public function processPayment($amount);
}

class PayPalProcessor implements PaymentProcessor {
    public function processPayment($amount) {
        // PayPal-specific payment processing code
        echo "Processing PayPal payment of $$amount\n";
    }
}

class StripeProcessor implements PaymentProcessor {
    public function processPayment($amount) {
        // Stripe-specific payment processing code
        echo "Processing Stripe payment of $$amount\n";
    }
}

function processOrder($processor, $amount) {
    $processor->processPayment($amount);
}

$paypal = new PayPalProcessor();
$stripe = new StripeProcessor();

processOrder($paypal, 100);
processOrder($stripe, 150);

#Example3: Multiple interface implementation: when multiple interfaces are implemented in a class, the interfaces must be declared before they can be used.
interface Logger1 {
    public function log($message);
}

interface Authenticator {
    public function authenticate($user);
}

class Application implements Logger1, Authenticator {
    public function log($message) {
        echo "Log message: $message\n";
    }

    public function authenticate($user) {
        // Authentication logic
        echo "Authenticating user: $user\n";
    }
}


?>