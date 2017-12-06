# Slim CSRF (extension for TWIG)

[![Total Downloads](https://img.shields.io/packagist/dt/techwilk/twig-slim-csrf.svg)](https://packagist.org/packages/techwilk/twig-slim-csrf)
[![Latest Stable Version](https://img.shields.io/packagist/v/techwilk/twig-slim-csrf.svg)](https://packagist.org/packages/techwilk/twig-slim-csrf)
[![License](https://img.shields.io/packagist/l/techwilk/twig-slim-csrf.svg)](https://packagist.org/packages/techwilk/twig-slim-csrf)

TWIG extension to expose Slim CSRF values in templates.
Initially copied from the example in the [Slim CSRF readme](https://github.com/slimphp/Slim-Csrf) to this repo to allow installation through composer, though modifications may have since been made.

## Installation

1. Install through composer.

```
composer require techwilk/twig-slim-csrf
```

2. Then pass in an instance of `\Slim\Csrf\Guard`:

``` php
$guard = new \Slim\Csrf\Guard();
$slimCsrf = new \TechWilk\Twig\Extension\SlimCsrf($guard);
$twig->addExtension($slimCsrf);
```

## Use

Use as a standard twig properties:

``` twig
<input type="hidden" name="{{csrf.keys.name}}" value="{{csrf.name}}">
<input type="hidden" name="{{csrf.keys.value}}" value="{{csrf.value}}">
```
