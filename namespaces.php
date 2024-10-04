<?php

namespace UserModule;

class User {
    public function getInfo() {
        return "User from UserModule";
    }
}

namespace AdminModule;

class User {
    public function getInfo() {
        return "User from AdminModule";
    }
}


// Import User class from UserModule namespace
use UserModule\User as UserModuleUser;

// Import User class from AdminModule namespace
use AdminModule\User as AdminModuleUser;

// Create objects of both classes
$user = new UserModuleUser();
$adminUser = new AdminModuleUser();

// Output the info from both classes
echo $user->getInfo();       // Outputs: User from UserModule
echo "\n";                  
echo $adminUser->getInfo();  // Outputs: User from AdminModule


?>