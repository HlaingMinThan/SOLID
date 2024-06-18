<?php

class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // Responsibility 1: User data management
    public function save()
    {
        // Code to save user data to a database
        echo "Saving user data to database\n";
    }

    // Responsibility 2: Email notifications
    public function sendEmail($message)
    {
        // Code to send an email
        echo "Sending email to " . $this->email . ": " . $message . "\n";
    }
}

// Usage
$user = new User("John Doe", "john@example.com");
$user->save();
$user->sendEmail("Welcome to our service!");
