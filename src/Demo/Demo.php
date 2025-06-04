<?php

declare(strict_types=1);

namespace RobertWesner\SimpleMvcPhpDemoBundle\Demo;

final readonly class Demo
{
    public function __construct(
        private Greeter $greeter,
    ) {}

    public function greetWorld(): string
    {
        return $this->greeter->getGreeting() . ' World!';
    }
}
