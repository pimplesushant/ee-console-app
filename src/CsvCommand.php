<?php namespace Console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CsvCommand
 * @package Console
 */
class CsvCommand extends Command
{
    public function configure()
    {
        $this->setName('csv')
            ->setDescription('Convert JSON to CSV')
            ->setHelp('This command give you the path to CSV file.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->csv($output);
        return 0;
    }
}