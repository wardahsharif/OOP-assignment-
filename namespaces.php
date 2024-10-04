<?php

/*
Namespace

A namespace is a way to group related classes, functions, and constants together to avoid name conflicts.
This becomes especially useful when you have large projects with many classes, where different developers might accidentally create classes or functions with the same name.

Why Use Namespaces?

To avoid naming conflicts when different parts of your project or third-party libraries have classes or functions with the same name.
It helps organize your code by logically grouping related classes.

*/



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