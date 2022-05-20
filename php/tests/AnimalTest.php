<?php
use PHPUnit\Framework\TestCase;

require('./classes/Animal.php');
require('./classes/Tiger.php');
require('./classes/Database.php');

final class AnimalTest extends TestCase
{
    public function testNoMoreHungryWhenEats(): void
    {
       // Your test here
    }
}