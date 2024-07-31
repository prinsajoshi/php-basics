<?php
trait Payment {
    abstract public function processPayment($amount);

    public function completePayment($amount) {
        $this->processPayment($amount);
        echo "Payment of $amount completed.\n";
    }
}

class PayPal {
    use Payment;

    public function processPayment($amount) {
        echo "Processing PayPal payment of $amount\n";
    }
}

$paypal = new PayPal();
$paypal->completePayment(100); // Output: Processing PayPal payment of 100
                                //         Payment of 100 completed.
?>
