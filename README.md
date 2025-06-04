<h1 align="center">
Simple Bundle for simple-mvc-php
</h1>

<div align="center">

![](https://img.shields.io/github/v/release/RobertWesner/simple-mvc-php-demo-bundle)
[![License: MIT](https://img.shields.io/github/license/RobertWesner/simple-mvc-php-demo-bundle)](../../raw/main/LICENSE.txt)

</div>

Small demo bundle that covers custom container configurations.

## Installation

Add this package via composer.

```bash
composer require robertwesner/simple-mvc-php-demo-bundle
```

Then include the bundle in your `$PROJECT_ROOT$/configurations/bundles.php`.

```php
use RobertWesner\SimpleMvcPhpDemoBundle\DemoBundle;
use RobertWesner\SimpleMvcPhpDemoBundle\DemoBundleConfiguration;

Configuration::BUNDLES
    ::load(
        DemoBundle::class,
        new DemoBundleConfiguration(
            greeting: 'Hello',
        ),
    );
```

## Usage

`DemoInterface` can now be autowired from the container.

```php
use RobertWesner\SimpleMvcPhpDemoBundle\Demo\DemoInterface;

final readonly class GreetingService
{
    public function __construct(
        private DemoInterface $demo,
    ) {}
    
    public function doGreet(): void
    {
        print $this->demo->greetWorld();
    }
}
```
