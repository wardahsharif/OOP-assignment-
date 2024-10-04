<?php
/*

Trait 

A trait is a code reuse mechanism in PHP.
It allows you to share common functionality across multiple classes without using inheritance.
Unlike interfaces, traits can contain actual code (methods).

why use traits?

Traits are useful when multiple classes need to share the same methods,
but you don't want to use inheritance.

Differences from Classes: 
Traits are not full classes; they cannot be instantiated, 
and they don’t have a constructor. They're used to add functionality to classes.
*/


// A trait that provides a sendNotification method
trait NotificationTrait {
    public function sendNotification($message) {
        return "Sending notification: $message";
    }
}


class EmailSender {
    use NotificationTrait; // This class uses the NotificationTrait
}

class SMSSender {
    use NotificationTrait; // This class also uses the NotificationTrait
}


$emailSender = new EmailSender();
echo $emailSender->sendNotification("You've got mail!");  // Outputs: Sending notification: You've got mail!

$smsSender = new SMSSender();
echo $smsSender->sendNotification("You've got a text!"); // Outputs: Sending notification: You've got a text!



?>