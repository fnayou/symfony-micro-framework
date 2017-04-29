Symfony MicroFramework
======================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fnayou/symfony-micro-framework/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fnayou/symfony-micro-framework/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/fnayou/symfony-micro-framework/badges/build.png?b=master)](https://scrutinizer-ci.com/g/fnayou/symfony-micro-framework/build-status/master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/77eee168-fc93-4151-9d1a-85c999b46756/mini.png)](https://insight.sensiolabs.com/projects/77eee168-fc93-4151-9d1a-85c999b46756)

Symfony Micro Framework based on [MicroKernelTrait][link-micro-kernel]

Small and tiny and easy to configure, this build is perfect for :
  - console based project
  - POC
  - light web project
  - development playground
  - etc.

## How to use ?

you can create a new project using `composer` :
```bash
$ php composer.phar create-project fnayou/symfony-micro-framework
```

## Included packages ?

```json
    "require": {
        "php": ">=5.6.0",
        "incenteev/composer-parameter-handler": "^2.1",
        "sensio/distribution-bundle": "^5.0",
        "sensio/framework-extra-bundle": "^3.0",
        "symfony/symfony": "^3.2",
        "twig/twig": "^1.0||^2.0"
    },
    "require-dev": {
        "escapestudios/symfony2-coding-standard": "^2.10",
        "fnayou/standards": "^1.2",
        "friendsofphp/php-cs-fixer": "^2.3",
        "phpunit/phpunit": "^5.7",
        "sensio/generator-bundle": "^3.1"
    }
```

## Credits

- [Symfony][link-symfony]
- [Aymen FNAYOU][link-author] - [GitLab][link-author-gitlab] - [GitHub][link-author-github]

## License

![license](https://img.shields.io/badge/license-MIT-lightgrey.svg) Please see [License File](LICENSE.md) for more information.

[link-author]: https://aymen-fnayou.com
[link-author-gitlab]: https://gitlab.com/fnayou
[link-author-github]: https://github.com/fnayou
[link-micro-kernel]: https://symfony.com/doc/2.8/configuration/micro_kernel_trait.html
[link-symfony]: https://github.com/symfony/symfony
