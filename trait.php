<?php


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