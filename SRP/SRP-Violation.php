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
}

class UserRepository
{
    // Responsibility 1: User data management
    public function save()
    {
        // Code to save user data to a database
        echo "Saving user data to database\n";
    }
}

class EmailService
{
    // Responsibility 2: Email notifications
    public function sendEmail($email, $message)
    {
        // Code to send an email
        echo "Sending email to " . $email . ": " . $message . "\n";
    }
}

// Usage
$user = new User("John Doe", "john@example.com");
$userRepository = new UserRepository;
$userRepository->save();

$emailService = new EmailService;
$emailService->sendEmail($user->getEmail(), "Welcome to our service!");
