<?php
/**
 * Questions:
 * 1. can you identify which SOLID principles have this piece of code violated and how would you refactor it?
 * 2. if i want to create a new class for "Ostrich" that doesn't fly, how should I do it?
 * 
 * S - done
 * O - done
 * L - done
 * I - done
 * D - done
 */

abstract class Bird {}

interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

interface Quackable {
    public function quack();
}

interface Runnable {
    public function run();
}

class Duck extends Bird implements Swimmable, Quackable, Flyable
{
    public function fly() {
        echo "Flying Duck";
    }
    public function swim() {
        echo "Swimming Duck";
    }
    public function quack() {
        echo "Quacking duck";
    }
}

class Swan extends Bird implements Swimmable, Flyable
{
    public function fly() {
        echo "Flying Swan";
    }

    public function swim() {
        echo "Swimming Duck";
    }
}

class Ostrich extends Bird implements Quackable, Runnable
{
    public function quack()
    {
        echo "Quacking ostrich";
    }

    public function run() {
        echo "Running Ostrich";
    }
}