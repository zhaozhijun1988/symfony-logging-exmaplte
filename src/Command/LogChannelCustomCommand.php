<?php

namespace App\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LogChannelCustomCommand extends Command
{
    protected static $defaultName = 'log:channel:custom';

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        parent::__construct();
        $this->logger = $logger;
    }

    protected function configure()
    {
        $this
            ->setDescription('test monolog custom channel')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->debug('custom channel');
        $this->logger->notice('notice info');
        $this->logger->error('An error occured');
    }
}
