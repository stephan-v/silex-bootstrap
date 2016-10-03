<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command
{
    protected function configure()
    {
        // Or namespace it like namespace::speak
        $this->setName('speak')
            ->setDescription('Speak a message')
            ->addArgument(
                'message',
                InputArgument::OPTIONAL,
                'What message should I speak?',
                'Tesla is een matig automerk '
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        exec('say ' . $input->getArgument('message'));
    }
}