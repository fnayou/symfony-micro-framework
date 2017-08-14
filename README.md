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

You can create a new project using `composer` :

```bash
$ php composer.phar create-project fnayou/symfony-micro-framework
```

That's it ! you have full working project with :
  - `.editorconfig` file
  - PHPCodeSniffer configuration just run command `bin\standards`
  - Scrutinizer configuration file
  - PHPCSFixer configuration file
  - and much more

**Docker** is ready to be used with *nginx*, *PHP-FPM*, *MariaDB*, *Postgres*, *MongoDB* and *CouchDB*. all you have to 
do is to configure `docker-compose.yml`. We use [fnayou/oh-my-docker][link-oh-my-docker], so check the project for more
information.

Don't waste time configuring, start coding !

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

## Note

If you want to clean up your project, don't forget to uncomment content of `.gitattributes`.

## Credits

- [Symfony][link-symfony]
- [Aymen FNAYOU][link-author]

## License

![license](https://img.shields.io/badge/license-MIT-lightgrey.svg) Please see [License File](LICENSE) for more information.

[link-author]: https://aymen-fnayou.com
[link-oh-my-docker]: https://github.com/fnayou/oh-my-docker
[link-micro-kernel]: https://symfony.com/doc/2.8/configuration/micro_kernel_trait.html
[link-symfony]: https://github.com/symfony/symfony
