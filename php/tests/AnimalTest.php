<?php
use PHPUnit\Framework\TestCase;

require('./classes/Animal.php');
require('./classes/Tiger.php');
require('./classes/Database.php');

final class AnimalTest extends TestCase
{
    public function testNoMoreHungryWhenEats(): void
    {
        $animal = new Tiger([
            'name' => 'Tigrou',
            'age' => 4,
            'size' => 120,
            'weight' => 450,
            'enclos_id' => 0,
        ]);

        $animal->isHungry = 1;

        $animal->setDatabase($this->createStub(Database::class));

        $animal->eat();

        $this->assertEquals(
            0,
            $animal->isHungry
        );
    }
}