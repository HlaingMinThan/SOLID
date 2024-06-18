<?php
interface WorkerInterface
{
    public function eat();

    public function work();
}
class HumanWorker implements WorkerInterface
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

// Usage
$human = new HumanWorker();
$human->work();
$human->eat();
