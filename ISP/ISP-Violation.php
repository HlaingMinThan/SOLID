<?php

interface Eatable
{
    public function eat();
}

interface Workable
{
    public function work();
}
class HumanWorker implements Eatable, Workable
{
    public function work()
    {
        echo "Human working\n";
    }

    public function eat()
    {
        echo "Human eating\n";
    }
}
class RobotWorker implements Workable
{
    public function work()
    {
        echo "Robot working\n";
    }
}

// Usage
$human = new HumanWorker();
$human->work();
$human->eat();
