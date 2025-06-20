<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound.<br>";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog says: Woof!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat says: Meow!<br>";
    }
}

// Polymorphism in Action
$animals = [new Dog(), new Cat(), new Animal()];

foreach ($animals as $animal) {
    $animal->makeSound(); // Different behavior for each object
}
?>
