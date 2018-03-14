#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

// Load services and commands from services.yaml
$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
$loader->load('services.yaml');

// compile the DI container
$container->compile();

// create new console application
$application = new Application();

// add all services from the container that are tagged "console.command" as commands in the app
$consoleCommands = $container->findTaggedServiceIds('console.command');
foreach ($consoleCommands as $consoleCommand => $tags) {
    $application->add($container->get($consoleCommand));
}

$application->run();
