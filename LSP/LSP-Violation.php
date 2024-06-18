<?php

interface Flyable
{
    public function fly();
}
class Bird
{
}

class Sparrow extends Bird implements Flyable
{
    public function fly()
    {
        echo "Sparrow is Flying high in the sky\n";
    }
}

class Parrot extends Bird implements Flyable
{
    public function fly()
    {
        echo "Parrot is Flying high in the sky\n";
    }
}

class Penguin extends Bird
{
}

function makeBirdFly(Flyable $bird)
{
    $bird->fly();
}

// Usage
$sparrow = new Sparrow();
makeBirdFly($sparrow); // Output: Flying high in the sky

$parrot = new Parrot();
makeBirdFly($parrot); // Output: Flying high in the sky

$penguin = new Penguin();
makeBirdFly($penguin); // Throws Exception: Penguins can't fly
