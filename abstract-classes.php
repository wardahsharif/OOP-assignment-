<?php


//this is the template for users
abstract class User {
    // Method that must be defined in child class
    abstract public function login();
    // Method that must be defined in child class
    abstract public function getRole();
}



//admin class
class Admin extends User {
     public function login() {
        return "Admin logged in.";
     }

     public function getRole() {
        return "Role: Administrator";
     }
}

//subscriber class
class Subscriber extends User {
    public function login() {
        return "subscriber logged in";
    }

    public function getRole() {
        return "role: Subscriber";
    }
}


// Admin object
$adminUser = new Admin(); // Creating an Admin user
echo $adminUser->login();  // Outputs: Admin logged in.
echo "\n"; 
echo $adminUser->getRole(); // Outputs: Role: Administrator

echo "\n"; 

//Subscriber object
$subscriberUser = new Subscriber(); // Creating a Subscriber user
echo $subscriberUser->login();  // Outputs: Subscriber logged in.
echo "\n"; 
echo $subscriberUser->getRole(); // Outputs: Role: Subscriber.


 
?>




