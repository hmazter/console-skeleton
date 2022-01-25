Console Skeleton
================

[![Latest Stable Version](https://poser.pugx.org/hmazter/console-skeleton/v/stable)](https://packagist.org/packages/hmazter/console-skeleton)
[![Total Downloads](https://poser.pugx.org/hmazter/console-skeleton/downloads)](https://packagist.org/packages/hmazter/console-skeleton)
[![License](https://poser.pugx.org/hmazter/console-skeleton/license)](https://packagist.org/packages/hmazter/console-skeleton)

Skeleton for a console application, including:
* DI-Container
* Services and commands [autowired in yaml-config](config/services.yaml)
* [Example Command](src/Command/ExampleCommand.php)
* [Example test](tests/Command/ExampleCommandTest.php)
* [Phar Builder](https://github.com/clue/phar-composer)

## Getting started

This will create a new project with the skeleton for a console application:

```bash
composer create-project hmazter/console-skeleton the-new-app-name
cd the-new-app-name
```

The skeleton can then be executed with:
```bash
./app
```

### Building distributable phar

A phar-file that can be distributed can be built with:
```bash
composer build
```

This will output the phar-file in the project root, named `<project-directory-name>.phar`.

### Running with docker

Build the app with:
```bash
docker-compose build
```

And run the app with docker with this command:
```bash
docker-compose run console ./app
```

### Tests

Tests can be run with:
```bash
composer test
```

### Static Code analyse

Code can be static analysed with [PHPStan](https://phpstan.org/):
```bash
composer analyse
```

### Continue building

Go ahead and:
* Edit/replace command in src/Commad/ExampleCommand
* Add more commands in src/Command
* Add additional classed that you need in src/
* Edit/replace the test in tests/Command/ExampleCommandTest