<?php

declare(strict_types=1);

namespace RobertWesner\SimpleMvcPhpDemoBundle\Demo;

final readonly class Demo implements DemoInterface
{
    public function __construct(
        private Greeter $greeter,
    ) {}

    public function greetWorld(): string
    {
        return $this->greeter->getGreeting() . ' World!';
    }
}
