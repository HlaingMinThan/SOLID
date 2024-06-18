<?php

class Bird
{
    public function fly()
    {
        echo "Flying high in the sky\n";
    }
}

class Sparrow extends Bird
{
}

class Parrot extends Bird
{
}

class Penguin extends Bird
{
    public function fly()
    {
        throw new Exception("Penguins can't fly");
    }
}

function makeBirdFly(Bird $bird)
{
    $bird->fly();
}

// Usage
$sparrow = new Sparrow();
makeBirdFly($sparrow); // Output: Flying high in the sky

$penguin = new Penguin();
makeBirdFly($penguin); // Throws Exception: Penguins can't fly
