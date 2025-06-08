<?php

declare(strict_types=1);

namespace RobertWesner\SimpleMvcPhpDemoBundle;

final readonly class DemoBundleConfiguration
{
    public function __construct(
        public string $greeting,
    ) {}
}
