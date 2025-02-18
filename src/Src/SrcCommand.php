<?php

namespace Zerotoprod\:namespace\Src;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Project source link
 *
 * @link https://github.com/zero-to-prod/:slug
 */
#[AsCommand(
    name: SrcCommand::signature,
    description: 'Project source link'
)]
class SrcCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/:slug
     */
    public const signature = ':slug:src';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('https://github.com/zero-to-prod/:slug');

        return Command::SUCCESS;
    }
}