<?php

// Interface that requires a processPayment method
interface PaymentMethod {

    public function processPayment($amount); // Method must be in classes that use this interface.

}


// CreditCard class implements the PaymentMethod interface
class CreditCard implements PaymentMethod {

    public function processPayment($amount) {
        return "Processing $amount with credit card.";// How Credit Card processes payment
    }
}

class PayPal implements PaymentMethod {

    public function processPayment($amount) {
        return "Processing $amount with PayPal.";  // How PayPal processes payment
    }
}


// Create CreditCard object and use it to process payment

 $creditCard = new CreditCard();
 echo $creditCard -> processPayment(100);  // Outputs: Processing 100 with Credit Card.

 // Create PayPal object and use it to process payment
 
 $paypal = new PayPal();
 echo $paypal -> processPayment(200); // Outputs: Processing 200 with PayPal.

?>