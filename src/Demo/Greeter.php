<?php

declare(strict_types=1);

namespace RobertWesner\SimpleMvcPhpDemoBundle\Demo;

final readonly class Greeter
{
    public function __construct(
        private string $greeting,
    ) {}

    public function getGreeting(): string
    {
        return $this->greeting;
    }
}
