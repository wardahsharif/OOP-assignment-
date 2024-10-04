<?php
/*
Interface

An interface in PHP is like a blueprint or a contract. 
It defines the structure that any class must follow if it implements that interface.
However, unlike a class, an interface doesn’t contain any actual code—just method names.
It ensures that different classes use the same method signatures, but the classes decide how to implement them.

Why Use Interfaces?

Interfaces are useful when you want to enforce that a group of classes follow the same rules,
(i.e., have the same methods) but may implement those methods differently.

*/




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