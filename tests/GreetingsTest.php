<?php

namespace App\Tests;

use App\Service\Greetings;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GreetingsTest extends KernelTestCase
{

    // Tests
    public function testGreeting(): void
    {
        $greetings = new Greetings();
        $this->assertSame('Hello, World!', $greetings->greet('World'));
    }

    public function testBye(): void
    {
        $greetings = new Greetings();
        $this->assertSame('Goodbye, Bob!', $greetings->bye('Bob'));
    }
}
