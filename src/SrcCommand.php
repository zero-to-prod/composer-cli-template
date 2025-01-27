<?php

namespace Zerotoprod\:package_namespace;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: SrcCommand::signature,
    description: 'Project source link'
)]
class SrcCommand extends Command
{
    public const signature = ':package_namespace:src';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeLn('https://github.com/zero-to-prod/:package_slug');

        return Command::SUCCESS;
    }
}