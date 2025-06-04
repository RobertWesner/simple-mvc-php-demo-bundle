<?php

declare(strict_types=1);

namespace RobertWesner\SimpleMvcPhpDemoBundle;

use Psr\Container\ContainerExceptionInterface;
use RobertWesner\SimpleMvcPhp\Bundles\BundleInterface;
use RobertWesner\SimpleMvcPhp\Configuration\Container;
use RobertWesner\SimpleMvcPhpDemoBundle\Demo\Demo;
use RobertWesner\SimpleMvcPhpDemoBundle\Demo\DemoInterface;
use RobertWesner\SimpleMvcPhpDemoBundle\Demo\Greeter;
use RobertWesner\SimpleMvcPhpDemoBundle\Exception\DemoBundleException;

class DemoBundle implements BundleInterface
{
    /**
     * @param DemoBundleConfiguration|null $configuration
     * @throws DemoBundleException
     */
    public static function load(mixed $configuration = null): void
    {
        if ($configuration === null) {
            throw new DemoBundleException('Missing configuration for demo-bundle.');
        }

        try {
            Container
                ::register(Greeter::class, new Greeter($configuration->greeting))
                ::instantiate(DemoInterface::class, Demo::class);
        } catch (ContainerExceptionInterface $exception) {
            throw new DemoBundleException('Could not configure demo-bundle.', previous: $exception);
        }
    }
}
