<?php
declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    public function __construct()
    {
        parent::__construct();

        // TODO: inject and initialize any services needed for the command here
    }

    protected function configure()
    {
        $this->setName('example')
            ->setDescription('Example command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('This is an example, replace or edit me');

        return 0;
    }
}
