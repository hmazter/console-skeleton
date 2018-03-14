<?php
declare(strict_types=1);

namespace Tests\Command;

use App\Command\ExampleCommand;
use App\Pwned\PwnedPasswords;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ExampleCommandTest extends TestCase
{
    /**
     * @test
     */
    public function command_outputs_info()
    {
        $application = new Application();
        $application->add(new ExampleCommand());

        $command = $application->find('example');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => $command->getName()]);

        $output = $commandTester->getDisplay();
        $this->assertContains('This is an example', $output);
    }
}